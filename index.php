<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="jquery.carouFredSel-5.1.3-packed.js"></script> 
		<script type="text/javascript" src="jquery.fsCarousel.1.0.js"></script> 
		
		<!--bannerslide-->
		<link href="bannercarousel/bootstrap.min.css" rel="stylesheet" />
		<script src="bannercarousel/jquery.min.js"></script>
		<script src="bannercarousel/bootstrap.min.js"></script>
		<link href="bannercarousel/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<!--bannerslide-->
		
		
		<script>
			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

				  var target = $(this.hash);
				  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				  if (target.length) {
					$('html,body').animate({
					  scrollTop: target.offset().top
					}, 3000);
					return false;
				  }
				}
			  });
			});
		</script>
		  <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
		<script type="text/javascript">//<![CDATA[
			$(window).load(function(){
			$('#prv-testimonial').on('click', function(){
				var $last = $('#testimonial-list li:last');
				$last.remove().css({ 'margin-left': '-30%' });
				$('#testimonial-list li:first').before($last);
				$last.animate({ 'margin-left': '0px' }, 1000);
			});

			$('#nxt-testimonial').on('click', function(){
				var $first = $('#testimonial-list li:first');
				$first.animate({ 'margin-left': '-30%' }, 1000, function() {
					$first.remove().css({ 'margin-left': '0px' });
					$('#testimonial-list li:last').after($first);
				});
			});
			});//]]> 

		</script>
		
		<!---***************SCRIPT TO MAKE TOP SMALLER WHEN HOVER*****************-->
	<script type="text/javascript">//<![CDATA[
		function EasyPeasyParallax() {
			var scrollPos = $(document).scrollTop();
			var targetOpacity = 0.95;
			scrollPos < 200 ? targetOpacity = '0.6'+ (scrollPos*100)/10 : targetOpacity;
			$('#top').css({
				'background': 'rgba(255, 255, 255, '+ targetOpacity +')'

			});
			
			console.log(scrollPos,targetOpacity);
		};

		$(function(){
			$(window).scroll(function() {
				EasyPeasyParallax();
			});
		});

	</script>
		<!---***************END SCRIPT TO MAKE TOP SMALLER WHEN HOVER*****************-->

	</head>

	<body>
			<div id="totop">
					<a href="#banner">totop</a>
			</div><!--totop-->
		
			<div id="top">
				<div class="topblueline"></div><!--topblueline-->
				<div  class="inner">
					<div class="logo" ><a href = "index.php">8webskin</a></div><!--logo-->
				</div>
					<div class="topright" >
						<div  class="inner">
							<div id="mainnavigationmenu" >
								<ul>
									<li ><a href="#about_jessal">About us</a></li>
									<li ><a href="#recent_job_opening">Showcase</a></li>
									<li ><a href="#banner_wwj">Redesign you Site</a></li>
									<li ><a href="#recruitment" class="request">Request a Quote</a></li>
									<li ><a href="#recruitment">Contact Us</a></li>
									
								</ul>
							</div><!--mainmenu-->
						</div>
					</div><!--topright-->
				</div><!--inner-->
			</div><!--top-->
			
		<div id="banner">
			
			<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
			<!-- Indicators -->
  
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="item active"> 
				<img src="images/banner.jpg" style="width:100%" alt="First slide">
			  <div class="container">
				<div class="carousel-caption">
				  <div class="bannertext">
					<h2>Duis aute irure dolor in reprehenderit</h2>
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut 
		labore et  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate velit e</p>
				</div>
				
				<div class="banner_menu">
					<a href="#" class="bannerlink">
						<div class="ttle">Search Product</div>
						<div class="sttle">For all location</div>
					</a>
					<a href="#" class="bannerlink">
						<div class="ttle">Post Resume</div>
						<div class="sttle">Register for future reference</div>
					</a>
				</div><!--banner_menu-->
				</div><!--carousel-caption-->
			  </div>
			</div>
			<div class="item"> <img src="images/banner1A.jpg" style="width:100%" data-src="" alt="Second    slide">
			  <div class="container">
				<div class="carousel-caption">
				  <div class="bannertext">
					<h2>Experience of working in and with the NHS </h2>
					<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate velit e</p>
				</div>
				
				<div class="banner_menu">
					<a href="#" class="bannerlink">
						<div class="ttle">Search a Job</div>
						<div class="sttle">For all location</div>
					</a>
					
				</div><!--banner_menu-->
				</div><!--carousel-caption-->
			  </div>
			</div>
			<div class="item"> <img src="images/banner1b.jpg" style="width:100%" data-src="" alt="Third slide">
			  <div class="container">
			<div class="carousel-caption">
				  <div class="bannertext">
					<h2>The foundation on which our company has grown</h2>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit , sed do eiusmod tempor incididunt ut 
		labore et  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
		aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate velit e</p>
				</div>
				
				<div class="banner_menu">
					<a href="#" class="bannerlink">
						<div class="ttle">Learn More</div>
						<div class="sttle">About Our COmpany</div>
					</a>
					<a href="#" class="bannerlink">
						<div class="ttle">Post Resume</div>
						<div class="sttle">Register for future reference</div>
					</a>
				</div><!--banner_menu-->
				</div><!--carousel-caption-->
			  </div>
			</div>
		  </div>
		  </div>
				
		</div><!--banner-->
		
		<div id="maincontent">
		<div id="search_box">
			<div  class="inner">
				<form>
					<ul>
						<li><input type="text" value = 'search Job ' class="search_job"  onclick="this.value=''" onblur="value = 'search Job'"/></li>
						<li><input type="text" value = 'Location' class="search_location" onclick="this.value=''" onblur="value = 'Location'"/></li>
						<li><input type="submit" value="go"/></li>
					</ul>
				</form>
			</div><!--inner-->
		</div><!--search_box-->
		
		<div id="recent_job_opening">
			<div  class="inner">
				<h3>RECENT JOB OPENING</h3>
				
				<div id="rjo_container">
					<div class="rjo_title_cont">
						<div class="rtc">
							position 
						</div>
						<div class="rtc people">
							role
						</div>
						<div class="rtc location">
							location
						</div>
					</div><!--rjo_title_cont-->
					
					<div class="rjo_list">
						<ul>
							<li>
								<div class="link"><a href="#"></a></div>
								<div class="rlist_image"><img src="images/sampleimage_10.jpg"></div>
								<div class="rlist_pos">
									<div class="rlist_title">SUPPORT WORKER</div>
									<div class="rlist_time">Full Time</div>
									<div class="rlist_enddate">End Date : November 20, 2015</div>
								</div>
								<div class="rlist_role">
									To provide the highest standards of direct care and support to our tenants in all aspects of their daily living, as part of a multi- disciplinary
								</div>
								<div class="rlist_loc">Treehaven, West Runton</div>
							</li>
							<li>
								<div class="link"><a href="#"></a></div>
								<div class="rlist_image"><img src="images/sampleimage_10.jpg"></div>
								<div class="rlist_pos">
									<div class="rlist_title">SUPPORT WORKER</div>
									<div class="rlist_time">Full Time</div>
									<div class="rlist_enddate">End Date : November 20, 2015</div>
								</div>
								<div class="rlist_role">
									To provide the highest standards of direct care and support to our tenants in all aspects of their daily living, as part of a multi- disciplinary
								</div>
								<div class="rlist_loc">Treehaven, West Runton</div>
							</li>
							<li>
								<div class="link"><a href="#"></a></div>
								<div class="rlist_image"><img src="images/sampleimage_10.jpg"></div>
								<div class="rlist_pos">
									<div class="rlist_title">SUPPORT WORKER</div>
									<div class="rlist_time">Full Time</div>
									<div class="rlist_enddate">End Date : November 20, 2015</div>
								</div>
								<div class="rlist_role">
									To provide the highest standards of direct care and support to our tenants in all aspects of their daily living, as part of a multi- disciplinary
								</div>
								<div class="rlist_loc">Treehaven, West Runton</div>
							</li>
							<li>
								<div class="link"><a href="#"></a></div>
								<div class="rlist_image"><img src="images/sampleimage_10.jpg"></div>
								<div class="rlist_pos">
									<div class="rlist_title">SUPPORT WORKER</div>
									<div class="rlist_time">Full Time</div>
									<div class="rlist_enddate">End Date : November 20, 2015</div>
								</div>
								<div class="rlist_role">
									To provide the highest standards of direct care and support to our tenants in all aspects of their daily living, as part of a multi- disciplinary
								</div>
								<div class="rlist_loc">Treehaven, West Runton</div>
							</li>
							<li>
								<div class="link"><a href="#"></a></div>
								<div class="rlist_image"><img src="images/sampleimage_10.jpg"></div>
								<div class="rlist_pos">
									<div class="rlist_title">SUPPORT WORKER</div>
									<div class="rlist_time">Full Time</div>
									<div class="rlist_enddate">End Date : November 20, 2015</div>
								</div>
								<div class="rlist_role">
									To provide the highest standards of direct care and support to our tenants in all aspects of their daily living, as part of a multi- disciplinary
								</div>
								<div class="rlist_loc">Treehaven, West Runton</div>
							</li>
							<li>
								<div class="link"><a href="#"></a></div>
								<div class="rlist_image"><img src="images/sampleimage_10.jpg"></div>
								<div class="rlist_pos">
									<div class="rlist_title">SUPPORT WORKER</div>
									<div class="rlist_time">Full Time</div>
									<div class="rlist_enddate">End Date : November 20, 2015</div>
								</div>
								<div class="rlist_role">
									To provide the highest standards of direct care and support to our tenants in all aspects of their daily living, as part of a multi- disciplinary
								</div>
								<div class="rlist_loc">Treehaven, West Runton</div>
							</li>
						</ul>
					</div><!--rjo_list-->
					
				</div><!--rjo_container-->
				
					<a href="#" class="rjo_bannerlink">
						<div class="ttle">View All</div>
					</a>

			</div><!--inner-->
		</div><!--recent_job_opening-->
		
		<div id="about_jessal">
			<div  class="inner">
				<h3 id="aboutj">ABOUT US</h3>
			
				<div class="left" >
					<img src = "images/circleofcare_03.jpg" width="439px"/>
				</div>
				<div class="right">
				
				Jeesal Residential Care Services Limited was established over 30 years ago by Jeeva and Sally Subramaniam who have dedicated their lives to providing person centred care for people with a learning disability. Their experience of working in and with the NHS and Social Services informed their philosophy of empowerment, equality and autonomy, which is the ethos behind their vision to provide support for people with a learning disability in a homely environment. These core values are the foundation on which the Jeesal Group has grown to make a difference in this industry.
				
					<a href="#" class="rjo_bannerlink">
						<div class="ttle">View All</div>
					</a>
				
				</div>

			</div><!--inner-->
		</div><!--about_jessal-->
		
		<div id="newsandevents">
			<div  class="inner">
				<h3 >news and events</h3>
			
				 <div class="carousel-nav clearfix">
					<img src="images/rightarrown_13.png" id="prv-testimonial" alt="PREV">
					<img src="images/leftarrown_13.png" id="nxt-testimonial" alt="NEXT">
				</div>
				<div id="carousel-wrap">
				  <ul id="testimonial-list" class="clearfix">
					
					<li style="margin-left: 0px;">
					  <p class="context">Some testimonial goes right here[1]</p>
					  <span class="creds">Donec sit amet felis orci. Fuscet mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auct consectetur, nulla est.</span>
					</li><li>
					  <p class="context">"We could not be more pleased. A++ efforts!"</p>
					  <span class="creds">Donec sit amet felis orci. Fuscet mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auct consectetur, nulla est.</span>
					</li>
					<li>
					  <p class="context">"After just one purchase, we know this is the company to stick with."</p>
					  <span class="creds">Donec sit amet felis orci. Fuscet mollis lectus. Duis in mattis nibh. Mauris tempus, massa non auct consectetur, nulla est.</span>
					</li>
				  </ul>
				</div>

			</div><!--inner-->
		</div><!--newsandevents-->
		
		
		<div id="banner_wwj">
			<div  class="inner">
				<h3>WORKING WITH US</h3>
				<p>Careers in the following roles:<br/>
				Whatever your areas of interest and skills we can offer you a varied and interesting career path with opportunities to develop and advance your career.</p>
				
				<div class="left">
					<ul>
						<li>Competitive rates of pay</li>
						<li>A range of contractural options to suit</li>
						<li>A personal pension plan contributed to by us</li>
						<li>Excellent training which includes mandatory and statutory training</li>
						<li>10 Day Induction Training</li>
						<li>E-Learning Platform</li>
						<li>Continuing Professional Development (CPD)</li>
						<li>Role specific Induction Training</li>
					<ul>
				</div>
				
				<div class="right">
					<ul>
						<li>All training courses are Certificated</li>
						<li>Good basic holiday entitlement and flexible working where appropriate</li>
						<li>Preceptorship and Mentorship</li>
						<li>Offering a range of placements and work opportunities across all sites</li>
						<li>On site Restaurant, Gym and Staff Room</li>
						<li>First Assist an Employee Assistance Programme</li>
					<ul>
				</div>
				
			</div><!--inner-->	
		</div><!--banner_wwj-->
		
		<div id="recruitment">
			<div  class="inner">
				<h3>RECRUITMENT PROCEDURE</h3>
				
				<div class="ri"><img src ="images/recruitmentimg1_03.jpg">
					Fill up the form or register 
				</div>
				<div class="ria"><img src ="images/arrow-ri_03.jpg"></div>
				<div class="ri"><img src ="images/recruitment_img2_03.jpg">
					Our Staffing Department will start screening potential applicants
				</div>
				<div class="ria"><img src ="images/arrow-ri_03.jpg"></div>
				<div class="ri"><img src ="images/recruitment_img3_03.jpg">
					We will notify those candidate that are hired
				</div>
				
			</div><!--inner-->
		</div><!--recruitment-->
		
		
		<div id="footer">
			<div  class="inner">
				<div class="footerlogo"></div>
				<div id="footermenu">
					<ul>
								<li ><a href="#">About Us</a></li>
								<li ><a href="#">Working for Us</a></li>
								<li ><a href="#">Recruitment Procedure</a></li>
								<li ><a href="#">Current Vacancies</a></li>
							</ul>
				</div>
				
			</div><!--inner-->
		</div><!--footer-->
		</div><!--maincontent-->
		
		
		

	
	</body>

</html>
