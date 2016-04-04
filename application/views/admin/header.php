<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bootstrappin&#39; Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('public/css/admin.css') ?>">
    
        <script src="<?php echo base_url('public/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
        <script> var base_url = "<?php echo base_url() ?>"; </script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header role="banner">
            <nav role="navigation" class="navbar navbar-static-top navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"  data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html" class="navbar-brand">
                            X DAYS IN ANGKOR
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <?php if ($this->session->userdata('is_logged_in')) { ?>
                            <li class="active"><a href="index.html">Main</a></li>
                            <li><a href="<?php echo base_url('admin/users/logout') ?>">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php if ($this->session->userdata('is_logged_in')) { ?>
            <div class="header-title col-sm-12">
                <div class="container">    
                    <p>4 days in Angkor Wat
                    <img src="<?php echo base_url('public/img/related.png') ?>" class="pull-right">
                    </p>
                    <span class=""></span>
                </div>
            </div>
            <?php } ?>
        </header> 

        <main role="main">            
            <div class="page-contents container">
            <!-- <div class="row"> -->
                
            
