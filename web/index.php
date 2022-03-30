<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Folio - Personal Portfolio Template</title>
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/hover/hover.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive css -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">

  <!-- =======================================================
    Theme Name: Folio
    Theme URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <!-- start section navbar -->
  <nav id="main-nav">
    <div class="row">
      <div class="container">

        <div class="logo">
          <a href="index.html"><img src="images/logo.png" alt="logo"></a>
        </div>

        <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>

        <ul class="nav-menu list-unstyled">
          <li><a href="#header" class="smoothScroll">Home</a></li>
          <li><a href="#contact" class="smoothScroll">Contact</a></li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- End section navbar -->


  <!-- start section header -->
  <div id="header" class="home">

    <div class="container">
      <div class="header-content">
        <h1>I'm udayakumar </h1>
        <p>photographer</p>

        <ul class="list-unstyled list-social">
          <li><a href="https://www.facebook.com/profile.php?id=100014120706386"><i class="ion-social-facebook"></i></a></li>
          <li><a href="https://instagram.com/born_to_make_mistake?utm_medium=copy_link"><i class="ion-social-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/in/udaya-kumar-77588922a"><i class="ion-social-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End section header -->


  <!-- start section about us -->
  <div id="about" class="paddsection">
    <div class="container">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="div-img-bg">
            <div class="about-img">
              <img src="images/me.jpg" class="img-responsive" alt="me">
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="about-descr">

            <p class="p-heading">im a student, now i create a websites for bussiness.  </p>
            <p class="separator">The knowledge level i know to create a websites and develope the websites.</p>

          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- end section about us -->

  


  <!-- start section journal -->
  <div id="journal" class="text-left paddsection">

    <div class="container">
      <div class="section-title text-center">
        <h2>knowledge and skills</h2>
      </div>
    </div>

    <div class="container">
      <div class="journal-block">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="blog-single.html"><img src="images/blog-post-1.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="blog-single.html">SCHOOL</a></h4>
                <p class="separator">Schooling in namakkal.
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="blog-single.html"><img src="images/blog-post-2.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="#blog-single.html">HIGHER EDUCATION</a></h4>
                <p class="separator">UG - in karpagam academy of higher education.
                </p>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="journal-info">

              <a href="blog-single.html"><img src="images/blog-post-3.jpg" class="img-responsive" alt="img"></a>

              <div class="journal-txt">

                <h4><a href="blog-single.html">SKILLS IN CODING</a></h4>
                <p class="separator">JAVA</p>
                <p class="separator">HTML</p>
                <p class="separator">PYTHON</p>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
  <!-- End section journal -->


  <!-- start sectoion contact -->
  <div id="contact" class="paddsection">
    <div class="container">
      <div class="contact-block1">
        <div class="row">

          <div class="col-lg-6">
            <div class="contact-contact">

              <h2 class="mb-30">GET IN TOUCH</h2>

              <ul class="contact-details">
                <li><span>5/17-1 SANARPALAYAM</span></li>
                <li><span>MANICKAMPALAYAM,NAMAKKAL</span></li>
                <li><span>+91 9360028616</span></li>
                <li><span>uudayakumarki@gamil.com</span></li>
              </ul>

            </div>
          </div>

          <div class="col-lg-6">
            <form name="frmContact" method="post" action="contact.php">
              <p>
              <label for="Name">Name </label>
              <input type="text" name="txtName" id="txtName">
              </p>
              <p>
              <label for="email">Email</label>
              <input type="text" name="txtEmail" id="txtEmail">
              </p>
              <p>
              <label for="phone">Phone</label>
              <input type="text" name="txtPhone" id="txtPhone">
              </p>
              <p>
              <label for="message">Message</label>
              <textarea name="txtMessage" id="txtMessage"></textarea>
              </p>
              <p>&nbsp;</p>
              <p>
              <input type="submit" name="Submit" id="Submit" value="Submit">
              </p>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- start sectoion contact -->


  <!-- start section footer -->
  <div id="footer" class="text-center">
    <div class="container">
      <div class="socials-media text-center">

        <ul class="list-unstyled">
          <li><a href="https://www.facebook.com/profile.php?id=100014120706386"><i class="ion-social-facebook"></i></a></li>
          <li><a href="https://instagram.com/born_to_make_mistake?utm_medium=copy_link"><i class="ion-social-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/in/udaya-kumar-77588922a"><i class="ion-social-linkedin"></i></a></li>
        </ul>

      </div>

      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
        -->
        
      </div>

    </div>
  </div>
  <!-- End section footer -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/typed/typed.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>
