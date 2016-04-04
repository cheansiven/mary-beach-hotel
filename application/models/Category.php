<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model {

   public function saveCategory($data)
   {
      $this->db->set($data);
      if(!$this->db->insert('category')) return false;
      return $this->db->insert_id();
   }

}
?>