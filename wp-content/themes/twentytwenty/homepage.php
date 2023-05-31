
  <!-- =======================================================
  * Template Name: HomePage
  ======================================================== -->
 <?php
  $hero_bg = get_field('hero_background');
  $hero_lg = get_field('hero_logo');
  $hero_title = get_field('hero_title');
  $hero_subtitle = get_field('hero_subtitle');
  $section_title = get_field('section_title');
  $section_subtitle = get_field('section_subtitle');
  $about_title = get_field('about_title');
  $about_subtitle = get_field('about_subtitle');
  $about_content = get_field('about_content');
  $about_image = get_field('about_image');
  get_header();
?>

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background: url(<?php echo $hero_bg; ?>) center center">
    <div class="container text-left position-relative">
        <img class="hero-lg" alt="" src="<?php echo $hero_lg; ?>" />
        <b class="hero-title" ><?php echo $hero_title; ?></b>
        <div class="hero-text"><?php echo $hero_subtitle; ?></div>
        <a href="#" class="theme-btn">
          <div class="btn-txt">Explore Today</div>
          <!-- <img class="btn-icon" alt="" src="assets/img/vector.svg" /> -->
        </a>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
          <div class="row content">
              <div class="col-lg-6">
                <div class="title"><?php echo $about_subtitle; ?></div>
                <b class="subtitle"><?php echo $about_title; ?></b>
                <div class="content">
                  <p>
                    <span class="about-txt">
                      <?php echo $about_content; ?>
                    </span>
                  </p>
                  
                </div>
                <a href="#" class="theme-btn">
                  <div class="btn-txt">Read More</div>
                  <!-- <img class="btn-icon" alt="" src="assets/img/vector.svg" /> -->
                </a>
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0">
                <img src="<?php echo $about_image; ?>" class="img-fluid abt-img" alt="">
              </div>
            </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <!-- ======= Hotel Listing Section ======= -->
    <section id="hotel" class="hotel">
        <div class="container">
          <div class="row content">
            <h1>The Best Casino Hotels Worldwide</h1>
            <p> <i class="fa fa-calendar"></i><?php echo  date("d/m/Y"); ?></p>
            <div class="hotel-listing">
              <div class="listing-title">
                <h2>Top Rated Hotel</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hotel Listing Section -->
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <p class="subtitle"><?php echo $section_subtitle; ?></p>
          <h1 class="section-title"><?php echo $section_title; ?></h1>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="content">
              <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/why-bg.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="feature-container">
                  <?php
                    $items = get_field('feature');
                    // value can be null, convert in case the array is empty
                    $items = $items ?: [];
                    $n = 0;
                    foreach ($items as $item) {
                    $n++;
                  ?>
                  <div class="feature-holder">
                    <div class="feature-number">
                      <b class="fno"><?php echo $n; ?></b>
                    </div>
                    <b class="title"><?php echo $item['feature_title']; ?></b>
                    <p>
                      <?php echo $item['feature_content']; ?>
                    </p>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php
get_footer();?>

