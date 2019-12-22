<?php
require_once 'nav.php'
?>
<head>
    
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
	<div class="home">
		<div class="background_image" style=" background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(196,21,62,1) 0%, rgba(241,92,72,1) 100%); "></div>
		<div class="overlay"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contact Mediakrafts</div>
							<!--<div class="home_subtitle">Pilates, Yoga, Fitness, Spinning & many more</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Content -->
				<div class="col-lg-4">
					<div class="contact_content">
						<div class="contact_logo">
							<div class="logo d-flex flex-row align-items-center justify-content-start"><img src="images/dot.png" alt=""></div>
						</div>
						<div class="contact_text">
							<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Odio vestibulum est mattis effic iturut.</p>
						</div>
						<div class="contact_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>A:</div></div>
									<div>1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>P:</div></div>
									<div>+53 345 7953 32453</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>M:</div></div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_title">Get in touch</div>
					<div class="contact_form_container">
						<form action="#" id="contact_form" class="contact_form">
							<div class="row">
								<div class="col-lg-6">
									<div class="input_item"><input type="text" class="contact_input trans_200" placeholder="Name" required="required"></div>
								</div>
								<div class="col-lg-6">
									<div class="input_item"><input type="email" class="contact_input trans_200" placeholder="E-mail" required="required"></div>
								</div>
							</div>
							<div class="input_item"><textarea class="contact_input contact_textarea trans_200" placeholder="Message" required="required"></textarea></div>
							<button class="contact_button button">Send<span></span></button>
						</form>
					</div>
				</div>

			</div>
		
		</div>
	</div>

<?php
include_once 'footer.php';
?>
<script>
    $('#contact').addClass('active');
</script>