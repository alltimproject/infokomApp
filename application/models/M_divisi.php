<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_divisi extends CI_Model{

  function getDivisi()
  {
    return $this->db->get('tb_divisi');
  }

  function cekDivisi($kode)
  {
    $this->db->select('*');
    $this->db->from('tb_gaji');
    $this->db->where('kode_divisi', $kode);
    return $this->db->get();
  }

  function getKodedivisi()
  {
    $this->db->select('RIGHT(tb_divisi.kode_divisi, 3) as kode', FALSE);
    $this->db->order_by('kode_divisi', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('tb_divisi');
    if($query->num_rows() <> 0 )
    {
      $data = $query->row();
      $kode = intval($data->kode) + 1;
    }else{
      $kode = 1;
    }
    $kodemax  = str_pad($kode, 3, "0", STR_PAD_LEFT);
    $kodejadi = "DIV".$kodemax;
    return $kodejadi;
  }

  function getGaji()
  {
    $this->db->select('*');
    $this->db->from('tb_gaji');
    $this->db->join('tb_divisi', 'tb_divisi.kode_divisi = tb_gaji.kode_divisi');
    return $this->db->get();
  }
}
