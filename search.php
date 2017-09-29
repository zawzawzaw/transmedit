<?php
  global $current_page;
  $current_page = "page-plain";

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <?php include 'includes/head.php'; ?>
</head>

<body class="<?php echo $current_page; ?> min-height-version min-height-mobile-version">

  <?php include "includes/preloader.php"; ?>

  <?php include "includes/header_desktop.php"; ?>
  <?php include "includes/header_mobile.php"; ?>

  <div id="page-wrapper">
    <div id="page-wrapper-content">

      <div id="page-home-nav-trigger"></div>


      <div class="header-desktop-spacer"></div>
      <div class="header-mobile-spacer hidden-lg"></div>
      
      

      <!--
          ____ ___  _   _ _____ _____ _   _ _____
         / ___/ _ \| \ | |_   _| ____| \ | |_   _|
        | |  | | | |  \| | | | |  _| |  \| | | |
        | |__| |_| | |\  | | | | |___| |\  | | |
         \____\___/|_| \_| |_| |_____|_| \_| |_|

      -->

      <article id="page-plain-content-section">
        <div class="container-fluid has-breakpoint">
          <div class="row">
            <div class="col-md-12">

              <div id="page-plain-content-title">

                <?php 
                  $target_search_results = '';
                  if (isset($_GET["search-param"])) {
                    $target_search_results = htmlspecialchars($_GET["search-param"]);
                  } else {
                    $target_search_results = 'machine';
                  }
                ?>
                
                <h1>Search results for “<?php echo $target_search_results; ?>”</h1>

              </div>
              <div id="page-plain-content">

                <div id="page-plain-content-item-container">

                  <div class="page-plain-content-item">
                    <h5><a href="about.php">About Us</a></h5>
                    <div class="cta-container">
                      <a href="about.php" class="plain-cta">http://transmedic.com/about-us</a>
                    </div>
                    <div class="default-copy">
                      <p>The Medical City (TMC) introduces Emprint™ Microwave Ablation (MWA), a new technology that destroys tumors using heat generated by microwave energy...</p>
                    </div>
                  </div>

                  <div class="page-plain-content-item">
                    <h5><a href="article.php">The Medical City (TMC) introduces Emprint™ Microwave Ablation (MWA)</a></h5>
                    <div class="cta-container">
                      <a href="article.php" class="plain-cta">http://transmedic.com/news/article123</a>
                    </div>
                    <div class="default-copy">
                      <p>The Medical City (TMC) introduces Emprint™ Microwave Ablation (MWA), a new technology that destroys tumors using heat generated by microwave energy...</p>
                    </div>
                  </div>

                </div> <!-- page-plain-content-item-container -->
              </div>


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