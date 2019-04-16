<?php

$id = $_GET['id'];

// $id =1;
 
$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$projects = $pdo->prepare("SELECT * FROM `projects` WHERE `id` = $id");
$images1 = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `galleryid` = 1");
$images21 = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `galleryid` = 21");
$images3 = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `galleryid` = 3");
$images22 = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `galleryid` = 22");

$featuredimg = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `featured` = 1");
$secondimg = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id AND `galleryid` = 2");


$others = $pdo->prepare("SELECT * FROM `projects`");
$others->execute();

$projects->execute();
$project = $projects->fetch();

$images1->execute();
$images21->execute();
$images3->execute();
$images22->execute();

$featuredimg->execute();
$featured = $featuredimg->fetch();

$secondimg->execute();
$secondary = $secondimg->fetch();

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
            <nav class="navbar is-fixed-top is-marginless" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span></a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-end">
                        <a href="home.php" class="navbar-item is-pulled-right">Home</a>
                        <a href="home.php#page-resume" class="navbar-item is-pulled-right">Resume</a>
                        <a href="home.php#page-contact" class="navbar-item is-pulled-right">Contact</a>
                        <a href="guestbook.php" class="navbar-item is-pulled-right">Guestbook</a>
                    </div>
                </div>
            </nav>
        </header>
    	<main>
        <section class="section">
    	<div class="container is-fluid">
            
            <section class="mt-1">
    		<h1><?php echo($project["projectName"])?></h1>
            <div class="is-overlay"><img class="image is-128x128 is-pulled-right decoration" src="assets/yellowcrow3.png"></div>
            <div class="mt-1"><h5 class="is-italic"><?php echo($project["projectDescription"])?></h5></div><p>(<?php echo($project["projectDate"]);?>)</p>
            <div class="mt-1">

            <span class="tag is-dark"><?php echo($project["tag1"]);?></span>
            <span class="tag is-dark"><?php echo($project["tag2"]);?></span>
            <span class="tag is-dark"><?php echo($project["tag3"]);?></span>
            </div>
            <hr>
            </section> 	

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
            <article class="tile is-child">
                <div class="columns is-mobile">  
                <?php while($row = $images3->fetch()){ ?>
                    <div class="column">
                        <img src="img/<?php echo($row['imgFile']);?>">  
                    </div>
                <?php }?>
                </div>
            </article>
            </div>
            <div class="tile is-vertical">
                <div class="tile">
                    <div class="tile is-parent">
                    <article class="tile is-child">
                        <img src="img/<?php echo($secondary['imgFile']);?>">
                    </article>
                  </div>
                  <div class="tile is-parent is-vertical">
                    <article class="tile is-child">
                      <h2>Process</h2>
                      <p><?php echo($project["projectProcess1"])?></p>
                    </article>
                    <article class="tile is-child">
                       <p><?php echo($project["projectProcess2"])?></p>
                    </article>
                  </div>
                </div>
            </div>
            <article class="tile is-child columns is-mobile">
            <?php while($row = $images21->fetch()){ ?>
                <div class="column is-6"><img src="img/<?php echo($row['imgFile']);?>"></div>   
            <?php }?> 
            </article>
            <article class="tile is-child columns is-mobile">
            <?php while($row = $images22->fetch()){ 
                if (isset($row['imgFile'])){ ?>
                <div class="column is-6"><img src="img/<?php echo($row['imgFile']);?>"></div>   
            <?php } }?> 
            </article>
            <div class="tile">
                <div class="tile is-parent">
                    <article class="tile is-child">
                      <h2>Results</h2>
                      <p><?php echo($project["projectResults"])?></p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <?php while($row = $images1->fetch()){ ?>
                    <div class="column"><img src="img/<?php echo($row['imgFile']);?>"></div>
                    <?php }?> 
                </div>
            </div>
        </div>
    </div>
    <!-- <img class="bird-icon" src="assets/yellowcrow3.png"> -->
    <h3>Other Projects</h3>
    
    <div class="columns mt-1">
    <?php while($row = $others->fetch()){ 
        if ($row["projectName"] != $project["projectName"]){ ?>
        <div class="column is-half">
            <div class="card">
                <a role="button" href="project.php?id=<?php echo($row["id"]);?>">
                    <div class="card-image">
                    <figure class="image is-3by3">
                        <img src="img/<?php echo($row["projectThumbnail"]);?>">
                    </figure>
                    </div>
                </a>
                <div class="card-content">
                    <h3 class="yellow"><?php echo($row["projectName"]);?></h3>
                    <div class="content">
                    
                        <p><?php echo($row["projectDescription"]);?></p>
                    </div>
              </div>
            </div>
        </div>    
    <?php } } ?>
    </div>

    	</div> <!-- end of container -->
        </section>
    	</main>
    	<footer>
    		
    	</footer>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    	<script type="text/javascript" src="js/script.js"></script>
    </body>
</html>