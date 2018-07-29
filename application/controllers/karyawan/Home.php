<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_karyawan');
    $this->load->helper('selisih');
    $this->load->helper('tanggal');
    if($this->session->userdata('login') != 1)
    {
      redirect(base_url());
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $nip = $this->session->userdata('nip_karyawan');
    $this->load->view('karyawan/include/v_header');

    $data['slip_gaji'] = $this->m_karyawan->get_slip_karyawan($nip);
    $this->load->view('karyawan/v_home', $data);
    $this->load->view('karyawan/include/v_footer');
  }


  function lihatabsensi($tgl)
  {
    $this->load->view('karyawan/include/v_header');

    $where = array(
      'tgl_penggajian' => $tgl,
      'nip'            => $this->session->userdata('nip_karyawan')
    );
    $data['data_absensi'] = $this->m_karyawan->getabsensi($where)->result();
    $this->load->view('karyawan/v_absensi', $data);

    $this->load->view('karyawan/include/v_footer');
  }

}
