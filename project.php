<?php

$id = $_GET['id'];

// $id =1;
 
$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$projects = $pdo->prepare("SELECT * FROM `projects` WHERE `id` = $id");
$images1 = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `galleryid` = 1");
$images2 = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `galleryid` = 2");
$images3 = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `galleryid` = 3");
$images4 = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `galleryid` = 4");

$featuredimg = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `featured` = 1");


$others = $pdo->prepare("SELECT `projectName`, `id`, `projectThumbnail` FROM `projects`");
$others->execute();

$projects->execute();
$project = $projects->fetch();

$images1->execute();
$images2->execute();
$images3->execute();
$images4->execute();

$featuredimg->execute();
$featured = $featuredimg->fetch();


?>

<!doctype html>
<html>
    <head>

        <!-- NEED TO ADD FAVICONS -->

        <title>Cleo Lant - Portfolio | <?php echo($project["projectName"])?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8"/>
        <!-- <link rel="shortcut icon" href="images/profile_icon.ico" type="image/x-icon" /> -->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        
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
                        <a href="home.php#page-portfolio" class="navbar-item is-pulled-right">Home</a>
                        <a href="resume.php" class="navbar-item is-pulled-right">Resume</a>
                        <a href="home.php#page-contact" class="navbar-item is-pulled-right">Contact</a>
                        <a href="guestbook.php" class="navbar-item is-pulled-right">Guestbook</a>
                    </div>
                </div>
            </nav>
        </header>
    	<main>
        <section class="section">
    	<div class="container">
    		<h1><?php echo($project["projectName"])?></h1>
            <img class="bird-icon-bot" src="assets/darkcrow3.png">
            <img class="bird-icon" src="assets/yellowcrow3.png">
            <p><?php echo($project["tag1"])?></p>
            <p><?php echo($project["tag2"])?></p>
            <p><?php echo($project["tag3"])?></p>
        
            <h4><?php echo($project["projectDescription"])?></h4>
            <hr>
    	<div class="tile is-ancestor">
          <div class="tile is-vertical">
            <div class="tile">
              <div class="tile is-parent is-vertical">
                <article class="tile is-child">
                  <h2>Concept</h2>
                  <p><?php echo($project["projectConcept"])?></p>
                </article>
                <article class="tile is-child">
                  <h2>Research</h2>
                    <p><?php echo($project["projectResearch"])?></p>
                </article>
              </div>
              <div class="tile is-parent">
                <article class="tile is-child">
                    <img src="img/<?php echo($featured['imgFile']);?>">
                </article>
              </div>
            </div>
            <div class="tile is-parent">
                <?php while($row = $images3->fetch()){ ?>
                     <article class="tile is-child">
                    <img src="img/<?php echo($row['imgFile']);?>">
                </article>
            <?php }?>
              
            </div>
          </div>
        </div>
            
            <h2>Process</h2>
            <p><?php echo($project["projectProcess1"])?></p>  
            
            <div class="columns is-mobile">
            <?php while($row = $images2->fetch()){ ?>
                <div class="column is-half">
                    <img src="img/<?php echo($row['imgFile']);?>">
                </div>
            <?php }?>
            </div>

            <div class="columns is-tablet">  
            <?php while($row = $images4->fetch()){ ?>
                <div class="column is-one-quarter">
                    <img src="img/<?php echo($row['imgFile']);?>">  
                </div>
            <?php }?>
            </div>
            <p><?php echo($project["projectProcess2"])?></p>
            
            <div class="columns is-mobile">
            <?php while($row = $images3->fetch()){ ?>
                <div class="column is-4">
                    <img src="img/<?php echo($row['imgFile']);?>">
                </div>
            <?php }?>
            </div>
            
            <div>
            <h2>Results</h2>
            <p><?php echo($project["projectResults"])?></p>
    		
            </div>

            <h3>Other Projects</h3>
            <img class="bird-icon" src="assets/yellowcrow3.png">
            <?php while($row = $others->fetch()){ 
                if ($row["projectName"] != $project["projectName"]){ ?>
                <a href="project.php?id=<?php echo($row["id"]);?>">
                    <h4><?php echo($row["projectName"]);?></h4>
                </a>
                <a role="button" href="project.php?id=<?php echo($row["id"]);?>">
                    <img src="img/<?php echo($row["projectThumbnail"]);?>" class="image is-128x128">
                </a>
            <?php } } ?>

    	</div> <!-- end of container -->
        </section>
    	</main>
    	<footer>
    		
    	</footer>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    	<script type="text/javascript" src="js/script.js"></script>
    </body>
</html>