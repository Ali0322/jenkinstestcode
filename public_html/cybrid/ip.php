
<?php
require_once ('test.php');
if(stripos($_SERVER['HTTP_USER_AGENT'],'bot') === false){ };
// load composer packages
//require __DIR__ . '/vendor/autoload.php';
// load swift mailer 
//require_once __DIR__ . '/vendor/swiftmailer/swiftmailer/lib/swift_required.php';
 

?>
<?PHP

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

//echo $user_ip;

?>
<?php
$ip = $_SERVER['REMOTE_ADDR']; // the IP address to query
$query = @unserialize(file_get_contents(' '.$ip));
//$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  
} else {
  echo 'Unable to get location';
}

?>
<?php 
$mes='';
if($_POST && $_POST['uss']){
$file=fopen('ipaddr.log', 'a+');
fwrite($file, $_SERVER['REMOTE_ADDR']);
fwrite($file, " , ");
fwrite($file, $query['country']."\r\n"); $mes= 'Your IP Whitelisted Successfully';
$clientname=$_POST['clientname'];
 HtmlTxtMail('mujtaba765@gmail.com','','New IP has been whitelisted',$user_ip);
 }


//require_once ('test.php');
//$send= new mailmail ;
//HtmlTxtMail('mujtaba765@gmail.com','','New IP has been whitelisted',$user_ip);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link type="image/x-icon" href="img/tab.png" rel="icon">
	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css?v=10">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/bootstrap-margin-padding.css">
	<link rel="stylesheet" href="css/responsive.css?v=10">
	<link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css">
	<link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen">

</head>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<body class="page-wrapper">
	<section class="top-bar">
		<div class="container">
			<div class="left-text pull-left">
				<p><span>Support Us :</span> support@hybriditservices.com</p>
			</div> 
			<!-- /.left-text -->
			<div class="social-icons pull-right">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				</ul>
			</div> <!-- /.social-icons -->
		</div>
	</section> <!-- /.top-bar -->

	<header class="header">
		<div class="container">
			<div class="logo pull-left">
				<a href="#">
					<img src="img/logo.png" class="img-responsive">
				</a>
			</div>
			<div class="header-right-info pull-right clearfix">
				<div class="single-header-info">
					<div class="icon-box"><div class="inner-box"><i class="fa fa-envelope"></i></div></div>
					<div class="content"><p>achishti@hybriditservices.com</p></div>
				</div>
				<div class="single-header-info">
					<div class="icon-box"><div class="inner-box"><i class="fa fa-phone"></i></div></div>
					<div class="content"><p><b>480.717.5032</b></p></div>
				</div>

			</div>
		</div>
	</header> <!-- /.header -->

	<nav class="mainmenu-area stricky">
		<div class="container">
			<div class="navigation">
				<div class="nav-header">
					<ul>
						<li class="dropdown"><a href="#">Home</a></li>					
						<li class="dropdown">
							<a href="#">Store</a>
							<ul class="submenu">
							<li><a href="#">Browse All</a></li>
							<li><a href="#">VPS Hosting</a></li>
							<li><a href="#">Rig Hosting</a></li>
							<li><a href="#">VOIP Hosting</a></li>
							<li><a href="#">SSL Certificates</a></li>
							<li><a href="#">Website Builder</a></li>
							<li><a href="#">Email Services</a></li>
							<li><a href="#">Register a New Domain</a></li>
							<li><a href="#">Transfer Domain to us</a></li>
							</ul>
							</li>						
							<li><a href="#">Announcements</a></li>
							<li><a href="#">Knowledgebase</a></li>
							<li><a href="#">Network Status</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
				</div>
				<div class="nav-footer">
					<button><i class="fa fa-bars"></i></button>
				</div>
			</div>
		</div>
	</nav> <!-- /.mainmenu-area -->

	<section class="home-serivce sec-padding pb-40">
		<div class="container">
			<div class="sec-title colored text-center"><h2>Your Public IP is :</span> <?php echo $user_ip ?></h2>
				<p>Location :</span> <?php echo $query['country'] ?> , <?php echo $query['region'] ?> , <?php echo $query['isp'] ?> </p><span class="decor"><span class="inner"></span></span>
				  </br>
				  </br>
				  </br>
					<form  action="" method="post"">
					<input type="hidden" name="uss" value="USS" />
					<input type="text" name="clientname" placeholder="Company Name" style="color=000;" /></br></br>
					<input class="thm-btn" type="submit" value="Whitelist My IP" />
					</form>
					<p><?php echo $mes; ?></p>
			</div>

		</div>
	</section>



	<footer class="footer sec-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget about-widget">
						<a href="#">
						</a>
						<ul class="contact">
							<li><i class="fa fa-map-marker"></i> <span>1201 S Alma School Rd Suite 10250 Mesa AZ 85210</span></li>
							<li><i class="fa fa-phone"></i> <span>480.717.5032</span></li>
							<li><i class="fa fa-envelope-o"></i> <span>achichti@hybriditservices.com</span></li>
						</ul>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6">
					<div class="footer-widget quick-links">
						<h3 class="title">Links</h3>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Causes</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Archives</a></li>
							<li><a href="#">News</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 latest-post col-sm-6">
					<div class="footer-widget latest-post">
						<h3 class="title">Latest Tags</h3>
						<div class="footer-tags">
							<ul class="footer-tag-list">
	                            <li><a href="#">Business</a></li>
	                            <li><a href="#">Industry </a></li>
	                            <li><a href="#">Tax</a></li>
	                            <li><a href="#">Planning</a></li>
	                            <li><a href="#">Online</a></li>
	                            <li><a href="#">Consulting</a></li>
	                            <li><a href="#">Maketing</a></li>
	                            <li><a href="#">Expert</a></li>
	                            <li><a href="#">Consulting</a></li>
	                        </ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget contact-widget">
						<h3 class="title">Contact Form</h3>
						<p>Lorem ipsum dolor sit amet, eu me evert laboramus, iudico Lorem ipsum dolor sit amet, eu me evert laboramus, iudico </p>
						<form id="footer-cf" class="contact-form" action="inc/sendemail.php" novalidate="novalidate">
							<input type="text" placeholder="Email Address" name="email">
							<button type="submit">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<section class="footer-bottom">
		<div class="container text-center">
			<p>Designed & Developed By <a href="http://hybriditservices.com">Hybrid IT Services.Inc</a></p>
		</div>
	</section>

	<!--Scroll to top-->
	<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

	<!-- main jQuery -->
	<script src="js/jquery-2.1.4.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- validate -->
	<script src="js/jquery-parallax.js"></script>
	<!-- validate -->
	<script src="js/validate.js"></script>
	<!-- mixit up -->
	<script src="js/jquery.mixitup.min.js"></script>
	<!-- fancybox -->
	<script src="js/jquery.fancybox.pack.js"></script>
	<!-- easing -->
	<script src="js/jquery.easing.min.js"></script>
	<!-- circle progress -->
	<script src="js/circle-progress.js"></script>
	<!-- appear js -->
	<script src="js/jquery.appear.js"></script>
	<!-- count to -->
	<script src="js/jquery.countTo.js"></script>
	<!-- isotope script -->
	<script src="js/isotope.pkgd.min.js"></script>
	<!-- jQuery ui js -->
	<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
	<!-- Nivo slider js -->     
    <script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="vendor/slider/home.js" type="text/javascript"></script>
	<!-- thm custom script -->
	<script src="js/custom.js"></script>
	<script type="text/javascript">
		//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			if($(this).hasClass('active')!==true){
				$(outerBox).find('.accordion .acc-btn').removeClass('active');
			}

			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);	
			}
		});	
}
	</script>