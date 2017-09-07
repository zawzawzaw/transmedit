<?php 
  global $current_page;
  $current_page = "page-products";

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
      
      <article id="page-products-brands-section">
        <div class="container-fluid has-breakpoint">

          <div class="row">
            <div class="col-md-12">

              <div id="page-products-brands-title">
                <h2>Our Brands</h2>
                <p><b>As the leading provider of advanced medical technologies, we have a large selection of brands that cater to various needs. Click through to the brand websites and contact our specific teams for any enquiries.</b></p>
              </div> <!-- page-home-whatwedo-title -->

            </div>
          </div> <!-- row -->

          <div class="row">
            <div class="col-md-12">
                
              <div id="page-products-brands-tabs-container">
                
                <div id="page-products-brands-tabs-icons">
                  <ul>
                    <li>
                      <a href="#" id="icon-view-btn" data-view="icon" class="change-tab active">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#" id="list-view-btn" data-view="list" class="change-tab ">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                      </a>
                    </li>
                  </ul>
                </div>
                                
                <div id="page-products-brands-icon-view-tab" class="products-brands-tabs active-tab">
                    
                  <div class="scroll-target" data-value="surgical"></div>                
                  <div class="page-products-brands-icon-view-tab-item">

                    <h5 class="item-title add-space-version">Surgical</h5>

                    <ul class="item-icons-list">
                      <li><div class="surgical-icon-1 item-icon"></div></li>
                      <li><div class="surgical-icon-2 item-icon"></div></li>
                    </ul>

                    <div class="item-copy">
                      <p>To find out more about the full range of our surgical products, please email <a href="mailto:enquiries@transmedicgroup.com">enquiries@transmedicgroup.com</a></p>
                    </div>

                  </div> <!-- page-products-brands-icon-view-tab-item -->
                  
                  <div class="scroll-target" data-value="orthopaedics"></div>       
                  <div class="page-products-brands-icon-view-tab-item">

                    <h5 class="item-title">Orthopaedics</h5>

                    <ul class="item-icons-list align-middle">
                      <li><div class="orthopaedics-icon-1 item-icon"></div></li>
                      <li><div class="orthopaedics-icon-2 item-icon"></div></li>
                      <li><div class="orthopaedics-icon-3 item-icon"></div></li>
                      <li><div class="orthopaedics-icon-4 item-icon"></div></li>
                    </ul>

                    <div class="item-copy">
                      <p>To find out more about the full range of our orthopaedicsl products, please email <a href="mailto:enquiries@transmedicgroup.com">enquiries@transmedicgroup.com</a></p>
                    </div>

                  </div> <!-- page-products-brands-icon-view-tab-item -->
                    
                  <div class="scroll-target" data-value="in-vitro-diagnostics"></div>                
                  <div class="page-products-brands-icon-view-tab-item">

                    <h5 class="item-title add-space-version">In-vitro Diagnostics</h5>

                    <ul class="item-icons-list">
                      <li><div class="in-vitro-icon-1 item-icon"></div></li>
                      <li><div class="in-vitro-icon-2 item-icon"></div></li>
                      <li><div class="in-vitro-icon-3 item-icon"></div></li>
                    </ul>

                    <div class="item-copy">
                      <p>To find out more about the full range of our in-vitro diagnostics products, please email <a href="mailto:enquiries@transmedicgroup.com">enquiries@transmedicgroup.com</a></p>
                    </div>

                  </div> <!-- page-products-brands-icon-view-tab-item -->
                  
                  <div class="scroll-target" data-value="specialty-pharmaceuticals-medical"></div>                
                  <div class="page-products-brands-icon-view-tab-item">

                    <h5 class="item-title">Specialty Pharmaceuticals / Medicine</h5>

                    <ul class="item-icons-list align-middle">
                      <li><div class="pharmaceuticals-icon-1 item-icon"></div></li>
                      <li><div class="pharmaceuticals-icon-2 item-icon"></div></li>
                      <li><div class="pharmaceuticals-icon-3 item-icon"></div></li>
                      <li><div class="pharmaceuticals-icon-4 item-icon"></div></li>
                      <li><div class="pharmaceuticals-icon-5 item-icon"></div></li>
                    </ul>

                    <div class="item-copy">
                      <p>To find out more about the full range of our specialty pharmaceuticals and medicine, please email <a href="mailto:enquiries@transmedicgroup.com">enquiries@transmedicgroup.com</a></p>
                    </div>

                  </div> <!-- page-products-brands-icon-view-tab-item -->
                  
                  <div class="scroll-target" data-value="turnkey-solutions"></div>                
                  <div class="page-products-brands-icon-view-tab-item">

                    <h5 class="item-title">Turnkey Solutions</h5>

                    <ul class="item-icons-list align-middle">
                      <li><div class="turnkey-icon-1 item-icon"></div></li>
                      <li><div class="turnkey-icon-2 item-icon"></div></li>
                      <li><div class="turnkey-icon-3 item-icon"></div></li>
                    </ul>

                    <div class="item-copy">
                      <p>To find out more about the full range of our turnkey solutions, please email <a href="mailto:enquiries@transmedicgroup.com">enquiries@transmedicgroup.com</a></p>
                    </div>

                  </div> <!-- page-products-brands-icon-view-tab-item -->
                  
                  <div class="scroll-target" data-value="therapeutics"></div>                
                  <div class="page-products-brands-icon-view-tab-item">

                    <h5 class="item-title add-space-version">Therapeutics</h5>

                    <ul class="item-icons-list align-middle">
                      <li><div class="therapeutics-icon-1 item-icon"></div></li>
                      <li><div class="therapeutics-icon-2 item-icon"></div></li>
                      <li><div class="therapeutics-icon-3 item-icon"></div></li>
                      <li><div class="therapeutics-icon-4 item-icon"></div></li>
                    </ul>

                    <div class="item-copy">
                      <p>To find out more about the full range of our therapeutics products, please email <a href="mailto:enquiries@transmedicgroup.com">enquiries@transmedicgroup.com</a></p>
                    </div>

                  </div> <!-- page-products-brands-icon-view-tab-item -->
                  
                  <div class="scroll-target" data-value="interventional-therapy"></div>                
                  <div class="page-products-brands-icon-view-tab-item">

                    <h5 class="item-title">Interventional Therapy</h5>

                    <ul class="item-icons-list align-middle">
                      <li><div class="interventional-icon-1 item-icon"></div></li>
                      <li><div class="interventional-icon-2 item-icon"></div></li>
                      <li><div class="interventional-icon-3 item-icon"></div></li>
                      <li><div class="interventional-icon-4 item-icon"></div></li>
                    </ul>

                    <div class="item-copy">
                      <p>To find out more about the full range of our interventional therapy products, please email <a href="mailto:enquiries@transmedicgroup.com">enquiries@transmedicgroup.com</a></p>
                    </div>

                  </div> <!-- page-products-brands-icon-view-tab-item -->

                </div> <!-- page-products-brands-icon-view-tab -->

                <div id="page-products-brands-list-view-tab" class="products-brands-tabs ">
                  
                  <div id="page-products-brands-list-view-title">
                    <!-- <p><b>List view</b></p>
                    <p>To find out more about the full range of our products, please send in your enquiry to our specific sales teams.</p> -->
                  </div>

                  <div id="page-products-brands-list-view-items">
                    <div class="page-products-brands-list-view-item">
                      <h5 class="item-title">Surgical</h5>
                      <ul class="item-list">
                        <li><p><b>ISI</b></p></li>
                        <li><p><b>Thoratec (Abbott)</b></p></li>
                      </ul>
                      <p class="item-email">Email: <a href="mailto:enquiry@transmedic.com">enquiry@transmedic.com</a></p>
                    </div>
                    <div class="page-products-brands-list-view-item">
                      <h5 class="item-title">Orthopaedics</h5>
                      <ul class="item-list">
                        <li><p><b>Stryker</b></p></li>
                        <li><p><b>Mako</b></p></li>
                        <li><p><b>Depuy Synthes</b></p></li>
                        <li><p><b>K2M</b></p></li>
                      </ul>
                      <p class="item-email">Email: <a href="mailto:enquiry@transmedic.com">enquiry@transmedic.com</a></p>
                    </div>
                    <div class="page-products-brands-list-view-item">
                      <h5 class="item-title">In-vitro Diagnostics</h5>
                      <ul class="item-list">
                        <li><p><b>Abbott POC</b></p></li>
                        <li><p><b>iLine Microsystems</b></p></li>
                        <li><p><b>Haemonetics TEG</b></p></li>
                      </ul>
                      <p class="item-email">Email: <a href="mailto:enquiry@transmedic.com">enquiry@transmedic.com</a></p>
                    </div>
                    <div class="page-products-brands-list-view-item">
                      <h5 class="item-title">Turnkey Solutions</h5>
                      <ul class="item-list">
                        <li><p><b>Accuray</b></p></li>
                        <li><p><b>Stryker OT Systems</b></p></li>
                        <li><p><b>IBA Proton Therapy</b></p></li>
                      </ul>
                      <p class="item-email">Email: <a href="mailto:enquiry@transmedic.com">enquiry@transmedic.com</a></p>
                    </div>
                    <div class="page-products-brands-list-view-item">
                      <h5 class="item-title">Therapeutics</h5>
                      <ul class="item-list">
                        <li><p><b>Therak (Mallinckrodt)</b></p></li>
                        <li><p><b>Belmont</b></p></li>
                        <li><p><b>Haemonetics</b></p></li>
                        <li><p><b>Minntech (Medivators)</b></p></li>
                      </ul>
                      <p class="item-email">Email: <a href="mailto:enquiry@transmedic.com">enquiry@transmedic.com</a></p>
                    </div>
                    <div class="page-products-brands-list-view-item">
                      <h5 class="item-title">Interventional Therapy</h5>
                      <ul class="item-list">
                        <li><p><b>Volcano (Philips Medical)</b></p></li>
                        <li><p><b>Stryker NV</b></p></li>
                        <li><p><b>Medtronic</b></p></li>
                        <li><p><b>BTG</b></p></li>
                      </ul>
                      <p class="item-email">Email: <a href="mailto:enquiry@transmedic.com">enquiry@transmedic.com</a></p>
                    </div>
                    <div class="page-products-brands-list-view-item">
                      <h5 class="item-title">Specialty Pharmaceuticals / Medicine</h5>
                      <ul class="item-list">
                        <li><p><b>Baxter</b></p></li>
                        <li><p><b>Spectrum Dynamics</b></p></li>
                        <li><p><b>Eckert & Ziegler</b></p></li>
                        <li><p><b>IDB Holland</b></p></li>
                        <li><p><b>Therasphere (BTG Pharmaceuticals)</b></p></li>
                      </ul>
                      <p class="item-email">Email: <a href="mailto:enquiry@transmedic.com">enquiry@transmedic.com</a></p>
                    </div>
                  </div>

                </div> <!-- page-product-brands-list-view-tab -->                

              </div> <!-- page-products-brands-tabs-container -->  

            </div>
          </div> <!-- row -->

        </div>
      </article> <!-- page-products-brands-section -->

    </div> <!-- #page-wrapper-content -->
  </div> <!-- #page-wrapper -->

  <?php include "includes/footer_desktop.php"; ?>
  <?php include "includes/footer_mobile.php"; ?>

  <?php include "includes/script_product.php" ?>

</body>
</html>