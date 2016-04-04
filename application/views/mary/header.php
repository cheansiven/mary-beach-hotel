<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="keywords" content="<?php echo  $this->meta_keywords ?>" />
        <meta name="title" content="<?php echo  $this->meta_title ?>" />
        <meta name="description" content="<?php echo  $this->meta_description ?>" />
        <meta name="uri-translation" content="on" />
            <meta name='subject' content='luxury hotel'> 
            <meta name='copyright' content='lox design'>
            <meta name='language' content='en'>
            <meta name='robots' content='index, follow'>
            <meta name='author' content='franck, franck@lox-design.com'>
            <meta name='coverage' content='international'>
            <meta name='subtitle' content='luxury hotel on Otres Beach'>
            <meta name='url' content='http://www.lox-design.com'>
            <meta name='category' content='luxury hotel'>
        <title><?php echo  $this->meta_title ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="<?php echo base_url('apple-touch-icon.png') ?>">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url('public/css/main.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('public/css/custom.css') ?>">
        
        <!-- Zebra-Datepicker --->
        <link rel="stylesheet" href="<?php echo base_url('public/css/Zebra_Datepicker/default.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('public/css/Zebra_Datepicker/metallic.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('public/css/Zebra_Datepicker/Zebra_Datepicker.css') ?>">
        
        
        <script src="<?php echo base_url('public/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
         <script src="<?php echo base_url('public/js/zebra_datepicker.js') ?>"></script>
        <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
         
        <script> var base_url = "<?php echo base_url() ?>"; </script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<?php
include_once("colors.inc.php");
$delta = 50;
$reduce_brightness = true;
$reduce_gradients = true;
$num_results = 1;

$image = 'public/img/background/'.$bg_image;
$ex=new GetMostCommonColors();
$colors=$ex->Get_Color($image, $num_results, $reduce_brightness, $reduce_gradients, $delta);


$color = array_keys($colors);
$bg_color = $color[0];


?>
        <style>
            @media (min-width: 1200px) {
                html {
                    background: #<?php echo $bg_color;?>;
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
    <?php include('application/views/mary/analyticstracking.php'); ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <main role="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="wrap-body">
                    
                        <div class="custom-menu-header">
                            <?php if($page_name !== 'home') : ?>
                            <!-- Not for home page -->
                            <div class="menu-top container">
                                <a href="<?php echo base_url('#open') ?>">home</a>
                                <img src="<?php echo base_url('public/img/mbb-icon-main-menu.png') ?>" alt="mary bungalow">
                                <a href="<?php echo site_url('booking.php');?>" target="_blank">book</a>
                            </div> <!-- /.menu-top -->
                            <?php endif ?>
                        </div>