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
  
	
	
  <!-- php begins here -->
  <?php
  $username = $_POST['username'];
  $enail = $_POST['email'];

  $mysqli = new mysqli('localhost','root','','bookbig','3307');
    if($mysqli->connect_errno){
        echo $mysqli->connect_errno;
    }
    else{
        $q = "SELECT username,email FROM userinfo WHERE username = '$username'";
        if($result = $mysqli->query($q)){
            $result->data_seek(0);
            $row = $result->fetch_array();
            if(!isset($row)){
                echo "<br><div style='text-align:center'><h1>Wrong Username or Password</h1><br>
                <button onclick=window.location.href='http://localhost/BookBig/forget.php'>back</button></div><br><br>";
            }
            else{
              echo"'<section class='box'>
              <form action='http://localhost/BookBig/php/reset.php?username=$username' method='POST'>
                <div id='login' class='textcenter'>
                <h3 id='italic'>Reset Password</h3>
                <label>New password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type='password' name='new_password'> <br>
                <label>Confirm password:  </label>
                <input type='password' name='confirm_password'> <br><br>
                <button type='submit' name='submit' value='submit'>Done</button><br>
              </div>
              </form>";
            }
        }       
    }
    $mysqli->close();
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
