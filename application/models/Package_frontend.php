<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package_frontend extends CI_Model {

   public function get4paxRate()
   {
	   $this->db->select('pax_4');
		
		$query = $this->db->get('packages');
		//print_r( $query->result_array());
      $result = $query->result_array();
	  return $result[0]['pax_4'];
   }

}
?>