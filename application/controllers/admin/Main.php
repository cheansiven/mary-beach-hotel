<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
	    parent::__construct();
	    // Your own constructor code
	    $this->load->model('package');
	    $this->load->model('hotel');
	    $this->load->model('hotel_rate');
	}

	public function index()
	{
		if (!$this->session->userdata('is_logged_in')) {
          redirect('admin/users/login', 'refresh');
      	}

		$this->load->view('admin/page');
	}

	public function packagesSubmit()
	{
		if (!$this->session->userdata('is_logged_in')) { redirect('admin/users/login', 'refresh'); }

		$package_data = array(
	        'pax_1' 			=> $this->input->post()['pax'][0],
	        'pax_2' 			=> $this->input->post()['pax'][1],
	        'pax_3' 			=> $this->input->post()['pax'][2],
	        'pax_4'				=> $this->input->post()['pax'][3],
	        'pax_5' 			=> $this->input->post()['pax'][4],
	        'pax_6' 			=> $this->input->post()['pax'][5],
	        'pax_7' 			=> $this->input->post()['pax'][6],
	        'pax_8' 			=> $this->input->post()['pax'][7],
	        'pax_9' 			=> $this->input->post()['pax'][8],
	        'pax_10' 			=> $this->input->post()['pax'][9],
	        'pax_11' 			=> $this->input->post()['pax'][10],
	        'pax_12' 			=> $this->input->post()['pax'][11],

	        'package_discount'	=> $this->input->post('package_discount')
		);
      	
		$package_id = $this->package->savePackage($package_data); // Save data into Packages Table and return last ID's Package (Folder Model package.php).
      	$count = sizeof($this->input->post('hotel_index')); // Count Hotel Options tabs.
		$data = array();

      	for($i=0; $i < $count; $i++) // Loop tabs index ( input hidden hotel_index ).
		{
			$hotel_data = array(
				'package_id'   => $package_id,
		        'name'         => $this->input->post('hotel_name')[$i],
		        'class'        => $this->input->post('hotel_class')[$i]
			);
	      	$hotel_id = $this->hotel->saveHotel($hotel_data); // Save data into Hotels table (Folder Model hotel.php).
	      	$number_order = $i+1;
	      	$room_types = $this->input->post('room_type_'.$number_order); // Get all category rooms type by hotel_index hidden input

	      	foreach($room_types as $room_type) // Foreach for combine data to Array Object.
	      	{
	      		$room_class 	= $this->input->post('room_class_'.$number_order.'_'.$room_type);
	      		$room_rate 		= $this->input->post('room_rate_'.$number_order.'_'.$room_type);

	      		$data[] = array( // Batch Data foreach rooms type.
					'category_id'           => $room_type,
			        'hotel_id'              => $hotel_id, 
			        'room_classification'   => $room_class,
			        'room_rate'             => $room_rate
				);
	      	}
		}
		$this->hotel_rate->saveHotelRate($data); // Save batch data to Hotel Rate Table (Folder Model hotelRate.php).
      	redirect('admin/main', 'refresh');
	}
}
