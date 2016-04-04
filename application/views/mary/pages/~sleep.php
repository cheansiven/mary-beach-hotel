<?php include('application/views/mary/header.php'); ?>
<?php include('application/views/mary/mobile-menu.php'); ?>
<?php include('application/views/mary/hotline.php'); ?>

<!--Main menu-->
<?php include('application/views/mary/menu.php'); ?>
<?php
$xml=simplexml_load_file("application/views/mary/rates.xml");
date_default_timezone_set("Asia/Phnom_Penh");
$today = date("F");
?>
<div class="conten-left">
        <div>

            <hgroup>
                <h3>Mary Beach Bungalows</h3>
            </hgroup>
            <p>Mary Hotel offers cute little bungalows for your next trip to Otres beach. We have three types of accommodations:</p>
            <div class="room-header">
            	<!--Standard <strong>Double</strong>-->
                Deluxe Pool View
            	<div class="bed-count">
            		<span class="room-icon">1 room</span>
            	</div>
            </div>
            <div class="room-detail">
            	<div class="room-img"><img src="<?php echo base_url('public/img/room-placeholder-2.jpg') ?>" alt="Standard Double Room"/></div>
            	<div class="pricing">42.09 square meters with 18 rooms <br />Starting at <b>USD <?php echo $xml->$today->deluxe;?></b></div>
            </div>
            
            <div class="room-header">
                JUNIOR SUITE OCEAN VIEW
            	<div class="bed-count">
            		<span class="room-icon">1 room</span>
            	</div>
            </div>
            <div class="room-detail">
            	<div  class="room-img"><img src="<?php echo base_url('public/img/room-placeholder-2.jpg') ?>" alt="Superior Double Room"/></div>
            	<div class="pricing">53.72 square meters with 6 rooms<br />Starting at <b>USD <?php echo $xml->$today->junior;?></b></div>
            </div>

            <div class="room-header">
                Family Mountain View
            	<div class="bed-count">
            		<span class="room-icon">1 room</span>
            	</div>
            </div>
            <div class="room-detail">
            	<div  class="room-img"><img src="<?php echo base_url('public/img/room-placeholder-2.jpg') ?>" alt="Superior Double Room"/></div>
            	<div class="pricing"> 45.89 square meters with 4 rooms<br />Starting at <b>USD <?php echo $xml->$today->family;?></b></div>
            </div>

            <div class="room-header">
                Ocean View Suites
            	<div class="bed-count">
            		<span class="room-icon">1 room</span>
            	</div>
            </div>
            <div class="room-detail">
            	<div  class="room-img"><img src="<?php echo base_url('public/img/room-placeholder-2.jpg') ?>" alt="Superior Double Room"/></div>
            	<div class="pricing">66.58 square meters with 4 rooms<br />Starting at <b>USD <?php echo $xml->$today->ocean;?></b></div>
            </div>

         
            
            <!--<div class="room-header">
            	Superior <strong>Twin</strong>
            	<div class="bed-count">
            		<span class="room-icon">1 room</span>
            		<span class="room-icon">1 room</span>
            	</div>
            </div>
            <div class="room-detail">
            	<div class="room-img"><img src="<?php /*echo base_url('public/img/standard-twin.jpg') */?>" alt="Superior Twin Room"/></div>
            	<div class="pricing">Starting at USD 80</div>
            </div>-->
        </div>       
</div>
    <!--Footer-->
<?php include('application/views/mary/footer.php'); ?>
