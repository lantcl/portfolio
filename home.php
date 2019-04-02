<?php

//$guest = $_POST['entry'];
//$guest = "cherry";

$dsn = "mysql:host=localhost;dbname=lantc_portfolio;charset=utf8mb4";
$dbusername = "lantc";
$dbpassword = "NkXHus3h!6V";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$projects = $pdo->prepare("SELECT * FROM `projects`");
$images = $pdo->prepare("SELECT * FROM `images` WHERE `featured`='1'");

$projects->execute();
//$backroundimages = $images->execute();
// $stickerRequest = file_get_contents('https://api.giphy.com/v1/stickers/random?api_key=xBFiRt8PTmOcWKrCeSWgtukA7ZPOy5xa&rating=PG&tag='.$guest);
// $stickerResult = json_decode($stickerRequest, true);
// // $sticker = $stickerResult["data"][0]["images"]["fixed_width_small"]["url"];

// $sticker = $stickerResult["data"]["fixed_height_small_url"];
// //var_dump($sticker);
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
            
        <a name="page-top"></a>
        <section class="hero is-dark is-bold is-fullheight" id="page-intro">
            <div class="hero-body">
        	   <div class="container">
        		  <h1 class="white">Hi,</h1>
        		  <h1 class="white">my</h1>
        		  <h1 class="white">name is</h1>
                  <h1 >Cleo</h1>
                <h4 class="is-italic">I design, paint, draw, animate, build, code, ideate and iterate my way to <span class="yellow">creative solutions</span></h4>                
            </div> 
            </div>
            <div class="level">
                    <div class="level-item is-marginless"><a href="#page-portfolio"><h4 id="goTo-portfolio" ">Portfolio</h4></a></div>
                    <div class="level-item is-marginless"><a class="nav-arrow" href="#page-portfolio"><i class="fas fa-chevron-down fa-lg" ></i></a></div>
                </div>
            </div>
        </section>
        
        <a name="page-portfolio"></a>
        <section class="hero is-black is-fullheight"">
            <div class="hero-body">
               <div class="container">
	    		<h2>Portfolio</h2>
    	    		<?php while($row = $projects->fetch()){ ?>
                        <h3><?php echo($row["projectName"]) ?></h3>
    	    			<a role="button" href="project.php?id=<?php echo($row["id"]);?>">
                            <img src="img/<?php echo($row["projectThumbnail"]);?>" class="image is-128x128">
                        </a>
                        <span class="tag is-dark"><?php echo($row["tag1"]);?></span>
                        <span class="tag is-dark"><?php echo($row["tag2"]);?></span>
                        <span class="tag is-dark"><?php echo($row["tag3"]);?></span>
    	    		<?php }?>
                    <div class="level ">
                        <div class="level-item is-marginless"><a href="#page-resume"><h4 id="goTo-resume" ">Resume</h4></a></div>
                        <div class="level-item is-marginless"><a class="nav-arrow" href="#page-resume"><i class="fas fa-chevron-down fa-lg" ></i></a></div>
                    </div>
                </div>
            </div>
        </section>

        <a name="page-resume"></a>
        <section class="hero is-dark is-fullheight"">
            <div class="hero-body">
               <div class="container">
                    <h2>Resume</h2>
                    <p>sdgasgsdgsdgsdg</p>

                    <div class="level ">
                        <div class="level-item is-marginless"><a href="#page-contact"><h4 id="goTo-contact" ">Contact</h4></a></div>
                        <div class="level-item is-marginless"><a class="nav-arrow" href="#page-contact"><i class="fas fa-chevron-down fa-lg" ></i></a></div>
                    </div>
                </div>
            </div>
        </section>

        <a name="page-contact"></a>
        <section class="hero is-dark is-bold is-fullheight"">
            <div class="hero-body">
               <div class="container">
        			<h2>Contact</h2>
        			<h3>About Me</h3>
        			<img src="assets/cleo-lant.jpg">
        			<p></p>
        			<!-- instagram post embed -->
                   <!--  <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/BksQopIF0zK/?utm_source=ig_embed&amp;utm_medium=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BksQopIF0zK/?utm_source=ig_embed&amp;utm_medium=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div><div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BksQopIF0zK/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">The cast of &#39;704&#39;, a dumb comic I make about some roommates and the other weirdos that live in the same apartment building. 🏢🐾🐤 What do you guys think about the black and white comics? I suck at colouring them but have been thinking about a two colour approach possibly? #art #comic #characterdesign #dilltheduck #704comic #animal #anthropomorphic #photoshop #digitalart #design #funny #meme #aesthetic #drawing #torontoartist #webcomic #weird #roommate #sketch #colour #creative #story</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/cleopleurodon/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> my name is cleo</a> (@cleopleurodon) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-01T13:58:23+00:00">Jul 1, 2018 at 6:58am PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script> -->

                    <!-- social links -->

        			<a role="button" href="mailto:lantc@sheridancollege.ca"><img src="assets/email.png"></a>
        			<a role="button" href="tel:289-400-1859"><img src="icons/phone.png"></a>
        			<a role="button" href="https://www.mynameiscleo.com/">Portfolio</a>
        			<a role="button" href="https://www.linkedin.com/in/cleolant/">LinkedIn</a>

                    <div class="level">
                        <div class="level-item is-marginless"><a href="#page-top"><h4 id="goTo-top" ">Top</h4></a></div>
                        <div class="level-item is-marginless "><a class="nav-arrow" href="#page-top"><i class="fas fa-chevron-up fa-lg" ></i></a></div>
                    </div>
                </div>
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