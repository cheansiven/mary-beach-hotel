<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Model {

   public function saveHotel($data) 
   {
      $this->db->set($data); 
      if(!$this->db->insert('hotels')) return false;
      return $this->db->insert_id();
   }
   public function saveHotelCategory($data)
   {
      $this->db->set($data);
      if(!$this->db->insert('hotel_category')) return false;
      return $this->db->insert_id();
   }

}
?>