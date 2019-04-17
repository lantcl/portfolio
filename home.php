<?php

// function usersonline() { 
// //adapted from wired.com
//     $timeout = time() - 60; // number of seconds to keep users in database 
//     $dbhost = "localhost"; 
//     $dbuser = "lantc"; // fill in your MySQL username
//     $time = time(); 
//     $dbpass = "NkXHus3h!6V"; // fill in your MySQL password 
//     $dbname = "lantc_portfolio"; // We make a connection to the database 
//     $who = $_SERVER['REMOTE_ADDR'];

//     mysql_connect($dbhost,$dbuser,$dbpass); 
//     mysql_select_db($dbname);

//     $query = mysql_query("INSERT INTO `usersonline` VALUES('$who','$time')"); if (!$query) { die('Invalid query: ' . mysql_error()); } // Delete older data 

//     mysql_query("DELETE FROM `usersonline` WHERE `whenn` < $timeout"); if (!$query) { die('Invalid query: ' . mysql_error()); } // Count up the entries 
    
//     $uniqueusers = mysql_query("SELECT DISTINCT `who` FROM `usersonline`"); if (!$uniqueusers) { die('Invalid query: ' . mysql_error()); } $usersonline = mysql_num_rows($uniqueusers); // And close the database connection. 
//     mysql_close(); return $usersonline; 
// } 

// usersonline();

// *************************///////////////////////

$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$projects = $pdo->prepare("SELECT * FROM `projects`");
// $images = $pdo->prepare("SELECT * FROM `images` WHERE `featured`='1'");

$projects->execute();
// $backroundimages = $images->execute();
?>

<!doctype html>
<html>
<!-- <html class="has-navbar-fixed-top">
 -->    <head>
        <title>Cleo Lant - Visual Designer | Creative Problem-Solver</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8"/>
        <!-- <link rel="shortcut icon" href="images/profile_icon.ico" type="image/x-icon" /> -->
        
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!-- ****** faviconit.com favicons ****** -->
        <link rel="shortcut icon" href="assets/favicon/favicon.ico">
        <link rel="icon" sizes="16x16 32x32 64x64" href="assets/favicon/favicon.ico">
        <link rel="icon" type="image/png" sizes="196x196" href="assets/favicon/favicon-192.png">
        <link rel="icon" type="image/png" sizes="160x160" href="assets/favicon/favicon-160.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96.png">
        <link rel="icon" type="image/png" sizes="64x64" href="assets/favicon/favicon-64.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16.png">
        <link rel="apple-touch-icon" href="assets/favicon/favicon-57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/favicon-114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/favicon-72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/favicon-144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/favicon-60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/favicon-120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/favicon-76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/favicon-152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/favicon-180.png">
        <meta name="msapplication-TileColor" content="#efad1c">
        <meta name="msapplication-TileImage" content="assets/favicon/favicon-144.png">
        <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
        <!-- ****** faviconit.com favicons ****** -->
        <!-- Open Graph Tags -->
		<!-- for Google -->
		<meta name="description" content="Cleo is currently a student of the Interactive Media Management program at Sheridan College. She shares her love of storytelling through illustration, motion-graphics, wire-frames, web-development and interactive media. See her portfolio at mynameiscleo.com" />
		<meta name="keywords" content="Illustration, Visual Designer, UX Design, Creative Problem Solving, Interactive Media, Motion Graphics, Toronto, Sheridan" />
		<meta name="author" content="Cleo Lant" />
		<link rel="author" href="https://www.mynameiscleo.com/">
		<meta name="copyright" content="2019" />


		<!-- for Facebook -->
		<meta property="og:title" content="Cleo Lant - Visual Designer" />
		<meta property="og:site_name" content="Cleo Lant Resume" />
		<meta property="og:url" content="http://lantc.dev.fast.sheridanc.on.ca/resume/mobileresume.html" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="Cleo is currently a student of the Interactive Media Management program at Sheridan College. She shares her love of storytelling through illustration, motion-graphics, wire-frames, web-development and interactive media. See her portfolio at mynameiscleo.com" />
		<meta property="og:image" content="http://lantc.dev.fast.sheridanc.on.ca/resume/images/facebook.jpg" />
		<meta property="og:image:type" content="image/jpeg" /> 
		<meta property="og:image:width" content="1200" /> 
		<meta property="og:image:height" content="630" /> <!-- Facebook recommended: 1200 x 630 - ideal: 1200 x 1200 square image -->


		<!-- for Twitter -->
		<meta name="twitter:card" content="Cleo Lant is a Toronto-based illustrator and visual designer." />
		<meta name="twitter:title" content="Cleo Lant - Visual Designer" />
		<meta name="twitter:description" content="Cleo is currently a student of the Interactive Media Management program at Sheridan College. She shares her love of storytelling through illustration, motion-graphics, wire-frames, web-development and interactive media. See her portfolio at mynameiscleo.com" />
		<meta name="twitter:url" content="http://lantc.dev.fast.sheridanc.on.ca/resume/mobileresume.html" />
		<meta name="twitter:image" content="http://lantc.dev.fast.sheridanc.on.ca/resume/images/twitter.jpg" />

		<!--  Images for the Twitter Card should be at least 280px in width, and at least 150px in height. Image must be less than 1MB in size. Ideal is 1,024 x 512 -->

	<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  	<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    </head> 
    <body>
    	<header>
    		<nav class="navbar is-fixed-top is-marginless" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span></a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-end">
                        <a href="home.php#page-portfolio" class="navbar-item is-pulled-right">Portfolio</a>
                        <a href="home.php#page-resume" class="navbar-item is-pulled-right">Resume</a>
                        <a href="home.php#page-contact" class="navbar-item is-pulled-right">Contact</a>
                        <a href="guestbook.php" class="navbar-item is-pulled-right">Guestbook</a>
                    </div>
                </div>
            </nav>
    	</header>
    	<main>
            
        <a name="page-top"></a>
        
    <section class="hero is-fullheight blackbg" id="page-intro">
        <div id="scene" class="blackbg"> <!-- start of parallax -->
          <div class="illustrated pulse-animation"><img src="assets/bg.jpg"></div>
          <div class="illustrated pulse-animation" data-limit-x="0" data-depth="0.1"><img src="assets/overlaybg.png"></div>
          <div id="particles-js">
           </div>
          <div class="illustrated" data-depth="0.1"><img src="assets/birds1.png"></div>
          <div class="illustrated" data-depth="0.2"><img src="assets/birds2.png"></div>
          <div class="illustrated pulse-animation" data-depth="0.3"><img src="assets/birds3.png"></div>           
          <div><img src="assets/vignette.png"></div>
        </div><!-- end of parallax --> 
          
          <div class="ontop-hack mt-1"> 
                <h1 class="white bigTitle">Hi,</h1>
                <h1 class="white bigTitle">my</h1>
                <h1 class="white bigTitle">name is</h1>
                <h1 class="bigTitle">Cleo</h1>
            <div class="column is-6 mt-fix">
                <h4 class="is-italic">I design, paint, draw, animate, build, code, ideate and iterate my way to <a href="#page-portfolio"><span class="yellow">creative solutions</span></a></h4>
            </div>    
            </div><!-- end of on top hack -->
<!--             <div class="hero-foot container is-widescreen has-text-centered is-hidden-tablet">
                <a href="#page-portfolio"><h4 id="goTo-portfolio">Portfolio</h4></a>
                <a class="nav-arrow" href="#page-portfolio"><i class="fas fa-chevron-down fa-lg" ></i></a>
            </div>  -->                  
        </section> <!-- end of intro section -->

        <a name="page-portfolio"></a>
        <section class="hero blackbg is-fullheight">
            <div class="hero-body">
               <div class="container">

	    		<h2>Portfolio</h2>
                <div class="is-overlay"><img class="image is-128x128 is-pulled-right decoration" src="assets/yellowcrow3.png"></div>
                <div class="mt-1">
                    <h5 class="is-italic">See some of my recent projects below</h5>
                </div>
                
            <div class="columns mt-1">
            <?php while($row = $projects->fetch()){ ?>
                <div class="column is-4">
                    <div class="card">
                        <a role="button" href="project.php?id=<?php echo($row["id"]);?>">
                            <div class="card-image">
                            <figure class="image is-3by3">
                                <img src="img/<?php echo($row["projectThumbnail"]);?>">
                            </figure>
                            </div>
                        </a>
                        <div class="card-content">
                            <h4><?php echo($row["projectName"]);?></h4>
                            <div class="content">
                            
                                <p><?php echo($row["projectDescription"]);?></p>
                            </div>
                      </div>
                    </div>
                </div>    
            <?php } ?>
            </div></div>
            </div>
                    <div class="hero-foot container is-widescreen has-text-centered mt-1 is-hidden-tablet">
                        <a href="#page-resume"><h4 id="goTo-resume" ">Resume</h4></a>
                        <a class="nav-arrow" href="#page-resume"><i class="fas fa-chevron-down fa-lg" ></i></a>
                    </div>
                
        </section>

        <a name="page-resume"></a>
        <section class="hero is-dark is-bold is-fullheight">
            <div class="hero-body">
                <div class="container">
                <h2>Resume</h2>
                    <div class="is-overlay"><img class="image is-128x128 is-pulled-right decoration" src="assets/yellowcrow1.png"></div>
                    <div class="mt-1">
                        <h5 class="is-italic">View a PDF of my resume</h5>
                    </div>
                     <a class="button is-warning is-outlined mt-1" role="button" href="assets/cleo-lant-resume.pdf" target="_blank">View</a>
                    <a class="button is-warning is-outlined mt-1" role="button" href="assets/cleo-lant-resume.pdf" download="cleo-lant-resume.pdf">Download</a>
            </div>
        </div>
                <div class="hero-foot container is-widescreen has-text-centered mt-1 is-hidden-tablet">
                <a href="#page-contact"><h4 id="goTo-contact">Contact</h4></a>
                <a class="nav-arrow" href="#page-contact"><i class="fas fa-chevron-down fa-lg" ></i></a>
                </div>
            
        </section>

        <a name="page-contact"></a>
        <section class="hero is-dark is-bold is-fullheight">
            <div class="hero-body">
               <div class="container">
        			<h2>Let's Chat!</h2>
                    <!-- <div class="is-overlay"><img class="image is-128x128 is-pulled-right decoration" src="assets/yellowcrow2.png"></div> -->
                    <div class="mt-1 column is-5 is-paddingless">
        			<p>I am currently a student of the Interactive Media Management program at Sheridan College. I share my love of storytelling through illustration, motion-graphics, wire-frames, web-development and interactive media. See my full portfolio at <a href="https://www.mynameiscleo.com/"><span class="yellow">mynameiscleo.com</span></a></p>
                    </div>
                    <div class="columns is-mobile mt-fix is-mobile is-multiline is-centered">
                        <div class="column">
                            <a role="button" href="mailto:lantc@sheridancollege.ca"><h5>Email</h5><p class="is-hidden-mobile">cleolant@gmail.com</p></a>
                            <img class="bird-icon-bot mt-1" src="assets/darkcrow3.png">
                            <a href="mailto:lantc@sheridancollege.ca"><img class="bird-icon mt-1" src="assets/yellowcrow3.png"></a>
                        </div>
                        <div class="column">
                            <a role="button" href="https://www.mynameiscleo.com/" target="_blank"><h5>Portfolio</h5><p class="is-hidden-mobile">mynameiscleo.com</p></a>
                            <img class="bird-icon-bot mt-1" src="assets/darkcrow2.png">
                            <a href="https://www.mynameiscleo.com/" target="_blank"><img class="bird-icon mt-1" src="assets/yellowcrow2.png"></a>
                        </div>
                        <div class="column">
                            <a role="button" href="tel:2894001859"><h5>Call</h5><p class="is-hidden-mobile">(289)-400-1859</p></a>
                            <img class="bird-icon-bot mt-1" src="assets/darkcrow3.png">
                            <a href="tel:289-400-1859"><img class="bird-icon mt-1" src="assets/yellowcrow3.png"></a>
                        </div>
                        <div class="column">
                            <a role="button" href="https://www.linkedin.com/in/cleolant/" target="_blank"><h5>LinkedIn</h5><p class="is-hidden-mobile">Cleo Lant</p></a>
                            <img class="bird-icon-bot mt-1" src="assets/darkcrow2.png">
                            <a href="https://www.linkedin.com/in/cleolant/" target="_blank"><img class="bird-icon mt-1" src="assets/yellowcrow2.png"></a>
                        </div>
                    </div>
<!--                     <div class="columns columns is-mobile is-multiline is-centered">
                        <div class="column">
                            <img class="bird-icon-bot" src="assets/darkcrow3.png">
                            <a href="mailto:lantc@sheridancollege.ca"><img class="bird-icon" src="assets/yellowcrow3.png"></a>
                        </div>
                        <div class="column">
                            <img class="bird-icon-bot" src="assets/darkcrow2.png">
                            <a href="https://www.mynameiscleo.com/" target="_blank"><img class="bird-icon" src="assets/yellowcrow2.png"></a>
                        </div>
                        <div class="column">
                            <img class="bird-icon-bot" src="assets/darkcrow3.png">
                            <a href="tel:289-400-1859"><img class="bird-icon" src="assets/yellowcrow3.png"></a>
                        </div>
                        <div class="column">
                            <img class="bird-icon-bot" src="assets/darkcrow2.png">
                            <a href="https://www.linkedin.com/in/cleolant/" target="_blank"><img class="bird-icon" src="assets/yellowcrow2.png"></a>
                        </div>
                    </div> -->
        			<!-- <a role="button" href="mailto:lantc@sheridancollege.ca"><img src="assets/email.png"></a>
        			<a role="button" href="tel:289-400-1859"><img src="icons/phone.png"></a>
        			<a role="button" href="https://www.mynameiscleo.com/">Portfolio</a>
        			<a role="button" href="https://www.linkedin.com/in/cleolant/">LinkedIn</a> -->
                </div>
                </div>
                    <div class="hero-foot container is-widescreen has-text-centered mt-1">
                        <a href="#page-top"><h4 id="goTo-top">Top</h4></a>
                        <a class="nav-arrow" href="#page-top"><i class="fas fa-chevron-up fa-lg" ></i></a>
                    </div>
                
        </section>

    	</main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/parallax-setup.js"></script>
    	<script type="text/javascript" src="js/particles.js"></script>   	
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>