<?php

$guest = "drawing";

$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$date = date("d m Y");

$entries = $pdo->prepare("SELECT * FROM `guestbook` WHERE `stickerDate` = '$date'");
$entries->execute();


$stickerRequest = file_get_contents('https://api.giphy.com/v1/stickers/random?api_key=xBFiRt8PTmOcWKrCeSWgtukA7ZPOy5xa&rating=PG&tag='.$guest);
$stickerResult = json_decode($stickerRequest, true);
// $sticker = $stickerResult["data"][0]["images"]["fixed_width_small"]["url"];

$sticker = $stickerResult["data"]["fixed_height_small_url"];
// var_dump($sticker);

?>

<!doctype html>
<html>
    <head>
        <title>Cleo Lant - Portfolio | Guestbook</title>
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
        
        <!-- ****** Open Graph Tags ****** -->
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
                    <div class="navbar-end">
                        <a href="home.php#page-portfolio" class="navbar-item is-pulled-right">Portfolio</a>
                        <a href="home.php#page-resume" class="navbar-item is-pulled-right">Resume</a>
                        <a href="home.php#page-contact" class="navbar-item is-pulled-right">Contact</a>
                        <a href="home.php" class="navbar-item is-pulled-right">Home</a>
                    </div>
                </div>
            </nav>
        </header>
        <main>
        <section class="section">
        <div class="container is-fluid">
            <section class="mt-1">
                <h1>Guestbook</h1>
                <div class="is-overlay"><img class="image is-128x128 is-pulled-right decoration" src="assets/yellowcrow2.png"></div>
                <div class="mt-1">
                    <h5 class="is-italic">Sign my guestbook with a sticker!</h5>
                </div>
                <div class="mt-1">
                    <h5 class="is-italic">Every week I pick 3 and use them as inspiration for a silly sketch</h5>
                    <p>Check back on Fridays to see them!</p>
                </div>
                <hr>
            </section>
            <section class="inputTop">
                <div id="submissionPart1" class="columns">
                    <div class="column mt-1 is-5 submissionRemove">
                        <h2 id="stickerTitle">Choose a Sticker</h2>
                        <h5 id="stickerSubtitle">type a word</h5>
                        <input class="input mt-1" id="stickerInput" type="text" name="stickerName"/>
                        <div class="is-block mt-1">
                            <button class="button is-light is-outlined" id="searchgif">Search</button>
                            <button class="button is-dark" id="randomgif">Random</button>
                        </div>
                    </div>
                    <div id="thanks" class="column mt-1 is-5">
                        <h2>Thanks!</h2>
                        <p>Check out other submissions below</p>
                    </div>
                    <div class="column">
                        <img id="currentSticker" src="<?php echo($sticker) ?>">
                    </div>
                    
                </div>
                <div class="columns submissionRemove">
                    <div class="column is-5 is-clearfix">
                        <form action="add-sticker.php" method="post" id="guestbook_form">
                            <h5>Sign your name</h5>
                            <input class="input mt-1" id="who" type="text" name="stickerContributor">
                            <input type="submit" class="button is-warning is-outlined is-block mt-1 is-pulled-right" name="submit"/>
                        </form>
                    </div>
                </div>
            </section>  
           </div>
        </section>
       <section class="hero is-dark is-bold">
            <div class="hero-body">
               <div class="container" id="stickerPage">
                <h2>Today's Submissions</h2>
                <div class="columns mt-1">
                <?php while($row = $entries->fetch()){ ?>
                    <div class="column">
                    <img src="<?php echo($row["giphyurl"]);?>">
                    <h6><?php echo($row["stickerName"]);?></h6>
                    <p>submitted by: <?php echo($row["stickerContributor"]);?></p>
                </div>
                <?php } ?>
                </div>
            </div>
           </div>
       </section>
       <section class="section">
            <div class="container is-fluid">
                <div class="columns mt-1">
                    <div class="column is-5">
                    <h2>Last Week's Drawing</h2>
                        <div class="mt-1">
                            <span class="tag is-dark">alien</span>
                            <span class="tag is-dark">burger</span>
                            <span class="tag is-dark">vintage</span>
                        </div>
                        <div class="mt-1">
                            <p>Who wants some Zork Meat? This one made me giggle to myself as I was drawing it. Vintage was a fun extra layer to add, and I've found a whole new inspiration source in illustrated product advertisements from the 50's. Keep the submissions coming!</p>
                        </div>
                    </div>
                    <div class="column is-5">
                        <div class="card">
                        <a role="button" href="https://www.instagram.com/cleopleurodon/?hl=en">
                            <div class="card-image">
                            <figure class="image is-3by4">
                                <img src="img/sketch1.jpg">
                            </figure>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       </section>
        </div> <!-- end of container -->
    	</main>
    	<footer>
    		
    	</footer>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    	<script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/guestbook.js"></script>
    </body>
</html>