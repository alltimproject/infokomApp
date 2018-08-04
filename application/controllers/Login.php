<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');

    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('v_login');
  }

  function loginaction()
  {
    $email    = $this->input->post('email');
    $password = $this->input->post('password');

    $data = array(
      'email_admin' => $email,
      'password'    => md5($password)
    );
    $cek = $this->m_login->cekData($data);
        if($cek->num_rows() > 0 )
        {
          foreach($cek->result() as $key)
          {
            $user_active = $key->username;
            $level       = $key->level;
          }

          $data_session = array(
            'useractive' => $user_active,
            'levelactive' => $level,
            'login'       => 1
          );
          $this->session->set_userdata($data_session);
              if($level == 'ADMIN')
              {
                redirect(base_url('admin/home'));
              }else{
                redirect(base_url('direktur/home'));
              }
        }else{
          $this->session->set_flashdata('notiflogin','Cek kembali username dan password anda');
          redirect(base_url());
        }

  }

  function loginKaryawan()
  {
    $email    = $this->input->post('email');
    $password = $this->input->post('password');
    $data_karyawan = array(
      'email' => $email,
      'password' => md5($password)
    );
    $cek_karyawan = $this->m_login->cekDataKaryawan($data_karyawan);
    if($cek_karyawan->num_rows() > 0 )
    {
      foreach($cek_karyawan->result() as $key_karyawan )
      {
        $nama_lengkap = $key_karyawan->nama_depan.' '.$key_karyawan->nama_belakang;
        $nip          = $key_karyawan->nip;
        $kode_divisi  = $key_karyawan->kode_divisi;
        $jabatan      = $key_karyawan->jabatan;
      }

      $cek_gaji       = $this->m_login->cekGajidivisi($kode_divisi);
      foreach($cek_gaji->result() as $key ){
        $gaji_karyawan = $key->gaji;
      }


      $cek_divisi_karyawan = $this->m_login->cekDivisi($kode_divisi);
      foreach($cek_divisi_karyawan->result() as $key_divisi )
      {
        $nama_divisi  = $key_divisi->nama_divisi;
      }

      $session_karyawan = array(
        'divisi_karyawan' => $nama_divisi,
        'fullname_karyawan' => $nama_lengkap,
        'nip_karyawan'      => $nip,
        'jabatan_karyawan'  => $jabatan,
        'gaji_karyawan'     => $gaji_karyawan,
        'login'             => 1
      );
      $this->session->set_userdata($session_karyawan);
      redirect(base_url('karyawan/home') );

    }else{
      redirect(base_url());
    }



  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect(base_url());
  }

}
