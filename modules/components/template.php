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
                        <h1 class="title">Template form</h1>
                        <a href="" class="btn-grey"> cancel</a>
                    </header>
                    <!-- END HEADER PAGE -->

                    <!-- TABS -->
                    <div class="box-tabs">
                        <?php require 'modules/components/tabs.php'; ?>
                    </div>
                    <!-- END TABS -->

                    <!-- CONTENT FORM -->
                        <?php require 'modules/components/form.php'; ?>
                    <!-- END CONTENT FORM -->

                    <!-- CONTENT TABLE -->
                        <?php require 'modules/components/template/table.php'; ?>
                    <!-- END CONTENT TABLE -->

                </div>
            </div> 
        </div>
   </section>
   
   <?php require 'all-javascript.php'; ?>
 
</body>
</html>