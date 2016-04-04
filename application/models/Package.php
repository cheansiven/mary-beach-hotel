<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Model {

   public function savePackage($data)
   {
	    $this->db->set($data);
	    if(!$this->db->insert('packages')) return false;
	    return $this->db->insert_id();
   }

}
?>