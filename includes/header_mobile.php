<?php 
  global $current_page;
?>

<!--
   __  __  ___  ____ ___ _     _____   _   _ _____    _    ____  _____ ____
  |  \/  |/ _ \| __ )_ _| |   | ____| | | | | ____|  / \  |  _ \| ____|  _ \
  | |\/| | | | |  _ \| || |   |  _|   | |_| |  _|   / _ \ | | | |  _| | |_) |
  | |  | | |_| | |_) | || |___| |___  |  _  | |___ / ___ \| |_| | |___|  _ <
  |_|  |_|\___/|____/___|_____|_____| |_| |_|_____/_/   \_\____/|_____|_| \_\

-->


<header id="header-mobile">
  <div class="white-bg"></div>

  <div id="header-mobile-content-container">
    <div id="header-mobile-logo-container">
      <!-- <a id="header-mobile-logo" href="index.php" title="Transmedic - Advancing Medical Technologies"></a> -->
      <a id="header-mobile-logo" href="index.php" title="Transmedic - Advancing Medical Technologies"></a>
    </div>

    <div id="header-mobile-menu-opener-container">
      <a id="header-mobile-menu-opener" href="javascript:void(0);">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>
  </div>

</header> <!-- header-mobile -->

<div id="header-mobile-expand">

  <div class="header-mobile-spacer"></div>

  <div id="header-search-mobile">
    <form id="header-search-mobile-form" action="search.php" method="GET">
      <input type="text" name="search-param">
      <input type="submit" value="">
    </form>
  </div>
      
  <div class="container-fluid">
    <div class="col-sm-10 col-sm-push-1 col-xs-12 col-xs-push-0">

      <div id="header-menu-mobile">
        <nav>
          <ul>
            <li><a href="about.php" data-page="page-about">About Us</a></li>
            <li><a href="products.php" data-page="page-products">Products</a></li>
            <li><a href="news.php" data-page="page-news">News</a></li>
            <li><a href="careers.php" data-page="page-careers">Careers</a></li>
            <li><a href="contact.php" data-page="page-contact">Contact</a></li>
            <li><a href="contact.php" class="custom-highlight" data-page="page-contact">Staff login</a></li>
          </ul>
        </nav>
      </div>

    </div>
  </div>

</div> <!-- header-mobile-expand -->
