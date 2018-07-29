<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_direktur');
    $this->load->helper('tanggal');
    if($this->session->userdata('login') != 1 )
    {
      redirect(base_url() );
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('direktur/include/v_header');
    $data['data_gaji_menunggu'] = $this->m_direktur->getGaji_menunggu();
    $data['data_gaji_konfirmasi'] = $this->m_direktur->getGaji_konfirmasi();
    $this->load->view('direktur/v_home', $data);
    $this->load->view('direktur/include/v_footer');
  }

  function simpanValidasi()
  {
    $nip = $this->input->post('nip');
    $tgl = $this->input->post('tgl');

    $data = array(
      'status_penggajian' => 'konfirmasi'
    );
    $where = array(
      'nip' => $nip,
      'tgl_penggajian' => $tgl
    );
    $this->db->where($where);
    $this->db->update('tb_penggajian', $data);
    redirect(base_url('direktur/home') );
  }





}
