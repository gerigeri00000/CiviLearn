<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edulink Bootstrap Responsive Web Template </title>
    <base href="<?php

                use function PHPUnit\Framework\isNull;

                echo base_url('') ?>">
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
        <!-- Full Width Banner End -->
        <!-- Our Instructors -->
        <section class="section ">
            <div class="container">
                <!-- Instructor detials -->
                <div class="row g-4 gx-md-5">
                    <!-- Col -->
                    <div class="col-lg-4 team-group">
                        <!-- Instructor Card -->
                        <div class=" card team-member hover-shdow py-3 border-1 rounded-3">
                            <div class="team-img-wrap d-flex align-items-center justify-content-center pt-3">
                                <img src="assets/img/<?= $instructor['profile_picture'] ?>" alt="" class="rounded-circle w-50">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title mb-0"><a href="instructor-details.html"><?= $instructor['name'] ?></a></h4>
                                <span class="card-subtitle"> <?= $instructor['role'] ?></span>
                                <div class="star-rating mb-3">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill" style="color: rgb(176, 176, 176);"></i>
                                </div>
                                <span><i class="bi bi-person-fill"></i> <?= $instructor['students_count'] ?> Students</span>
                                <p class="card-text mt-2 lh-lg fw-normal fs-6">Email: <a href=""><?= $instructor['email'] ?></a> <br> Phone: <?= $instructor['phone'] ?></p>
                                <nav class="social__links-type2 d-flex justify-content-center mt-2 mb-4">
                                    <a href="<?= $instructor['twitter_link'] ?>"><i class="bi bi-twitter twitter-color"></i></a>
                                    <a href="<?= $instructor['fb_link'] ?>"><i class="bi bi-facebook facebook-color"></i></a>
                                    <a href="<?= $instructor['ig_link'] ?>"><i class="bi bi-instagram instagram-color"></i></a>
                                </nav>

                            </div>
                        </div>
                        <!-- Instructor Card End -->
                    </div>
                    <!-- Col End -->
                    <!-- Col -->
                    <div class="col-lg-8">
                        <!-- Instructor Details -->
                        <section>
                            <div class="pb-4">
                                <h3>About Instructor</h3>
                                <p><?= $instructor['about'] ?></p>
                            </div>
                            <div class="skills pb-4">
                                <h3>Professional Skills</h3>
                                <div class="row g-4 pt-2">
                                    <?php foreach ($skills as $skill): ?>
                                        <div class="col-md-6">
                                            <p class="mb-1 fs-6"><?= $skill['skill_name'] ?></p>
                                            <div class="progress bar-wrapper">
                                                <div class="progress-bar bg-skills" role="progressbar" style="width: <?= $skill['proficiency'] ?>%" aria-valuenow="<?= $skill['proficiency'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                <span class="prog-percent"><?= $skill['proficiency'] ?>%</span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </section>
                        <!-- Our Achievements -->
                        <div class="section py-5 px-3 px-md-0">
                            <div class="container py-4 bg-color rounded_corner-4 bg-pos-full border">
                                <div class="row">
                                    <div class="counter-box col-md-4 text-center">
                                        <div class="counter-icon">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter">200</span>
                                            <p>Students Enrolled</p>
                                        </div>
                                    </div>
                                    <div class="counter-box col-md-4 text-center">
                                        <div class="counter-icon">
                                            <i class="bi bi-display-fill"></i>
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter">20</span>
                                            <p>Courses Available</p>
                                        </div>
                                    </div>
                                    <div class="counter-box col-md-4 text-center">
                                        <div class="counter-icon">
                                            <i class="bi bi-person-video2"></i>
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter">100</span>
                                            <p>Sucessfully Completed</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Col End -->
                </div>

                <!-- End -->

                <div class="row g-4">
                    <h3>Teacher Courses</h3>
                    <?php foreach ($courses as $item): ?>
                        <!-- Item Card -->
                        <div class="col-md-6 col-lg-4" data-aos="fade-right" data-aos-once="ture" data-aos-duration="500" data-aos-delay="20">
                            <div class="courses card rounded overflow-hidden">
                                <!-- Item Image -->
                                <div class="img-box">
                                    <a href="course/<?= $item['id'] ?>">
                                        <img src="assets/img/<?= $item['image_url'] ?>" alt="" class="img-fluid">
                                    </a>
                                    <span class="c-category">All Levels</span>
                                </div>
                                <!-- End -->
                                <div class="p-4 card-body">
                                    <!-- Item Body Content -->
                                    <div class="course_small-info d-flex justify-content-between">
                                        <span><i class="bi bi-journals"></i> <?= $item['lessons_count'] ?> Lessons</span>
                                        <span><i class="bi bi-clock"></i><?= $item['duration'] ?></span>
                                        <span><i class="bi bi-person-fill"></i> <?= $item['students_count'] ?></span>
                                    </div>
                                    <h3><a href="course-details.html"><?= $item['title'] ?> </a></h3>
                                    <div class="course_small-info">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <?= $item['rating'] ?> (<?= $item['reviews_count'] ?>)
                                    </div>

                                    <div class="tutor-section d-flex align-items-center pb-4 pt-2">
                                        <div class="tutor-img">
                                            <img src="assets/img/<?= $item['profile_picture'] ?>" alt="">
                                        </div>
                                        <h6><a href="instructor-details.html"><?= $item['name'] ?></a> </h6>
                                    </div>
                                    <!-- End -->
                                    <!-- Item Footer -->
                                    <div class="price__group">
                                        <?php if ($item['is_free'] == 1) { ?>
                                            <div class="price-box"><span>Free</span> </div>
                                        <?php } else { ?>
                                            <div class="price-box"><span>$ <?= $item['original_price'] ?></span> </div>
                                        <?php } ?>
                                        <a href="course-details.html" class="btn btn__read-more"> Know Details <i
                                                class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End -->
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