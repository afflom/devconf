FROM fedora AS build

WORKDIR /

RUN dnf install -y\
        composer\
        npm\
        go\
        git &&\
    git clone https://github.com/devconfcz/devconf.git &&\
    cd devconf &&\
    git checkout origin/devel

WORKDIR /devconf

RUN composer require tightenco/jigsaw -W

RUN cd /devconf &&\
    npm install

RUN vendor/bin/jigsaw build

RUN npm install -g n &&\
    n 16.13.0

RUN npm run prod

RUN curl -L https://github.com/uor-framework/uor-client-go/releases/download/v0.2.0/client_0.2.0_linux_amd64.tar.gz --output client_0.2.0_linux_amd64.tar.gz

RUN tar -xzvf client_0.2.0_linux_amd64.tar.gz client-linux-amd64 &&\
    mv client-linux-amd64 ./client &&\ 
    rm -Rf client_0.2.0_linux_amd64.tar.gz .git .gitignore

RUN curl -L https://github.com/caddyserver/caddy/releases/download/v2.5.2/caddy_2.5.2_linux_amd64.tar.gz --output caddy.tar.gz &&\
    tar -xzvf caddy.tar.gz

RUN mkdir push &&\
    mv build_local push/ &&\
    mv build_production push/ &&\
    cp caddy ./push/



COPY dataset-config.yaml .

COPY client-push.sh .
COPY client-pull.sh .

FROM fedora AS target

WORKDIR /devconf

COPY --from=build /devconf/client .
COPY --from=build /devconf/push/ ./push/
COPY --from=build /devconf/dataset-config.yaml .
COPY --from=build /devconf/client-push.sh .
COPY --from=build /devconf/client-pull.sh .
