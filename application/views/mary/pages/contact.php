<?php $this->load->view('mary/header') ?>

    <div class="page-content">
      
      <div class="contact_form">
      		 <form id="form" action="http://www.mary-beach-hotel.com/contact-the-hotel-directly/submitted.html" method="post">
                     <div class="col-sm-6">
                          <div id="title">
                              <div class="label label_form">Title</div> <span class="orange">*</span>
                               <div class="form_control">
                                 <input type="radio" name="mr" id="mr" value="0" /><label for="mr">Mr</label>
                                 <input type="radio" name="mrs" id="mrs" value="1" /><label for="mrs">Mrs</label>
                                 <input type="radio" name="ms" id="ms" value="0" /><label for="ms">Ms</label>
                               </div>
                          </div>
                          <div id="name">
                              <div class="label label_form">Name</div> <span class="orange">*</span>
                               <div class="form_control">
                                 <input type="text" name="name" class="col-sm-9">
                               </div>
                          </div>
                          <div id="Email">
                              <div class="label label_form">Email </div><span class="orange">*</span>
                               <div class="form_control">
                                 <input type="text" name="email" class="col-sm-9">
                               </div>
                          </div>
                          <div id="tel">
                              <div class="label label_form">Telephone </div><span class="orange"></span>
                               <div class="form_control">
                                 <input type="text" name="tel" class="col-sm-9">
                               </div>
                          </div>
                          <div id="first-guest">
                              <div class="label label_form"> </div><span class="orange"></span>
                               <div class="form_control">
                                 <input type="checkbox" name="guest" id="guest" value="1" /><label for="guest" style="width: auto">First time guest</label>
                               </div>
                          </div>
                          <div id="cancel-btn">
                              <button type="button" >Cancel</button>
                          </div>
                          <div id="submit-btn">
                              <input type="submit" value="Send">
                         
                          </div>                   
                     </div>
                    
                    <div class="col-sm-6">
                    	 <div class="col-sm-6">
	                    	<div class="label label_form">Preferred Suites</div>
	                    	<select name="suites" class="col-sm-9 suites" >
					<option disabled selected>Select a suit</option>
					<option value="Deluxe">Deluxe</option>
					<option value="Junior Suite">Junior Suite</option>
					<option value="Family">Family</option>
					<option value="Suite">Suite</option>
				</select>
                    	</div>
                    	 <div  class="col-sm-6">
                    		<div class="label label_form">Expected Date of arrival</div>
                    		<input type="text" name="expected-date" id="expected-date" class="col-sm-9">
                    	</div>
                    </div>
                    
                     <div class="col-sm-6">
                    	 <div class="col-sm-12">
	                    	<div class="label label_form">Comments</div>
                    	</div>
                    	<div style="margin-top: -10px">
	                    	<textarea name="comment" id="comment"  class="col-sm-11"></textarea>
                    	</div>

                    	 
                    </div>
                </form>
      </div><!-- /.contact-form -->
    </div> <!-- /.page-content -->
<script>
$(document).ready(function () {
        var minDate = new Date();

        $('#expected-date').Zebra_DatePicker({
            direction: 1
        });

        
    });

</script>
<?php $this->load->view('mary/footer') ?>