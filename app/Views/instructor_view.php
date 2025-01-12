<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edulink Bootstrap Responsive Web Template </title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap Icons css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Swiper slider css -->
    <link rel="stylesheet" href="assets/plugins/Swiper-slider/swiper-bundle.min.css">
    <!-- Glightbox popup css -->
    <link rel="stylesheet" href="assets/plugins/glightbox/glightbox.css">
    <!-- Animate css for animation -->
    <link rel="stylesheet" href="assets/plugins/animate-css/animate.css">
    <!-- aos css (Animation on scroll ) -->
    <link rel="stylesheet" href="assets/plugins/aos/aos.css">
    <!-- Fontawesome Icons css -->
    <link rel="stylesheet" href="assets/plugins/icons/css/fontawesome.css">
    <link rel="stylesheet" href="assets/plugins/icons/css/brands.css">
    <link rel="stylesheet" href="assets/plugins/icons/css/solid.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>
    <!-- preloader -->
    <div id="preloader"></div>
    <!-- Progress circle scroll to top -->
    <div id="progress">
        <div id="progress-value">
            <i class="bi bi-arrow-up-short"></i>
        </div>
    </div>

    <!-- Black Transparent Screen -->
    <span class="screen-darken"></span>
    <!-- End -->


    <!-- Header section -->
    <header class="header" id="header">
        <div class="container">
            <!-- Navigation Wrapper -->
            <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light">
                <!-- Desktop Logo -->
                <a href="index.html" class="logo innerlogo navbar-brand">
                    <img style="max-height: 120px;" src="assets/img/CIVILEARN.png" alt="image">

                </a>
                <!-- End -->
                <!-- Mobile menu bar button -->
                <button class="navbar-toggler order-2 order-md-3" type="button" data-bs-toggle="collapse"
                    data-trigger="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- End -->

                <div class="mobile-offcanvas collapse navbar-collapse order-3 order-md-1" id="navbar_main">
                    <!-- Mobile slider menu from left -->
                    <div class="offcanvas-header1 ps-0 pt-0 mb-4">
                        <!-- Mobile logo -->
                        <a href="index.html" class="logo navbar-brand py-0">
                            <img style="max-height: 120px;" src="assets/img/CIVILEARN.png" alt="image">
                        </a>
                        <!-- End -->
                        <!-- Mobile menu close button -->
                        <button class="btn-close float-end"></button>
                    </div>
                    <!-- End -->
                    <!-- Main menu for Desktop and Mobile -->
                    <!-- Main menu for Desktop and Mobile -->
                    <ul class="navbar-nav mx-auto order-2">
                        <li class="nav-item">
                            <a href="<?php echo base_url('') ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="<?php echo base_url('') ?>courses" class="nav-link">Courses</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="<?php echo base_url('') ?>instructors" class="nav-link">Instructor</a>
                        </li>
                    </ul>

                    <!-- Main menu for Desktop and Mobile End -->
                    <!-- Mobile menu Footer -->
                    <div class="offcanvas-menu-footer d-lg-none">
                        <div>
                            +6281357181360<br>
                            <a href="#">civilearn@gmail.com</a>
                            <nav class="social__links-type2 d-flex justify-content-start mt-2">
                                <a href="#"><i class="bi bi-twitter twitter-color"></i></a>
                                <a href="#"><i class="bi bi-facebook facebook-color"></i></a>
                                <a href="#"><i class="bi bi-instagram instagram-color"></i></a>
                            </nav>
                        </div>

                    </div>
                    <!-- End -->
                </div>
                <!-- End -->
                <!-- Top Right section for Search -->
                <div class="navbar-second order-1 order-md-2 ms-auto me-2 d-none d-lg-block">
                    <ul class="navbar-nav flex-row ecom-group">
                        <!-- Search toggle from top -->
                        <!-- End -->
                        <!-- Button Top Right -->
                        <li>
                            <a href="#" class="btn btn-primary btn-size">Login/Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End -->
        </div>
    </header>
    <!-- End -->

    <!-- main section -->
    <main>
        <!-- Our Instructors -->
        <section class="section ">
            <div class="container">
                <div class="row section-heading-txt justify-content-center" data-aos="fade-up" data-aos-once="ture">
                    <!-- Heading -->
                    <div class="col-lg-6 section__heading-wrap">
                        <h4 class="subheading-style-01">Instructors</h4>
                        <h2 class="heading-text"> Our Instructors </h2>

                    </div>
                </div>
                <div class="row g-4">
                    <?php foreach ($items2 as $item2): ?>
                        <div class="col-md-4 team-group" data-aos="fade-up" data-aos-once="ture" data-aos-duration="500"
                            data-aos-delay="20">
                            <div class="card team-member2">
                                <div class="team-img-wrap d-flex align-items-center justify-content-center">
                                    <img style="max-height: 500px;" src="assets/img/<?= $item2['profile_picture'] ?>" alt="" class="img-fluid">
                                    <nav class="social__links-type2 d-flex justify-content-center mt-4">
                                        <a href="<?= $item2['twitter_link'] ?>"><i class="bi bi-twitter twitter-color"></i></a>
                                        <a href="<?= $item2['fb_link'] ?>"><i class="bi bi-facebook facebook-color"></i></a>
                                        <a href="<?= $item2['ig_link'] ?>"><i class="bi bi-instagram instagram-color"></i></a>
                                    </nav>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class="card-title mb-0"><a href="instructors/<?= $item2['id'] ?>"> <?= $item2['name'] ?></a></h4>
                                    <span class="card-subtitle"><?= $item2['role'] ?></span>
                                    <p class="card-text mt-2"><?= $item2['about'] ?></p>

                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Our Instructors End -->
    </main>

    <!-- Footer section -->
    <footer class="footer pb-0">
        <div class="container p-4">
            <div class="row g-4">
                <!-- Col 1: Logo -->
                <div class="col text-center">
                    <a href="#" class="footer-logo">
                        <img style="max-height: 120px;" src="assets/img/CIVILEARN.png" alt="image">
                    </a>
                </div>
                <!-- Col 2: Address and Phone -->
                <div class="col text-center">
                    <address>
                        Learn First<br>
                        Ini Alamat<br>
                        <strong>Phone No.</strong> +6281357181360
                    </address>
                </div>
                <!-- Col 3: Social Media Links -->
                <div class="col text-center">
                    <div class="social-links">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center footer-border-top">
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- aos.js for animation on scroll -->
    <script src="assets/plugins/aos/aos.js"></script>
    <!-- Swiper slider js -->
    <script src="assets/plugins/Swiper-slider/swiper-bundle.min.js"></script>
    <!-- Glightbox js -->
    <script src="assets/plugins/glightbox/glightbox.min.js"></script>
    <!-- Script for Counter -->
    <script src="assets/plugins/counter/jquery.min.js"></script>
    <script src="assets/plugins/counter/waypoints.min.js"></script>
    <script src="assets/plugins/counter/jquery.counterup.min.js"></script>
    <!-- function.js -->
    <script src="assets/js/function.js"></script>

</body>

</html>