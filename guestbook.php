<?php

$guest = "drawing";

$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$date = date("d-m-Y");

echo($date);
// $entries = $pdo->prepare("SELECT * FROM `guestbook` WHERE `stickerDate` = $date LIMIT 3;");
// $entries->execute();


// $stickerRequest = file_get_contents('https://api.giphy.com/v1/stickers/random?api_key=xBFiRt8PTmOcWKrCeSWgtukA7ZPOy5xa&rating=PG&tag='.$guest);
// $stickerResult = json_decode($stickerRequest, true);
// // $sticker = $stickerResult["data"][0]["images"]["fixed_width_small"]["url"];

// $sticker = $stickerResult["data"]["fixed_height_small_url"];
//var_dump($sticker);

?>

<!doctype html>
<html>
    <head>
        <title>Cleo Lant - Portfolio | <?php echo($projectName)?></title>
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
    	<section class="hero is-dark is-fullheight"">
            <div class="hero-body">
               <div class="container">
                    <h2>Guestbook</h2>
                    <h4>Add a sticker to this week's page</h4>
                    <h4>Every week I round up the submissions and use them as inspiration for a silly sketch</h4>
                    <h5>Check back on Fridays to see them!</h5>
                    <form action="add-sticker.php" method="post" id="guestbook_form">
                        <div>
                            <h4>Choose a sticker</h4>
                            <!-- <label >Choose a sticker!</label> -->
                            <img src="<?php echo($sticker) ?>">
                            <input type="text" name="sticker" placeholder="drawing"/>
                            <button id="searchgif">Search</button>
                            <button>Random</button>
                        </div>
                        <div>
                        <h4>Sign your name</h4>
                        <input type="text" name="stickerContributor">
                        <input type="submit" name="submit"/>
                            </div>
                    </form>
    	       </div> <!-- end of container -->
           </div>
       </section>
       <section class="hero is-dark is-fullheight"">
            <div class="hero-body">
               <div class="container">
                <h2>Recent Entries</h2>
                <?php while($row = $entries->fetch()){ ?>
                    <img src="<?php echo($row["giphyurl"]);?>">
                    <p><?php echo($row["stickerContributor"]);?></p>
                    <p><?php echo($row["stickerDate"]);?></p>
                <?php } ?>
                <h2>Last Week's Drawing!!!</h2>
                <img src="">
               </div>
           </div>
       </section>
    	</main>
    	<footer>
    		
    	</footer>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    	<script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/guestbook.js"></script>
    </body>
</html>