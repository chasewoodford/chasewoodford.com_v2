<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LogueWorks - Chase Woodford &#124; Designer & Developer</title>
    <meta name="description" content="">
    <meta name="author" content="Chase Woodford">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/wp-content/themes/v2/images/favicon.ico">
    <link rel="stylesheet" href="/wp-content/themes/v2/css/style.css">
    <script src="/wp-content/themes/v2/js/modernizr.js"></script>
</head>
<body id="top" class="work">

<nav id="nav-wrap" role="navigation">
    <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
    <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
    <ul id="nav" class="nav">
        <li><a href="http://www.chasewoodford.com">Home</a></li>
        <li><a href="http://www.chasewoodford.com/index.php#about">About</a></li>
        <li><a href="http://www.chasewoodford.com/blog">Blog</a></li>
        <li class="current"><a href="http://www.chasewoodford.com/index.php#portfolio">Work</a></li>
        <li><a href="http://www.chasewoodford.com/playground">Playground</a></li>
        <li><a href="http://www.chasewoodford.com/index.php#contact">Contact</a></li>
    </ul>
</nav>

<!-- Journal Section
================================================== -->
<main role="main" class="posts">

    <!-- Content
    ================================================== -->
    <div class="content-outer">

        <div id="page-content" class="row">

            <div id="primary" class="twelve columns">

                <article role="article" class="post">

                    <div class="row">

                        <div class="six columns add-bottom">
                            <a href="https://github.com/chasewoodford/StrokeApp" title="Check out the code" target="_blank">
                                <img class="main" src="/wp-content/themes/v2/images/portfolio/screenshot-smartBeat.png" alt="Smart Beat">
                            </a>
                        </div>

                        <div class="six columns">
                            <h1>
                                <a class="no-underline" href="https://github.com/chasewoodford/StrokeApp" title="Check out the code" target="_blank">Smart Beat</a>
                            </h1>

                            <ul class="stats-tabs">
                                <li><a class="no-underline" href="http://www.publicishealthcare.com/" target="_blank">Client:<b>Publicis Healthcare Communications Group</b></a></li>
                                <li><span>Title:<b>2016 HealthHack</b></span></li>
                                <li><span>Date:<b>January 2016</b></span></li>
                                <li><span>Type:<b>iOS Mobile Application</b></span></li>
                            </ul>
                        </div>

                    </div>

                    <div class="post-content">
                        <p class="lead">
                            To start the new year, Publicis Healthcare Communications Group held its first ever hackathon. It was a two-day event that brought together agencies from across the nation, including Discovery USA, Razorfish Health, InSync, ReSources, Maxcess, Verilogue and Saatchi Health & Wellness, to collaborate on innovative projects that add value to PHCG or its clients, as well as build relationships between agencies within the group.
                        </p>
                        <p>
                            More specifically, the hackathon challenge was to:
                            <img class="pull-right highlight" src="/wp-content/themes/v2/images/portfolio/highlight-smartBeat-004.png" alt="2016 PHCG HealthHack trophy"/>
                        </p>
                        <blockquote cite="http://www.chasewoodford.com/resources/documents/PHCG_Health_Hack.pdf">
                            <p>
                                "Develop an iOS app&mdash;preferably utilizing the Apple Healthkit&mdash;that creates a more positive patient experience or helps to improve patient outcomes in some way. It can be around any condition, disease state or other health and wellness related topic."
                            </p>
                        </blockquote>
                        <p>
                            It was an amazing 24 hours of iOS hacking. The thing that impressed me the most was all the incredible talent within the PHCG group, and how quickly and easily we were all able to come together and build some really cool stuff. I made a bunch of new friends, learned a lot about Verilogue’s sister agencies and had a blast hacking the night away on our Smart Beat app.
                        </p>
                        <br/>
                        <h2>
                            The Idea
                        </h2>
                        <p>
                            We brainstormed a <a href="http://www.chasewoodford.com/resources/documents/Health%20Hack%20Ideas.pdf" title="Idea brainstorm for HealthHack">bunch of really great ideas</a> on a conference call a couple days prior to the event. But given the time limitations for development, we opted for an idea that would create a more positive patient experience and improved patient outcome specifically for stroke patients. We wanted to focus on a singular disease state and micro-interactions within that patient journey that were critical to early detection of and quick recovery from ischemic strokes.
                        </p>
                        <br/>
                        <h2>
                            The App
                        </h2>
                        <p>
                            On initial load, the user is walked through a profile configuration flow. During this flow, the user authorizes HealthKit, and if data is available, it is used to help populate data fields for the profile set up. The user is then asked to answer questions related to stroke risk factors.
                        </p>
                        <p>
                            <img class="add-bottom highlight" src="/wp-content/themes/v2/images/portfolio/highlight-smartBeat-001.png" alt="Smart Beat app wireframes"/>
                            After setting up a profile and answering risk factor questions, the user lands on the home screen view of the app, which displays current stroke risk status along with links to mission-critical information. The home screen also has a menu button on the top left of the screen that provides access to more app features.
                        </p>
                        <br/>
                        <h2>
                            HealthKit Integration
                        </h2>
                        <p>
                            <img class="pull-right highlight" src="/wp-content/themes/v2/images/portfolio/highlight-smartBeat-005.png" alt="Team Smart Beat coding through the night"/>
                            Our initial integration of HealthKit was very simple. We decided to only pull in existing date of birth, biological sex, body mass and heart rate data. We use this data to assist in profile set up and stroke risk calculation. For any data not already stored, we prompt the user for input and  save it to the HealthKit store. The code for our HealthKit integration can be found in the <a href="https://github.com/chasewoodford/StrokeApp/blob/master/StrokeApp/HealthManager.swift" title="HealthManager.swift">HealthManager.swift</a> and <a href="https://github.com/chasewoodford/StrokeApp/blob/master/StrokeApp/OnboardTwoViewController.swift" title="OnboardTwoViewController.swift">OnboardTwoViewController.swift</a> files.
                        </p>
                        <br/>
                        <h2>
                            // TODO
                        </h2>
                        <p>
                            In the 24 hours we had to develop a working prototype, we were able to build out most of what we called the on-boarding flow, most of the home screen view functionality and placeholders for most other views.
                        </p>
                        <p>
                            Still a lot to be done though. Future development would include:
                        </p>
                        <ul class="square">
                            <li>Real-time heart rate monitoring and notifications for risk status changes</li>
                            <li>Integration of more HealthKit sample types for enhanced risk calculations</li>
                            <li>Completion of F.A.S.T. screening module</li>
                        </ul>
                        <p>
                            We also had some really great ideas for setting baseline levels and tests a user can take to gauge disease progression and recovery. We talked about using the iPhone camera as a means for measuring heart rate by placing a finger over the lens; using the camera to take selfies and check for facial abnormalities; using voice recordings to detect slurred speech; using the accelerometer to measure steadiness in the hands and ability to raise arms.
                        </p>
                        <br/>
                        <h2>
                            The Design
                        </h2>
                        <p>
                            <img class="add-bottom highlight" src="/wp-content/themes/v2/images/portfolio/highlight-smartBeat-002.png" alt="Smart Beat app comps"/>
                            Our goal was to keep the design as simple as possible; use as many native iOS elements as possible, and really focus design efforts on the home screen view.
                        </p>
                        <p>
                            We were fortunate to have two designers on our team, in addition to a copywriter and a UX specialist. One designer focused on comping out the on-boarding flow and home screen while the other focused on designing the app’s logo, both following the direction led by the wireframes built by the UX guy, integrating the copy provided by the copywriter.
                        </p>
                        <p>
                            <img class="pull-right" src="/wp-content/themes/v2/images/portfolio/highlight-smartBeat-003.png" alt="Smart Beat app home screen view"/>
                            The end result was a design that I thought was very aesthetically pleasing, simple and suitable for the likely demographic of our user base.
                        </p>
                        <br/>
                        <h2>
                            Outcome
                        </h2>
                        <p>
                            Unfortunately, Smart Beat didn’t win the competition. I still think it is a great idea and our execution of bringing it to life was pretty solid. But we were up against a bunch of other really great ideas, too. Though our app met all requirements of the hack, I think we fell a little short in our presentation of the idea. I imagine that’s the toughest part of any hackathon&mdash;fully conveying complex ideas with only a partially functional prototype. Still, it was a great experience that left me inspired and feeling lucky for the opportunity to work alongside such talented people.
                        </p>
                        <p>
                            In addition to being a great experiene, we also learned that one of the judges has recently been discussing future projects with a large pharmaceutical company, and their conversations revolved around tPA, the only FDA approved treatment for ischemic strokes. We're hopeful that the next time they connect to discuss tPA, Smart Beat will also find its way into the conversation. Even though we didn't win the hackathon, the idea may still have legs and someday see the light of day.
                        </p>
                        <br/>
                        <h2>
                            Links
                        </h2>
                        <ul class="square">
                            <li>Event Announcement: <a href="http://www.chasewoodford.com/resources/documents/PHCG_Health_Hack.pdf" title="PHCG HealthHack Announcement">PHCG HealthHack Announcement</a></li>
                            <li>Idea Brainstorm: <a href="http://www.chasewoodford.com/resources/documents/Health%20Hack%20Ideas.pdf" title="HealthHack Idea Brainstorm">HealtHack Idea Brainstorm</a></li>
                            <li>GitHub Repository: <a href="https://github.com/chasewoodford/StrokeApp" title="Smart Beat code on GitHub">https://github.com/chasewoodford/StrokeApp</a></li>
                        </ul>
                        <br/>
                        <h2>
                            Special Thanks
                        </h2>
                        <p>
                            A very special thank you to all of the people who made this event possible and my super talented teammates!
                        </p>
                        <p class="remove-bottom">
                            Judges:
                        </p>
                        <ul class="square">
                            <li><a href="https://www.linkedin.com/in/janet-winkler-b1a837a" title="Janet Winkler">Janet Winkler - Group President, Publicis Healthcare</a></li>
                            <li><a href="https://www.linkedin.com/in/mhunter" title="Mark Hunter">Mark Hunter - EVP, Operations, Razorfish</a></li>
                            <li><a href="https://www.linkedin.com/in/nikki-muntz-8b643a1b" title="Nikki Muntz">Nikki Muntz - EVP, Business Development, Publicis Healthcare</a></li>
                        </ul>
                        <p class="remove-bottom">
                            Coordinators:
                        </p>
                        <ul class="square">
                            <li><a href="https://www.linkedin.com/in/jeff-smith-18551a1" title="Jeff Smith">Jeff Smith - Global Head of Technology, Razorfish</a></li>
                            <li><a href="https://www.linkedin.com/in/jamison-barnett-5280662" title="Jamison Barnett">Jamison Barnett - VP, Verilogue</a></li>
                        </ul>
                        <p class="remove-bottom">
                            Apple:
                        </p>
                        <ul class="square">
                            <li><a href="https://www.linkedin.com/in/drosos" title="Christos Drosos">Christos Drosos - Enterprise Technology Strategy, Apple Inc.</a></li>
                        </ul>
                        <p class="remove-bottom">
                            Team Smart Beat:
                        </p>
                        <ul class="square">
                            <li><a href="https://www.linkedin.com/in/keithhobin" title="Keith Hobin">Keith Hobin - Experience Architect, Razorfish</a></li>
                            <li><a href="https://www.linkedin.com/in/kristenhumbert" title="Kristen Humber">Kristen Humbert - Copywriter, Razorfish</a></li>
                            <li><a href="https://www.linkedin.com/in/shikhasharmapharmd" title="Shikha Sharma">Shikha Sharma - Account Director, Maxcess</a></li>
                            <li><a href="https://www.linkedin.com/in/shaun-stuart-832b655" title="Shaun Stuart">Shaun Stuart - Senior Manager, Verilogue</a></li>
                            <li><a href="https://www.linkedin.com/in/matt-sutter-7584441" title="Matt Sutter    ">Matt Sutter - Art Director, Razorfish</a></li>
                            <li><a href="https://www.linkedin.com/in/ian-torp-90640934" title="Ian Torp">Ian Torp - Senior Graphic Designer, Maxcess</a></li>
                        </ul>
                        <p>
                            To learn more about how this mobile app was designed and developed, <a href="http://www.chasewoodford.com/#contact">contact me</a>.
                        </p>
                    </div>

                    <ul class="post-nav clearfix">

                        <li class="prev"><a class="no-underline" href="/work/multimedia/town-trekkers" rel="prev"><strong>Previous Entry</strong> Town Trekkers</a></li>
<!--                        <li class="next"><a class="no-underline" href="/work/digital/aj-originals" rel="next"><strong>Next Entry</strong> ajoriginals.com</a></li>-->

                    </ul>

                </article> <!-- post end -->

            </div>

        </div>

    </div><!-- Content End-->

</main><!-- Journal Section End-->

<!-- footer
================================================== -->
<footer role="contentinfo">
    <div class="row">
        <div class="twelve columns">

            <ul class="social-links">
                <li><a href="https://www.facebook.com/chasewoodford" aria-label="Visit Chase Woodford's Facebook page" title="Visit Chase Woodford's Facebook page"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://github.com/chasewoodford" aria-label="Visit Chase Woodford's GitHub page" title="Visit Chase Woodford's GitHub page"><i class="fa fa-github"></i></a></li>
                <li><a href="https://plus.google.com/+ChaseWoodford/posts" aria-label="Visit Chase Woodford's Google Plus page" title="Visit Chase Woodford's Google Plus page"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="http://instagram.com/chase1263070" aria-label="Visit Chase Woodford's Instagram page"  title="Visit Chase Woodford's Instagram page"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/chasewoodford" aria-label="Visit Chase Woodford's LinkedIn page" title="Visit Chase Woodford's LinkedIn page"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="http://www.pinterest.com/chasewoodford/" aria-label="Visit Chase Woodford's Pinterest page"  title="Visit Chase Woodford's Pinterest page"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="skype:woodmanjr2?call" aria-label="Skype with Chase Woodford" title="Skype with Chase Woodford"><i class="fa fa-skype"></i></a></li>
                <li><a href="http://open.spotify.com/user/124506286" aria-label="Visit Chase Woodford's Spotify page" title="Visit Chase Woodford's Spotify page"><i class="fa fa-spotify"></i></a></li>
                <li><a href="https://twitter.com/chase1263070" aria-label="Visit Chase Woodford's Twitter page" title="Visit Chase Woodford's Twitter page"><i class="fa fa-twitter"></i></a></li>
            </ul>

            <ul class="copyright">
                <li>&copy; <?php echo date("Y"); ?> Chase Woodford</li>
                <li><a class="no-underline" href="/colophon">Colophon</a></li>
                <li><a class="no-underline" href="http://www.chasewoodford.com/?feed=rss">RSS</a></li>
            </ul>
        </div>
        <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-up-open"></i></a>
        </div>
    </div>
</footer><!-- Footer End-->

<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/wp-content/themes/v2/js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="/wp-content/themes/v2/js/jquery-migrate-1.2.1.min.js"></script>

<script src="/wp-content/themes/v2/js/waypoints.js"></script>
<script src="/wp-content/themes/v2/js/jquery.fittext.js"></script>
<script src="/wp-content/themes/v2/js/init.js"></script>
<script src="/wp-content/themes/v2/js/ga.js"></script>

</body>
</html>
