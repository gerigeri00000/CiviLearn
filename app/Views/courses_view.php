<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="assets/plugins/pagination/simplePagination.css">
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
                            <a href="#">learnfirst@gmail.com</a>
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

        <!-- Services Section -->
        <section class="section">
            <div class="container">
                <div class="row gy-4">
                    <!-- Col -->
                    <div class="col-12 col-lg-4 col-xl-3 order-2 order-lg-1">
                        <!-- Sidebar widget Wrapper -->
                        <div class="widget-sidebar">
                            <!-- Select Category -->
                            <div class="widget-box widget-category mb-4">
                                <h3 class="widget-heading">Category</h3>
                                <form action="#">
                                    <div class="bullets">
                                        <ul class="ps-3" id="widget-cat-container">
                                            <li><a href="#">Web Design <span>(4)</span></a></li>
                                            <li><a href="#">Developer <span>(5)</span></a></li>
                                            <li><a href="#">Cooking <span>(5)</span></a></li>
                                            <li><a href="#">Videography <span>(5)</span></a></li>
                                            <li><a href="#">Chemistry <span>(5)</span></a></li>
                                            <li><a href="#">Finance <span>(5)</span></a></li>
                                            <li><a href="#">Animation <span>(5)</span></a></li>
                                            <li><a href="#">Mathematics <span>(5)</span></a></li>
                                            <li><a href="#">Business <span>(5)</span></a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <!-- Select Category End -->
                            <!-- Select Instructor -->
                            <div class="widget-box widget-category mb-4">
                                <h3 class="widget-heading">Instructors</h3>
                                <form action="#">
                                    <ul class="mt-3">
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="c11">
                                            <label for="c11" class="form-check-label">Edward Norton
                                                <span class="filter-checkbox-count">(4)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="c12">
                                            <label for="c12" class="form-check-label">Raghav Singh
                                                <span class="filter-checkbox-count">(10)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="c13">
                                            <label for="c13" class="form-check-label">Nancy Drew
                                                <span class="filter-checkbox-count">(4)</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="c114">
                                            <label for="c114" class="form-check-label">John Doe
                                                <span class="filter-checkbox-count">(8)</span>
                                            </label>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <!-- Select Instructor End -->
                            <!-- Select level -->
                            <div class="widget-box mb-4">
                                <h3 class="widget-heading">Level</h3>
                                <form action="#">
                                    <ul class="mt-3">
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="c14">
                                            <label for="c14" class="form-check-label">All Levels
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="c15">
                                            <label for="c15" class="form-check-label">Beginner
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="c16">
                                            <label for="c16" class="form-check-label">Intermediate
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="form-check-input" id="c17">
                                            <label for="c17" class="form-check-label">Expert
                                            </label>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <!-- Select level End -->
                            <!-- Select Rating -->
                            <div class="widget-box mb-4">
                                <h3 class="widget-heading">Rating</h3>
                                <form action="#">
                                    <ul>
                                        <li class="form-check">
                                            <input type="radio" class="form-check-input" name="rating" id="rating5">
                                            <label for="rating5" class="form-check-label ratings five"></label>
                                        </li>
                                        <li class="form-check">
                                            <input type="radio" class="form-check-input" name="rating" id="rating4">
                                            <label for="rating4" class="form-check-label ratings four"></label>
                                        </li>
                                        <li class="form-check">
                                            <input type="radio" class="form-check-input" name="rating" id="rating3">
                                            <label for="rating3" class="form-check-label ratings three"></label>
                                        </li>
                                        <li class="form-check">
                                            <input type="radio" class="form-check-input" name="rating" id="rating2">
                                            <label for="rating2" class="form-check-label ratings two"></label>
                                        </li>
                                        <li class="form-check">
                                            <input type="radio" class="form-check-input" name="rating" id="rating1">
                                            <label for="rating1" class="form-check-label ratings one"></label>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <!-- Select Rating End -->
                        </div>
                        <!-- Sidebar widget Wrapper End -->
                    </div>
                    <!-- Col End -->
                    <!-- Col -->
                    <div class="col-12 col-lg-8 col-xl-9 order-1 order-lg-2 mb-5">
                        <!-- Product Listing Top Bar -->
                        <div class="row g-4 align-items-center mb-5">
                            <!-- Col -->
                            <div class="page-title col-md-7 col-xl-8">
                                <h3>New Arrivals</h3>
                                <p class="mb-0 text-muted">Showing 1– 6 of 30 results</p>
                            </div>
                            <!-- Col End -->
                            <!-- Col -->
                            <div class="col-md-5 col-xl-4 ms-md-auto text-md-end">
                                <div class="select-dropdown">
                                    <select name="form-select" class="form-select">
                                        <option value="popularity" selected>Sort by popularity</option>
                                        <option value="rating">Sort by rating</option>
                                        <option value="newness">Sort by newness</option>

                                    </select>
                                </div>
                            </div>
                            <!-- Col End -->
                        </div>
                        <!-- Product Listing Top Bar End -->
                        <!-- Product Listing -->
                        <div class="row g-4 row-cols-1 row-cols-md-3">
                            <?php foreach ($items as $item): ?>
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
                                                    <img src="assets/img/04.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html"><?= $item['instructor'] ?></a> </h6>
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
                                                    <img src="assets/img/04.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html"><?= $item['instructor'] ?></a> </h6>
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
                                                    <img src="assets/img/04.jpg" alt="">
                                                </div>
                                                <h6><a href="instructor-details.html"><?= $item['instructor'] ?></a> </h6>
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
                        <!-- Product Listing -->
                        <!-- Pagination -->
                        <div class="text-center mt-5">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#"><i class="bi bi-arrow-left-short"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="bi bi-arrow-right-short"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination End -->
                    </div>
                    <!-- Col End -->
                </div>
            </div>
        </section>
        <!-- End -->



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
    <script src="assets/plugins/pagination/jquery.simplePagination.js"></script>
    <!-- function.js -->
    <script src="assets/js/function.js"></script>

</body>

</html>