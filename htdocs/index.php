<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Tuchsen.net Home</title>

		<link rel="stylesheet" type="text/css" href="resources/vendors/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="resources/vendors/css/grid.css">
		<link rel="stylesheet" type="text/css" href="resources/css/style.css">
		<link rel="stylesheet" type="text/css" href="resources/vendors/css/parsley.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400">

		<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
      <link rel="icon" href="favicon.ico">		
		<link rel="manifest" href="/site.webmanifest">
	</head>

	<body>
		<header>
			<div class="row">
				<div class="header-text">
					<div class="name">
						<h1>J. W. Tuchsen</h1>
					</div>

					<div class="slogan">
						<h3>Finding solutions through algorithms</h3>
					</div>

					<div class="contact">
						<h3>Sun City, CA, 92585</h3>
						<?php /* <ion-icon name="text" id="contactBtn"></ion-icon> */ ?>
						<a href="https://www.linkedin.com/in/jeremy-tuchsen-98866832" target="_blank">
							<ion-icon name="logo-linkedin"></ion-icon>
						</a>
					</div>
				</div>
			</div>
			<?php 
			/* 
			// Ran out of credits on twilio, need to switch to free option
			<!-- The Modal is created from ion-icon id="contactBtn". Modal content created in it's own .row for page flow and width -->
				<div id="contactModal" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
						<?php
							$modalContent = file_get_contents("snippets/forms/contactus.html");
							echo sprintf($modalContent, "");
						?>
					</div>
				</div>
			*/
			?>
		</header>

		<section class="section-skills">
			<div class="row">
				<h2>Skill Highlights</h2>
			</div>
			<div class="row">
				<div class="skills notop"></div>
					<div class="col span-1-of-6 skill-box text-align-center"> PHP </div>
					<div class="col span-1-of-6 skill-box text-align-center"> HTML/CSS </div>
					<div class="col span-1-of-6 skill-box text-align-center"> JS </div>
					<div class="col span-1-of-6 skill-box text-align-center"> SASS </div>
					<div class="col span-1-of-6 skill-box text-align-center"> SQL </div>
					<div class="col span-1-of-6 skill-box text-align-center">  WordPress  </div>
				</div>
			</div>
		</section>
		
		<section class="section-employment-history">
		
			<div class="row">
				<h2>Employment History</h2>
			</div>
			
			<div class="subheadingrow">
				<div class="col span-2-of-3 history-box text-align-left">
					<h3 class="company">Alluring Shores</h3>
				</div>
				<div class="col span-1-of-3 history-box text-align-right">
					<h3 class="year">2019 – Present</h3>
				</div>				
			</div>

			<div class="row">
				<div class="col span-4-of-4 ulist">
					<ul>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									An unlaunched sales platform for semi-customizable products.
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>		
			
			<div class="subheadingrow">
				<div class="col span-2-of-3 history-box text-align-left">
					<h3 class="company">Development Manager, <br>REUZEit</h3>
				</div>
				<div class="col span-1-of-3 history-box text-align-right">
					<h3 class="year">2020 – Present</h3>
				</div>				
			</div>			
			
			<div class="row">
				<div class="col span-4-of-4 ulist">
					<ul>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Team lead for the development and maintenance of REUZEit's custom ERP.
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="subheadingrow">
				<div class="col span-2-of-3 history-box text-align-left">
					<h3 class="company">Lead Solutions Trafficker,<br>Thomson Reuters</h3>
				</div>
				<div class="col span-1-of-3 history-box text-align-right">
					<h3 class="year">2015 – 2018</h3>
				</div>
			</div>
			
			<div class="row">
				<div class="col span-4-of-4 ulist">
					<ul>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Responsible for the creation, set up and ongoing management of lead generation client subscriptions worth a total annual revenue of over 1.5 million dollars
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Trained personnel to integrate our system with third party systems
								</div>
							</div>
						</li>

						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Created XML and JSON POST strings from our lead management software 
								</div>
							</div>
						</li>

						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Collected data via an API to create specialized reports
								</div>
							</div>
						</li>							
					</ul>
				</div>
			</div>
			
			<div class="subheadingrow">
				<div class="col span-2-of-3 history-box text-align-left">
					<h3 class="company">Applications Support Analyst,<br>Thomson Reuters</h3>
				</div>
				<div class="col span-1-of-3 history-box text-align-right">
					<h3 class="year">2013 – 2015</h3>
				</div>
			</div>
			
			<div class="row">
				<div class="col span-4-of-4 ulist">
					<ul>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									WordPress Plugin Creation – Created multiple plugins to add custom post types that would be used for a newsletter, a lead generation page, and content for sales and marketing. These plugins often used unique front end templates and back end edit pages. Also created plugins for specific fixes, such as allowing specific html tags for site administrators in posts and allowing additional mime type uploads.
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Multisite Maintenance – Mapping domains to site Id’s, first upload and import of themes to be cloned and adjusted by designers, tracking errors caused by plugin conflicts, adjustments to themes code base for SEO compliance.
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Site Support – Fixed issues reported by designers and clients such as pages / posts breaking due to blocked tags, blocked mime types, SEO best practice, etc.
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="subheadingrow">
				<div class="col span-2-of-3 history-box text-align-left">
					<h3 class="company">Jr. Software Developer,<br>LawInfo.com </h3>
				</div>
				<div class="col span-1-of-3 history-box text-align-right">
					<h3 class="year">2011 – 2013</h3>
				</div>
			</div>
		
			<div class="row">
				<div class="col span-4-of-4 ulist">
					<ul>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Programmed API for LawSmart.com – Added CURL functionality to accept key/token requests which allowed 3rd party affiliates to access LawSmart forms.
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Added New Features to LawSmart.com – Dynamic cover letters, alternate login process for API, and integrated well over 100 highly complex output templates.
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Code Maintenance – Fixing bugs and minor feature additions.
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col li-bullet">
									<ion-icon name="radio-button-on"></ion-icon>
								</div>
								<div class="col li-text">
									Gathered and Communicated Stakeholder Requirements for LawSmart – Collected and inserted requirements for project into ticketed system.
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
		
		<section class="section-education-references">
			<div class="row">
				<h2>Education and References</h2>
				<p class="text-align-center">Education and References are available on request</p>
			</div>
		</section>
		
		<section class="section-footer">
			<div class="row">
				<div class="col span-4-of-4 text-align-center">
					<h3>Attributions</h3>
				</div>
			</div>
			<div class="row">
				<div class="col span-2-of-4 text-align-right">
					<p>Banner Image&nbsp;-&nbsp;</p>
				</div>
				<div class="col span-2-of-4 footer-right text-align-left">
					<p><a href="https://www.pexels.com/photo/gray-laptop-computer-beside-green-ceramic-mug-1422286/">Photo by Aleksandar Cvetanovic from Pexels</a>
				</div>				
			</div>
			<div class="row">
				<div class="col span-2-of-4 text-align-right">
					<p>CSS Grid Provided By&nbsp;-&nbsp;</p>
				</div>
				<div class="col span-2-of-4 footer-right text-align-left">
					<p> <a href="http://www.responsivegridsystem.com/">Responsive Grid System</a>
				</div>
			</div>
		</section>

		<!-- Experimenting with es5 & es6 shim shams -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.7/es5-shim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.7/es5-sham.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/json3/3.3.2/json3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.34.2/es6-shim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.34.2/es6-sham.min.js"></script>

		<!-- This shim is taking too long -->
		<!-- script src="https://wzrd.in/standalone/es7-shim@latest"></script -->

		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
		<script src="/resources/vendors/js/jquery-3.4.1.min.js"></script>
		<script src="/resources/vendors/js/parsley.min.js"></script>
		<script src="/resources/js/jQdocReady.js"></script>
		
	</body>
</html>
