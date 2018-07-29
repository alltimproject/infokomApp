<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model{

  function get_tanggal()
  {
    $this->db->distinct();
    $this->db->select('tgl_penggajian');
    $this->db->from('tb_penggajian');
    return $this->db->get();
  }

  function getdata_pertanggal($where)
  {
    $this->db->select('*');
    $this->db->from('tb_penggajian');
    $this->db->join('tb_karyawan', 'tb_karyawan.nip = tb_penggajian.nip');
    $this->db->where($where);
    $this->db->where('status_penggajian','konfirmasi');
    return $this->db->get();
  }

}
