<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_rate extends CI_Model {

   public function saveHotelRate($data)
   {
		$this->db->insert_batch('hotel_rate', $data);
   }

}
?>