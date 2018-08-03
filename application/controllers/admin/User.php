<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_user');
    //Codeigniter : Write Less Do More
    if($this->session->userdata('login') != 1 )
    {
      redirect(base_url() );
    }
  }

  function index()
  {
    $this->load->view('admin/include/v_header');

    $data['data_user'] = $this->m_user->getUser()->result();
    $this->load->view('admin/v_user',$data);

    $this->load->view('admin/include/v_footer');
  }

  function simpanUser()
  {
    $email    = $this->input->post('email');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $level    = $this->input->post('level');


    if($this->input->post('simpan') )
    {
      $cek_email = $this->m_user->cek_email($email);
      if($cek_email->num_rows() > 0 )
      {
        $this->session->set_flashdata('msg', 'Email sudah digunakan, silahkan gunakan email lain.');
        redirect(base_url('admin/user') );
      }else{
        $data = array(
          'email_admin' => $email,
          'username'    => $username,
          'password'    => md5($password),
          'level'       => $level
        );

        $this->db->insert('tb_admin', $data);
        redirect(base_url('admin/user') );
      }

    }else{
      if($password == "")
      {
        $this->session->set_flashdata('msg', 'Password Tidak Boleh Kosong');
        redirect(base_url('admin/user') );
      }else
      {
        $data_update = array(
          'username' => $username,
          'password' => md5($password),
          'level'    => $level
        );
        $this->db->where('email_admin', $email);
        $this->db->update('tb_admin', $data_update);
        redirect(base_url('admin/user') );
      }
    }

  }

  function hapusUser()
  {
    $email = $_GET['id'];
    $this->db->where('email_admin', $email );
    $this->db->delete('tb_admin');
    redirect(base_url('admin/user') );
  }


}
