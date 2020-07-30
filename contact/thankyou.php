<?php include('../perch/runtime.php'); ?>

<?php
	// Defaults, which can be overridden
	$domain = 'https://'.$_SERVER["HTTP_HOST"];
	$url = $domain.$_SERVER["REQUEST_URI"];
	
	PerchSystem::set_var('domain',$domain);
	PerchSystem::set_var('url',$url);
?>

<!DOCTYPE html>
<!--[if IE 6]>
<html class="ie ie6 nojs Corporate
">
<![endif]-->
<!--[if IE 7]>
<html class="ie ie7 nojs Corporate
">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 nojs Corporate
">
<![endif]-->
<!--[if !(IE)]><!-->
<html class="nojs" lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0,width=device-width">
		<meta name="msvalidate.01" content="12CA65DABA62FBA74F1C4C0248D90FC2">
		<title>The Foundry | Contact Us</title>
		<link rel="canonical" href="<?php echo $url; ?>" />
		
		<meta name="description" content="xxxx" />
		<meta name="keywords" content="Keywords" />

		<link rel="stylesheet" media="all" href="/css/style.css">
		<link rel="stylesheet" media="all" href="/css/animate.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="/js/responsiveslides.min.js"></script>
		<script src="/js/flexibility.js"></script>
		<script src="/js/menu.js"></script>
		<script>flexibility(document.documentElement);</script>
		
		<!-- Begin Cookie Consent plugin by Silktide - https://silktide.com/cookieconsent -->
		<script type="text/javascript">
			window.cookieconsent_options = {"message":"Privacy Information: We have recently updated our privacy policy. For more information please","dismiss":"Got it!","learnMore":"view our full privacy policy","link":"/privacy-policy/","theme":"dark-bottom"};
			</script>
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
		<!-- End Cookie Consent plugin -->
		
	</head>

	<body>

		<nav id="navigation">
			<div class="navigation-panel flexbox main-container">
				<div class="logo">
					<a href="/"><img src="/img/foundry-logo.svg" alt="The Foundry Logo"></a>
				</div>
				<div class="flexbox navigation-menu-mobile">
					<div class="menu-toggle-button">
						<img src="/img/menu.svg" alt="Menu">
					</div>
				 	<ul class="menu-links-mobile">
						<li><a href="/about">About</a></li>
						<li><a href="/work">Work</a></li>
						<li><a href="/approach">Approach</a></li>
						<li><a href="/contact" class="active">Contact</a></li>
						<li><a href="/news/">News</a></li>
						<li class="fhc-nav"><a href="https://www.foundryhealthcare.co.uk/">Foundry Healthcare</a></li>
						<li class="bia-nav"><a href="https://www.brandinaction.com/">Brand in Action</a></li>
				 	</ul>
				</div>
				<div class="flexbox navigation-menu">
				 	<ul class="menu-links flexbox">
						<li><a href="/about">About</a></li>
						<li><a href="/work">Work</a></li>
						<li><a href="/approach">Approach</a></li>
						<li><a href="/contact" class="active">Contact</a></li>
						<li><a href="/news/">News</a></li>
						<li class="fhc-nav hvr-bounce-to-right flexbox"><a href="https://www.foundryhealthcare.co.uk/">FOUNDRY HEALTHCARE</a></li>
						<li class="bia-nav hvr-bounce-to-right flexbox"><a href="https://www.brandinaction.com/">BRAND IN ACTION</a></li>
				 	</ul>
				</div>
			</div>	
		</nav>

		<!-- Masthead -->

		<header id="contact-masthead" class="masthead flexbox">
			<div class="masthead-content main-container flexbox">
				<div class="headlines">
					<h1>Contact Us</h1>
					<div class="rule">
						<img src="/img/rule.png" alt="Rule" />
					</div>
					<div class="contact-details flexbox">
						<div class="address flexbox">
							<img src="/img/address.svg" alt="Address" />
							<p>
								<strong>The Foundry Communications</strong><br>
								3 Denmark Street, Altrincham<br>
								Cheshire WA14 2SS
							</p>
						</div>
						<div class="telephone flexbox">
							<img src="/img/telephone.svg" alt="Telephone" />
							<a href="tel:+441619268444"><p>+44 (0)161 926 8444<p></a>
						</div>
						<div class="email flexbox">
							<img src="/img/email.svg" alt="Email" />
							<a href="mailto:info@foundrycomms.co.uk"><p>info@foundrycomms.co.uk<p></a>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- End Masthead -->

		<!-- Map -->

		<section id="map">
			<div class="map centered">
				<?php perch_content('Map'); ?>
			</div>
		</section>

		<!-- End Map -->

		<!-- Enquiry Form -->

		<section id="thank-you">
			<div class="centered">
				<h1>Thank you for your enquiry<br>We will be in touch very soon</h1>
				<div class="rule">
					<img src="/img/rule.png" alt="Rule" />
				</div>
			</div>
		</section>

		<!-- End Enquiry Form -->


		<!-- Careers -->

		<section id="careers" class="main-container">
			<div class="centered">
				<h1>Careers</h1>
				<div class="rule">
					<img src="/img/rule.png" alt="Rule" />
				</div>
				<p>The Foundry is nothing without its people &ndash; and they are some of the best in the business. Hence our policy is to recruit only those who are <i>better</i> than us… or have the potential to be. That means finding people who can help deliver and service the diverse communication solutions we offer.</p>
				<p>Our focus is building brands and profits for both our clients and ourselves.</p>
				<p>In return for dedication, professionalism and a passion for excellence, we offer generous remuneration packages for the right candidates.</p>

				<h3>Current Vacancies</h3>
				<div class="rule">
					<img src="/img/rule.png" alt="Rule" />
				</div>
				<p>Unfortunately, there are no vacancies at the moment. However, we are always interested in talented people, so if you think you could add to The Foundry, then please <a href="mailto:info@foundrycomms.co.uk">email us</a> your CV.</p>
			</div>
		</section>

		<!-- End Careers -->

		<!-- Footer -->

		<?php include_once($_SERVER['DOCUMENT_ROOT']."/inc/footer.php"); ?>

		<!-- End Footer -->

		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

		<script type="text/javascript" src="//dust.ipfingerprint.com/1631.js"></script>
		
		<script type="text/javascript" src="https://www.tghbn12.com/js/91555.js" ></script>
		<noscript><img alt="" src="https://www.tghbn12.com/91555.png" style="display:none;" /></noscript>

		<div class="analytics">
	    <!-- Google Analytics -->
		    <script type="text/javascript">
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-76745-2', 'foundrycomms.co.uk');
				ga('send', 'pageview');
			</script>
		</div>
	</body>
</html>