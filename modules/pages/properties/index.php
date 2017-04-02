<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
   <?php require 'modules/components/nav.php'; ?>

<!-- MAIN CONTENT -->
<section class="main main-properties">
   <div class="container">
       <div class="row">

            <div class="col-md-12">
                 <!-- HEADER PAGE -->
                <header class="header-page">
                    <h1 class="title">Produk</h1>
                </header>
                <!-- END HEADER PAGE -->
            </div>
            <div class="clearfix"></div>

            <!-- section Tabs -->
            <div class="col-md-12">
                <ul class="tabs">
                    <li class="active" rel="transportasi">Transportasi</li>
                    <li rel="akomodasi">Akomodasi</li>
                    <li rel="perlengkapan">Perlengkapan</li>
                </ul>
                <div class="tab_container">

                    <h3 class="d_active tab_drawer_heading" rel="transportasi">Transportasi</h3>
                    <div id="transportasi" class="tab_content">
                        <?php require 'modules/pages/properties/table-transportation.php'; ?>
                    </div>
                    <!-- #transportasi -->
                
                    <h3 class="tab_drawer_heading" rel="akomodasi">akomodasi</h3>
                    <div id="akomodasi" class="tab_content">
                        <?php require 'modules/pages/properties/table-accomodation.php'; ?>
                    </div>
                    <!-- #akomodasi -->
                
                    <h3 class="tab_drawer_heading" rel="perlengkapan">Perlengkapan</h3>
                    <div id="perlengkapan" class="tab_content">
                        <?php require 'modules/pages/properties/table-gear.php'; ?>
                    </div>
                    <!-- #perlengkapan -->
                </div>
                <!-- .tab_container -->
            </div>
            <!-- end section Tabs -->

       </div>
   </div>

</section>
<!--  END MAIN CONTENT -->

   <?php require 'modules/components/footer.php'; ?>
   
   <?php require 'all-javascript.php'; ?>
 
</body>
</html>