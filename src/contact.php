<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kontakt | Business 2000</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Michroma|Montserrat" rel="stylesheet"> 

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.min.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php"><img src="img/logo1.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-has-children"><a href="index.php#home">Home</a>
            <ul>
              <li><a href="index.php#about">About Business 2000</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="fn.php">Futurenet</a>
            <ul>
              <li><a href="fn.php#wifn">Wer ist Futurenet</a></li>
              <li><a href="fn.php#ulfn">Upgrade Level Futurenet</a></li>
              <li><a href="fn.php#vgfn">Vergleich Futurenet</a></li>
              <li><a href="fn.php#spfn">Sport Futurenet</a></li>
              <li><a href="fn.php#infn">Hilfe Futurenet</a></li>
            </ul>
          </li>
          <li><a href="partners.php">Partner</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Home Section
  ============================-->
  <section id="home">
    <div class="home-container">
      <h1>Business 2000</h1>
      <h2>Your Network</h2>
      <h3>Kontakt</h3>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-12 content order-lg-1 order-2">
            <?php if(isset($_GET['send'])){
                ?><div class="alert alert-success" role="alert">
                <h3 class="text-center">Die Nachricht wurde erfolgreich versendet. Wir werden uns so schnell wie m&ouml;glich melden.</h3>
              </div><?php
            } ?>
            <form action="contact-send.php" method="post">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required id="">
                <input type="text" name="subject" class="form-control" placeholder="Your Subject" required id="">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required id="">
                <textarea name="message" class="form-control" placeholder="Your Message" required id="" cols="30" rows="10"></textarea>
                <div class="g-recaptcha" data-sitekey="6Ld5ZmgUAAAAAKfekXLTguexIQJMCsQE98suHPSS"></div>
                <button type="submit" class="btn btn-success">Senden</button>
                
            </form>
          </div>

          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Infos</h3>
          </div>
          <div class="col-md-4">
            <h3>Partner</h3>
          </div>
          <div class="col-md-4">
            <h3>Rechtliches</h3>
            <a href="impressum.php">Impressum</a><br>
            <a href="datenschutz.php">Datenschutz</a><br>
            <a href="contact.php">Kontakt</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright by <strong>Business 2000</strong> | Created by <strong>FQ-Programming</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="assets/js/global.min.js"></script>

</body>
</html>
