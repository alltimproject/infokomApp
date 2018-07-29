<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_absensi extends CI_Model{

  function getkodePenggajian()
  {
    $this->db->select('RIGHT(tb_penggajian.id_penggajian, 3) as kode', FALSE);
    $this->db->order_by('id_penggajian', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('tb_penggajian');
    if($query->num_rows() <> 0 )
    {
      $data = $query->row();
      $kode = intval($data->kode) + 1;

    }else{
      $kode = 1;
    }
    $kodemax  = str_pad($kode, 3, "0", STR_PAD_LEFT);
    $kodejadi = "GK".$kodemax;
    return $kodejadi;

  }

  function insert($data)
  {
    $this->db->insert_batch('tb_daftar_absensi', $data);
  }

  function cekdata($nip)
  {
    $this->db->select('*');
    $this->db->from('tb_karyawan');
    $this->db->where('nip', $nip);
    return $this->db->get();
  }

  function select()
  {
    $this->db->select('*');
    $this->db->from('tb_daftar_absensi');
    $this->db->where('status', '');
    $this->db->order_by('tgl_absen','ASC');

    return $this->db->get();
  }
  function getKaryawan($nip)
  {
    $this->db->select('*');
    $this->db->from('tb_karyawan');
    $this->db->join('tb_divisi', 'tb_divisi.kode_divisi = tb_karyawan.kode_divisi');
    $this->db->where('nip', $nip);
    return $this->db->get();
  }
  function getGaji($kode_divisi)
  {
    $this->db->select('*');
    $this->db->from('tb_gaji');
    $this->db->where('kode_divisi', $kode_divisi);
    return $this->db->get();
  }
  function getPenggajian()
  {
    $this->db->select('*');
    $this->db->from('tb_karyawan');
    $this->db->join('tb_penggajian','tb_penggajian.nip = tb_karyawan.nip');
    $this->db->order_by('id_penggajian', 'DESC');
    return $this->db->get()->result();
  }

}
