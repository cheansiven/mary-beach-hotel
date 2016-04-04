<?php $this->load->view('admin/header') ?>

<div><form action="<?php echo base_url('admin/main/packagesSubmit') ?>" id="form_validate" class="form form-horizontal" role="form" method="post">

<!-- Column Top Package and Rate -->
<div class="package-and-rate">
	<div class="col-sm-4 text-uppercase">
		<div class="blog-side boxside-equal-height">
			<h4>Standard package rate</h4>

			<div class="col-sm-6">
				<div class="form-group">
					<label for="pax_1" class="col-sm-6 control-label">1 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_1" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="pax_2" class="col-sm-6 control-label">2 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_2" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="pax_3" class="col-sm-6 control-label">3 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_3" placeholder="">
					</div>
				</div>
				<div class="form-group has-bg">
					<label for="pax_4" class="col-sm-6 control-label"><span class="icon-star-label glyphicon glyphicon-star"></span> 4 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_4" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="pax_5" class="col-sm-6 control-label">5 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_5" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="pax_6" class="col-sm-6 control-label">6 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_6" placeholder="">
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="form-group">
					<label for="pax_7" class="col-sm-6 control-label">7 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_7" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="pax_8" class="col-sm-6 control-label">8 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_8" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="pax_9" class="col-sm-6 control-label">9 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_9" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="pax_10" class="col-sm-6 control-label">10 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_10" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="pax_11" class="col-sm-6 control-label">11 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_11" placeholder="">
					</div>
				</div>
				<div class="form-group">
					<label for="pax_12" class="col-sm-6 control-label">12 Pax</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="pax[]" id="pax_12" placeholder="">
					</div>
				</div>
			</div>
			<div class="clearfix"></div>

			<p class="price-display"><span class="icon-star-label glyphicon glyphicon-star"></span> Price displayed divided 4</p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="blog-side boxside-equal-height">
			<h4>Display rate</h4>

			<div class="set-box-center">
				<div class="radio">
				  <label>
				    <input type="radio" name="package_discount" id="package_discount1" value="1" checked>
				    Normal Rates
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="package_discount" id="package_discount1" value="-5">
				    -5% discount
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="package_discount" id="package_discount1" value="-10">
				    -10% discount
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="package_discount" id="package_discount1" value="-15">
				    -15% discount
				  </label>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		
	</div>
<div class="clearfix"></div>
</div>

<!-- Hotel Options -->
<div id="wrapHotelOption">
	<div class="hotel-options" id="option_1">
		<h4 class="text-uppercase">Hotel Option 1</h4>
		<input type="hidden" name="hotel_index[]" value="1">
		
		<div class="col-sm-7">
			<div class="form-group">
				<label for="hotel_name_1" class="col-sm-3 control-label text-uppercase">Hotel name <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="hotel_name[]" id="hotel_name_1" required>
				</div>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="form-group">
				<label for="hotel_class_1" class="col-sm-3 control-label text-uppercase">Class</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="hotel_class[]" id="hotel_class_1" placeholder="">
				</div>
			</div>
		</div>

		<div class="col-sm-5">
			<div class="col-xs-offset-7 col-xs-5">
				<p class="text-default">Room Classification</p>
			</div>
		</div>
		<div class="col-sm-4 col-xs-offset-1">
			<div class="col-xs-offset-2 col-xs-10">
				<p class="row text-default">Room rate x 3 nights</p>
			</div>
		</div>
		
		<div class="col-sm-12">
			<div class="row hotelListCategoryAndRoomRateInputFields">
				<div class="col-sm-2">
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="room_type_1[]" value="1">
					    Single
					  </label>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<input type="text" class="form-control input-field" name="room_class_1_1" id="room_class_single" placeholder="">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<input type="text" class="form-control" name="room_rate_1_1" id="room_rate_single" placeholder="$">
					</div>
				</div>
				<div class="col-sm-2">
					<span class="people people-one"></span>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="row hotelListCategoryAndRoomRateInputFields">
				<div class="col-sm-2">
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="room_type_1[]" value="2">
					    Double
					  </label>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<input type="text" class="form-control input-field" name="room_class_1_2" id="room_class_double" placeholder="">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<input type="text" class="form-control" name="room_rate_1_2" id="room_rate_double" placeholder="$">
					</div>
				</div>
				<div class="col-sm-2">
					<span class="people people-two"></span>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="row hotelListCategoryAndRoomRateInputFields">
				<div class="col-sm-2">
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="room_type_1[]" value="3">
					    Twin
					  </label>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<input type="text" class="form-control input-field" name="room_class_1_3" id="room_class_twin" placeholder="">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<input type="text" class="form-control" name="room_rate_1_3" id="room_rate_twin" placeholder="$">
					</div>
				</div>
				<div class="col-sm-2">
					<span class="people people-two-space"></span>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="row hotelListCategoryAndRoomRateInputFields">
				<div class="col-sm-2">
					<div class="checkbox">
					  <label>
					    <input type="checkbox" name="room_type_1[]" value="4">
					    Triple
					  </label>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<input type="text" class="form-control input-field" name="room_class_1_4" id="room_class_triple" placeholder="">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<input type="text" class="form-control" name="room_rate_1_4" id="room_rate_triple" placeholder="$">
					</div>
				</div>
				<div class="col-sm-2">
					<span class="people people-three"></span>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="form-group">
	<div class="col-sm-12">
		<button type="submit" class="btn btn-default">Submit</button>
		<a id="addMore" href="javascript:;" class="add-more pull-right btn btn-primary" onclick="addMoreFunc()">Add more</a> 
		<a id="removeTabs" href="javascript:;" class="remove-tabs pull-right btn btn-danger" onclick="removeMoreFunc()">Remove</a> 
	</div>
</div>

</form></div>

<?php $this->load->view('admin/footer') ?>