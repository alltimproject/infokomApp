<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_divisi');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('admin/include/v_header');

    $data['kode_divisi'] = $this->m_divisi->getKodedivisi();
    $data['data_divisi'] = $this->m_divisi->getDivisi()->result();
    $this->load->view('admin/v_divisi', $data);

    $this->load->view('admin/include/v_footer');
  }

  function simpanDivisi()
  {
    $kode = $this->input->post('kode_divisi');
    $nama = $this->input->post('nama_divisi');

    if(isset($_POST['submit']) ){
      $data = array(
        'kode_divisi' => $kode,
        'nama_divisi' => $nama
      );
      $this->db->insert('tb_divisi', $data);
      redirect(base_url('admin/divisi') );
    }else{
      $data = array(
        'nama_divisi' => $nama
      );
      $where = array(
        'kode_divisi' => $kode
      );
      $this->db->where($where);
      $this->db->update('tb_divisi', $data);
      redirect(base_url('admin/divisi') );
    }
  }
  function hapus($id)
  {
    $this->db->where('kode_divisi', $id);
    $this->db->delete('tb_divisi');
    redirect(base_url('admin/divisi') );
  }

  function gajidivisi()
  {
    $this->load->view('admin/include/v_header');

    $data['gaji_divisi'] = $this->m_divisi->getGaji()->result();
    $data['data_divisi'] = $this->m_divisi->getDivisi()->result();
    $this->load->view('admin/v_settinggaji', $data);

    $this->load->view('admin/include/v_footer');
  }

  function simpanGajiDivisi()
  {
    $kode     = $this->input->post('kode_divisi');
    $gaji     = $this->input->post('gaji');
    $lembur   = $this->input->post('lembur');
    $potongan = $this->input->post('potongan');

    if($this->input->post('simpan') )
    {
      $cek_divisi = $this->m_divisi->cekDivisi($kode);
      if($cek_divisi->num_rows() == 0)
      {
        $data = array(
          'kode_divisi' => $kode,
          'gaji'        => $gaji,
          'lembur'      => $lembur,
          'potongan'    => $potongan
        );

        $this->db->insert('tb_gaji', $data);
        redirect(base_url('admin/divisi/gajidivisi') );
      }else
      {
        $this->session->set_flashdata('msg', 'Kode divisi sudah terdaftar, silahkan edit untuk merubah gaji, lemburan, dan potongan ');
        redirect(base_url('admin/divisi/gajidivisi') );
      }

    }else if($this->input->post('update') ){
      $data = array(
        'gaji'   => $gaji,
        'lembur' => $lembur,
        'potongan' => $potongan
      );
      $where = array('kode_divisi' => $kode );
      $this->db->where($where);
      $this->db->update('tb_gaji', $data);
      redirect(base_url('admin/divisi/gajidivisi') );
    }



  }

}
