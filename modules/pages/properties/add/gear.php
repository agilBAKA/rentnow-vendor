<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
     <link rel="stylesheet" href="dist/css/vendor/jquery.fileuploader.css">
</head>
<body>
   <?php require 'modules/components/nav.php'; ?>
   
   <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!-- HEADER PAGE -->
                    <header class="header-page">
                        <h1 class="title">Tambah Perlengkapan</h1>
                        <a href="properties.php" class="btn-grey btn-cancel">
                          <i class="zmdi zmdi-close"></i>
                          <span>Batalkan</span>
                        </a>
                    </header>
                    <!-- END HEADER PAGE -->

                    <?php require 'modules/pages/properties/add/form-gear.php'; ?>

                </div>
            </div> 
        </div>
   </section>

    <!-- Modal tarif -->
    <?php require 'modules/pages/properties/modal-tarif.php'; ?>
    <!-- end Modal tarif -->


    <?php require 'modules/components/footer.php'; ?>

   <?php require 'all-javascript.php'; ?>
   <script type="text/javascript" src="dist/js/vendor/jquery.fileuploader.min.js"></script>
   <script type="text/javascript">
   $(document).ready(function () {
        $('input[name="files_stnk"]').fileuploader({
            theme: 'onebutton'
        });
       
        // enable fileuploader plugin
    $('input[name="files_product"]').fileuploader({
        extensions: ['jpg', 'jpeg', 'png', 'gif', 'bmp'],
        changeInput: ' ',
        theme: 'thumbnails',
        enableApi: true,
        addMore: true,
        thumbnails: {
            box: '<div class="fileuploader-items">' +
                      '<ul class="fileuploader-items-list">' +
                          '<li class="fileuploader-thumbnails-input"><div class="fileuploader-thumbnails-input-inner">+</div></li>' +
                      '</ul>' +
                  '</div>',
            item: '<li class="fileuploader-item">' +
                       '<div class="fileuploader-item-inner">' +
                           '<div class="thumbnail-holder">${image}</div>' +
                           '<div class="actions-holder">' +
                               '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>' +
                           '</div>' +
                           '<div class="progress-holder">${progressBar}</div>' +
                       '</div>' +
                   '</li>',
            item2: '<li class="fileuploader-item">' +
                       '<div class="fileuploader-item-inner">' +
                           '<div class="thumbnail-holder">${image}</div>' +
                           '<div class="actions-holder">' +
                               '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>' +
                           '</div>' +
                       '</div>' +
                   '</li>',
            startImageRenderer: true,
            canvasImage: false,
            _selectors: {
                list: '.fileuploader-items-list',
                item: '.fileuploader-item',
                start: '.fileuploader-action-start',
                retry: '.fileuploader-action-retry',
                remove: '.fileuploader-action-remove'
            },
            onItemShow: function(item, listEl) {
                var plusInput = listEl.find('.fileuploader-thumbnails-input');
                
                plusInput.insertAfter(item.html);
                
                if(item.format == 'image') {
                    item.html.find('.fileuploader-item-icon').hide();
                }
            }
        },
        afterRender: function(listEl, parentEl, newInputEl, inputEl) {
            var plusInput = listEl.find('.fileuploader-thumbnails-input'),
                api = $.fileuploader.getInstance(inputEl.get(0));
        
            plusInput.on('click', function() {
                api.open();
            });
        },
        /*
        // while using upload option, please set
        // startImageRenderer: false
        // for a better effect
        upload: {
            url: './php/upload_file.php',
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            start: true,
            synchron: true,
            beforeSend: null,
            onSuccess: function(data, item) {
                setTimeout(function() {
                    item.html.find('.progress-holder').hide();
                    item.renderImage();
                }, 400);
            },
            onError: function(item) {
                item.html.find('.progress-holder').hide();
                item.html.find('.fileuploader-item-icon i').text('Failed!');
                
                setTimeout(function() {
                    item.remove();
                }, 1500);
            },
            onProgress: function(data, item) {
                var progressBar = item.html.find('.progress-holder');
                
                if(progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
            }
        },
        dragDrop: {
            container: '.fileuploader-thumbnails-input'
        },
        onRemove: function(item) {
            $.post('php/upload_remove.php', {
                file: item.name
            });
        },
        */
    });
   })
   </script>
 
</body>
</html>