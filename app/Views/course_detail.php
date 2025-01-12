<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php

                use function PHPUnit\Framework\isNull;

                echo base_url('') ?>">
    <title>Transport Bootstrap Responsive Web Template </title>
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
                    <ul class="navbar-nav mx-auto order-2">
                        <li class="nav-item">
                            <a href="<?php echo base_url('') ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="<?php echo base_url('') ?>/courses" class="nav-link">Courses</a>
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
        <!-- Body Section -->
        <section class="section">
            <div class="container">
                <div class="row gx-md-5 gy-4">
                    <!-- Col -->
                    <div class="col-lg-8">
                        <!-- Tab Buttons -->
                        <ul class="nav nav-tabs nav-fill flex-column flex-md-row" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview"
                                    type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum"
                                    type="button" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor"
                                    type="button" role="tab" aria-controls="instructor" aria-selected="false">Instructor</button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Overview Tab Content -->
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <p class="mb-md-0">
                                    <?= $items['description_long'] ?>
                                </p>
                                <br>
                                <h3>Apa yang kamu pelajari ?</h3>
                                <ul class="list-style-2 mt-4">
                                    <?php
                                    for ($i = 1; $i <= 6; $i++) {
                                        if (!isset($items["description_point$i"]) || is_null($items["description_point$i"])) {
                                            break; // Exit the loop if the item is null or not set
                                        } else {
                                            echo '<li><i class="bi bi-check-lg bg-icon"></i>' . htmlspecialchars($items["description_point$i"]) . '</li>';
                                        }
                                    }
                                    ?>
                                </ul>

                            </div>
                            <!-- Overview Tab Content End -->
                            <!-- Curriculum Tab Content -->
                            <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header course-description" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button course-description-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne">
                                                Jump Straight To Whatever You You Need To Know
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <ul class="course_list">
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="https://www.youtube.com/watch?v=_I9czy3cMBg&t=100s" class="glightbox4">Introduction</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="https://www.youtube.com/watch?v=_I9czy3cMBg&t=100s" class="glightbox4"><span class="badge badge-bg-color font-weight-normal">Preview</span></a>
                                                                <span>04:07</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">Lorem Ipsum is simply dummy text</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="#"><span class="badge badge-bg-color font-weight-normal">Preview</span></a>
                                                                <span>01:37</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                It is a long established fact that a reader
                                                            </div>
                                                            <div class="d-flex">
                                                                <span><a href="#"><i class="bi bi-lock-fill"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">Lorem Ipsum is simply dummy text</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="#"><span class="badge badge-bg-color font-weight-normal">Preview</span></a>
                                                                <span>03:43</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">It is a long established fact that a reader</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span><a href="#"><i class="bi bi-lock-fill"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header course-description" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button course-description-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseTwo">
                                                Desserts / Sweet Treats
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <ul class="course_list">
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">Introduction</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="#"><span class="badge badge-bg-color font-weight-normal">Preview</span></a>
                                                                <span>04:07</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">Lorem Ipsum is simply dummy text</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="#"><span class="badge badge-bg-color font-weight-normal">Preview</span></a>
                                                                <span>01:37</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                It is a long established fact that a reader
                                                            </div>
                                                            <div class="d-flex">
                                                                <span><a href="#"><i class="bi bi-lock-fill"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">Lorem Ipsum is simply dummy text</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="#"><span class="badge badge-bg-color font-weight-normal">Preview</span></a>
                                                                <span>03:43</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">It is a long established fact that a reader</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span><a href="#"><i class="bi bi-lock-fill"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header course-description" id="panelsStayOpen-headingThree">
                                            <button class="accordion-button course-description-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseThree">
                                                Bonus / Extra Lessons 2 Topics
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingThree">
                                            <div class="accordion-body">
                                                <ul class="course_list">
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">Introduction</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="#"><span class="badge badge-bg-color font-weight-normal">Preview</span></a>
                                                                <span>04:07</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">Lorem Ipsum is simply dummy text</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="#"><span class="badge badge-bg-color font-weight-normal">Preview</span></a>
                                                                <span>01:37</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                It is a long established fact that a reader
                                                            </div>
                                                            <div class="d-flex">
                                                                <span><a href="#"><i class="bi bi-lock-fill"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">Lorem Ipsum is simply dummy text</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <a href="#"><span class="badge badge-bg-color font-weight-normal">Preview</span></a>
                                                                <span>03:43</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center course_content-box">
                                                            <div class="d-flex justify-content-center align-items-center course_item">
                                                                <i class="bi bi-play-circle-fill me-3"></i>
                                                                <a href="#">It is a long established fact that a reader</a>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span><a href="#"><i class="bi bi-lock-fill"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Curriculum Tab Content End -->
                            <!-- Instructor Tab Content -->
                            <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                <div class="instructor-wrap d-md-flex">
                                    <div class="tutor-section me-md-4">
                                        <div class="tutor-img lg-size-2x mb-4">
                                            <img src="assets/img/01.jpg" alt="">
                                        </div>
                                        <div class="instructor-social-links">
                                            <a href="#"><i class="bi bi-twitter"></i></a>
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                            <a href="#"><i class="bi bi-youtube"></i></a>
                                        </div>
                                    </div>
                                    <div class="instructor-descriptions">
                                        <h5 class="instructor-name">
                                            <a href="instructor-details.html"> Tim Cook </a>
                                        </h5>
                                        <span>Instructor</span>
                                        <p class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                            type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                                            also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Instructor Tab Content End -->
                        </div>
                        <!-- Tab Content End -->

                    </div>
                    <!-- Col End -->
                    <!-- Col -->
                    <div class="col-lg-4 pb-4 pb-md-0">
                        <!-- Sidebar Wrapper -->
                        <div class="detail-sidebar">
                            <!-- Product Image with Play Button -->
                            <div class="overflow-hidden img-box bg-overlay">
                                <img src="assets/img/course-img-01.jpg" alt="">
                                <a href="https://www.youtube.com/watch?v=_I9czy3cMBg&t=100s" class="glightbox4">
                                    <div class="play-icon">
                                        <i class="bi bi-play-fill"></i>
                                    </div>
                                </a>
                            </div>
                            <!-- Product Image with Play Button End -->
                            <!-- Product Info List -->
                            <div class="p-3 p-md-4">
                                <div class="sidebar-info-box">
                                    <ul>
                                        <li><span class="course-price">$45.00</span> </li>
                                        <li class="my-3">
                                            <a href="#" class="btn btn-primary w-100 py-2">Add to Cart</a>
                                        </li>
                                        <li>
                                            <span><i class="bi bi-journal-medical me-2"></i> Lesson: </span>
                                            <span><?= $items['lessons_count'] ?> Lessons</span>
                                        </li>
                                        <li>
                                            <span><i class="bi bi-cart me-2"></i> Enrolled: </span>
                                            <span><?= $items['students_count'] ?> Students</span>
                                        </li>
                                        <li>
                                            <span><i class="bi bi-person-fill me-2"></i> Instructor: </span>
                                            <span><?= $items['instructor'] ?></span>
                                        </li>
                                        <li>
                                            <span><i class="bi bi-bar-chart-line-fill me-2"></i> Level: </span>
                                            <span><?= $items['level'] ?></span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Share Button with Social Icons -->
                                <button class="btn btn-outline2 w-100" data-bs-toggle="tooltip" data-bs-trigger="click" data-bs-html="true" data-bs-custom-class="custom-popover" title=" <a href='#'><i class='bi bi-twitter'></i></a> <a href='#'><i class='bi bi-facebook'></i></a> <a href='#'><i class='bi bi-instagram'></i></a>"> <i class="bi bi-share-fill me-2"></i> Share This Course </button>
                                <!-- Share Button with Social Icons End -->
                            </div>
                            <!-- Product Info List End -->
                        </div>
                        <!-- Sidebar Wrapper End -->
                    </div>
                    <!-- Col End -->
                </div>
            </div>
        </section>
        <!-- body mid section -->
        <!-- Related courses -->




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
                        CiviLearn<br>
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