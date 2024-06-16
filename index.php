
<!DOCTYPE HTML>
<html>
<head>
<title>KSU Medical Annex</title>
<link rel="icon" type="image/x-icon" href="kisiilogo.png">
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/mycss.css">
<link rel="stylesheet" media="screen and (min-width: 426px) and (max-width: 768px)" href="css/tablet.css">
<link rel="stylesheet" media="screen and (max-width: 425px)" href="css/mobile.css">

</head>

<header>
    <section class="section-1">
        <div><i class="fas fa-paper-plane"></i> Kisii  University PO Box 408-40200, Kisii (Kenya)</div>
        <div class="block-1">
            <div><a href="mailto:medical@kisiiuniversity.ac.ke">medical@kisiiuniversity.ac.ke</a></div>
            <div class="social-btn">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>			
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="logo"><h1><i class="fab fa-artstation"></i> tudents & Staff Clinic</h1></div>
        <div class="phone-apointment">
            <div class="phone-number"><i class="fas fa-phone"></i>  120 580-5654</div>
            <div class="appointment"><button type="button"> + Make an Appointment</button></div>
        </div>
    </section>

    <nav>

        <div id="toggle-btn">
            <label for="toggle">
                <i class="fas fa-bars"></i>
            </label>   
        </div>

        <input type="checkbox" id="toggle">
        <ul>
					
            <li><a href="index.php"><i class="fas fa-home"></i> HOME</a></li>
            <li><a href="services.php"><i class="fas fa-medkit"></i> SERVICES</a></li>
            <li><a href="hms/doctor"><i class="fas fa-user-md"></i> OUR DOCTORS</a></li>
            <li><a href="hms/pharmacy"><i class="fas fa-user-md"></i> PHARMACY</a></li>
            <li><a href="contact.php"><i class="fas fa-address-book"></i> CONTACT US</a></li>
            <li><a href="hms/user-login.php"><i class="fas fa-user"></i> Students||Staff Portal</a></li>
			<li><a href="hms/admin"><i class="fas fa-user"></i> Admin</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i> ABOUT US</a></li>
        </ul>
    </nav>

</header>
			<!--end-header-->
		</div>
		<div class="clear"> </div>
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/slider-image1.jpg" alt=""></li>
					      <li><img src="images/slider-image2.jpg" alt=""></li>
					      <li><img src="images/slider-image1.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">


				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Patients</h3>
						  <p>Register & Book Appointment</p>
						  <div class="button"><span><a href="hms/user-login.php">Click Here</a></span></div>
				    </div>
				</div>

				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Doctors Login</h3>

						  <div class="button"><span><a href="hms/doctor/">Click Here</a></span></div>
					</div>
				</div>


					<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Admin Login</h3>

						  <div class="button"><span><a href="hms/admin">Click Here</a></span></div>
				     </div>
				</div>
			</div>
		    </div>
		   </div>
		   <div class="wrap">
		   <div class="content-box">
		   <div class="section group">
				<div class="col_1_of_3 span_1_of_3 frist">

				</div>
				<div class="col_1_of_3 span_1_of_3 second">

				</div>
				<div class="col_1_of_3 span_1_of_3 frist">


				</div>
			</div>
		   </div>
		   </div>
		   
		   </div>
		<!--end-wrap-->
		<?php include "footer.php"; ?>
	</body>
</html>
