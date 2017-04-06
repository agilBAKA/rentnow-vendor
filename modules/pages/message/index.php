<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body class="body-message">
   <?php require 'modules/components/nav.php'; ?>

<!-- MAIN CONTENT -->
<section class="main">
    <div class="container">
       <div class="row">

       		<div class="col-md-12">
 	  			<!-- HEADER PAGE -->
                <header class="header-page">
                    <h1 class="title">Pesan</h1>
                </header>
                <!-- END HEADER PAGE -->
       		</div>
       		<div class="clearfix"></div>

            <div class="col-md-9">
                <div class="container-message">

                    <!-- sidebar message -->
                    <?php require 'modules/pages/message/sidebar-message.php'; ?>
                    <!-- end sidebar message -->

                    <!-- content message -->
                    <?php require 'modules/pages/message/content-message.php'; ?>
                    <!-- end content message -->
                    <!-- end content message -->
                
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-renter">
                    <h3>Penyewa Produk Anda</h3>
                    <p class="info">
                        Klik foto untuk mengirim pesan kepada penyewa
                    </p>
                    <ul>
                        <li class="list-renter">
                            <a href="">
                                <figure class="avatar">
                                    <img src="dist/images/avatar.jpg" alt="" class="img-cover">
                                </figure>
                                <div class="label-renter">
                                    <label class="name">Devi Krisdiansyah</label>
                                    <p>
                                        2 hari tersisa
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="list-renter">
                            <a href="">
                                <figure class="avatar">
                                    <img src="dist/images/avatar.jpg" alt="" class="img-cover">
                                </figure>
                                <div class="label-renter">
                                    <label class="name">Devi Krisdiansyah</label>
                                    <p>
                                        2 hari tersisa
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="list-renter">
                            <a href="">
                                <figure class="avatar">
                                    <img src="dist/images/avatar.jpg" alt="" class="img-cover">
                                </figure>
                                <div class="label-renter">
                                    <label class="name">Devi Krisdiansyah</label>
                                    <p>
                                        2 hari tersisa
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
<!--  END MAIN CONTENT -->

<?php require 'all-javascript.php'; ?>
<script type="text/javascript">
    
    $(document).ready(function () {
        var heightBody    = $('body').outerHeight(),
            heightNav     = $('nav.navigation').outerHeight(),
            heightHeader  = $('.header-page').outerHeight(),
            heightMessage = heightBody - (heightNav + heightHeader);

        $('.container-message').css('height', +heightMessage+'px');
        
        $('.sidebar-message-body').css('height', +heightMessage - 60 +'px');
        $('.box-message').css('height', +heightMessage - 60 - 50 +'px');
    })
</script> 
</body>
</html>