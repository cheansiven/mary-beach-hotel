<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="keywords" content="<?php echo  $this->meta_keywords ?>" />
        <meta name="title" content="<?php echo  $this->meta_title ?>" />
        <meta name="description" content="<?php echo  $this->meta_description ?>" />
        <meta name="author" content="">
        <meta name="uri-translation" content="on" />
        <title><?php echo  $this->meta_title ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url('public/css/main.css') ?>">
    
        <script src="<?php echo base_url('public/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
        <script> var base_url = "<?php echo base_url() ?>"; </script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
            @media (min-width: 1200px) {
                html {
                    background: url(<?php echo base_url('public/img/background/'.$bg_image_lt) ?>) no-repeat fixed;
                    background-position: center;
                    background-size: cover;
                }
                body {
                    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php echo base_url('public/img/background/'.$bg_image) ?>) center no-repeat fixed;
                    background-size: cover;
                }
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <main role="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="wrap-body">
                    
                        <div class="<?php echo $page_name ?>_menu_bg">
                            <?php if($page_name !== 'home') : ?>
                            <!-- Not for home page -->
                            <div class="menu-top container">
                                <a href="<?php echo base_url() ?>">home</a>
                                <img src="<?php echo base_url('public/img/mbb-icon-main-menu.png') ?>" alt="mary bungalow">
                                <a href="http://www.channelmanager.com.au/BookAndPayNow/BookAndPayNowRooms.aspx?id=10422&Body=@CCCCCC&Hdr=@787878&Add=@787878&GridHF=@32608B&pop=@32608B&nav=@193E61&btn=@193E61&lnk=@32608B&bkgshdr=@787878" target="_blank">book</a>
                            </div> <!-- /.menu-top -->
                            <?php endif ?>
                        </div>