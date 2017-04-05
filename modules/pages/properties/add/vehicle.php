<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
   <?php require 'modules/components/nav.php'; ?>
   
   <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- HEADER PAGE -->
                    <header class="header-page">
                        <h1 class="title">Tambah Transportasi</h1>
                        <a href="properties.php" class="btn-grey"> Batalkan</a>
                    </header>
                    <!-- END HEADER PAGE -->

                    <?php require 'modules/pages/properties/add/form-vehicle.php'; ?>

                </div>
            </div> 
        </div>
   </section>
   
   <?php require 'all-javascript.php'; ?>
 
</body>
</html>