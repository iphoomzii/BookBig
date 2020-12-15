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
  <section class="box">
	<div class="textcenter">
	<?php 
	$uid = $_GET['uid'];
  $mysqli = new mysqli('localhost','root','','bookbig','3307');
    if($mysqli->connect_errno){
        echo $mysqli->connect_errno;
    }
    else{
        $q = "SELECT fname,lname FROM userinfo WHERE UserID = $uid";
        if($result = $mysqli->query($q)){
            $result->data_seek(0);
            $row = $result->fetch_array();
            if(!isset($row)){
                echo 'wrong username';
                echo $username;
                echo "<button onclick=window.location.href='http://localhost/BookBig/login.php'>back</button>";
            }
            else{
                $fname = $row['fname'];
                $lname = $row['lname'];
            }
        }       
    }
    $mysqli->close();

    echo "<h2 id='italic'> Welcome </h2><br>";
    echo "<h3> $fname $lname</h3>";
?>

	

	</div>
	
	
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
