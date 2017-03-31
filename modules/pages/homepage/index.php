<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
   <?php require 'modules/components/nav.php'; ?>

<!-- MAIN CONTENT -->
<section class="main">
   <div class="container">
       <div class="row">

       		<div class="col-md-12">
 	  			<!-- HEADER PAGE -->
                <header class="header-page">
                    <h1 class="title">Ringkasan Akun</h1>
                </header>
                <!-- END HEADER PAGE -->
       		</div>

       		<div class="clearfix"></div>
       		
       		<!-- Filter revenue -->
			<?php require 'modules/pages/homepage/revenue.php'; ?>
       		<!-- end Filter revenue -->

       		<!-- properties -->
			<?php require 'modules/pages/homepage/properties.php'; ?>
       		<!-- end  properties -->

       		<div class="clearfix"></div>

       		<!-- Graph revenue -->
			<?php require 'modules/pages/homepage/graph-revenue.php'; ?>
       		<!-- end Graph revenue -->

       		<!-- latest transaction -->
			<?php require 'modules/pages/homepage/latest-transaction.php'; ?>
       		<!-- end latest transaction -->

			<div class="clearfix"></div>

       </div>
   </div>

</section>
<!--  END MAIN CONTENT -->

   <?php require 'modules/components/footer.php'; ?>
   
   <?php require 'all-javascript.php'; ?>
 
</body>
</html>