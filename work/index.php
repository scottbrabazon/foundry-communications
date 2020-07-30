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
		<title>The Foundry | Our Work</title>
		<link rel="canonical" href="<?php echo $url; ?>" />
		
		<meta name="description" content="xxxx" />
		<meta name="keywords" content="Keywords" />

		<link rel="stylesheet" media="all" href="../css/style.css">
		<link rel="stylesheet" media="all" href="../css/animate.css">
		<link rel="stylesheet" type="text/css" href="../slick/slick.css">
		<link rel="stylesheet" type="text/css" href="../slick/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="../slick/slick-settings.css">

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
						<li><a href="/work" class="active">Work</a></li>
						<li><a href="/approach">Approach</a></li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/news/">News</a></li>
						<li class="fhc-nav"><a href="https://www.foundryhealthcare.co.uk/">Foundry Healthcare</a></li>
						<li class="bia-nav"><a href="https://www.brandinaction.com/">Brand in Action</a></li>
				 	</ul>
				</div>
				<div class="flexbox navigation-menu">
				 	<ul class="menu-links flexbox">
						<li><a href="/about">About</a></li>
						<li><a href="/work" class="active">Work</a></li>
						<li><a href="/approach">Approach</a></li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/news/">News</a></li>
						<li class="fhc-nav hvr-bounce-to-right flexbox"><a href="https://www.foundryhealthcare.co.uk/">FOUNDRY HEALTHCARE</a></li>
						<li class="bia-nav hvr-bounce-to-right flexbox"><a href="https://www.brandinaction.com/">BRAND IN ACTION</a></li>
				 	</ul>
				</div>
			</div>	
		</nav>


		<!-- Masthead -->

		<header id="work-masthead" class="masthead flexbox">
			<div class="masthead-content main-container flexbox">
				<div class="headlines">
					<h1>Our Work</h1>
					<div class="rule">
						<img src="/img/rule.png" alt="Rule" />
					</div>
					<h3>We solve marketing problems with compelling and creative communications. Here are some of our favourites…</h3>
				</div>
			</div>
		</header>	

		<!-- End Masthead -->

		<!-- Case Studes -->

		<div id="case-studies">
			<div class="case-studes-examples flexbox">
				<div>
					<a href="/work/manchester-united/">
						<div class="project-image">
							<img src="/img/case-studies/mufc.jpg" alt="Manchester United Case Study" />
						</div>
						<div class="hvr-bounce-to-top project-name-panel">
							<p class="project-info"><span class="project-client">Manchester United</span><br><span class="project-title">Growing a billion-dollar brand through sponsorship activation</span></p>
						</div>
					</a>
				</div>
				<!--<div>
					<a href="/work/kumho/">
						<div class="project-image">
							<img src="/img/case-studies/kumho.jpg" alt="Kuhmo Case Study" />
						</div>
						<div class="hvr-bounce-to-top project-name-panel">
							<p class="project-info"><span class="project-client">Kumho Tyre</span><br><span class="project-title">Helping a Korean tyre brand take the UK by storm</span></p>
						</div>
					</a>
				</div>-->
				<div>	
					<a href="/work/abellio/">
						<div class="project-image">
							<img src="/img/case-studies/abellio.jpg" alt="Bike &amp; Go Case Study" />
						</div>
						<div class="hvr-bounce-to-top project-name-panel">
							<p class="project-info"><span class="project-client">Bike &amp; Go</span><br><span class="project-title">Launching a revolutionary national bike hire scheme</span></p>
						</div>
					</a>
				</div>
				<div>
					<a href="/work/albemarle-bond/">
						<div class="project-image">
							<img src="/img/case-studies/albemarle-bond.jpg" alt="Albemarle Bond Case Study" />
						</div>
						<div class="hvr-bounce-to-top project-name-panel">
							<p class="project-info"><span class="project-client">Albemarle Bond</span><br><span class="project-title">Taking a brand from administration to sale in three years</span></p>
						</div>
					</a>
				</div>
			</div>
			<div class="case-studes-examples flexbox">
				<div>
					<a href="/work/pgl/">
						<div class="project-image">
							<img src="/img/case-studies/pgl.jpg" alt="PGL Case Study" />
						</div>
						<div class="hvr-bounce-to-top project-name-panel">
							<p class="project-info"><span class="project-client">PGL</span><br><span class="project-title">Turning complexity and scale into simplicity and ease</span></p>
						</div>
					</a>
				</div>
				<div>	
					<a href="/work/matthew-clark/">
						<div class="project-image">
							<img src="/img/case-studies/matthew-clark.jpg" alt="Matthew Clark Case Study" />
						</div>
						<div class="hvr-bounce-to-top project-name-panel">
							<p class="project-info"><span class="project-client">Matthew Clark</span><br><span class="project-title">Helping the Matthew Clark sales force tell &lsquo;one version of the truth&rsquo;</span></p>
						</div>
					</a>
				</div>
				<div>
					<a href="/work/prestone/">
						<div class="project-image">
							<img src="/img/case-studies/prestone.jpg" alt="Prestone Case Study" />
						</div>
						<div class="hvr-bounce-to-top project-name-panel">
							<p class="project-info"><span class="project-client">Prestone</span><br><span class="project-title">Helping an international brand leverage its market position in the UK</span></p>
						</div>
					</a>
				</div>
			</div>
		</div>

		<!-- End Case Studes -->

		<!-- Footer -->

		<?php include_once($_SERVER['DOCUMENT_ROOT']."/inc/footer-home.php"); ?>

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