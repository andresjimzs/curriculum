<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once("../php/mainHead.php")
  ?>
  <title>Andres Jimenez - Curriculum</title>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="../assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Andres F Jimenez S</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/andres.jimzs" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/andres_jimzs/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/andrésfelipe-jiménez-sánchez-4b3318199/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
          <a href="https://github.com/andresjimzs/curriculum.git" class="github" target="_blank"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#about" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>Solicitud de Contacto</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Correo de Notificación</span></a></li>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home Page</span></a></li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  
  <!-- ======= Footer ======= -->
  <?php 
      require_once("../php/mainFooter.php")
  ?>
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php
  require_once("../php/mainScript.php")
  ?>

</body>

</html>