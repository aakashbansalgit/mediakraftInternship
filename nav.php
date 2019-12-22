
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>MediaKrafts</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="MediaKrafts">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<style>
    <style>
.blog_post {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: orange;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.blog_post:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: #000;
  font-weight:bold;
  font-size: 22px;
  position: absolute;
  top: 50%;
  left: 50%;
  width:100%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
@import url('https://fonts.googleapis.com/css?family=Oswald&display=swap');
</style>

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<a href="./">
							<div class="logo d-flex flex-row align-items-center justify-content-start"><img src="images/dot.png" alt="" style="width:100px"></div>
						</a>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li id="home" ><a href="./">Home</a></li>
								<li id="about"><a href="about">About us</a></li>
								<li id="service"><a href="index#services">Services</a></li>
									<li><a href="#">Blogs</a></li>
								<li id="contact"><a href="contact">Contact</a></li>
							</ul>
						</nav>
						<div class="phone d-flex flex-row align-items-center justify-content-start ml-auto" style="background-color:#bcc0ff">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<div><a href="mailto:soham@mediakrafts.com" style="color:#222">soham@mediakrafts.com</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Hamburger -->
	
		<div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
		<div class="hamburger">
			<div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
				<span>menu</span>
				<div class="hamburger_container">
					<div class="menu_hamburger">
						<div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
						<div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
						<div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu -->

	<div class="menu trans_800">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<ul>
				<li id="home" ><a href="./">Home</a></li>
								<li id="about"><a href="about">About us</a></li>
								<li id="service"><a href="index#services">Services</a></li>
									<li><a href="#">Blogs</a></li>
								<li id="contact"><a href="contact">Contact</a></li>
			</ul>
		</div>
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<a href="mailto:soham@mediakrafts.com" style="color:#222">soham@mediakrafts.com</a>
		</div>
	</div>

	<!-- Home -->