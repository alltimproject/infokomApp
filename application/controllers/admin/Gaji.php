<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_gaji');
    $this->load->helper('tanggal');
    if($this->session->userdata('login') != 1 )
    {
      redirect(base_url() );
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('admin/include/v_header');

    $data['data_gaji_approved'] = $this->m_gaji->get_approved();
    $data['data_gaji_menunggu'] = $this->m_gaji->get_menunggu();
    $this->load->view('admin/v_datagaji', $data);
    $this->load->view('admin/include/v_footer');
  }

}
