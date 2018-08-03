<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_divisi');
    $this->load->model('m_karyawan');
    if($this->session->userdata('login') != 1 )
    {
      redirect(base_url() );
    }

    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('admin/include/v_header');
    $data['data_divisi'] = $this->m_divisi->getDivisi();
    $data['data_kar']    = $this->m_karyawan->getKaryawan()->result();
    $this->load->view('admin/v_karyawan', $data);
    $this->load->view('admin/include/v_footer');
  }

  function simpanKaryawan()
  {

    $nip        = $this->input->post('nip');
    $nd         = $this->input->post('nama_depan');
    $nb         = $this->input->post('nama_belakang');
    $alamat     = $this->input->post('alamat');
    $tlp        = $this->input->post('no_telepon');
    $email      = $this->input->post('email');
    $tgl_gabung = $this->input->post('tanggal_join');
    $pass       = $this->input->post('password');
    $divisi     = $this->input->post('divisi');
    $jabatan    = $this->input->post('jabatan');

    if(isset($_POST['simpan']) ){
      $data = array(
        'nip'            => $nip,
        'nama_depan'     => $nd,
        'nama_belakang'  => $nb,
        'alamat'         => $alamat,
        'no_telepon'     => $tlp,
        'email'          => $email,
        'tgl_gabung'     => $tgl_gabung,
        'password'       => md5($pass),
        'kode_divisi'    => $divisi,
        'jabatan'        => $jabatan
      );

      $this->db->insert('tb_karyawan', $data);
      redirect(base_url('admin/karyawan') );
    }else{

      $data = array(
        'nama_depan'     => $nd,
        'nama_belakang'  => $nb,
        'alamat'         => $alamat,
        'no_telepon'     => $tlp,
        'email'          => $email,
        'tgl_gabung'     => $tgl_gabung,
        'password'       => md5($pass),
        'kode_divisi'    => $divisi,
        'jabatan'        => $jabatan
      );
      $where = array(
         'nip'            => $nip
      );

      $this->db->where($where);
      $this->db->update('tb_karyawan', $data);
      redirect(base_url('admin/karyawan') );




    }



  }

  function hapusKaryawan()
  {
    $nip = $this->input->post('nip');
    $where = array('nip' => $nip);
    $this->db->where($where);
    $this->db->delete('tb_karyawan');

    echo "Data karyawan berhasil dihapus";
  }



}
