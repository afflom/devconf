# DEVCONF UOR DEMO

1. Build the images
`docker build -f Containerfile . -t localhost/devconf:demo`

2. Run the image with networking bridged
`docker run --network=host -it localhost/devconf:demo bash`

3. Execute the push script (`--plain-http=true` is optional)
`./client-push.sh example.com/org/collection:tag --plain-http=true

4. Execute the pull script (`--plain-http=true` is optional)(the 3rd argument can be `prod` or `dev`)
`./client-push.sh example.com/org/collection:tag output_dir dev --plain-http=true`

5. Open http://localhost:8081 in your web browser to view the changes





# DevConf

This branch contains prep work for new devconf.info web design.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

You'll need to install package composer (for building and local deployment):

```
$ sudo dnf install composer
```

And package npm (for generating css and js assets):

```
$ sudo dnf install npm
```

First of all, you have to clone this git repository and switch to devel branch.

```
$ git clone https://github.com/devconfcz/devconf.git
$ cd devconf
$ git checkout origin/devel
```

All following steps has to be done under root folder of devconf:devel repository.


For template rendering, we are using [Jigsaw](https://jigsaw.tighten.co/) framework.

To set up Jigsaw environment for devconf, use following command:

```
$ composer require tightenco/jigsaw
```

To be able to regenerate CSS and JS assets, you have to install all required node_modules.
To do so, use following command:

```
$ npm install
```

For more information about Jigsaw, visit Jigsaw documentation for [Templates & Partials](https://jigsaw.tighten.co/docs/content-blade/) and for [Assets](https://jigsaw.tighten.co/docs/compiling-assets/).

### Building

Once you have all steps from Prerequisities successfully complete, you can build the DevConf webiste by following command:

```
$ vendor/bin/jigsaw build
```

Keep in mind, you have to be in root folder of devconf:devel repository

If you made a chage in \_assets folder and want to have this change available in the build, you have to run following command before the build command:

```
$ npm run prod
```

### Deployment

Once you build the website successfully, you can deploy it locally by command:

```
$ vendor/bin/jigsaw serve
```

The content will be available under http://localhost:8000

## Blog Posts

For blog posts, we require to use utility `vlna` in order to add non-breaking spaceis into final text automatically. Use following command (replace {file} by actual file name).

```
$ vlna -x 266E6273703B -r -v KkSsVvZzOoUuAaIi {file}.md
```

## Authors

* **Josef Ridky** - [jridky](https://github.com/jridky)
 
See also the list of [contributors](https://github.com/devconfcz/devconf/contributors) who participated in this project.

## License

This project is licensed under the GPLv3 License - see the [LICENSE.md](LICENSE.md) file for details
