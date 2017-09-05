<?php
  global $current_page;
  $current_page = "page-about";

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <?php include 'includes/head.php'; ?>
</head>

<body class="<?php echo $current_page; ?>">

  <?php include "includes/preloader.php"; ?>

  <?php include "includes/header_desktop.php"; ?>
  <?php include "includes/header_mobile.php"; ?>

  <div id="page-wrapper">
    <div id="page-wrapper-content">

      <div id="page-home-nav-trigger"></div>


      <div class="header-desktop-spacer"></div>

      <article id="page-default-banner-section" class="about-version">

        <div id="page-default-banner-copy-container">
          <div class="container-fluid has-breakpoint">
            <div class="row">
              <div id="banner-copy-left-col">
                <div class="col-md-6">
                  <div id="page-default-banner-copy">
                    <h2>In order for our organisation to be great, our culture and our people must also be great.</h2>                  
                  </div> <!-- page-home-banner-copy -->
                </div>
              </div> <!-- banner-copy-left-col -->
              <div id="banner-copy-right-col">
                <div class="col-md-6">
                  <div id="page-default-banner-copy">
                    <h3>About Transmedic</h3>
                    <p>Transmedic was founded in 1980 with the aim of becoming the top specialist in the advanced medical technologies arena in Southeast Asia. Headquartered in Singapore, we have since grown our presence in 7 countries and have a staff of 400 people.</p>
                  </div>
                </div>
              </div> <!-- banner-copy-right-col -->
            </div>
          </div>
        </div> <!-- page-home-banner-copy-container -->

      </article>

      <article id="page-about-what-we-do-section">
        
        <div class="container-fluid has-breakpoint">
          <div id="page-about-what-we-do-title">
            <div class="row">
              <div class="col-md-12">
                <h2>What We Do</h2>
              </div>
            </div>
          </div>
          <div id="page-about-what-we-do-content">
            <div class="page-about-what-we-do-content-item">
              <div class="row">
                
                <div class="col-md-6">
                  <div class="img-col">
                    <div class="manic-image-container">
                      <img data-image-desktop="images_cms/about/what-we-do-01.jpg" src="" alt="">
                    </div>
                  </div> <!-- img-col -->
                </div>
                
                <div class="col-md-6">
                  <div class="txt-col right-col">
                    <h3>Medical Devices Distribution & Highly Specialised Drugs</h3>
                    <p>In Asia, we have seen the emergence of informed, tech-savvy patients who use the Internet to research their options for medical treatment. This new group values their time, mobility and comfort, and wants ways to reduce downtime and avoid hospitalization if possible.</p>

                    <p>Transmedic understands their concerns and has endeavoured over the last 3.5 decades to become the top specialist in the advanced medical technologies arena in Asia. We believe that these technologies can genuinely impact the quality of healthcare and significantly improve patient recovery times.</p>

                    <p>Find out more about our <a href="products.php" class="underline-link">Latest Products</a>.</p>
                  </div> <!-- txt-col -->
                </div> 

              </div> <!-- row -->
            </div> <!-- page-about-what-we-do-content-item -->
            
            <div class="page-about-what-we-do-content-item">
              <div class="row">
                
                <div class="col-md-6">
                  <div class="txt-col">
                    <h3>Education & Training</h3>
                    <p>We are deeply committed to education, and invest heavily in training for doctors, technology promotion and patient education. We also regularly sponsor and help to organise medical conferences, exhibitions, symposiums and workshops for healthcare professionals to exchange findings and build networks.</p>

                    <p>Find out more about what we do for <a href="#" class="underline-link">Education & Events</a>.</p>
                  </div> <!-- txt-col -->
                </div>
                
                
                <div class="col-md-6">
                  <div class="img-col right-col">
                    <div class="manic-image-container">
                      <img data-image-desktop="images_cms/about/what-we-do-02.jpg" src="" alt="">
                    </div>
                  </div> <!-- img-col -->
                </div>

              </div> <!-- row -->
            </div> <!-- page-about-what-we-do-content-item -->

            <div class="page-about-what-we-do-content-item">
              <div class="row">   

                <div class="col-md-6">
                  <div class="img-col">
                    <div class="manic-image-container">
                      <img data-image-desktop="images_cms/about/what-we-do-03.jpg" src="" alt="">
                    </div>
                  </div>  <!-- img-col -->
                </div>
                
                <div class="col-md-6">
                  <div class="txt-col right-col">
                    <h3>Post-Sales Support</h3>
                    <p>Besides technology introduction, we are also deeply involved in implementation and maintenance. We believe in providing the post-sale support necessary to extract the most value out of the machines; in the process forming long-term links with the best healthcare practitioners in the industry.</p>
                  </div> <!-- txt-col -->
                </div> 

              </div> <!-- row -->
            </div> <!-- page-about-what-we-do-content-item -->

          </div>
        </div>

      </article>

      <article id="page-about-extra-section">
        <div class="container-fluid has-breakpoint">
          <div class="row">
            <div class="col-md-6">
              <h2>Growth is in our DNA.</h2>
            </div>  
            <div class="col-md-6">
              <p>Meet some of your perspective team mates to hear about how growth is an integral part of their lives here at Transmedic.</p>

              <p>Find out more about our <a href="careers.php" class="underline-link">career opporunities</a>.</p>
            </div>
          </div>
        </div>
      </article>

    </div> <!-- #page-wrapper-content -->
  </div> <!-- #page-wrapper -->

  <?php include "includes/footer_desktop.php"; ?>
  <?php include "includes/footer_mobile.php"; ?>

  <?php include "includes/script_about.php" ?>

</body>
</html>