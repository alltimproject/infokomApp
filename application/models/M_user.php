<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{

  function getUser()
  {
    $this->db->select('*');
    $this->db->from('tb_admin');
    $this->db->order_by('email_admin', 'ASC');

    return $this->db->get();
  }

  function cek_email($email)
  {
    $this->db->select('*');
    $this->db->from('tb_admin');
    $this->db->where('email_admin', $email);

    return $this->db->get();
  }
}
