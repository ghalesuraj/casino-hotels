
  <!-- =======================================================
  * Template Name: HomePage
  ======================================================== -->
 <?php
  $hero_bg = get_field('hero_background');
  $hero_lg = get_field('hero_logo');
  $hero_title = get_field('hero_title');
  $hero_subtitle = get_field('hero_subtitle');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo get_bloginfo( 'name' ) . ' : '. get_bloginfo( 'description' ); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="wp-content/themes/twentytwenty/assets/img/favicon.png" rel="icon">
  <link href="wp-content/themes/twentytwenty/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="wp-content/themes/twentytwenty/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="wp-content/themes/twentytwenty/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="wp-content/themes/twentytwenty/assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background: url(<?php echo $hero_bg; ?>) center center">
    <div class="container text-left position-relative">
        <img class="hero-lg" alt="" src="<?php echo $hero_lg; ?>" />
        <b class="hero-title" ><?php echo $hero_title; ?></b>
        <div class="hero-text"><?php echo $hero_subtitle; ?></div>
        <a href="#" class="theme-btn">
          <div class="btn-txt">Explore Today</div>
          <img class="btn-icon" alt="" src="assets/img/vector.svg" />
        </a>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
          <div class="row content">
              <div class="col-lg-6">
                <div class="about-title">About us</div>
                <b class="about-subtitle">Discover The Best Casino Hotels In the World</b>
                <div class="lorem-ipsum-dolor-container">
                  <p class="lorem-ipsum-dolor-sit-amet-co">
                    <span class="about-txt"
                      >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                      diam lectus, vestibulum bibendum faucibus eu, viverra ut ipsum.
                      Lorem ipsum dolor sit amet, consectetur
                    </span>
                    <span>&nbsp;</span>
                  </p>
                  <p class="about-txt">
                    adipiscing elit. Nunc diam lectus, vestibulum bibendum faucibus eu,
                    viverra ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Nunc diam lectus, vestibulum bibendum faucibus eu, viverra ut
                    ipsum. Lorem ipsum dolor sit amet, consectetu
                  </p>
                </div>
                <a href="#" class="theme-btn">
                  <div class="btn-txt">Read More</div>
                  <img class="btn-icon" alt="" src="assets/img/vector.svg" />
                </a>
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/about-img.png" class="img-fluid abt-img" alt="">
              </div>
            </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="content">
              <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/why-bg.png" class="img-fluid abt-img" alt="">
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="feature-container">
                  <div class="feature-holder">
                    <div class="feature-number">
                      <b class="fno">1</b>
                    </div>
                    <b class="title">Discover The Best Casino Hotels In the World</b>
                    <p>
                      adipiscing elit. Nunc diam lectus, vestibulum bibendum faucibus eu,
                      viverra ut ipsum. Lorem ipsum dolor sit amet, consectetur
                    </p>
                  </div>
                  <div class="feature-holder">
                    <div class="feature-number">
                      <b class="fno">1</b>
                    </div>
                    <b class="title">Discover The Best Casino Hotels In the World</b>
                    <p>
                      adipiscing elit. Nunc diam lectus, vestibulum bibendum faucibus eu,
                      viverra ut ipsum. Lorem ipsum dolor sit amet, consectetur
                    </p>
                  </div>
                  <div class="feature-holder">
                    <div class="feature-number">
                      <b class="fno">1</b>
                    </div>
                    <b class="title">Discover The Best Casino Hotels In the World</b>
                    <p>
                      adipiscing elit. Nunc diam lectus, vestibulum bibendum faucibus eu,
                      viverra ut ipsum. Lorem ipsum dolor sit amet, consectetur
                    </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="footer-brand"><img class="footer-lg" alt="" src="assets/img/footer-logo.svg" /></div>
          
          <nav class="nav navbar-expand-md">
            

              <div class="navbar" id="navbarNav">
                <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
              </div>
            
          </nav>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="brand">
        <img src="http://localhost/casino-hotels/wp-content/uploads/2023/05/footer-brand.png" />
      </div>
      <p class="copyright">&copy; 2022 Top 10 Casinos Worldwide. All rights reserved.</p>
    </div>
  </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

