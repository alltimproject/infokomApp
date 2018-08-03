<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slip extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('tanggal');
    $this->load->library('pdf');
    $this->load->model('m_gaji');
    if($this->session->userdata('login') != 1)
    {
      redirect(base_url());
    }
    //Codeigniter : Write Less Do More
  }

  function gaji($id)
  {

    $where  = array('id_penggajian' => $id);
    $select = $this->m_gaji->get_gaji_karyawan($where);

    if($select->num_rows() > 0 ){
      foreach ($select->result() as $key ) {
        $lemburan   = $key->total_lemburan;
        $potongan   = $key->total_potongan;
        $total_gaji = $key->total_gaji;
        $tgl_gaji   = $key->tgl_penggajian;




    $pdf = new FPDF('p','mm','A4');
    // membuat halaman baru
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(190,7,'','C',0,1);
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    //$pdf->image('assets/img/infokom.png',70,10,70) ;
    $pdf->Ln(35);
    $pdf->SetFillColor(200,220,255);
    $pdf->Cell(190,16,'SLIP GAJI '.tanggal_indo($tgl_gaji),1,1,'C',1);
    $pdf->Cell(95,7,$this->session->userdata('fullname_karyawan'),1,0);
    $pdf->Cell(95,7,$this->session->userdata('divisi_karyawan'),1,1);
    $pdf->Cell(95,7,$this->session->userdata('nip_karyawan'),1,0);
    $pdf->Cell(95,7,$this->session->userdata('jabatan_karyawan'),1,1);
    $pdf->Cell(95,7,'',0,1);
    $pdf->Ln(2);
    $pdf->Cell(95,7,'RINCIAN GAJI :',0,1);
    $pdf->Ln(3);
    $pdf->Cell(145,6,'Gaji Pokok',1,0);
    $pdf->Cell(45,6,number_format($this->session->userdata('gaji_karyawan')),1,1);

    $pdf->Cell(145,6,'Lembur',1,0);
    $pdf->Cell(45,6,number_format($lemburan),1,1);

    $pdf->Cell(145,6,'Potongan ',1,0);
    $pdf->Cell(45,6,number_format($potongan),1,1);

    $pdf->Cell(145,6,'Total Gaji ',0,0);
    $pdf->Cell(45,6,number_format($total_gaji),1,1);

    $pdf->Output();
  }
 }
}

}
