<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
     <link href="dist/css/select.css" rel="stylesheet" />
</head>
<body>
  <?php require 'modules/components/nav.php'; ?>

<!-- MAIN CONTENT -->
<section class="main main-information">
   <div class="container">
       <div class="row">
            <div class="col-md-12">
                 <!-- HEADER PAGE -->
                <header class="header-page">
                    <h1 class="title">Informasi</h1>
                </header>
                <!-- END HEADER PAGE -->
            </div>
            <div class="clearfix"></div>

            <!-- section Tabs -->
            <div class="col-md-12">
                <ul class="tabs">
                    <li class="active" rel="vendor">vendor</li>
                    <li rel="bank">Akun Bank</li>
                    <li rel="cc">Akun Kartu Kredit</li>
                </ul>
                <div class="tab_container"> 
                    <h3 class="d_active tab_drawer_heading" rel="vendor">vendor</h3>
                    <div id="vendor" class="tab_content">
                        <?php require 'modules/pages/information/vendor.php'; ?>
                    </div>
                    <!-- #vendor -->
                    
                    <h3 class="tab_drawer_heading" rel="bank">Akun Bank</h3>
                    <div id="bank" class="tab_content">
                        <?php require 'modules/pages/information/bank.php'; ?>
                    </div>
                    <!-- #Bank -->

                    <h3 class="tab_drawer_heading" rel="cc">Akun Kartu Kredit</h3>
                    <div id="cc" class="tab_content">
                        <?php require 'modules/pages/information/cc.php'; ?>
                    </div>
                    <!-- #Bank -->

                </div>
                <!-- .tab_container -->
            </div>
            <!-- end section Tabs -->
            
          

            <div class="clearfix"></div>

            <!-- table transaction -->
            
            <!-- end Table transaction -->

       </div>
   </div>

</section>

<!-- Modal add Bank -->
<?php require 'modules/pages/information/modal-bank.php'; ?>
<!-- end Modal add Bank -->

<!-- Modal edit Bank -->
<?php require 'modules/pages/information/edit-modal-bank.php'; ?>
<!-- end Modal edit Bank -->


<!-- Modal add CC -->
<?php require 'modules/pages/information/modal-cc.php'; ?>
<!-- end Modal add CC -->


<!--  END MAIN CONTENT -->

   <?php require 'modules/components/footer.php'; ?>
   <?php require 'all-javascript.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
   <script type="text/javascript">
      $("select.select-provinsi").select2();
      $("select.select-kota").select2();
      $("select.select-kecamatan").select2();
   </script>

 
</body>
</html>