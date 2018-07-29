<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model{

  function get_slip_karyawan($nip)
  {
    $this->db->select('*');
    $this->db->from('tb_penggajian');
    $this->db->where('nip', $nip);
    $this->db->where('status_penggajian', 'konfirmasi');
    return $this->db->get();
  }
  function getabsensi($where)
  {
    $this->db->select('*');
    $this->db->from('tb_daftar_absensi');
    $this->db->where($where);
    $this->db->where('status', 'ok');
    return $this->db->get();
  }
  function getKaryawan()
  {
    return $this->db->get('tb_karyawan');
  }



}
