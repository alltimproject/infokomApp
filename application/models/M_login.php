<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

function cekData($data)
{
  $this->db->select('*');
  $this->db->from('tb_admin');
  $this->db->where($data);
  return $this->db->get();
}

function cekDataKaryawan($data)
{
  $this->db->select('*');
  $this->db->from('tb_karyawan');
  $this->db->where($data);
  return $this->db->get();
}
function cekDivisi($kode_divisi)
{
  $this->db->select('*');
  $this->db->from('tb_divisi');
  $this->db->where('kode_divisi', $kode_divisi);
  return $this->db->get();
}

function cekGajidivisi($kode_divisi)
{
  $this->db->select('*');
  $this->db->from('tb_gaji');
  $this->db->where('kode_divisi', $kode_divisi);
  return $this->db->get();
}


}
