<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $__env->yieldContent('judul'); ?> - Web Profile Team9</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/template/img/favicon.png" rel="icon">
  <link href="template/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="template/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="template/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="template/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="template/css/style.css" rel="stylesheet">

  <?php echo $__env->yieldContent('extracss'); ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo e(url('/')); ?>">Team9</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="<?php echo e(url('/about')); ?>" class="logo"><img src="template/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo e(url('/')); ?>">Home</a></li>
          <li class="dropdown"><a href="#"><span>Our Team</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo e(url('/Danendra')); ?>">Danendra Gavrilla</a></li>
              <li><a href="<?php echo e(url('/Fahrizal')); ?>">Fahrizal Mudzaqi Maulana</a></li>
              <li><a href="<?php echo e(url('/Faras')); ?>">Faras Rama Mahadika</a></li>
            </ul>
          </li>
          <?php if(Auth::check()): ?>
          <li><a class="nav-link scrollto" href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
          <li><a class="nav-link scrollto btn btn-danger" href="<?php echo e(url('/logout')); ?>">Logout</a></li>
          <?php else: ?>
          <li><a class="nav-link scrollto btn btn-success" href="<?php echo e(url('/login')); ?>">Login</a></li>
          <?php endif; ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(template/img/home-bg.jpg)">
  <div class="overlay-itro"></div>
  <div class="hero-content display-table">
    <div class="table-cell">
      <div class="container">
        <!--<p class="display-6 color-d">Hello, world!</p>-->
        <h1 class="hero-title mb-4" style="font-size: 50px;">Welcome to</h1>
        <h1 class="hero-title mb-4" style="font-size: 50px;">Website Personal</h1>
        <h1 class="hero-title mb-4" style="font-size: 50px;">Profile</h1>
        <p class="hero-subtitle" style="font-size: 20px;"><span class="typed" data-typed-items="Team 9, Danendra, Fahrizal, Faras" ></span></p>
        <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
      </div>
    </div>
  </div>
</div><!-- End Hero Section -->

<style>
  #hero .container {
    text-align: left;
  }
</style>

  <!-- End Hero Section -->

  <main id="main">

  <?php echo $__env->yieldContent('main'); ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="template/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="template/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="template/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="template/vendor/typed.js/typed.umd.js"></script>
  <script src="template/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="template/js/main.js"></script>

  <?php echo $__env->yieldContent('extrajs'); ?>

</body>

</html><?php /**PATH E:\Faras\Proyek 3\Team9\resources\views/layouts/tempHome.blade.php ENDPATH**/ ?>