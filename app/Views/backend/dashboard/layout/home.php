<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="upload/image/logo/LOGO-DOAN.png" type="image/png" sizes="30x30">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo BASE_URL; ?>">
    <title><?php echo NAME_TITLE; ?></title>
    <?php
        $css = [
            ASSET_BACKEND.'css/bootstrap.min.css',
            ASSET_BACKEND.'font-awesome/css/font-awesome.css',
            ASSET_BACKEND.'css/plugins/toastr/toastr.min.css',
            ASSET_BACKEND.'js/plugins/gritter/jquery.gritter.css',
            ASSET_BACKEND.'css/animate.css',
            ASSET_BACKEND.'css/inputTags.min.css',
            ASSET_BACKEND.'plugin/select2/dist/css/select2.min.css',
            ASSET_BACKEND.'/plugin/datapicker/datepicker3.css',
            ASSET_BACKEND.'css/plugins/daterangepicker/daterangepicker-bs3.css',
            // ASSET_BACKEND.'plugin/jquery-ui.css',
            ASSET_BACKEND.'plugin/simplepicker-main/dist/simplepicker.css',
            ASSET_BACKEND.'css/style.css',
            ASSET_BACKEND.'css/customize.css',
            ASSET_BACKEND.'css/vastyle.css',
            ASSET_BACKEND.'css/plugins/sweetalert/sweetalert.css',
            ASSET_BACKEND.'css/plugins/codemirror/codemirror.css',
            ASSET_BACKEND.'css/plugins/codemirror/ambiance.css',
            ASSET_BACKEND.'/plugin/datetimepicker-master/build/jquery.datetimepicker.min.css',
            ASSET_BACKEND.'/plugin/jquery-nice-select-1.1.0/css/nice-select.css',
            ASSET_BACKEND.'css/plugins/switchery/switchery.css',
            ASSET_BACKEND.'css/plugins/blueimp/css/blueimp-gallery.min.css',
            ASSET_BACKEND.'css/plugins/jasny/jasny-bootstrap.min.css',
            ASSET_BACKEND.'css/plugins/footable/footable.core.css',
            ASSET_BACKEND.'css/plugins/dataTables/datatables.min.css',
            // biểu đồ
            ASSET_BACKEND.'css/plugins/morris/morris-0.4.3.min.css',

        ];
    ?>
    <?php foreach($css as $key => $val){
        echo '<link href="'.$val.'" rel="stylesheet">';
    } ?>
    <script src="public/backend/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        var BASE_URL = '<?php echo BASE_URL; ?>';
        var SUFFIX = '<?php echo HTSUFFIX; ?>';
    </script>
</head>
<body>

    <div id="wrapper">
    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title" style="display: block;"></h3>
        <!-- <a class="prev">‹</a> -->
        <!-- <a class="next">›</a> -->
        <a class="close" style="display: block;">×</a>
        <!-- <a class="play-pause"></a> -->
        <!-- <ol class="indicator"></ol> -->
    </div>
       <?php echo view('backend/dashboard/common/sidebar') ?>
        <div id="page-wrapper" class="gray-bg dashbard-1 <?php echo (isset($fixWrapper)) ? $fixWrapper : '' ?>">
            <?php echo view('backend/dashboard/common/nav') ?>
            <?php echo view( (isset($template)) ? $template  :'' ) ?>
            
            <?php echo view('backend/dashboard/common/footer') ?>
        </div>


    </div>
    <!-- Mainly scripts -->
    <?php
        $script = [
            ASSET_BACKEND.'js/jquery-3.1.1.min.js',
            ASSET_BACKEND.'js/bootstrap.min.js',
            ASSET_BACKEND.'js/plugins/metisMenu/jquery.metisMenu.js',
            ASSET_BACKEND.'js/plugins/slimscroll/jquery.slimscroll.min.js',
            ASSET_BACKEND.'js/inspinia.js',
            ASSET_BACKEND.'js/plugins/pace/pace.min.js',
            // ASSET_BACKEND.'js/plugins/jquery-ui/jquery-ui.min.js',
            ASSET_BACKEND.'js/plugins/gritter/jquery.gritter.min.js',
            ASSET_BACKEND.'js/plugins/sparkline/jquery.sparkline.min.js',
            ASSET_BACKEND.'js/plugins/nestable/jquery.nestable.js',
            ASSET_BACKEND.'js/demo/sparkline-demo.js',
            ASSET_BACKEND.'plugin/simplepicker-main/dist/simplepicker.js',
            ASSET_BACKEND.'js/plugins/codemirror/codemirror.js',
            ASSET_BACKEND.'js/plugins/fullcalendar/moment.min.js',
            ASSET_BACKEND.'js/plugins/daterangepicker/daterangepicker.js',
            ASSET_BACKEND.'js/plugins/codemirror/mode/javascript/javascript.js',
            ASSET_BACKEND.'js/plugins/toastr/toastr.min.js',
            ASSET_BACKEND.'js/plugins/datapicker/bootstrap-datepicker.js',
            ASSET_BACKEND.'js/plugins/sweetalert/sweetalert.min.js',
            // ASSET_BACKEND.'plugin/jquery-ui.js',
            ASSET_BACKEND.'plugin/timeago.js',
            ASSET_BACKEND.'plugin/inputTags.jquery.min.js',
            ASSET_BACKEND.'plugin/ckfinder/ckfinder.js',
            ASSET_BACKEND.'plugin/ckeditor/ckeditor.js',
            ASSET_BACKEND.'library/ckfinder.js',
            ASSET_BACKEND.'plugin/select2/dist/js/select2.min.js',
            ASSET_BACKEND.'plugin/Select-All-Checkboxes-jQuery-checkboxAll/jquery.checkboxall-1.0.min.js',
            ASSET_BACKEND.'plugin/datetimepicker-master/build/jquery.datetimepicker.full.min.js',
            ASSET_BACKEND.'plugin/jquery-nice-select-1.1.0/js/jquery.nice-select.min.js',
            ASSET_BACKEND.'library/library.js',
            ASSET_BACKEND.'js/plugins/switchery/switchery.js',
            ASSET_BACKEND.'js/plugins/blueimp/jquery.blueimp-gallery.min.js',
            ASSET_BACKEND.'js/plugins/jasny/jasny-bootstrap.min.js',
            ASSET_BACKEND.'js/plugins/footable/footable.all.min.js',
            ASSET_BACKEND.'js/plugins/dataTables/datatables.min.js',
            // biểu đồ
            ASSET_BACKEND.'js/plugins/morris/raphael-2.1.0.min.js',
            ASSET_BACKEND.'js/plugins/morris/morris.js',
            ASSET_BACKEND.'js/demo/morris-demo.js',
            ASSET_BACKEND.'plugin/jquery-table2excel-master/dist/jquery.table2excel.js',

        ];

        if(isset($module) && !empty($module)){
            if(file_exists(ASSET_BACKEND.'library/module/'.$module.'.js')){
                $script[count($script)+1] = ASSET_BACKEND.'library/module/'.$module.'.js';
            }
        }


    ?>
    <?php foreach($script as $key => $val){
        echo '<script src="'.$val.'"></script>';
    } ?>

  <?php echo view('backend/dashboard/common/notification') ?>
</body>
</html>
