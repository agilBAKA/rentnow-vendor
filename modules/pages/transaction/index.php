<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
   <?php require 'modules/components/nav.php'; ?>

<!-- MAIN CONTENT -->
<section class="main main-transaction">
   <div class="container">
       <div class="row">

       		<div class="col-md-12">
 	  			 <!-- HEADER PAGE -->
                <header class="header-page">
                    <h1 class="title">Transaksi</h1>
                </header>
                <!-- END HEADER PAGE -->
       		</div>
       		<div class="clearfix"></div>

            <!-- section search & filter -->
            <div class="col-md-12">
                <div class="search-block in-show">
                    <i class="zmdi zmdi-search"></i>
                    <input type="text" placeholder="Cari nama, id sewa, produk disini...">
                </div>
                <button class="btn-white btn-for-filter">
                    <i class="zmdi zmdi-filter-list"></i> Filter
                </button>
                <div class="clearfix"></div>
                <div class="box-filter">
                    <span class="close-filter">
                        <i class="zmdi zmdi-close-circle-o"></i> Tutup Filter
                    </span>
                    <form action="" class="default-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="field">
                                    <label>Jenis Produk</label>
                                    <select>
                                        <option value="">Tampilkan Semua</option>
                                        <option value="">Transportasi</option>
                                        <option value="">Akomodasi</option>
                                        <option value="">Perlengkapan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="field">
                                    <label>Status sewa</label>
                                    <select>
                                        <option value="">Tampilkan Semua</option>
                                        <option value="">Dikonfirmasi</option>
                                        <option value="">Menunggu</option>
                                        <option value="">ditolak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end section search & filter -->

            <!-- table transaction -->
            <?php require 'modules/pages/transaction/table.php'; ?>
            <!-- end Table transaction -->

       </div>
   </div>

</section>
<!--  END MAIN CONTENT -->

   <?php require 'modules/components/footer.php'; ?>
   
   <?php require 'all-javascript.php'; ?>
 
</body>
</html>