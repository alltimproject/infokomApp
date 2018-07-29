<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_laporan');
    $this->load->helper('tanggal');
    $this->load->library('pdf');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('admin/include/v_header');

    $data['tanggal'] = $this->m_laporan->get_tanggal()->result();
    $this->load->view('admin/v_laporan', $data);

    $this->load->view('admin/include/v_footer');
  }

  function show_datagaji($tgl)
  {
    $where = array('tgl_penggajian' => $tgl);
    $data  = $this->m_laporan->getdata_pertanggal($where);

    $output = '
    <div class="col-md-12">
      <div class="x_panel">
        <a href="'.base_url('admin/laporan/printbulanan/'.$tgl).'" target="_blank" class="btn btn-info btn-xs">Print PDF</a>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Tanggal Penggajian</th>
              <th>NIP</th>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>Total Lemburan</th>
              <th>Total Potongan</th>
              <th>Total Gaji</th>
            </tr>
          </thead>
          <tbody>

     ';

    foreach($data->result() as $key) {
      $output .= '
            <tr>
              <td>'.tanggal_indo($key->tgl_penggajian).'</td>
              <td>'.$key->nip.'</td>
              <td>'.$key->nama_depan.' '.$key->nama_belakang.'</td>
              <td>'.$key->jabatan.'</td>
              <td>'.number_format($key->total_lemburan).'</td>
              <td>'.number_format($key->total_potongan).'</td>
              <td>'.number_format($key->total_gaji).'</td>
            </tr>
      ';
    }

    $output .= '
         </tbody>
        </table>
      </div>
    </div>
    ';



  echo $output;
  }

  function printbulanan($tgl)
  {
    $sum_total = 0;
    $where = array('tgl_penggajian' => $tgl);
    $data  = $this->m_laporan->getdata_pertanggal($where);


    $pdf = new FPDF('l','mm','A4');
    // membuat halaman baru
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(190,7,'','C',0,1);
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->image('assets/img/infokom.png',115,10,70) ;
    $pdf->Ln(35);
    $pdf->SetFillColor(200,220,255);
    $pdf->Cell(278,16,'Laporan bulanan penggajian '.tanggal_indo($tgl),1,1,'C',1);
    $pdf->SetFont('Arial','B',10);
    $pdf->SetFillColor(200,220,255);
    $pdf->Cell(41,6,'NIP',1,0,1,1);
    $pdf->Cell(55,6,'Nama',1,0,1,1);
    $pdf->Cell(48,6,'Jabatan',1,0,1,1);
    $pdf->Cell(44,6,'lemburan',1,0,1,1);
    $pdf->Cell(45,6,'Potongan',1,0,1,1);
    $pdf->Cell(45,6,'Total Gaji',1,1,1,1);

    foreach($data->result() as $key)
    {
      $sum_total += str_replace(",","", $key->total_gaji);
      $pdf->Cell(41,6,$key->nip,1,0);
      $pdf->Cell(55,6,$key->nama_depan.' '.$key->nama_belakang,1,0);
      $pdf->Cell(48,6,$key->jabatan,1,0);
      $pdf->Cell(44,6,number_format($key->total_lemburan),1,0);
      $pdf->Cell(45,6,number_format($key->total_potongan),1,0);
      $pdf->Cell(45,6,number_format($key->total_gaji),1,1);
    }


    //total
    $pdf->Cell(96,9,'',0,0,0,0);
    $pdf->Cell(92,9,'',0,0,0,0);
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(90,20,'Total: '.number_format($sum_total),1,1,1,1);



    $pdf->Output();
  }



}
