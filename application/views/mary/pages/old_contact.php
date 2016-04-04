<?php include('application/views/mary/header.php'); ?>
<?php include('application/views/mary/mobile-menu.php'); ?>

    <div class="blog-hotline">
        <div class="container">
            <div class="hotline">Hotline <strong>099 566 999</strong></div>
        </div>
    </div>
    <!--Main menu-->
<?php include('application/views/mary/menu.php'); ?>

    <!--Sidebar-->
    <div class="conten-left">
        <div>

            <h3>Welcome to otres beach bungalow</h3>
            <p>Bungalows on the Otres || beach<br/>Otres Beach (1 &amp;2) are the up-coming spots of the Sihanouk-ville region. Nested between the Ream National Park and the city of Sihanoukville. Soon to be linked directly to the KOS inter-national airport, as Otres is only 3 kilometers away.</p>
            <p>cal activities, from Scuba diving to Jet Pack. Many centers offer a wide range of day-time activities. But then again, you may just want to enjoy the sun on a pool deck.</p>
            <p>With the number of hotels and guesthouses opening in the neighborhood, you will find many types of food and delicates-sen, from the local Fish Amok to the wood-oven pizza. Winesan</p>


        </div>

    </div>
    <!--Blog Content-->
    <div id="wrap-contact-form" class="container">
        <div class="row">
            <div class="blog-contact">
                <!-- /.blog-post -->

                <div id="form-contact" style="padding:20px;">

                <?php if($this->session->userdata('get_session')) { ?>
                    <div class="col-md-12 text-center contact-success">
                        <p>
                            Dear <strong class="text-danger"><?php echo $this->session->userdata('lastname'); ?></strong>, <br /><br />
                            we have well received your request, and we will come back to you shortly.<br />
                            In the meantime, you can go and visit our <a href="https://www.facebook.com/marybeachbungalow">facebook page</a><br />
                        </p>
                        <img src="<?php echo base_url('public/img/fb-like.png') ?>" />
                    </div>
                    <div class="clear"></div>
                <?php $this->session->sess_destroy(); } else { ?>

                    <form action="<?php echo base_url();?>mary/ContactBooking" method="post" id="form-validate" class="form-horizontal text-uppercase">
                        <div class="form-group">
                            <label for="lastname" class="col-sm-4 control-label">Last name <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="lastname" class="form-control" id="lastname" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="col-sm-4 control-label">First name <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="firstname" class="form-control" id="firstname" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-4 control-label">Email <span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="email" name="email" class="form-control" id="email" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-sm-4 control-label">Phone number</label>
                            <div class="col-sm-8">
                                <input type="tel" name="phone" class="form-control" id="phone" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="comment" class="col-sm-4 control-label">Comment</label>
                            <div class="col-sm-8">
                                <textarea name="comment" class="form-control" style="width:490px; height:90px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group btn-contact-submit" style="width:100px; float:right; padding-right:10px;">
                            <div class="col-sm-12">
                                <button type="submit" class="pull-right btn btn-primary text-uppercase">SEND</button>
                            </div>
                           
                        </div>
                        <div class="clear"></div>
                        
                    </form>
                     <div id="contact-info-bottom" class="col-sm-12">
                                <div class="media">
                               
                                    <div class="media-left">
                                        
                                            <img src="<?php echo base_url('public/img/contact-home.png'); ?>">
                                        
                                    </div>
                                    <div class="media-body">
                                        <!--<h4 class="media-heading">Media heading</h4>-->
                                        Marina Rd<br />
                                        Otres 2, Sikanoukville<br />
                                        Krong Preah Sihanouk<br />
                                        Cambodia<br />
                                    </div>
                               
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        
                                            <img src="<?php echo base_url('public/img/contact-phone.png'); ?>">
                                        
                                    </div>
                                    <div class="media-body">
                                        <!--<h4 class="media-heading">Media heading</h4>-->
                                        +855 99 566 999
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                       
                                            <img src="<?php echo base_url('public/img/contact-email.png'); ?>">
                                       
                                    </div>
                                    <div class="media-body">
                                        <!--<h4 class="media-heading">Media heading</h4>-->
                                        resort@mary-hotel.com
                                    </div>
                                </div>
                            </div>
                <?php } ?> <!--End Session-->
                </div>

            </div><!-- /.blog-main --><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </div><!-- /.container -->


    <!--Footer-->
<?php include('application/views/mary/footer.php'); ?>