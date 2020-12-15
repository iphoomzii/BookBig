<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BookBig</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
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
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">bookbig@email.om</a>
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
        <ul class="nav-menu"><?php
        $uid=$_GET['uid'];
          echo "<li class='menu-active'><a href='http://localhost/BookBig/User/home.php?uid=$uid'>Home</a></li>
          <li><a href='http://localhost/BookBig/User/rental.php?uid=$uid'>Rental</a></li>
		  <li><a href='http://localhost/BookBig/User/buy-sell.php?uid=$uid'>Buy-Sell</a></li>
		  <li><a href='http://localhost/BookBig/User/exchange.php?uid=$uid'>Exchange</a></li>
		  <li><a href=''>Profile</a></li>
		  <li class='menu-has-children'><a href=''>Account</a>
          
            <ul>
              <li><a href=''>Edit Profile</a></li>
              <li><a href='http://localhost/BookBig/'>Log Out</a></li>
            </ul>
          </li>
          
            <ul>
              <li><a href=''>Edit Profile</a></li>
              <li><a href=http://localhost/BookBig/>Log Out</a></li>
            </ul>
          </li>";
          ?>
		  
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<!-- Content -->
<section id="services">
  <div class="container">

    <div class="greet textcenter" >
      <h2 style="font-weight:bolder">Are you here to ?</h2>
    </div>

    <div class="row">

      <div class="col-lg-6">
  
  <a href=<?php $uid=$_GET['uid']; echo "http://localhost/BookBig/User/lease.php?uid=".$uid?>>
        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-book"></i></div>
          <h4 class="title">Lease</h4>
        </div>
  </a>
  
  <a href=<?php $uid=$_GET['uid']; echo "http://localhost/BookBig/User/rent.php?uid=".$uid?>>
  <div class="box wow fadeInRight" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="title">Rent</h4>
        </div>
  </a>
      </div>
      

    </div>

  </div>
</section><!-- End Services Section -->
	
	
	
  
  
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
