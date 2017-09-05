<?php
  global $current_page;
  $current_page = "page-home";

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <?php include 'includes/head.php'; ?>
</head>

<body class="<?php echo $current_page; ?>"> <!-- home-expand-header-version -->
  <!-- only the home page has the class home-expand-header-version by default -->

  <?php include "includes/preloader.php"; ?>

  <?php include "includes/header_desktop.php"; ?>
  <?php include "includes/header_mobile.php"; ?>

  <div id="page-wrapper">
    <div id="page-wrapper-content">


      <div id="page-home-nav-trigger"></div>


      <div class="header-desktop-spacer"></div>


      <!--
         ____    _    _   _ _   _ _____ ____
        | __ )  / \  | \ | | \ | | ____|  _ \
        |  _ \ / _ \ |  \| |  \| |  _| | |_) |
        | |_) / ___ \| |\  | |\  | |___|  _ <
        |____/_/   \_\_| \_|_| \_|_____|_| \_\

      -->

      <article id="page-default-banner-section">
        <div id="page-default-banner-image">
          <div class="manic-image-container">
            <img src="" data-image-desktop="images_cms/home/home-banner.jpg">
          </div>
        </div>

        <div id="page-default-banner-copy-container">
          <div class="container-fluid has-breakpoint">
            <div class="row">
              <div class="col-md-6">

                <div id="page-default-banner-copy">
                  <h1>Leading medical equipment specialists in Southeast Asia.</h1>
                </div> <!-- page-default-banner-copy -->

              </div>
            </div>
          </div>
        </div> <!-- page-default-banner-copy-container -->

      </article> <!-- page-default-banner-section -->





      <!--
        __        ___   _    _  _____  __        _______   ____   ___
        \ \      / / | | |  / \|_   _| \ \      / / ____| |  _ \ / _ \
         \ \ /\ / /| |_| | / _ \ | |    \ \ /\ / /|  _|   | | | | | | |
          \ V  V / |  _  |/ ___ \| |     \ V  V / | |___  | |_| | |_| |
           \_/\_/  |_| |_/_/   \_\_|      \_/\_/  |_____| |____/ \___/

      -->

      <article id="page-home-whatwedo-section">
        <div class="container-fluid has-breakpoint">

          <div class="row">
            <div class="col-md-12">

              <div id="page-home-whatwedo-title">
                <h2>What We Do</h2>
              </div> <!-- page-home-whatwedo-title -->

            </div>
          </div> <!-- row -->

          <div class="row">
            <div class="col-md-12">

              <div id="page-home-whatwedo-item-container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="item-column first-version">

                      <!--
                          ___  _
                         / _ \/ |
                        | | | | |
                        | |_| | |
                         \___/|_|

                      -->

                      <div class="page-home-whatwedo-item hover-sync-item">
                        <a href="javascript:void(0);" class="item-image hover-sync">
                          <div class="manic-image-container">
                            <img src=""
                              data-image-desktop="images_cms/home/home-whatwedo-01.jpg"
                              data-image-tablet="images_cms/home/home-whatwedo-01-tablet.jpg"
                              data-image-mobile="images_cms/home/home-whatwedo-01-mobile.jpg">
                          </div>
                        </a>
                        <div class="item-copy">
                          <h5><a href="javascript:void(0);" class="hover-sync">Medical Equipment</a></h5>
                          <p>High-end medical devices and highly specialised drugs.</p>
                        </div>
                      </div> <!-- page-home-whatwedo-item -->

                    </div> <!-- item-column -->
                  </div>
                  <div class="col-md-4">
                    <div class="item-column">

                      <!--
                          ___ ____
                         / _ \___ \
                        | | | |__) |
                        | |_| / __/
                         \___/_____|

                      -->

                      <div class="page-home-whatwedo-item hover-sync-item">
                        <a href="javascript:void(0);" class="item-image hover-sync">
                          <div class="manic-image-container">
                            <img src=""
                              data-image-desktop="images_cms/home/home-whatwedo-02.jpg"
                              data-image-tablet="images_cms/home/home-whatwedo-02-tablet.jpg"
                              data-image-mobile="images_cms/home/home-whatwedo-02-mobile.jpg">
                          </div>
                        </a>
                        <div class="item-copy">
                          <h5><a href="javascript:void(0);" class="hover-sync">Education & Training</a></h5>
                          <p>Medical conferences and training for doctors, patients and healthcare professionals.</p>
                        </div>
                      </div> <!-- page-home-whatwedo-item -->

                    </div> <!-- item-column -->
                  </div>
                  <div class="col-md-4">
                    <div class="item-column last-version">

                      <!--
                          ___ _____
                         / _ \___ /
                        | | | ||_ \
                        | |_| |__) |
                         \___/____/

                      -->

                      <div class="page-home-whatwedo-item hover-sync-item">
                        <a href="javascript:void(0);" class="item-image hover-sync">
                          <div class="manic-image-container">
                            <img src=""
                              data-image-desktop="images_cms/home/home-whatwedo-03.jpg"
                              data-image-tablet="images_cms/home/home-whatwedo-03-tablet.jpg"
                              data-image-mobile="images_cms/home/home-whatwedo-03-mobile.jpg">
                          </div>
                        </a>
                        <div class="item-copy">
                          <h5><a href="javascript:void(0);" class="hover-sync">Support & Maintenance</a></h5>
                          <p>Post-sale support necessary to extract the most value out of the machines.</p>
                        </div>
                      </div> <!-- page-home-whatwedo-item -->

                    </div> <!-- item-column -->
                  </div>
                </div>
              </div> <!-- page-home-whatwedo-item-container -->

            </div>
          </div> <!-- row -->

        </div>
      </article> <!-- page-home-whatwedo-section -->





      <!--
         _        _  _____ _____ ____ _____
        | |      / \|_   _| ____/ ___|_   _|
        | |     / _ \ | | |  _| \___ \ | |
        | |___ / ___ \| | | |___ ___) || |
        |_____/_/   \_\_| |_____|____/ |_|

      -->

      <article id="page-home-latest-section">
        <div class="container-fluid has-breakpoint">

          <div class="row">
            <div class="col-md-12">

              <div id="page-home-latest-title">
                <h2>Our Latest Technologies</h2>
              </div> <!-- page-home-latest-title -->

            </div>
          </div> <!-- row -->

          <div class="row">
            <div class="col-md-12">

              <div id="page-home-latest-item-container">
                <div class="row">
                  <div class="col-md-7">
                    <div id="page-home-latest-column-01-width"></div>

                    <!--
                        ___  _
                       / _ \/ |
                      | | | | |
                      | |_| | |
                       \___/|_|

                    -->

                    <div id="page-home-latest-item-01" class="page-home-latest-item hover-sync-item">

                      <div class="item-image-container">
                        <div class="item-image">
                          <div class="manic-image-container">
                            <img src="" data-image-desktop="images_cms/home/home-latest-01.jpg">
                          </div>
                        </div>
                      </div>
                      <div class="item-copy">
                        <div class="item-tag">Solution for Epilepsy</div>
                        <h3><a href="javascript:void(0);" class="hover-sync">VNS Therapy® – The Most Proven Device Solution for Epilepsy</a></h3>
                        <a href="javascript:void(0);" class="plain-arrow-cta hover-sync">Read More</a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-5">
                    <div id="page-home-latest-column-02-width"></div>

                    <!--
                        ___ ____
                       / _ \___ \
                      | | | |__) |
                      | |_| / __/
                       \___/_____|

                    -->

                    <div id="page-home-latest-item-02" class="page-home-latest-item hover-sync-item">
                      <div class="item-image-container">
                        <div class="item-image">
                          <div class="manic-image-container">
                            <img src="" data-image-desktop="images_cms/home/home-latest-02.jpg">
                          </div>
                        </div>
                      </div>
                      <div class="item-copy">
                        <div class="item-tag">Monitoring Device</div>
                        <h3><a href="javascript:void(0);" class="hover-sync">CoTI® provides real-time gamma activity for dosimetry calculations</a></h3>
                        <a href="javascript:void(0);" class="plain-arrow-cta hover-sync">Read More</a>
                      </div>
                    </div>

                    <!--
                        ___ _____
                       / _ \___ /
                      | | | ||_ \
                      | |_| |__) |
                       \___/____/

                    -->

                    <div id="page-home-latest-item-03" class="page-home-latest-item hover-sync-item">
                      <div class="item-image-container">
                        <div class="item-image">
                          <div class="manic-image-container">
                            <img src="" data-image-desktop="images_cms/home/home-latest-03.jpg">
                          </div>
                        </div>
                      </div>
                      <div class="item-copy">
                        <div class="item-tag">Robot Assisted Surgery</div>
                        <h3><a href="javascript:void(0);" class="hover-sync">MAKO Technology –  less extensive, more effective.</a></h3>
                        <a href="javascript:void(0);" class="plain-arrow-cta hover-sync">Read More</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div> <!-- page-home-latest-item-container -->

            </div>
          </div> <!-- row -->

        </div>
      </article> <!-- page-home-latest-section -->





      <!--
         ____  ____      _    _   _ ____
        | __ )|  _ \    / \  | \ | |  _ \
        |  _ \| |_) |  / _ \ |  \| | | | |
        | |_) |  _ <  / ___ \| |\  | |_| |
        |____/|_| \_\/_/   \_\_| \_|____/

      -->

      <article id="page-home-brand-section">
        <div class="container-fluid has-breakpoint">

          <div class="row">
            <div class="col-md-12">

              <div id="page-home-brand-title">
                <h2>We carry over 40 brands that target various medical conditions & treatment.</h2>
              </div> <!-- page-home-brand-title -->

            </div>
          </div> <!-- row -->

          <div class="row">
            <div class="col-md-12">

              <div id="page-home-brand-copy">
                <h4>Quicklinks to our brands</h4>
              </div>

              <div id="page-home-brand-links">
                <ul>
                  <li><a href="products.php#surgical">Surgical</a></li>
                  <li><a href="products.php#orthopaedics">Orthopaedics</a></li>
                </ul>
                <ul>
                  <li><a href="products.php#in-vitro-diagnostics">In-vitro Diagnostics</a></li>
                  <li><a href="products.php#specialty-pharmaceuticals-medical">Specialty Pharmaceuticals / Medical</a></li>
                </ul>
                <ul>
                  <li><a href="products.php#turnkey-solutions">Turnkey Solutions</a></li>
                  <li><a href="products.php#therapeutics">Therapeutics</a></li>
                </ul>
                <ul>
                  <li><a href="products.php#interventional-therapy">Interventional Therapy</a></li>
                </ul>

              </div> <!-- page-home-brand-links -->

            </div>
          </div> <!-- row -->

        </div>
      </article> <!-- page-home-brand-section -->





      <!--
         __  __    _    ____
        |  \/  |  / \  |  _ \
        | |\/| | / _ \ | |_) |
        | |  | |/ ___ \|  __/
        |_|  |_/_/   \_\_|

      -->


      <article id="page-home-map-section">

        <div id="page-home-map-imge-bg">
          <img src="images_cms/home/home-map-new-02-bg.svg">
        </div>

        <div id="page-home-map-image">

          <div class="manic-animated-svg fit-to-layout-version" id="home-map-animated-svg" data-image="images_cms/home/home-map-new-02c.svg" data-width="1380" data-height="800">
          </div>
          <!--

          <div class="manic-image-container">
            <img src="" data-image-desktop="images_cms/home/home-map.jpg">
          </div>
          -->

        </div>

        <div id="page-home-map-copy-container">
          <div class="container-fluid has-breakpoint">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-9">

                <div id="page-home-map-copy">

                  <div id="page-home-map-title">
                    <h2>Bringing medical technology across Southeast Asia since 1980.</h2>
                  </div>

                  <div id="page-home-map-info-item-container">

                    <div class="page-home-map-info-item" data-value="41">
                      <div class="item-bg"></div>
                      <h4>Brand <br>Partners</h4>
                      <div class="item-number-container"><span class="item-number odometer">00</span></div>
                    </div>

                    <div class="page-home-map-info-item" data-value="1538">
                      <div class="item-bg"></div>
                      <h4>Equipment <br>Distributed</h4>
                      <div class="item-number-container"><span class="item-number odometer">0000</span></div>
                    </div>

                    <div class="page-home-map-info-item" data-value="79">
                      <div class="item-bg"></div>
                      <h4>Companies <br>Benefitted</h4>
                      <div class="item-number-container"><span class="item-number odometer">00</span></div>
                    </div>

                    <div class="page-home-map-info-item" data-value="7">
                      <div class="item-bg"></div>
                      <h4>Our <br>Offices</h4>
                      <div class="item-number-container"><span class="item-number odometer">0</span></div>
                    </div>

                  </div> <!-- page-home-map-info-item-container -->

                  <div id="page-home-map-location">
                    <h4>Our Locations</h4>
                    <ul>
                      <li>Singapore</li>
                      <li>Malaysia</li>
                      <li>Indonesia</li>
                    </ul>
                    <ul>
                      <li>Hong Kong</li>
                      <li>Thailand</li>
                      <li>Vietnam</li>
                    </ul>
                    <ul>
                      <li>Philippines</li>
                    </ul>
                  </div>

                  <div id="page-home-cta-container">
                    <a href="javascript:void(0);" class="square-cta">Get in touch</a>
                  </div>

                </div> <!-- page-home-map-copy -->

              </div>
            </div> <!-- row -->
          </div>
        </div> <!-- page-home-map-copy-container -->

      </article> <!-- page-home-map-section -->





      <!--
         _   _ _______        ______
        | \ | | ____\ \      / / ___|
        |  \| |  _|  \ \ /\ / /\___ \
        | |\  | |___  \ V  V /  ___) |
        |_| \_|_____|  \_/\_/  |____/

      -->


      <article id="page-home-news-section">
        <div class="container-fluid has-breakpoint">

          <div class="row">

            <div id="page-home-news-title">
              <h2>In The News</h2>
            </div> <!-- page-home-news-title -->
          </div> <!-- row -->

          <div class="row">
            <div class="col-md-12">

              <div id="page-default-news-item-container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="item-column first-version">

                      <!--
                          ___  _
                         / _ \/ |
                        | | | | |
                        | |_| | |
                         \___/|_|

                      -->

                      <div class="page-default-news-item hover-sync-item">
                        <div class="item-title">
                          <div class="row">
                            <div class="col-xs-6">
                              <h4>Featured</h4>
                            </div>
                            <div class="col-xs-6">
                              <h4 class="item-date">27 Jul 2017</h4>
                            </div>
                          </div>
                          <h3><a href="javascript:void(0);" class="hover-sync">The Medical City (TMC) introduces Emprint™ Microwave Ablation (MWA)</a></h3>
                        </div>
                        <div class="item-copy">
                          <p>The Medical City (TMC) introduces Emprint™ Microwave Ablation (MWA), a new technology that destroys tumors using heat generated by microwave energy.</p>
                        </div>
                        <div class="item-cta-container">
                          <a href="javascript:void(0);" class="plain-arrow-cta hover-sync">Read More</a>
                        </div>
                      </div> <!-- page-default-news-item -->

                    </div> <!-- item-column -->
                  </div>
                  <div class="col-md-4">
                    <div class="item-column">

                      <!--
                          ___ ____
                         / _ \___ \
                        | | | |__) |
                        | |_| / __/
                         \___/_____|

                      -->

                      <div class="page-default-news-item hover-sync-item">
                        <div class="item-title">
                          <div class="row">
                            <div class="col-xs-6">
                              <h4>Success Stories</h4>
                            </div>
                            <div class="col-xs-6">
                              <h4 class="item-date">18 Jun 2017</h4>
                            </div>
                          </div>
                          <h3><a href="javascript:void(0);" class="hover-sync">100 cases celebration with Mako Robotics: Dr. Jeffrey Chew</a></h3>
                        </div>
                        <div class="item-copy">
                          <p>Dr Jeffrey Chew is a practicing consultant orthopaedic surgeon at Mount Elizabeth Hospital, Mount Elizabeth Novena Hospital and Parkway East Hospital.</p>
                        </div>
                        <div class="item-cta-container">
                          <a href="javascript:void(0);" class="plain-arrow-cta hover-sync">Read More</a>
                        </div>
                      </div> <!-- page-default-news-item -->

                    </div> <!-- item-column -->
                  </div>
                  <div class="col-md-4">
                    <div class="item-column last-version">

                      <!--
                          ___ _____
                         / _ \___ /
                        | | | ||_ \
                        | |_| |__) |
                         \___/____/

                      -->

                      <div class="page-default-news-item hover-sync-item">
                        <div class="item-title">
                          <div class="row">
                            <div class="col-md-7 col-xs-6">
                              <h4>Education & Events</h4>
                            </div>
                            <div class="col-md-5 col-xs-6">
                              <h4 class="item-date">05 Jun 2017</h4>
                            </div>
                          </div>
                          <h3><a href="javascript:void(0);" class="hover-sync">Poctions 2016: Today’s actions for tomorrow’s patients</a></h3>
                        </div>
                        <div class="item-copy">
                          <p>Together with the Singapore Association for the Medical Laboratory Sciences, Transmedic organised POCTions – a conflation of the terms POCT and “solutions” – on 15 October ...</p>
                        </div>
                        <div class="item-cta-container">
                          <a href="javascript:void(0);" class="plain-arrow-cta hover-sync">Read More</a>
                        </div>
                      </div> <!-- page-default-news-item -->

                    </div> <!-- item-column -->
                  </div>
                </div>
              </div> <!-- page-home-news-item-container -->

            </div>
          </div> <!-- row -->

        </div>
      </article>





    </div> <!-- #page-wrapper-content -->
  </div> <!-- #page-wrapper -->

  <?php include "includes/footer_desktop.php"; ?>
  <?php include "includes/footer_mobile.php"; ?>

  <?php include "includes/script_home.php" ?>

</body>
</html>
