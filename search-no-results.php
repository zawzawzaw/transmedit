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
                <h1>Search results for “machine”</h1>
              </div>
              <div id="page-plain-content">
                <div class="default-copy">
                  <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                </div>
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
