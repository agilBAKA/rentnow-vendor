<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
   <?php require 'modules/components/nav.php'; ?>

<!-- MAIN CONTENT -->
<section class="main main-wallet">
   <div class="container">
       <div class="row">

            <div class="col-md-12">
                 <!-- HEADER PAGE -->
                <header class="header-page">
                    <h1 class="title">Dompet</h1>
                </header>
                <!-- END HEADER PAGE -->
            </div>
            <div class="clearfix"></div>

            <!-- section Tabs -->
            <div class="col-md-9">
                <ul class="tabs">
                    <li class="active" rel="ringkasan">Ringkasan</li>
                    <li rel="aktifitas">aktivitas</li>
                    <li rel="withdraw">withdraw</li>
                    <li rel="topup">top up</li>
                </ul>
                <div class="tab_container"> 
                    <h3 class="d_active tab_drawer_heading" rel="ringkasan">Ringkasan</h3>
                    <div id="ringkasan" class="tab_content">
                        <?php require 'modules/pages/wallet/table-summary.php'; ?>
                    </div>
                    <!-- #ringkasan -->
                    <h3 class="tab_drawer_heading" rel="aktifitas">aktifitas</h3>
                    <div id="aktifitas" class="tab_content">
                        <?php require 'modules/pages/wallet/table-activity.php'; ?>
                    </div>
                    <!-- #aktifitas -->
                    <h3 class="tab_drawer_heading" rel="withdraw">withdraw</h3>
                    <div id="withdraw" class="tab_content">
                        <?php require 'modules/pages/wallet/table-withdraw.php'; ?>
                    </div>
                    <!-- #withdraw -->
                    <h3 class="tab_drawer_heading" rel="topup">topup</h3>
                    <div id="topup" class="tab_content">
                        <?php require 'modules/pages/wallet/table-topup.php'; ?>
                    </div>
                    <!-- #topup -->
                </div>
                <!-- .tab_container -->
            </div>
            <!-- end section Tabs -->
            
            <!-- sidebar wallet -->
            <div class="col-md-3">
                <?php require 'modules/pages/wallet/sidebar-wallet.php'; ?>
            </div>
            <!-- end sidebar wallet -->

            <div class="clearfix"></div>

            <!-- table transaction -->
            
            <!-- end Table transaction -->

       </div>
   </div>

</section>
<!--  END MAIN CONTENT -->


<!-- Modal Top up -->
<?php require 'modules/pages/wallet/modal-topup.php'; ?>
<!-- end Modal Top up -->

<!-- Modal withdraw -->
<?php require 'modules/pages/wallet/modal-withdraw.php'; ?>
<!-- end Modal withdraw -->


<?php require 'modules/components/footer.php'; ?>

<?php require 'all-javascript.php'; ?>
 
</body>
</html>