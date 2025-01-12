<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edulink Bootstrap Responsive Web Template | Home :: Technoambience</title>
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
  <!-- End -->
  <!-- Black Transparent Screen -->
  <span class="screen-darken"></span>
  <!-- End -->
  <section class="top-bar-section">
    <!-- Top bar Start -->
    <!-- <div class="py-2 border-bottom d-none d-lg-block top-nav-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="top-bar-left list-unstyled">
              <ul class="d-flex m-0 p-0">
                <li>
                  <i class="bi bi-telephone"></i>
                  <a href="tel:7042xxxxxx">+62-81357181360</a>
                </li>
                <li>
                  <i class="bi bi-geo-alt"></i>
                  <span>Nunukan, Kalimantan Utara</span>
                </li>
                <li>
                  <i class="bi bi-envelope"></i>
                  <a href="#">CiviLearn@gmail.com</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="top-bar-right list-unstyled">
              <ul class="d-flex justify-content-end">
                <li>
                  <a href="#">Support</a>
                </li>
                <li>
                  <a href="#">Help</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div> -->
    <!-- End Top Bar -->

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
  </section>


  <!-- main section -->
  <main>
    <!-- Hero Banner Slider -->
    <section class="position-relative gradient-bg01">
      <div class="container-fluid px-0 ">
        <div class="row">
          <div class="col-md-7">
            <div class=" carousel-caption text-start center-align position-relative">
              <h1 class="animate__animated animate__zoomInUp">
                Apa itu Learn First
                <br class="d-none d-lg-block">
                <!-- <Span>Your Brighter Future </Span> -->

              </h1>
              <p class="animate__animated animate__zoomInUp">
                Learn First adalah platform e-course yang dirancang untuk mendukung kebutuhan belajar akademis Anda.
                <br class="d-none d-lg-block">
                Dengan materi berkualitas tinggi yang disusun oleh para ahli, Learn First membantu siswa, mahasiswa,
                <br class="d-none d-lg-block">
                dan profesional menguasai berbagai topik akademis secara fleksibel dan interaktif.
                <br class="d-none d-lg-block">
                Tingkatkan keterampilan dan pemahaman Anda kapan saja, di mana saja bersama Learn First!"
              </p>
              <div class="animate__animated animate__fadeInDown ">
                <a class="btn btn-primary btn-size shadow-1" href="#">Jelajahi Kursus</a>
                <a class="btn-size call-btn mt-4 ms-n4" href="https://wa.me/+6281357181360" target="_blank">
                  <i class="bi bi-telephone"></i>
                  <div class="call-btn-txt">
                    <span>Ada Pertanyaan?</span>
                    <span>+62-81357181360</span>
                  </div>
                </a>
              </div>
            </div>
            <div class="top-left anime-left-right d-none d-lg-block">
              <img src="assets/img/planet.png" alt="img">
            </div>
          </div>
          <div class="col-md-5 d-flex align-items-end">
            <div class="position-relative zindex-1">
              <img style="max-height: 50vh;" src="assets/img/aa_farhan.png" alt="Image" class="img-fluid">
              <div class="flex-box-wrapper d-none d-lg-block">
                <div class="fact-box text-center anime-left-right">
                  <div class="icon">
                    <i class="bi bi-person-fill"></i>
                  </div>
                  <div class="info">
                    <span>Total Students</span>
                    <h4 class="count">15K</h4>
                  </div>
                </div>
                <div class="fact-box text-center bounce-animate4">
                  <div class="icon">
                    <i class="bi bi-mortarboard"></i>
                  </div>
                  <div class="info">
                    <span>Completed Graduation</span>
                    <h4 class="count">34K</h4>
                  </div>
                </div>
              </div>
              <!-- <div class="right-top">
                <i class="bi bi-mortarboard"></i>
              </div>
              <div class="left-top">
                <i class="bi bi-journal-text"></i>
              </div> -->
              <div class="left-bottom d-none d-lg-block">
                <img src="assets/img/right-arrow.png" alt="img" width="120px" height="auto">
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End -->

    <!-- About Us Section -->
    <section class="section about-section position-relative zindex-1 bg-color-light">
      <div class="container">
        <div class="row g-4 gx-5 align-items-center">
          <div class="col-md-6">
            <div class="about-img-wrap">
              <img src="assets/img/about-img-1.png" alt="Image">
            </div>
          </div>
          <div class="col-md-6">
            <div class="about-content">
              <h4 class="subheading-style-01">Tentang Kami</h4>
              <h2>Tingkatkan Skill, Wujudkan Karir Impian</h2>
              <p>Learn First hadir untuk membantu Anda mengembangkan keterampilan dan memperluas peluang karir melalui e-course berkualitas. Bersama kami, wujudkan masa depan cerah dan sukses yang Anda impikan.</p>
              <div class="row mt-0">
                <div class="col-6 d-flex gap-4 about-usp">
                  <div class="icon icon-bg icon-circle icon_size-sm">
                    <i class="fa-solid fa-user-tie"></i>
                  </div>
                  <div class="about-usp-content lh-1">
                    <h5>10</h5> Expert Tutors
                  </div>
                </div>
                <div class="col-6 d-flex gap-4 about-usp">
                  <div class="icon icon-bg icon-circle icon_size-sm">
                    <i class="fa-solid fa-video"></i>
                  </div>
                  <div class="about-usp-content lh-1">
                    <h5>10</h5>Videos
                  </div>
                </div>
                <div class="col-6 d-flex gap-4 about-usp">
                  <div class="icon icon-bg icon-circle icon_size-sm">
                    <i class="fa-solid fa-file-lines"></i>
                  </div>
                  <div class="about-usp-content lh-1">
                    <h5>5</h5>Top Lessons
                  </div>
                </div>
                <div class="col-6 d-flex gap-4 about-usp">
                  <div class="icon icon-bg icon-circle icon_size-sm">
                    <i class="fa-solid fa-graduation-cap"></i>
                  </div>
                  <div class="about-usp-content lh-1">
                    <h5>15000</h5>Students
                  </div>
                </div>
              </div>
              <!-- <a href="#" class="btn btn-primary btn-size btn-mt">Discover More</a> -->
            </div>
          </div>
        </div>
        <!-- End -->

      </div>

    </section>
    <!-- End -->

    <!-- Courses -->
    <section class="section">
      <div class="container">
        <div class="row section-heading-txt justify-content-center" data-aos="fade-up" data-aos-once="ture">
          <!-- Heading -->
          <div class="col-lg-6 section__heading-wrap">
            <h4 class="subheading-style-01">Online Courses </h4>
            <h2 class="heading-text"> Courses </h2>
          </div>
        </div>
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
        <!-- End -->
        <div class="text-center btn-mt"><a href="course-listing.html" class="btn btn-outline btn-size">Explore All Courses</a></div>
      </div>
    </section>
    <!-- End -->

    <!-- Our Instructors -->
    <section class="section bg-color-light ">
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