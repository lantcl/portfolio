<?php

// $id = $_GET['id'];

$id =1;
 
$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$projects = $pdo->prepare("SELECT * FROM `projects` WHERE `id` = $id");
$images = $pdo->prepare("SELECT * FROM `images` WHERE `projectid` = $id");

$projects->execute();
$project = $projects->fetch();

$images->execute();

//with JS if gallery id = $ add a class to sort the img types

?>

<!doctype html>
<html>
    <head>

        <!-- NEED TO ADD FAVICONS -->

        <title>Cleo Lant - Portfolio | <?php echo($project["projectName"])?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8"/>
        <!-- <link rel="shortcut icon" href="images/profile_icon.ico" type="image/x-icon" /> -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.com/libraries/bulma">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
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
    		<nav></nav>
    	</header>
    	<main>
        <section class="section">
    	<div class="container">
    		<h1 class="title"><?php echo($project["projectName"])?></h1>
            <p><?php echo($project["tag1"])?></p>
            <p><?php echo($project["tag2"])?></p>
            <p><?php echo($project["tag3"])?></p>
            
            <h4 class="subtitle"><?php echo($project["projectDescription"])?></h4>
            <hr>
    		<div>
    		<h3>Concept</h3>
            <p><?php echo($project["projectConcept"])?></p>
            
            <h3>Research</h3>
            <p><?php echo($project["projectResearch"])?></p>
            
            <h3>Process</h3>
            <p><?php echo($project["projectProcess1"])?></p>  

            <?php while($row = $projects->fetch()){ ?>
                <img src="img/<?php echo($img['imgFile']);?>" href="<?php echo($img['id']);?>">
            <?php }?>        
            
            <p><?php echo($project["projectProcess2"])?></p>
            
            <h3>Results</h3>
            <p><?php echo($project["projectResults"])?></p>
    		
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