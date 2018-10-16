<!-- This is  the home view located under views/home_view.php  -->
<?php
if ($this->session->flashdata('user_registered')):
	echo $this->session->flashdata('user_registered');
endif;
?>
<?php
if ($this->session->flashdata('registration_failed')):
	echo $this->session->flashdata('registration_failed');
endif;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/coin-slider.css');?>"/>

	<script type="text/javascript" src="assets/js/cufon-yui.js"></script>
	<script type="text/javascript" src="assets/js/cufon-georgia.js"></script>
	<script type="text/javascript" src="assets/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/coin-slider.min.js"></script>
</head>
<body>

	<div class="main">
		<div class="header">
			<div class="header_resize">
				<div class="menu_nav">
					<ul>
						<li class="active"><a href="index.html"><span>Home</span></a></li>
						<li><a href="support.html"><span>About Us</span></a></li>
						<li><a href="<?php echo base_url ('/Course_selection');?>"><span>Courses</span></a></li>
						<li><a href="<?php echo base_url ('/Register');?>"><span>Register</span></a></li>
						<li><a href="contact.html"><span>Contact Us</span></a></li>
					</ul>
				</div>
				<div class="logo">
					<h1><a href="index.html">Learning<span>Portal</span></a></h1>
				</div>
				<div class="clr"></div>
				<div class="slider">
					<div id="coin-slider"> <a href="#"><img src="assets/images/slide1.jpg" width="960" height="360" alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> <a href="#"><img src="assets/images/slide2.jpg" width="960" height="360" alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> <a href="#"><img src="assets/images/slide3.jpg" width="960" height="360" alt="" /><span> Tusce nec iaculis risus hasellus nec sem sed tellus malesuada porttitor. Mauris scelerisque feugiat ante in vulputate. Nam sit amet ullamcorper tortor. Phasellus posuere facilisis cursus. Nunc est lorem, dictum at scelerisque sit amet, faucibus et est. Proin mattis ipsum quis arcu aliquam molestie.</span></a> </div>
					<div class="clr"></div>
				</div>
				<div class="clr"></div>
			</div>
		</div>
		<div class="content">
			<div class="content_resize">
				<div class="mainbar">
					<div class="article">
						<h2><span> Let's Start the Next Level</span> in BCS</h2>
						<a class="btn btn-lg btn-primary" href="<?php echo base_url ('/Register');?>">Enroll Now!!</a>		

						<!-- <button type="button" class="btn btn-primary">Primary</button> -->

						<div class="clr"></div>
						<div class="img"><img src="assets/images/img1.jpg" width="178" height="185" alt="" class="fl" /></div>
						<div class="post_content">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. <a href="#">Suspendisse bibendum. Cras id urna.</a> Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
							<p><strong>Aenean consequat porttitor adipiscing. Nam pellentesque justo ut tortor congue lobortis. Donec venenatis sagittis fringilla.</strong> nulla. Mauris posuere venenatis pretium. Maecenas a dui sed lorem aliquam dictum. Nunc urna leo, </p>
							<!--<p class="spec"><a href="#" class="rm">Read more</a> <a href="#" class="com">Comments <span>11</span></a></p>-->
						</div>
						<div class="clr"></div>
					</div>
					
				</div>

				<div class="sidebar">
					<div class="searchform">
						<form id="formsearch" name="formsearch" method="post" action="#">
							<span>
								<input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
							</span>
							<input name="button_search" src="assets/images/search.gif" class="button_search" type="image" />
						</form>
					</div>
					<div class="clr"></div>
					<div class="gadget">
						<h2 class="star"><span>Explore</span></h2>
						<div class="clr"></div>
						<ul class="sb_menu">
							<li><a href="#">Home</a></li>
							<li><a href="#">Tutors</a></li>
							<li><a href="#">Become Tutor</a></li>
							<li><a href="#">Courses</a></li>
							<li><a href="<?php echo base_url ('/Register');?>">Sign Up</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
					

				</div>

				<div class="clr"></div>
			</div>
		</div>
		<div class="fbg">
			<div class="fbg_resize">
				<div class="col c1">
					<h2><span>Image</span> Gallery</h2>
					<a href="#"><img src="assets/images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="assets/images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="assets/images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="assets/images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="assets/images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
					<div class="col c2">
						<h2><span>Services</span> Overview</h2>
						<p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
						<ul class="fbg_ul">
							<li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
							<li><a href="#">Excepteur officia deserunt.</a></li>
							<li><a href="#">Integer tellus ipsum tempor sed.</a></li>
						</ul>
					</div>
					<div class="col c3">
						<h2><span>Contact</span> Us</h2>
						<p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
						<p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
							<span>Telephone:</span> +123-1234-5678<br />
							<span>FAX:</span> +458-4578<br />
							<span>Others:</span> +301 - 0125 - 01258<br />
							<span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
						</div>
						<div class="clr"></div>
					</div>
				</div>
				<div class="footer">
					<div class="footer_resize">
						<p class="lf">Copyright &copy; <a href="#">Spartons</a>. All Rights Reserved</p>
						<p class="rf">Design by <a target="_blank" href="http://www.dreamtemplate.com/">Spartons</a></p>
						<div style="clear:both;"></div>
					</div>
				</div>
			</div>

		</body>
		</html>


