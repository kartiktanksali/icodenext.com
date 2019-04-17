<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	
	<!-- Remove this line if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width">
	
	<meta name="description" content="icodenext , website and software developer">
	<meta name="author" content="kartik tanksali,website and software developer,icodenext.com">
	
	<title>CONTACT// iCodeNext</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="shortcut icon" type="image/png" href="favicon.png">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<!-- Prompt IE 7 users to install Chrome Frame -->
<!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="container">

	<header id="navtop">
		<a href="index.php" class="logo fleft">
			<img src="images/logo.jpg" alt="icodenext technology">
		</a>
		
		<nav class="fright">
			<ul>
				<li><a href="index.php" class="navactive">Home</a></li>
			</ul>
			<ul>
				<li><a href="aboutus.php">About Us</a></li>
			</ul>
			<ul>	
				<li><a href="works.php">Works</a></li>
				
		
			</ul>
			<ul>
				
			<li><a href="contact.php">Contact Us</a></li>
				
			</ul>
		</nav>
	</header>


	<div class="contact-page main grid-wrap">

		<header class="grid col-full">
			<hr>
			<p class="fleft">Contact Us</p>
		</header>

		
		
		<aside class="grid col-one-quarter mq2-col-one-third mq3-col-full">

			<p class="mbottom">We would love to talk to you and answer all of your questions</p>
			
			<address class="mbottom">
				<h5>iCodeNext Technologies </h5>
				Bhagayanagar 2nd cross, <br >
				Swastik Tower,<br >
				Anagol Road,Belgaum <br >
				<br >
				<a href="https://maps.google.com/maps?q=15.825267,74.504952&num=1&t=m&z=17&iwloc=A">Get directions</a> <br>
				
			</address>
		
			<p class="mbottom">
				+91 9482690378<br >
				
			<p class="mbottom">
				<a href="#">contact@iCodeNext.com</a><br >
				<a href="#">icodenexttechnologies@gmail.com</a><br >
				<a href="#">kartik.tanksali@gmail.com</a><br >
				<a href="#">You can find us on FACEBOOK</a><br >
			</p>
			<p>
				<h6>Openning hours: </h6>
				WE ARE AVAILABLE 24/7 <br >
				YOU CAN FIND US ALWAYS ONLINE
			</p>
		
		</aside>
		
		<section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">
			<h2>Drop us a message</h2>
		<!--	<p class="warning">Don't forget to put your own email address in the php file!</p> -->
			
			<form id="contact_form" class="contact_form" action="contact1.php" method="post" name="contact_form">	
				<ul>
					<li>
						<label for="name">Your name:</label>
						<input type="text" name="name" id="name" required class="required" >
					</li>
					<li>
						<label for="email">Email:</label>
						<input type="email" name="email" id="email" required placeholder="JohnDoe@gmail.com" class="required email">
					</li>	
					<li>
						<label for="message">Message:</label>
						<textarea name="message" id="message" cols="100" rows="6" required  class="required" ></textarea>
					</li>
					<li>
						<button type="submit" id="submit" name="submit" class="button fright">Send it</button>
					</li>	
				</ul>			
			</form>
		</section>	
		
	</div> <!--main-->

<div class="divide-top">
	<footer class="grid-wrap">
		<ul class="grid col-one-third social">
			
			<li style="font-size:8pt"><a href="#">Facebook</a></li>
			<li><a href="#"></a></li>
			
		</ul>
	
		<div class="up grid col-one-third ">
			<a href="#navtop" title="Go back up">&uarr;</a>
		</div>
		<p style="font-size: 15px" align="left">
		Designed By Kartik Tanksali &copy;iCodeNext Technologies
		</p>
		
	</footer>
</div>

</div>

<!-- Javascript - jQuery -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

<!--[if (gte IE 6)&(lte IE 8)]>
<script src="js/selectivizr.js"></script>
<![endif]-->

<script src="js/scripts.js"></script>
<script src="js/jquery.validate.min.js"></script>

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. -->
<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>