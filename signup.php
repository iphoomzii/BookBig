<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BookBig</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">bookbig@email.com</a>
        <i class="fa fa-phone"></i> 090-XXX-XXXX
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Book<span>Big</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="homepage.html">Home</a></li>
		  <li><a href="rental.php">Rental</a></li>
		  <li><a href="sell.php">Sell</a></li>
		  <li><a href="exchange.php">Exchange</a></li>
		  <!--<<li class="menu-has-children"><a href="">Categories</a>
            <ul>
              <li><a href="#">Fiction</a></li>
              <li><a href="#">Study Guides</a></li>
              <li><a href="#">Comics</a></li>
              <li><a href="#">Cuisine</a></li>
            </ul>
          </li>-->
		  <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section class="longbox">
	<form action="php/register.php" method="POST">
    <div  class="textcenter">
		<h3>Personal Information</h3>

		<label>Firstname:</label>
		<input type='text' name='fname'></input><br>

		<label>Lastname:</label>
		<input type='text' name='lname'></input><br>
		
		<label>Gender:</label>
		<input type='radio' name='gender' value='male'>Male</input>
		<input type='radio' name='gender' value='female'>Female</input><br>

		<label>E-mail:</label>
		<input type='text' name='email'></input><br>

		<label>Tel:</label>
		<input type='text' name='tel'></input><br>

		<label for="birthday">Birthday:</label>
		<input type="date" id="birthday" name="birthday"><br>

		<label>Address:</label>
		<input type='text' name='address'></input><br>

		<label>Sub-district:</label>
		<input type='text' name='subdistrict'></input><br>

		<label>District:</label>
		<input type='text' name='district'></input><br>

		<label>Province:</label>
    <input type='text' name='province'></input><br>
    
    <label>Country:</label>
		<input type='text' name='country'></input><br>

		<label>Postcode:</label>
		<input type='text' name='postcode'></input><br>
		
		<label>Username:</label>
		<input type='text' name='username'></input><br>
		
		<label>Password:</label>
		<input type='password' name='password'></input><br>
		
		<label>Confirm password:</label>
		<input type='password' name='confirmpassword'></input><br>
		
		<button type="submit" name='submit' value="submit">Submit</button>
		
	</div>
	</form>
	
	
	<!-- php begins here -->
	<?php
	?>
  </section>


 


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->


</body>
</html>
