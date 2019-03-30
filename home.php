<?php

$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$projects = $pdo->prepare("SELECT * FROM `projects`");
$images = $pdo->prepare("SELECT * FROM `images` WHERE `featured`='1'");

$projects->execute();
//$backroundimages = $images->execute();

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
        <!-- <link rel="stylesheet" type="text/css" href="css/media-queries.css"> -->
        
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
    		<nav id="no-bg" class="navbar is-fixed-top is-marginless" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span></a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item">Portfolio</a>
                        <a class="navbar-item">Resume</a>
                        <a class="navbar-item">Contact</a>
                    </div>
                </div>
            </nav>
    	</header>
    	<main>
    
        <section class="hero is-dark is-bold is-fullheight" id="page-intro">
            <div class="hero-body">
        	   <div class="container">
        		  <h1>Hi!</h1>
        		  <h1>my name</h1>
        		  <h1>is</h1>
                  <h1 class="white">cleo</h1>
                <h3 class="is-italic">I design, paint, draw, animate, build, code, ideate and iterate my way to</h3> >
                <p>creative solutions</p>
        </div></h3>
                <a href="#page-portfolio"><h3 id="goTo-portfolio">Portfolio</h3></a>
                <a class="nav-arrow"><i class="fas fa-chevron-down fa-2x" ></i></a> 
            </div>
            </div>
        </section>
        
        <section class="section">
    		<div class="container" id="page-portfolio">
	    		<h2>Portfolio</h2>
	    		<?php while($row = $projects->fetch()){ ?>
                    <h4><?php echo($row["projectName"]) ?></h4>
	    			<a role="button" href="project.php?id=<?php echo($row["id"]);?>"><img src="img/<?php echo($row["projectThumbnail"]);?>"></a>
                    <span class="tag is-dark"><?php echo($row["tag1"]);?></span>
                    <span class="tag is-dark"><?php echo($row["tag2"]);?></span>
                    <span class="tag is-dark"><?php echo($row["tag3"]);?></span>
	    		<?php }?>
                <a class="nav-arrow"><i class="fas fa-chevron-down fa-2x" ></i></a> 
    		</div>
            <h3 id="goTo-resume">Resume</h3>
        </section>

        <section class="hero is-primary is-fullheight" id="page-resume">
            <div class="hero-body">
               <div class="container">
                    <a class="nav-arrow"><i class="fas fa-chevron-up fa-2x" ></i></a>
                    <h2>Resume</h2>
                    <p>sdgasgsdgsdgsdg</p>

                    <h3 id="goTo-contact">Contact</h3>
                </div>
            </div>
        </section>

        <section class="section">
    		<div class="container" id="page-contact">
    			<h2>Contact</h2>
    			<h3>About Me</h3>
    			<img src="assets/cleo-lant.jpg">
    			<p></p>
    			<!-- social links -->
    			<a role="button" href="mailto:lantc@sheridancollege.ca"><img src="assets/email.png"></a>
    			<a role="button" href="tel:289-400-1859"><img src="icons/phone.png"></a>
    			<a role="button" href="https://www.mynameiscleo.com/">Portfolio</a>
    			<a role="button" href="https://www.linkedin.com/in/cleolant/">LinkedIn</a>
    		</div>
        </section>

    		<a role="button"><img src="assets/down.png"></a>
    		<!-- JS on click even using this and current position -->
    	</main>
        </section>
    	<footer>
    		
    	</footer>
    	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    	<script type="text/javascript" src="js/script.js"></script>
    </body>
</html>