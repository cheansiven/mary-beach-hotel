<?php $this->load->view('mary/header') ?>
<?php
$xml=simplexml_load_file("application/views/mary/rates.xml");
date_default_timezone_set("Asia/Phnom_Penh");
$today = date("F");
?>
    <div class="page-content">
            
        <div class="page-title text-middle">
            <h1 class="text-uppercase">our suites<br /> &amp; rooms</h1>
        </div>
            
        <div class="page-room">
            <div class="well well-sm">
                <div class="grid-rooms container">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="row">
                                
                                <div class="col-sm-6 col-md-3 list-rooms">
                                    <div class="thumbnail">
                                        <div class="header">
                                            <h2>Deluxe</h2>
                                            <p class="option">Pool View</p>
                                            <p>from $<?php echo $xml->$today->deluxe;?></p>
                                        </div>

                                        <img src="<?php echo base_url('public/img/room/deluxe-pool-view-3.jpg') ?>" alt="MARY HOTEL &amp; BUNGALOWS ">
                                        <div class="caption text-center">
                                            <p>Enjoy this beautiful room with a balcony overlooking the swimming pool, with all the amenities</p>
                                        </div>
                                    </div>
                                </div> <!-- /.list-rooms -->
                                <div class="col-sm-6 col-md-3 list-rooms">
                                    <div class="thumbnail">
                                        <div class="header">
                                            <h2>Junior Suite</h2>
                                            <p class="option">Ocean View</p>
                                            <p>from $<?php echo $xml->$today->junior;?></p>
                                        </div>

                                        <img src="<?php echo base_url('public/img/room/junior-ocean-3.jpg') ?>" alt="MARY HOTEL &amp; BUNGALOWS ">
                                        <div class="caption text-center">
                                            <p>Enjoy the panoramic view of the ocean from your terrace, a single ticket to the most impressive sunsets</p>
                                        </div>
                                    </div>
                                </div> <!-- /.list-rooms -->
                                <div class="col-sm-6 col-md-3 list-rooms">
                                    <div class="thumbnail">
                                        <div class="header">
                                            <h2>Family</h2>
                                            <p class="option">Mountain View</p>
                                            <p>from $<?php echo $xml->$today->family;?></p>
                                        </div>

                                        <img src="<?php echo base_url('public/img/room/family-mountain-3.jpg') ?>" alt="MARY HOTEL &amp; BUNGALOWS ">
                                        <div class="caption text-center">
                                            <p>Very spacious room facing the green countryside of the coast. Ideal for large families</p>
                                        </div>
                                    </div>
                                </div> <!-- /.list-rooms -->
                                <div class="col-sm-6 col-md-3 list-rooms">
                                    <div class="thumbnail">
                                        <div class="header">
                                            <h2>Suite</h2>
                                            <p class="option">Ocean View</p>
                                            <p>from $<?php echo $xml->$today->ocean;?></p>
                                        </div>

                                        <img src="<?php echo base_url('public/img/room/suite-ocean-3.jpg') ?>" alt="MARY HOTEL &amp; BUNGALOWS ">
                                        <div class="caption text-center">
                                            <p>The best room: large and spacious living area, with an amazing view over the hotel and the sea</p>
                                        </div>
                                    </div>
                                </div> <!-- /.list-rooms -->

                            </div> <!-- /.row -->
                        </div>  <!-- /.col-sm-10 -->
                        <div class="col-sm-2">
                            <div class="row">
                                <div class="box-promote room-box-promote">
                                    <div class="text-middle">
                                        <p><span>FROM JAN 10 to 22</span> <b>-30%</b> DISCOUNT</p>
                                        <a class="btn btn-warning" href="<?php echo site_url("booking.php"); ?>" target="_blank">Book Now</a>
                                    </div>
                                    <i class="fa fa-scissors"></i>  
                                </div> <!-- /.box-promote -->
                            </div>
                        </div>
                    </div>
                </div> <!-- /.grid-rooms .container -->
            </div> <!-- /.well .well-sm -->

        </div> <!-- /.page-room -->
    </div> <!-- /.page-content -->

<?php $this->load->view('mary/footer') ?>