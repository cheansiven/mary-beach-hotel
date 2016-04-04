<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

   public function is_logged_in()
   {
      $this->db->where('email', $this->input->post('email'));
      $this->db->where('password', md5($this->input->post('password')));
      $query = $this->db->get('user');

      if($query->num_rows() > 0)
      {
         return true;
      } else {
         return false;
      }
   }

}
?>