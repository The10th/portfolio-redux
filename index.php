<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="Julian HV Nguyen - Front-End Web Developer &amp; UI Designer" />
	<meta name="description" content="Julian Nguyen is a front-end web developer and UI designer located in the Bay Area, California" />
	<meta name="site_name" content="Julian the Developer" />	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./stylesheets/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="./stylesheets/style.css"/>
	<link rel="stylesheet" type="text/css" href="./stylesheets/materialize.min.css"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="icon" href="./favicon.ico" type="image/x-icon"/>
	<title>Julian the Dev</title>
</head>
<body>
	<!-- side-nav smooth scrolling -->
<!-- 	<ul class="navi light-blue-text text-darken-1 hnl">
		<li data-slide="1" class='fa fa-bookmark'>Intro</li>
		<li data-slide="2" class='fa fa-image'>About</li>
		<li data-slide="3" class='fa fa-puzzle-piece'>Works</li>
		<li data-slide="4" class='fa fa-star'>Thanks</li>
	</ul>
-->
<!-- ######### first slide ###########-->

<div class='slide z-depth-3' id='slide1' data-slide='1'>	
	<div class="row">
		<div class='link-group' class='col s12 m12 l12'>
			<ul class='right'>
				<a href="https://www.github.com/the10th" target='_blank'><li class='fa fa-3x fa-github-square'></li></a>
				<a href="https://www.linkedin.com/in/julianhvnguyen" target='_blank'><li class='fa fa-3x fa-linkedin'></li></a>
				<a href="https://angel.co/julian-nguyen" target='_blank'><li class='fa fa-3x fa-angellist'></li></a>
			</ul>
		</div>	
		<div id='intro' class="col s12 m12 l12 valign-wrapper">
			<div class='valign'>
				<img src="./imgs/dev_logo.png" />
				<h1 class='white-text'>Julian HV Nguyen</h1>
				<h4 class='teal-text text-accent-2'>web dev &#8226; ui designer &#8226; css junkie</h4>
				<a data-slide='2' id='first-btn' class='button center fa fa-chevron-circle-down fa-3x navi-btn'></a>
			</div>
		</div>
	</div>	
</div>

<!-- ######### end first slide ###########-->

<!-- ######### second slide ###########-->

<div id="slide2" class='slide grey lighten-2' data-slide='2'>
	<div class="about-me container">
		<h1>Words <span class='hos'>about me</span></h1>
		<hr />
		<div class='content'>
			<h5 class='center light-blue-text text-darken-1'>I'm a front-end engineer, web dev bootcamp grad, and UI/UX enthusiast.</h5>
			<h5 class='center'>I also have a passion for designing clean, beautiful, and intuitive user experiences.</h5>
		</div>

		<!-- ################ begin skills  ################ -->
		<table class='hos content'>
			<thead>
				<tr class='light-blue-text text-darken-1'>
					<th>Skills</th>
					<th>Frameworks</th>
					<th>Methodology</th>				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>HTML5, CSS3, LESS, JavaScript, AJAX, Node</td>
					<td>Materialize, Bootstrap, Foundation, Angular, Express</td>
					<td>OOP, MVC, REST</td>
				</tr>
			</tbody>
		</table>
		<div class="row center">
			<div class="col s12 m12 l12">
				<a data-slide='3' class='button fa fa-chevron-circle-down fa-3x navi-btn'></a>
			</div>
		</div>
		<!-- ################ end  skills  ################ -->
	</div>
</div>	

<!-- ######### end slide 2 ###########-->

<!-- ######### begin slide 3 ###########-->

<div id="slide3" class='slide grey lighten-3' data-slide='3'>
	<div class='container'>
		<h1>Things <span class='hos'>I've made</span></h1>
		<hr />
		<div class='content'>
			<h5 class='center light-blue-text text-darken-1'>
				Currently I build functional internal web applications for Coding Dojo, Inc.
			</h5>
			<h5 class='center'>
				Click on the cards below and see the things I've made.
			</h5>
		</div>
		<section>
			<ul class="collapsible">
				<li>
					<div class="collapsible-header"><i class="fa fa-file-code-o"></i>Developer <i class='right mdi-navigation-unfold-more'></i></div>
					<div class="collapsible-body grey lighten-2 white-text">
						<div class="row">
							<div class="col l6">
								<div class="card">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="./imgs/dojo_login.png">
									</div>
									<div class="card-content grey accent-5">
										<span class="card-title activator white-text text-darken-4">CiCo <i class="mdi-navigation-expand-less right"></i></span>
									</div>
									<div class="card-reveal">
										<span class="card-title">
											<i class="mdi-navigation-expand-more right"></i>
											Role: <span class='role'>Front-End Engineer</span>
										</span>
										<p>Dojo Clock In &amp; Out (CiCo) is an internal time keeping app built for Coding Dojo, Inc. staff. On a three man team I fulfilled the role of the front end developer, focusing on: <br />
											UI design, color scheme, content display, and front end functionality.
										</p>
										<p>Technologies I used: <span class='role'>HTML5, CSS3, AngularJS, and Bootstrap</span></p>
										<!-- <a href="http://www.quicksurveyinfo.com">Visit Full Page</a> -->
									</div>
								</div>
							</div>
							<div class="col l6">
								<div class="card">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="./imgs/dojo_review.png">
									</div>
									<div class="card-content grey accent-5">
										<span class="card-title activator white-text text-darken-4">FuaR <i class="mdi-navigation-expand-less right"></i></span>
									</div>
									<div class="card-reveal">
										<span class="card-title">
											<i class="mdi-navigation-expand-more right"></i>
											Role: <span class='role'>Front-End Engineer</span>
										</span>
										<p>FuaR is an app that allows Coding Dojo students to upload their CV or portfolio design for the staff to review &amp; provide video feedback. I was the front-end dev on a three man team &amp; focused on content display, front-end functionality, &amp; UI design.
										</p>
										<p>Technologies I used: <span class="role">HTML5, LESS, AngularJS, Materialize, &amp; NodeJS</span></p>
										<!-- <a href="http://">Visit Full Page</a> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="active">
					<div class="collapsible-header"><i class="mdi-image-palette"></i>Designer <i class='right mdi-navigation-unfold-more'></i></div>
					<div class="collapsible-body grey lighten-2 white-text">
						<div class="row">
							<div class="col l6">
								<div class="card">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="./imgs/quicksurvey.png">
									</div>
									<div class="card-content grey accent-5">
										<span class="card-title activator white-text text-darken-4">QSI <i class="mdi-navigation-expand-less right"></i></span>
									</div>
									<div class="card-reveal">
										<span class="card-title">
											<i class="mdi-navigation-expand-more right"></i>
											Role: <span class='role'>Designer</span>
										</span>
										<p>QuickSurveyInfo (QSI)  allows users to quickly create and share surveys while having a user friendly dashboard to display their analytics. For this project I designed the color scheme, icons, and landing page content. 
										</p>
										<p>Technologies I used: <span class='role'>HTML5, CSS3, jQuery, Bootstrap,  &amp; Adobe Kuler</span></p>
										<a href="http://www.quicksurveyinfo.com">Visit Full Page</a>
									</div>
								</div>
							</div>								
							<div class="col l6">
								<div class="card">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="./imgs/village88.png">
									</div>
									<div class="card-content grey accent-5">
										<span class="card-title activator white-text text-darken-4">Village88<i class="mdi-navigation-expand-less right"></i></span>
									</div>
									<div class="card-reveal">
										<span class="card-title">
											<i class="mdi-navigation-expand-more right"></i>
											Role: <span class='role'>Designer / Developer</span>
										</span>
										<p>Village88 is the development arm of Coding Dojo, Inc., focusing on rapid prototyping. I was Chosen by Coding Dojo's founder to fully design and build Village88's landing page and I focused on using existing brand colors, icon design, &amp; content flow.
										</p>
										<p>Technologies I used: <span class="role">HTML5, LESS, Bootstrap, &amp; PHP</span></p>
										<a href="http://www.village88studio.com">Visit Full Page</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>						
		</section>
		<div class="row center content">
			<div class="col s12 m12 l12">
				<a data-slide='4' class='button fa fa-chevron-circle-down fa-3x navi-btn'></a>
			</div>
		</div>
	</div>
</div>	
<!-- ######### end slide 3 ###########-->

<!-- ######### begin slide 4 ###########-->	
<div id="slide4" class='slide grey lighten-4' data-slide='4'>
	<div class="container">
		<h1>Thanks <span class='hos'>for stopping by</span></h1>
		<hr />			
		<div class="content">
			<h5 class='center light-blue-text text-darken-1'>We should do this again sometime. Connect with me or grab a copy of my <a class='light-blue-text text-darken-2' href='./download/jhvndrev.pdf'>CV</a class=''>.</h5>
			<h5 class='center grey-text text-darken-2'>Have a nice day.</h5>
				<!-- <form class='content write-you-me' action="process.php" method="post">
					<div id='quote_form' class='contact'>
						<div class='row'>
							<div class="col s12 m6 l6">
								<label for="name">First &amp; Last Name</label>
								<input type="text" id='name' name="name" placeholder='ex. Fox Mulder'>
							</div>
							<div class="col s12 m6 l6">
								<label for="phone_number">A good number to reach you <small>(not required)</small></label>
								<input type="tel" id='phone_number' name="phone_number" placeholder='(###) ###-####'>								
							</div>
						</div>
						<div class="row">
							<div class="col s12 m6 l6">
								<label for="reply_email">Email</label>
								<input  type="email" id='reply_email' name="reply_email" placeholder='example@massive-dynamic.org'>		
							</div>
							<div class="col s12 m6 l6">
								<label for="project_type">Project type:</label>
								<select id='project_type' name="project_type">
									<option selected disabled>select project type</option>
									<option>Front-end development</option>
									<option>Site &amp; UI design</option>
									<option>I just want to chat!</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col s12 m12 l12">
								<label for="description">Put your words and thoughts here:</label>
								<textarea id='description' name="description"></textarea>
							</div>
						</div>		
						<button class='btn light-blue darken-1' value='submit' name="submit">Submit</button>
					</div>
				</form> -->
			</div>
			<div class="row content center contact">
				<div class="col s12 m4 l4">
					<a href="mailto:jhvndev@gmail.com" class='fa fa-paper-plane-o shake'>Email</a>
					<br />
					<small>jhvndev@gmail.com</small>
				</div>
				<div class="col s12 m4 l4">
					<a href='skype:jhv_nguyen?call' class='fa fa-skype shake'>Skype</a>
					<br />
					<small>jhv_nguyen</small>
				</div>
				<div class="col s12 m4 l4">
					<a href="./download/jhvndrev.pdf" class='fa fa-file-pdf-o shake'>CV</a>
					<br />
					<small>resume</small>					
				</div>
			</div>
			<div class="row center content">
				<div class="col s12 m12 l12">
					<a data-slide='1' class='button fa-stack fa-2x navi-btn'>
						<i class='fa  fa-circle-thin fa-stack-2x'></i>
						<i class='fa  fa-angle-double-up fa-stack-1x'></i>
					</a>
				</div>
			</div>							
		</div>
	</div>
	<!-- ######### end slide 4 ###########-->	
	<!-- ######### begin footer ###########-->	

	<footer class='footer-copyright light-blue darken-1 white-text '>
		<div class="row">
			<div class="col s12 m12 l12">
				<section class='left'>
					<i class='fa fa-copyright'></i>2014-2015 Julian HV Nguyen - All rights reserved.
				</section>
			</div>
		</div>
	</footer>

	<!-- ######### end footer ###########-->	

	<!-- loading js at  bottom -->
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="./js/js.js"></script>
	<script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="./js/waypoints.min.js"></script>
	<script type="text/javascript" src="./js/materialize.min.js"></script>
</body>
</html>