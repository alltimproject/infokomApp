<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_direktur extends CI_Model{

  function getGaji_menunggu()
  {
    $this->db->select('*');
    $this->db->from('tb_penggajian');
    $this->db->where('status_penggajian', 'proses');

    return $this->db->get();
  }

  function getGaji_konfirmasi()
  {
    $this->db->select('*');
    $this->db->from('tb_penggajian');
    $this->db->where('status_penggajian', 'konfirmasi');

    return $this->db->get();
  }

}
