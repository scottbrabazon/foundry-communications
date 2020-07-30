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
		<title>The Foundry | Listen, Plan, Deliver</title>
		<link rel="canonical" href="<?php echo $url; ?>" />
		
		<meta name="description" content="xxxx" />
		<meta name="keywords" content="Keywords" />

		<link rel="stylesheet" media="all" href="/css/style.css">
		<link rel="stylesheet" media="all" href="/css/animate.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="/js/responsiveslides.min.js"></script>
		<script src="/js/flexibility.js"></script>
		<script src="/js/our-approach-tabs.js"></script>
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
						<li><a href="/approach" class="active">Approach</a></li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/news/">News</a></li>
						<li class="fhc-nav"><a href="https://www.foundryhealthcare.co.uk/">Foundry Healthcare</a></li>
						<li class="bia-nav"><a href="https://www.brandinaction.com/">Brand in Action</a></li>
				 	</ul>
				</div>
				<div class="flexbox navigation-menu">
				 	<ul class="menu-links flexbox">
						<li><a href="/about">About</a></li>
						<li><a href="/work">Work</a></li>
						<li><a href="/approach" class="active">Approach</a></li>
						<li><a href="/contact">Contact</a></li>
						<li><a href="/news/">News</a></li>
						<li class="fhc-nav hvr-bounce-to-right flexbox"><a href="https://www.foundryhealthcare.co.uk/">FOUNDRY HEALTHCARE</a></li>
						<li class="bia-nav hvr-bounce-to-right flexbox"><a href="https://www.brandinaction.com/">BRAND IN ACTION</a></li>
				 	</ul>
				</div>
			</div>	
		</nav>


		<!-- Masthead -->

		<header id="our-approach-masthead" class="masthead flexbox">
			<div class="masthead-content main-container flexbox">
				<div class="headlines">
					<h1>Listen. Plan. Deliver.</h1>
					<div class="rule">
						<img src="/img/rule.png" alt="Rule" />
					</div>
					<h3>We understand every brief is unique &mdash; but, over time, we have developed a tried and trusted approach that helps us to discover your purpose, define your audience and determine the best way to engage them.</h3>
				</div>
			</div>
		</header>	

		<!-- End Masthead -->

		<!-- Approach Nav -->

		<div id="approach-top-nav" class="main-container">
			<ul class="flexbox section_tabs">
				<li>
					<a href="#listen-content" class="button-next flexbox hvr-bounce-to-right">
						<p>Listen</p>
					</a>
				</li>
				<li>
					<a href="#plan-content" class="button-next flexbox hvr-bounce-to-right">
						<p>Plan</p>
					</a>
				</li>
				<li>
					<a href="#deliver-content" class="button-next flexbox hvr-bounce-to-right">
						<p>Deliver</p>
					</a>
				</li>
			</ul>
		</div>

		<!-- End Approach Nav -->

		<!-- Listen -->

		<div class="main-container our-approach-content-copy">

			<div id="listen-content" class="section_tab_content">
				<div>
					<div class="our-approach-intro-copy">
						<h1>Listen</h1>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Before you can speak, you must first listen. We have an on- and off-line approach to insight generation, which provides both breadth and depth of customer and market information, ensuring your research budget delivers return on investment.</p>
						<p>We are experienced in qualitative and quantitative research; applying a mix of traditional and pioneering techniques to best serve the needs of individual projects. Our digital strategy team can also help you navigate through the clutter of ‘virtual conversations’ to find, analyse and interpret the ones that matter.</p>
					</div>
					<hr />
				</div>
				<div class="flexbox content tab-content-space">
					<div id="listen-content-a" class="listen_tab_content">
						<h2>Qualitative research</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>In terms of gaining real depth of understanding, there’s no substitute for sitting and talking face to face (as long as you know the right questions to ask). We embrace innovative methodologies, such as co-creation or ethnography, to really get to the bottom of an audience’s motivations.</p>
						<p>Whether it’s traditional focus groups, in-home depth interviews or ongoing customer panels, we can design tailored research projects that provide ‘actionable insights’ aligned with your business objectives.</p>
					</div>
					<div id="listen-content-b" class="listen_tab_content">
						<h2>Quantitative research</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>When <i>qualitative</i> research needs to be supplemented by breadth of understanding, we deliver <i>quantitative</i> studies with customers or prospects. This allows us to evaluate behaviour and attitudes across segments, or to quantitatively test hypotheses.</p>
						<p>Our research projects are designed and delivered with intelligence and rigour, to produce reports that deliver more than just a relentless series of charts.</p>
					</div>
					<div id="listen-content-c" class="listen_tab_content">
						<h2>Internal audit &amp; workshops</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Your staff or sales force often has the biggest impact on your customers’ experience of your brand. Canvassing their views and experiences at the outset of a project can be invaluable in helping to set the strategic direction.</p>
						<p>Equally, comparing and contrasting their perceptions with those from the customer research can help determine the needs for an internal training or engagement programme. Which can have a real impact on your customers’ relationship with your brand.</p>
						<p>We can run independent, anonymised qualitative or quantitative studies with your staff, to help you evaluate their impact and influence.</p>
						<p>We can also run internal workshops with key team members to help capture their individual perspectives and help engender a sense of project ownership.</p>
					</div>
					<div id="listen-content-d" class="listen_tab_content">
						<h2>Digital audit &amp; research</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>A digital strategy starts with a clear understanding of your customers, your market, your brand’s online profile and evaluation of your existing digital assets.</p>
						<p>We can help you pinpoint <i>who</i>’s visiting your site and <i>when</i>; <i>how</i> they navigate it; your competitive <i>profile</i>; and <i>conversion rates</i>.</p>
						<p>A digital audit can also reveal if your site is fully optimised and operating within parameters that will avoid Google penalties. Whether that’s understanding your link profile, strengthening connections, checking load speeds or tightening up your back office systems.</p>
						<p>We can also listen in to social channels to get a better picture of who’s talking about you, your products and services. Our digital audit and research services include:</p>
						<h4>Competitor research</h4>
						<p>Which brands are you competing with &mdash; and how can you win share of voice?</p>
						<h4>Key phrase research</h4>
						<p>Pinpoint the key phrases and search terms your customers use to find you &mdash; and use this information to optimise your website and Google AdWords campaigns.</p>
						<h4>Customer journey mapping</h4>
						<p>Understand user experience to improve site navigation and increase conversion.</p>
						<h4>Link profile</h4>
						<p>The good, the bad and the toxic – we’ll keep the best links and remove any negative or broken ones. Ultimately, it’s about improving page ranking.</p>
						<h4>Social media performance and listening</h4>
						<p>Monitor online conversations, identify trends and tap into consumers’ digital habits. This produces actionable data to build effective social campaigns.</p>
						<h4>Site technical review</h4>
						<p>Our SEO (Search Engine Optimisation) specialists make sure your site is firing on all cylinders and not losing customers.</p>
					</div>
					<div id="listen-services-menu" class="services-menu">
						<h3>Listen services</h3>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<div class="services-links">
							<ul class="listen_tabs">
						        <li><a href="#listen-content-a">Qualitative research</a></li>
						        <li><a href="#listen-content-b">Quantitative research</a></li>
						        <li><a href="#listen-content-c">Internal audit &amp; workshops</a></li>
						        <li><a href="#listen-content-d">Digital audit &amp; research</a></li>
						    </ul>
						</div>
					</div>
				</div>
				<!-- Listen Nav Buttons -->
				<div id="approach-nav-buttons">
					<ul class="section_tabs flexbox">
						<li class="flexbox previous-page">
							<a href="#deliver-content" class="flexbox">
								<img src="/img/buttons/big/arrow-left.svg" alt="Deliver" />
								<h2>&nbsp;&nbsp;Deliver</h2>
							</a>
						</li>
						<li class="flexbox next-page">
							<a href="#plan-content" class="flexbox">
								<h2>Plan&nbsp;&nbsp;</h2>
								<img src="/img/buttons/big/arrow-right.svg" alt="Plan" />
							</a>
						</li>
					</ul>
				</div>
				<!-- End Listen Nav Buttons -->
				<!-- Listen Fixed Nav Buttons -->
				<div id="approach-fixed-nav-buttons">
					<ul class="section_tabs flexbox approach-fixed-nav-buttons">
						<li>
							<a href="#deliver-content" class="nav-buttons flexbox fixed-previous-page">
								<img src="/img/buttons/big/arrow-left.svg" alt="Deliver" />
								<h2>&nbsp;&nbsp;Deliver</h2>
							</a>
						</li>
						<li class="fixed-spacer">
							<h2>&nbsp;</h2>
						</li>
						<li>
							<a href="#plan-content" class="nav-buttons flexbox fixed-next-page">
								<h2>Plan&nbsp;&nbsp;</h2>
								<img src="/img/buttons/big/arrow-right.svg" alt="Plan" />
							</a>
						</li>
					</ul>
				</div>
				<!-- End Listen Fixed Nav Buttons -->
			</div>
		</div>

		<!-- End Listen -->

		<!-- Plan -->

		<div class="main-container our-approach-content-copy">

			<div id="plan-content" class="section_tab_content">
				<div>
					<div class="our-approach-intro-copy">
						<h1>Plan</h1>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Thanks to research, we are now informed. These insights help us ensure your brand is positioned correctly, using the right words and images to tell your story in the most compelling way.</p>
						<p>And we also have a starting point from which to devise a communications strategy and plan effective campaigns designed for the real world.</p>
					</div>
					<hr />
				</div>
				<div class="flexbox content tab-content-space">
					<div id="plan-content-a" class="plan_tab_content">
						<h2>Brand positioning</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Is your brand visible and credible? Are its messages engaging? Armed with information, we develop brand keys for our clients. Brand keys that identify their reason for being and the unique ways they can tell customers, not just <i>what</i> they do, but <i>why</i> they do it.</p>
						<p>These aren’t just marketing buzzwords on paper. We push and prod until we’ve got to the very essence of your brand. This is the reason you exist now &mdash; and why you will continue to grow in the future.</p>
						<p>If you already own an established brand, we can help you to refine the positioning and create compelling messages that cut through competitor noise.</p>
						<p>For fledgeling brands or brand extensions, our team will work with you to develop original names and straplines that complement your existing portfolio, while helping your product or service stand out.</p>
					</div>
					<div id="plan-content-b" class="plan_tab_content">
						<h2>Communications strategy</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Once we’ve built up a picture of your who, what and, most importantly, why, we can help develop a communications strategy that speaks the right language, differentiates against competitors and exploits new opportunities.<p>
						<p>We will audit your existing strategy to draw from your current strengths and weaknesses, then choose the most appropriate ways to put your message in front of your audience.</p>
						<p>Our integrated approach means combining the best traditional channels, such as TV and press advertising, with a combination of paid (Google PPC: Pay Per Click), owned (your own website, blogs and social) and earned media (essentially, digital word-of-mouth).</p>
					</div>
					<div id="plan-content-c" class="plan_tab_content">
						<h2>Campaign planning</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Once goals are established, our customer and competitor behaviour insights are used to find the best channels to market. This is driven by audience segmentation and followed by further refinement of your core messages to reach the right target.<p>
						<p>Careful consideration of traditional media is an essential part of your campaign plan and needs to be fully integrated with online communications to be effective.</p>
						<p>We will revisit messages and content throughout the lifespan of a project to ensure we remain relevant, engaging and on-brand.</p>
					</div>
					<div id="plan-services-menu" class="services-menu">
						<h3>Plan services</h3>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<div class="services-links">
							<ul class="plan_tabs">
						        <li><a href="#plan-content-a">Brand positioning</a></li>
						        <li><a href="#plan-content-b">Communications strategy</a></li>
						        <li><a href="#plan-content-c">Campaign planning</a></li>
						    </ul>
						</div>
					</div>
				</div>
				<!-- Plan Nav Buttons -->
				<div id="approach-nav-buttons">
					<ul class="section_tabs flexbox">
						<li class="flexbox previous-page">
							<a href="#listen-content" class="flexbox">
								<img src="/img/buttons/big/arrow-left.svg" alt="Listen" />
								<h2>&nbsp;&nbsp;Listen</h2>
							</a>
						</li>
						<li class="flexbox next-page">
							<a href="#deliver-content" class="flexbox">
								<h2>Deliver&nbsp;&nbsp;</h2>
								<img src="/img/buttons/big/arrow-right.svg" alt="Deliver" />
							</a>
						</li>
					</ul>
				</div>
				<!-- End Plan Nav Buttons -->
				<!-- Plan Fixed Nav Buttons -->
				<div id="approach-fixed-nav-buttons">
					<ul class="section_tabs flexbox approach-fixed-nav-buttons">
						<li>
							<a href="#listen-content" class="nav-buttons flexbox fixed-next-page">
								<img src="/img/buttons/big/arrow-left.svg" alt="Listen" />
								<h2>&nbsp;&nbsp;Listen</h2>
							</a>
						</li>
						<li class="fixed-spacer">
							<h2>&nbsp;</h2>
						</li>
						<li>
							<a href="#deliver-content" class="nav-buttons flexbox fixed-next-page">
								<h2>Deliver&nbsp;&nbsp;</h2>
								<img src="/img/buttons/big/arrow-right.svg" alt="Deliver" />
							</a>
						</li>
					</ul>
				</div>
				<!-- End Plan Fixed Nav Buttons -->
			</div>
		</div>

		<!-- End Plan -->

		<!-- Deliver -->

		<div class="main-container our-approach-content-copy">

			<div id="deliver-content" class="section_tab_content">
				<div>
					<div class="our-approach-intro-copy">
						<h1>Deliver</h1>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Fuelled by insights and a solid strategic plan, our designers and writers now get involved. Our experienced, award-winning creative team realise and refine your message in appropriate forms for every medium.</p>
						<p>We have advertising and packaging experts, skilled web designers and blog/social media writers, along with art directors whose experience in print and direct mail goes back decades.</p>
						<p>Disciplines are different, but one thing unifies our approach – only with a strong idea, articulated with unexpected words and images, can you produce a smile inside and engage busy, distracted people with your messages.</p>
					</div>
					<hr />
				</div>
				<div class="flexbox content tab-content-space">
					<div id="deliver-content-a" class="deliver_tab_content">
						<h2>Advertising</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Press or outdoor, on- or off-line, we create concepts, write copy, art-direct photo shoots and design advertising campaigns for clients across a huge range of sectors. We’re also no strangers to writing TV and radio spots, translating your message visually or audibly in the most powerful way possible.</p>
					</div>
					<div id="deliver-content-b" class="deliver_tab_content">
						<h2>Design</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Our accomplished designers bring ideas to life in various forms. Whether it’s transforming a flagging brand through innovative packaging or capturing a company’s ethos in new branding materials, we work in 2D, 3D and 4D to produce exceptional designs that get noticed.</p>
					</div>
					<div id="deliver-content-c" class="deliver_tab_content">
						<h2>Corporate identity</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Good corporate identity can be the reason customers choose <i>your</i> product or service over competitor’s. And we’ll do everything we can to make your shop window standout. We are experienced in original logo creation, name generation, straplines and typography, and can produce a full suite of brand assets for you, including brand guidelines.</p>
					</div>
					<div id="deliver-content-d" class="deliver_tab_content">
						<h2>Packaging</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Once we’ve put the finishing touches to your packaging design, we can use Cinema 4D to generate accurate virtual imagery to help you visualise exactly how your pack will appear on shelf. Our close relationships with translation agencies mean we can also reformat your design in any language at a moment’s notice.</p>
					</div>
					<div id="deliver-content-e" class="deliver_tab_content">
						<h2>Printed literature</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Many of our clients require large volumes of printed literature that needs to attract, inform, invite, educate or sell. From detail aids to sales presenters, customer materials to high-profile event invitations, we can deliver everything from campaign photography to copywriting to fulfil your literature brief.</p>
					</div>
					<div id="deliver-content-f" class="deliver_tab_content">
						<h2>Video &amp; animation</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>We’re confident creators of dynamic video content for clients who want to communicate in a more engaging way. Perhaps you’d like to make a big impact at a sales conference or give a retail display a lift. Whatever you need, we can write scripts, shoot original footage or use existing content, coupled with catchy tracks, to highlight your message. We also have experienced 3D animators who can help you create characters, embellish TV campaigns or bring products to life.</p>
					</div>
					<div id="deliver-content-g" class="deliver_tab_content">
						<h2>Events &amp; experiential</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>We design, plan and execute events and exhibitions that are unforgettable. It’s not only about ideas that surprise and engage your customers; it’s also about seamlessly coordinating every last detail, from sourcing staff to delivering the experience, that takes the stress out of hosting a high-profile event and maximises PR for your brand.</p>
					</div>
					<div id="deliver-content-h" class="deliver_tab_content">
						<h2>Digital development</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Our Digital Department comprises experienced UX Designers, Back- and Front-end Developers, who offer a full range of services, from initial build and interface design, to marketing automation and app development. No project is too big or small. We are as happy working from scratch as we are managing and enhancing existing sites, working with our CMS or yours.</p>
						<ul>
							<li><strong>Website build</strong><br>
							Presenting your brand with inspired design – while increasing traffic, reducing bounce rates and boosting conversion.</li>

							<li><strong>Interface &amp; UX design</strong><br>
							Simplify, maximise usability and improve customer experience.</li>

							<li><strong>Customer journey mapping</strong><br>
							Inform everything from UX design to PPC (Pay Per Click) and social media campaign planning.</li>

							<li><strong>CMS integration</strong><br>
							We utilise a range of modern platforms to make it easy for your team to access, manage and edit content.</li>

							<li><strong>Marketing automation</strong><br>
							Advertise across multiple platforms in a more streamlined, efficient way.</li>

							<li><strong>App development</strong><br>
							Create beautiful, fun, addictive, relevant, informative apps.</li>

							<li><strong>Asset management</strong><br>
							Ensure brand assets are always up-to-date with bespoke online systems.</li>
						</ul>
					</div>
					<div id="deliver-content-i" class="deliver_tab_content">
						<h2>Digital marketing</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>Websites, social media, blogs, emails, display advertising. Wherever you want to promote your brand, we can create digital marketing campaigns that get you noticed. We then use the latest optimisation techniques; analytics; measurement; and reporting tools to ensure you are seen, heard, liked and shared by your target audience.</p>
						<ul>
							<li><strong>Paid search (PPC)/Google AdWords</strong><br>
							We deliver campaigns that work. Our Paid team carefully manage your budget to get the maximum return.</li>

							<li><strong>Search Engine Optimisation (SEO)</strong><br>
							Make sure search engines, and potential customers, can see your site; that your content is relevant and useful; its pages and propositions connect; and that the external links and media mentions you’re achieving are genuine.</li>

							<li><strong>Social media</strong><br>
							Develop strategy, implement tactics and devise content that boosts your brand.</li>

							<li><strong>Technical website management</strong><br>
							Highlight any issues affecting a site’s ability to rank &mdash; and fix them.</li>

							<li><strong>Email marketing</strong><br>
							Engaging templates and content to improve click-through and conversion.</li>

							<li><strong>Content marketing</strong><br>
							Valuable content on any subject, distributed through the correct channels.</li>

							<li><strong>Outreach</strong><br>
							Building relationships with relevant sites, people, publications, influencers and opportunities to leverage your brand.</li>

							<li><strong>Analytics, measurement and reporting</strong><br>
							Find out how your website or email campaign is performing, with actionable results.</li>
						</ul>
					</div>
					<div id="deliver-content-j" class="deliver_tab_content">
						<h2>Sponsorship activation</h2>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<p>The specialists in our sports activation division, Brand in Action, help football clubs and sponsors to find their brand’s magic and make it real; creating events, activities and installations you can touch, taste and talk about. We listen to fans, develop strategy and create big ideas that help both parties to get more out of their sponsorship deal, constantly measuring and refining to ensure ongoing success.</p>
					</div>
					<div id="deliver-services-menu" class="services-menu">
						<h3>Deliver services</h3>
						<div class="rule">
							<img src="/img/rule.png" alt="Rule" />
						</div>
						<div class="services-links">
							<ul class="deliver_tabs">
						        <li><a href="#deliver-content-a">Advertising</a></li>
						        <li><a href="#deliver-content-b">Design</a></li>
						        <li><a href="#deliver-content-c">Corporate identity</a></li>
						        <li><a href="#deliver-content-d">Packaging</a></li>
						        <li><a href="#deliver-content-e">Printed literature</a></li>
						        <li><a href="#deliver-content-f">Video &amp; animation</a></li>
						        <li><a href="#deliver-content-g">Events &amp; experiential</a></li>
						        <li><a href="#deliver-content-h">Digital development</a></li>
						        <li><a href="#deliver-content-i">Digital marketing</a></li>
						        <li><a href="#deliver-content-j">Sponsorship activation</a></li>
						    </ul>
						</div>
					</div>
				</div>
				<!-- Listen Nav Buttons -->
				<div id="approach-nav-buttons">
					<ul class="section_tabs flexbox">
						<li class="flexbox previous-page">
							<a href="#plan-content" class="flexbox">
								<img src="/img/buttons/big/arrow-left.svg" alt="Plan" />
								<h2>&nbsp;&nbsp;Plan</h2>
							</a>
						</li>
						<li class="flexbox next-page">
							<a href="#listen-content" class="flexbox">
								<h2>Listen&nbsp;&nbsp;</h2>
								<img src="/img/buttons/big/arrow-right.svg" alt="Listen" />
							</a>
						</li>
					</ul>
				</div>
				<!-- End Listen Nav Buttons -->
				<!-- Listen Fixed Nav Buttons -->
				<div id="approach-fixed-nav-buttons">
					<ul class="section_tabs flexbox approach-fixed-nav-buttons">
						<li>
							<a href="#plan-content" class="nav-buttons flexbox fixed-previous-page">
								<img src="/img/buttons/big/arrow-left.svg" alt="Plan" />
								<h2>&nbsp;&nbsp;Plan</h2>
							</a>
						</li>
						<li class="fixed-spacer">
							<h2>&nbsp;</h2>
						</li>
						<li>
							<a href="#listen-content" class="nav-buttons flexbox fixed-next-page">
								<h2>Listen&nbsp;&nbsp;</h2>
								<img src="/img/buttons/big/arrow-right.svg" alt="Listen" />
							</a>
						</li>
					</ul>
				</div>
				<!-- End Listen Fixed Nav Buttons -->
			</div>
		</div>

		<!-- End Deliver -->

		<!-- Case Studes -->
		
		<?php include_once($_SERVER['DOCUMENT_ROOT']."/inc/case-study-panel.php"); ?>

		<!-- End Case Studes -->

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