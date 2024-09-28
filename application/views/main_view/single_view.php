<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Wedding of Grae-mar &amp; Melanie</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon-pastor-1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() . 'assets/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
  <link href="<?php echo base_url() . 'assets/vendor/aos/aos.css'; ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Squadfre
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Mel4Grae</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#entourage">Entourage</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#team">Godparents</a></li>
          <li><a href="#contact">RSVP</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

      <img src="<?php echo base_url('assets/img/main_bg.jpg'); ?>" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">

       <!-- should be on mobile version style="margin-top: 75%" -->

        <p style="font-family: 'poppins'; font-weight: 700; text-shadow: 10px 10px 15px rgba(18, 14, 12, 0.5);">You are cordially invited to the wedding of</p>
        <h2 style="font-family: 'poppins'; font-weight:700; text-shadow: 10px 10px 15px rgba(18, 14, 12, 0.5);">Grae-mar & Melanie</h2>
        <a href="#entourage" class="btn-scroll" title="Scroll Down"><i class="bi bi-chevron-down"></i></a>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="entourage" class="about section">

      <div class="container">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Entourage</h2>
        <p>Our cherished family and friends, the pillars of our love and joy.</p>
      </div><!-- End Section Title -->
        <div class="row gy-5">



        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <p>Come and join us as we celebrate the beginning of our forever. Together with our families, we invite you to share in the joy of our wedding day as we exchange vows and embark on a lifetime of love and happiness.</p>
              <a class="cta-btn" href="#contact">RSVP</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Love Notes</h2>
        <p>Heartfelt messages from our loving family and friends</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

          <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Grae-mar, your hard work and dedication inspire and make me proud of you. you have shown what it means to be committed – not just to your goal, but to the people you love, to your papa, your elder brother and two younger sisters.  Melanie, thank you for being a wonderful partner and bringing out the best of Grae-mar.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testi-grace2.jpg" class="testimonial-img" alt="">
                <h3>Marlon &amp; Grace</h3>
                <h4>Groom's Father &amp; Mother</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Kuya, we are so glad that you have found someone who is always by your side. Ate, welcome to the family thank you for bringing so much happiness to my brothers life. We wish that you would never grow tired of falling in love with each other. May your home be filled with happiness and joy. Congratulations to the both of you!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testi-lai.jpg" class="testimonial-img" alt="">
                <h3>Gie &amp; Family</h3>
                <h4>Groom's Sister</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>As they embark on this new chapter, I have no doubt they will continue to grow together, building a life full of love, adventure, and more laughter. Sitmate and Lanie, may your love deepen with every passing day, and may you always find joy in each other’s company.❤️</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testi-dea.jpg" class="testimonial-img" alt="">
                <h3>Dea Angela</h3>
                <h4>Groom's Best Friend</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>may all your heart's wishes be granted and may this beautiful journey be filled with soo much love, peace and happiness, here's too many happy years together! 🩷</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testi-aleil.jpg" class="testimonial-img" alt="">
                <h3>Aleil</h3>
                <h4>Bride's Friend</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>This new road you will be both taking will not always a straight line. There will be misunderstanding, struggles and obstacles along the way. Remember to always communicate and face it together, Marraige is not that easy, but together it will be much lighter and easier. Lots of love and care.🩷 </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testi-monetcindy.jpg" class="testimonial-img" alt="">
                <h3>Monetters &amp; Cindy</h3>
                <h4>Bride's Friends</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Even though life is full of struggles, it is what strengthens the bond of the couples. And as you both take the next step that life offers, may it mold your relationship’s foundation into something far beyond just unification. Cheers for you my brother and welcome to the family lanie 🥂</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testi-edi.jpg" class="testimonial-img" alt="">
                <h3>Eigram &amp; Family</h3>
                <h4>Groom's Brother</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>I don't believe in love, but witnessing yours. I do now!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testi-boni.jpg" class="testimonial-img" alt="">
                <h3>Ronalyn</h3>
                <h4>Bride's Friend</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>To Grae and Ate Lanie, finally, a new chapter in your relationship begins for you both and one of the best things we look forward to. We are so happy and excited to see you two tie the knot. Please know that we value your happiness together above all else. Congratulations and wishing you the best-today and always. 🩷</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testi-diane.jpg" class="testimonial-img" alt="">
                <h3>Angelo &amp; Diane</h3>
                <h4>Couple's Friends</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>My brother and soon-to-be sister-in-law have a special connection that brings so much joy to our family. Their love is genuine and uplifting. We’re thrilled to celebrate their journey together and all the wonderful moments to come!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testi-mai.jpg" class="testimonial-img" alt="">
                <h3>Margie &amp; Family</h3>
                <h4>Groom's Sister</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Godparents</h2>
        <p>We are blessed to have our loving Godparents, guiding and supporting us on this special journey.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/gp-gina.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">

                <h4>Maria Regina G. Dee</h4>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/gp-mae.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Mary Rose Buenaventura Pascual</h4>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/gp-remy.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Remy Buenaventura</h4>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/gp-tony.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Antonio Buenaventura Sr.</h4>
              </div>
            </div>
          </div><!-- End Team Member -->


        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>RSVP</h2>
        <p>Reserve your seat in our cirlce!</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

        <div class="col-lg-4">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-12">
                  <label for="name-field" class="pb-2">Full Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-12">
                  <label for="email-field" class="pb-2">Contact Number</label>
                  <input type="text" class="form-control" name="contact" id="contact-field" maxlength="11" value="09" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Short message for the couple</label>
                  <textarea class="form-control" name="message" rows="5" id="message-field"></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

          <div class="col-lg-4">

            <div class="info-wrap">
            
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-house-door flex-shrink-0"></i>
                <div>
                  <h3>Church</h3>
                  <p>St. Vincent Ferrer Church</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>68 Naguilian Rd, St. Vincent Ferrer Church, Baguio City, 2600 Benguet</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.1120825377384!2d120.58688055127007!3d16.414178312297523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a1657ca5424b%3A0xe4acf8b863af1ef6!2sSt.%20Vincent%20Ferrer%20Church!5e0!3m2!1sen!2sph!4v1727538872438!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              
            </div>
          </div>

          <div class="col-lg-4">

            <div class="info-wrap">

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-house-door flex-shrink-0"></i>
                <div>
                  <h3>Venue</h3>
                  <p>Bruno's Restaurant</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>231, MMC Centerpoint 54, Purok 4, Lower East, Camp 7, Baguio City, 2600 Benguet</p>
                </div>
              </div><!-- End Info Item -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.799791844771!2d120.60049017690534!3d16.38415808434188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a126b60a7acf%3A0x5884fb6ec583ad86!2sBruno&#39;s%20Restaurant!5e0!3m2!1sen!2sph!4v1727539482773!5m2!1sen!2sph" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container copyright text-center mt-4">
       <p> 🎨🖌️ Kervi </p>
       <p> <span style="color: black !important; font-weight: bold;"> < /> </span> &nbsp;&nbsp; Grae</p>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() . 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/php-email-form/validate.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/aos/aos.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/purecounter/purecounter_vanilla.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/glightbox/js/glightbox.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/imagesloaded/imagesloaded.pkgd.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/isotope-layout/isotope.pkgd.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/vendor/swiper/swiper-bundle.min.js'; ?>"></script>

  <!-- Main JS File -->
  <script src="<?php echo base_url() . 'assets/js/main.js'; ?>"></script>

</body>

</html>