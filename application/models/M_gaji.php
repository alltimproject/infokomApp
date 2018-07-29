<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gaji extends CI_Model{

  function get_menunggu()
  {
    $this->db->select('*');
    $this->db->from('tb_penggajian');
    $this->db->where('status_penggajian','proses');

    return $this->db->get();
  }

  function get_approved()
  {
    $this->db->select('*');
    $this->db->from('tb_penggajian');
    $this->db->where('status_penggajian', 'konfirmasi');

    return $this->db->get();
  }

  function get_gaji_karyawan($where)
  {
    $this->db->select('*');
    $this->db->from('tb_penggajian');
    $this->db->where($where);
    return $this->db->get();
  }

}
