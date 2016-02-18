<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Administrator | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="http://localhost/appts.local/public/packages/pingpong/admin/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="http://localhost/appts.local/public/packages/pingpong/admin/components/fontawesome/css/font-awesome.min.css" rel="stylesheet"
    type="text/css"/>
    <!-- Ionicons -->
    <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Morris chart -->
    <link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/morris/morris.css" rel="stylesheet" type="text/css"/>
    <!-- jvectormap -->
    <link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css"/>
    <!-- Date Picker -->
    <link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css"/>
    <!-- Daterange picker -->
    <link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/css/AdminLTE.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    .required{
          color:red;
    }
</style>
    </head>
<body class="skin-blue fixed">

 @include('admin.header')

    <div class="wrapper row-offcanvas row-offcanvas-left">

        @include('admin.leftside')

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            @yield('content')
        </aside>
    </div>


    <!-- add new calendar event modal -->
        <script src="http://localhost/appts.local/public/packages/pingpong/admin/components/jquery/dist/jquery.min.js"></script>
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/components/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

    <!-- AdminLTE App -->
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/adminlte/js/AdminLTE/app.js" type="text/javascript"></script>
    <script src="http://localhost/appts.local/public/packages/pingpong/admin/js/all.js" type="text/javascript"></script>
            
        <script src="http://localhost/appts.local/public/packages/pingpong/admin/vendor/ckeditor/ckeditor.js"></script>

        <script src="http://localhost/appts.local/public/packages/pingpong/admin/vendor/ckfinder/ckfinder.js"></script>

        
        <script type="text/javascript">
            var prefix = '{{url('')}}';
            CKEDITOR.editorConfig = function( config ) {
               config.filebrowserBrowseUrl = prefix + '/vendor/ckfinder/ckfinder.html';
               config.filebrowserImageBrowseUrl = prefix + '/vendor/ckfinder/ckfinder.html?type=Images';
               config.filebrowserFlashBrowseUrl = prefix + '/vendor/ckfinder/ckfinder.html?type=Flash';
               config.filebrowserUploadUrl = prefix + '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
               config.filebrowserImageUploadUrl = prefix + '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
               config.filebrowserFlashUploadUrl = prefix + '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
            };

            var editor1 = CKEDITOR.replace( 'summary' );
            CKFinder.setupCKEditor( editor1, prefix + '/vendor/ckfinder/') ;
            var editor2 = CKEDITOR.replace( 'description' );
            CKFinder.setupCKEditor( editor2, prefix + '/vendor/ckfinder/') ;
        </script>
        <!-- from validator -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
        <script>
          $.validate({
            validateOnBlur : false, // disable validation when input looses focus
            errorMessagePosition : 'top', // Instead of 'element' which is default
            scrollToTopOnError : false // Set this property to true if you have a long form
          });
        </script>
        {!!Html::script('js/custom.js')!!}
        <script type="text/javascript">
            function addDetail() {
                $('#detailBody').attr('data-count',parseInt($('#detailBody').attr('data-count')) + 1);

                var temp = "<tr id='detail_"+parseInt($('#detailBody').attr('data-count'))+"'>" + 
                                "<td><input placeholder='No. of Positions' name='detail["+parseInt($('#detailBody').attr('data-count'))+"][noOfPosition]' type='number' min='1' data-validation='required'></td>" +
                                "<td><input placeholder='Address' name='detail["+parseInt($('#detailBody').attr('data-count'))+"][address]' type='text' data-validation='required'></td>" +
                                "<td><select data-validation='required' name='detail["+parseInt($('#detailBody').attr('data-count'))+"][country]' >"+
                                    "<?php
                                        $option = '';
                                        foreach ($countries as $index => $value) {
                                            $option .= "<option value='".$index."'>".$value."</option>";
                                        }
                                        echo $option;
                                     ?>"
                                +"</select></td>" +
                                "<td><input data-validation='required' placeholder='District' name='detail["+parseInt($('#detailBody').attr('data-count'))+"][district]' type='text'></td>" +
                                "<td><a href='#' onclick='removeDetail()'><span class='glyphicon glyphicon-trash'></span></a></td>" +

                            "</tr>";
                $('#detailBody').append(temp);
            }

        </script>
</body>
</html>
