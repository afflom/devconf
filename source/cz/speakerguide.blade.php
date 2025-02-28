@extends('_layouts.page')

@section('social')
<meta property="og:title" content="DevConf.cz | Brno, Czechia">
<meta property="og:site_name" content="DevConf.cz">
<meta property="og:description" content="DevConf are free and open, annual, open-source community conferences for community contibutors, sponsored by Red Hat.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://devconf.info">
<meta property="og:image" content="https://devconf.info/assets/images/devconf-cz-social.png">
<meta property="twitter:image" content="https://devconf.info/assets/images/devconf-cz-social.png">
@endsection

@section('css')
<link rel="stylesheet" href="{{ mix('css/subsite.css', 'assets/build') }}">
@endsection

@section('title')
<title>Speaker Guide - DevConf.CZ</title>
@endsection


@section('body')
<header class="masthead">
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top masthead">
		<span class="nav-brand"><a href="/cz"><img src="/assets/images/devconf-logo-cz-reverse.svg"></a></span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile"
		    aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarMobile">
			<ul class="navbar-nav ml-auto pr-5">
				<li class="nav-item active px-3">
					<a href="/cz/" class="nav-link">Home</a>
				</li>
<!--				<li class="nav-item active px-3">
					<a href="/cz/aroundbrno" class="nav-link">Getting around Brno</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/cz/tobrno" class="nav-link">Getting to Brno</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/cz/hotels" class="nav-link">Hotels</a>
				</li> -->
				<li class="nav-item active px-3">
					<a href="/cz/faq" class="nav-link">FAQ</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/coc" target="_blank" class="nav-link">Policies</a>
				</li>
			</ul>
		</div>
	</nav>
</header>

<section class="mx-auto mt-5 pt-5 pb-3 col-lg-11">
	<div class="row">
		<div class="h1 mx-5 mont-700 underline position-relative my-3">Speaker Guide</div>
		<div class="os-400 mx-5">
		<p>This document is a guide to people who are going to speak at a conference, and are interested in tips and tricks for composing and delivering a successful talk.</p>
		<p>It is intended to be relatively light-weight, focusing on the most common mistakes and useful tips. However, it’s not written in stone - any “rule” will have exceptions! 
		Never feel forced to hammer a talk into a set of rules if you don’t think the circumstances warrant.</p>
        <p>You can find other speaker and conference-related information in <a href="/cz/faq">FAQ</a>.</p>
		</div>
	</div>
	<div class="row local-nav">
		<div class="mx-5  mt-4 os-400">
			<a href="#organization">Organization of Talk and Slides</a>
            <a href="#slide">Tips for Slide Decks</a>
            <a href="#performance">Speaking/Performance Advice</a>
            <a href="#resources">Presentation-Making and Speaking Resources</a>
            <a href="#suggestions">Suggestions for presenting at a virtual conference</a>
		</div>
	</div>
</section>
<hr>
<section id="organization" class="mx-auto col-lg-11">
    <div class="row">
        <div class="h2 pt-3 pb-4 mx-5 mont-700">Organization of Talk and Slides</div>
        <div class="os-400 mx-5 pb-3">
            You can use any presentation slide deck you wish. We also put together a DevConf.CZ slide deck template in <a href="/assets/files/devconf-cz-template-16-9.odp">16:9</a> and <a href="/assets/files/devconf-cz-template-4-3.odp">4:3</a> format for your convenience.
        </div>
        <div class="os-400 mx-5">
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th class="col-6"><i class="fa fa-check text-success"></i> Do this...</th>
                    <th class="col-6"><i class="fa fa-times text-danger"></i> In order to avoid...</th>
                  </tr>
                </thead>
              <tr>
                <td>Plan for an audience of people who do not share your technical background. At most industry conferences, you can expect your audience to have diverse backgrounds and levels of technical expertise,
                    unless your conference is narrowly focused on some domain.</td>
                <td>Not knowing who your audience is and how to tailor your talk for them.</td>
              </tr>
              <tr>
                <td>Build up context slowly:
                Most audience members will be unfamiliar with your topic of expertise.
                Spending time at the beginning of your talk on “basic” context and information will actually help you go “faster” at the end, since you already built your foundation.
                Consider addressing questions like:
                <ul>
                    <li>Why is the problem or topic I am talking about important?</li>
                    <li>What are fundamental terms, definitions, concepts that a non-expert would not know?</li>
                </ul>
                </td>
                <td>Assuming your audience has the basic context and knows most of the things that you do.</td>  
              </tr>              
              <tr>
                <td>Focus on strategic choices of details that tell the important story, and provide links to more detailed resources such as blog posts, papers, code repos, software documentation, etc.</td>
                <td>Too much detail: New speakers often feel like they need to convey every possible detail in a talk, and end up obscuring the important narratives.</td>
              </tr>
            </table>
        </div>
    </div>
</section>
<br>
<section id="slide" class="mx-auto col-lg-11">
    <div class="row">
        <div class="h2 pt-3 pb-4 mx-5 mont-700">Tips for Slide Decks</div>

        <div class="os-400 mx-5">
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th class="col-6"><i class="fa fa-check text-success"></i> Do this...</th>
                    <th class="col-6"><i class="fa fa-times text-danger"></i> In order to avoid...</th>
                  </tr>
                </thead>
              <tr>
                        <td>Use figures, diagrams, plots. Using non-text visuals is often the best possible way to convey information,
                    so strive to replace text with visuals wherever you can. Using figures typically requires more preparation, since it forces you to talk about your slides instead of just reading them.
                (This is a good thing! See speaking tips below.)</td>
                        <td>Wall of text: a slide covered with lots of small-font text that no one can read.</td>
                      </tr>    
                      <tr>    
                <td>Keep equations or other math to a minimum and in large font only! Favor diagrams when possible. When you do use math, explain terms, parameters, etc, in non-technical terms. Convey the meaning behind the math; do not show derivations.</td>
                <td>Wall of math: Anybody in the audience who wants to see more math should be referred to source material for further reading.</td>
              </tr>
              <tr>
                <td>If you need to show source code, it should fit easily on the side in 14pt font (or larger!). Otherwise consider some other approach to present your ideas such as block diagrams that convey what the code does.</td>
                <td>Wall of code: Nobody can (or wants to!) read a small-font page of code.</td>
              </tr>
              <tr>
                <td>Make clear diagrams and figures to express what you are trying to show.</td>
                <td>Wall of logos: Dozens of logos on a slide trying to convey some notion of large interoperability or ecosystem. Mostly it is visually confusing and overwhelming.</td>
              </tr>
              <tr>  
                           <td>Expand all acronyms in slides when they appear for the first time. In order not to lose audience members,
                provide explanations during the talk about what the acronyms stand for.</td>
                           <td>Use of acronyms that the audience does not understand.</td>
            </table>
            <b>General advice</b>:
            <ul>
              <li>Pictures and diagrams are much better than words!</li>
              <li>Re-use visual conventions and metaphors. If you use a figure or symbol to represent some idea, re-use it everywhere you need it.
            Your audience will find it much easier to follow your narrative when they can recognize recurring ideas visually.</li>
            </ul>
        </div>
    </div>
</section>
<br>
<section id="performance" class="mx-auto col-lg-11">
    <div class="row">
        <div class="h2 pt-3 pb-4 mx-5 mont-700">Speaking/Performance Advice</div>
        <div class="os-400 mx-5">
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th class="col-6"><i class="fa fa-check text-success"></i> Do this...</th>
                    <th class="col-6"><i class="fa fa-times text-danger"></i> In order to avoid...</th>
                  </tr>
                </thead>
              <tr>
                <td>Practice! Practicing your talk several times will make your presentation smoother and will help you be more confident. People in the audience came to your talk to learn and are on your side-- they want you to succeed! They will appreciate your talk if they can tell you have put time,
                effort, and thought into it, regardless of how experienced you are as a speaker.</td>
                <td>Not being prepared for your talk / Not knowing what you are going to say.</td>
              </tr>
              <tr>
                <td>Talk about your slides, rather than just reading them. The audience could do that on their own!
                It takes more preparation and practice, but it is a far more effective and engaging presentation style!</td>
                <td>Reading the slides.</td>
              </tr>
              <tr>
                <td>Make eye contact! Engage the audience by looking at them and moving or walking around if possible.</td>
                <td>Staring at your screen or slides.</td>
              </tr>
              <tr>
                <td>Take a deep breath and try to speak in a conversational manner, as if you are talking directly to one of the audience members.</td>
                <td>Speaking too fast, a common effect of being nervous or of trying to include too much detail.</td>
              </tr>
              <tr>
                <td>Speak up! People came to your talk to hear what you have to say. Microphones can compensate for quiet speakers, but your A/V equipment may not be everything you hoped for.</td>
                <td>Speaking too softly and not being heard.</td>
              <tr>
              <tr>
                <td>Don't walk around too much while speaking. Walking “with purpose” is OK. Sometimes this is referred to as “happy feet.”</td>
                <td>The audience being distracted.</td>
              <tr>
            </table>
        </div>
    </div>
</section>
<br>
<section id="resources" class="mx-auto col-lg-11">
    <div class="row">
        <div class="h2 pt-3 pb-4 mx-5 mont-700">Presentation-Making and Speaking Resources</div>
        <div class="os-400 mx-5">
            <ul>
                <li><a href="http://blog.linuxgrrl.com/2016/06/09/sources-for-openly-licensed-content/" target="_blank">Sources for Openly-Licensed Content</a> blog post by Máirín Duffy</li>
                <li><a href="https://www.flickr.com/photos/opensourceway/" target="_blank">opensource.com Flickr account</a> with a great collection of images licensed under CC BY-SA</li>
               <!-- <li>Red Hat Brand presentation <a href="https://brand.redhat.com/applications/presentations/" target="_blank">guidelines</a> and <a href="https://brand.redhat.com/elements/" target="_blank">elements</a>
                (while the top-level pages with concepts are available publicly, libraries of icons and images are internal to Red Hat)</li> -->
                <li><a href="https://femgineer.com/present-book/" target="_blank">Present! A Techie's Guide to Public Speaking</a>
                (<a href="https://www.amazon.com/Present-Techies-Guide-Public-Speaking-ebook/dp/B01BCXHULK" target="_blank">book on Amazon</a>)</li>
            </ul>
        </div>
    </div>
</section>
<br>
<section id="suggestions" class="mx-auto col-lg-11">
    <div class="row">
        <div class="h2 pt-3 pb-4 mx-5 mont-700">Suggestions for presenting at a virtual conference</div>
        <div class="os-400 mx-5">
            <ul>
		<li>Join our <a href="https://discord.com/channels/785879296379453491/806171484681928774" target="_blank">Discord channel</a></li>
                <li>Log in to <a href="https://hopin.com/sign_in" target="_blank">Hopin</a> and make sure that you know how it works.</li>
                <li>Plan to give your talk live. You may be tempted to prerecord your presentation, but giving the talk live will allow you to respond and adjust to your audience and to answer their questions.</li>
                <li>If it is really not possible for you to attend your session, please follow the advice below about recording your talk.</li>
            </ul>
         </div>
     <div class="h5 pt-3 pb-4 mx-5 mont-700">Pre-recording your presentation</div>
	<div class="os-400 mx-5">
	    <ol>
                <li>Before making your final recording, first record yourself delivering part of your talk, including any demos or special situations, and watch the recording to see how you look and sound.
                    <ul>
                        <li>Avoid light sources behind you, they tend to put you in a dark shadow.</li>
                        <li>Maintain the same distance from the microphone to avoid unexpected volume changes.</li>
                        <li>Practice changing screens between your slides and anything else you are showing, such as videos or demos.</li>
                    </ul>
                </li>
                <li>If you can, try out several mics and other input devices, to see which has the best sound.</li>
                <li>If possible, use a wired network connection when delivering your talk, to minimize the risk of network issues.</li>
                <li>Make sure you attend the test event with the same hardware as you plan to use at the conference.</li>
                <li>In order to support attendee interaction, we can publish live poll questions during your talk. Think about what to ask attendees while preparing your talk and share it with the session chair before your talk.
                    These questions can help you tailor your talk to the audience as you go and provide interactivity that keeps attendees engaged.</li>
                <li>Think about questions you can ask during your talk that you can suggest your attendees answer in the chat. This gives you, if you pre-recorded your talk, or any assistants you have during a live talk,
                    the opportunity to engage with your audience.</li>
                <li>If necessary, we can pause the pre-recorded sessions and answer questions from the audience live.</li>
            </ol>
        </div>
    </div>
</section>
@endsection

@include('_layouts.footercz')
