<?php $this->load->view('mary/header') ?>

<div class="page-content">
  <div class="box-content-page">
    <div class="media-header"> <img src="<?php echo base_url('public/img/mbb-icon-main-menu.png') ?>" alt="mary bungalow"> </div>
    <div class="body">
      <p>mary beach hotel &amp; resort</p>
      <div class="divider"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
    </div>
  </div>
  <!-- /.box-content-page --> 
</div>
<!-- /.page-content -->

<div class="page-content-bottom">
  <button id="buttonToggle" class="button-toggle btn btn-lg btn-default"></button>
  <div id="contentBottom" class="content-bottom">
    <div class="container">
      <div class="list-box">
        <div ontouchstart="this.classList.toggle('hover');" class="flip-container">
          <div class="box-content flipper">
            <div class="front">
              <h2>Dining &amp; Drinking</h2>
              <div class="media-bottom">
                <div class="desktop"> <img src="<?php echo base_url('public/img/cup.png') ?>" alt="mary bungalow"> </div>
                <div class="iPad"> <img src="<?php echo base_url('public/img/iPad-cup.png') ?>" alt="mary bungalow"> </div>
              </div>
            </div>
            <div class="back"><a href="<?php echo base_url('restaurant-on-the-beach-cambodia.html') ?>">
              <p class="title">Dining &amp; Drinking</p>
              <div class="body">Prepare yourself for a culinary experience, as our Resort offers a very diverse range of cuisine, from Japanese Sushi to Cambodian Lok Lak. It will be a feast !</div>
              <div class="media-bottom iPad"> <img src="<?php echo base_url('public/img/iPad-ball.png') ?>" alt="mary bungalow"> </div>
              </a> </div>
          </div>
        </div>
       <div ontouchstart="this.classList.toggle('hover');" class="flip-container">
          <div class="box-content flipper">
            <div class="front">
              <h2>Spa &amp; Health</h2>
              <div class="media-bottom">
                <div class="desktop"> <img src="<?php echo base_url('public/img/mbh-spa-icon.png') ?>" alt="mary bungalow"> </div>
                <div class="iPad"> <img src="<?php echo base_url('public/img/iPad-cup.png') ?>" alt="mary bungalow"> </div>
              </div>
            </div>
            <div class="back">
              <p class="title">Spa &amp; Health</p>
              <div class="body">The only Spa on this side of the beach. A large Sauna and massage is available everyday. Open to all, preferred rates for our guests.</div>
              <div class="media-bottom iPad"> <img src="<?php echo base_url('public/img/iPad-ball.png') ?>" alt="mary bungalow"> </div>
              </div>
          </div>
        </div>
          <div ontouchstart="this.classList.toggle('hover');" class="flip-container">
        <div class="box-content flipper">
         <div class="front">
          <h2>Activities Leisure</h2>
          <div class="media-bottom">
            <div class="desktop"> <img src="<?php echo base_url('public/img/boat.png') ?>" alt="mary bungalow"> </div>
            <div class="iPad"> <img src="<?php echo base_url('public/img/iPad-boat.png') ?>" alt="mary bungalow"> </div>
          </div>
          </div>
           <div class="back"><a href="<?php echo base_url('sport-activities-otres-resort.html') ?>">
              <p class="title">Activities Leisure</p>
              <div class="body">We have selected a few exciting activities for your sojourn, based on safety practices, level of quality and the entertainment factor.</div>
              <div class="media-bottom iPad"> <img src="<?php echo base_url('public/img/iPad-ball.png') ?>" alt="mary bungalow"> </div>
             </a></div>
        </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- /.list-box -->
      
      <div class="box-room">
        <div class="media"> <img src="<?php echo base_url('public/img/mary-beach-hotel-suite-1.jpg') ?>" alt="mary bungalow"> </div>
        <div class="body"> <a href="<?php echo base_url('rooms-and-suites-otres.html') ?>">our suites<br />
          &amp; rooms</a> </div>
      </div> <!-- /.box-room -->
      
      <div class="social">
        <div class="lists">
          <div class="box-social"><a href="https://www.youtube.com/watch?v=Zyq0e3BqTkE" target="_blank">Watch the movie</a></div>
          <div class="box-social"> <a href="https://www.facebook.com/marybeachhotel" target="_blank"><i class="fa fa-facebook"></i></a> </div>
          <div class="box-social"> <a href="https://plus.google.com/+Mary-beach-hotel" target="_blank"><i class="fa fa-google"></i></a> </div>
          <div class="box-social"> <a href="https://instagram.com/mary.beach.hotel" target="_blank"><i class="fa fa-instagram"></i></a> </div>
          <div class="clearfix"></div>
        </div>
        <div class="box-promote">
          <p><span>THIS OCTOBER</span> <b>-50%</b> DISCOUNT</p>
          <form id="form" class="form">
            <div class="single-form">
              <label for="email">Enter your email to receive the coupon</label>
              <input type="email" name="email">
            </div>
            <button type="submit" class="btn btn-warning">SEND</button>
          </form>
          <i class="fa fa-scissors"></i> </div>
        <!-- /.box-promote --> 
      </div>
      <!-- /.box-promote --> 
    </div>
  </div>
</div>
<!-- /.page-content-bottom -->

<?php $this->load->view('mary/footer') ?>
