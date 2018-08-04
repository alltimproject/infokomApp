<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_karyawan');
    $this->load->model('m_absensi');
    $this->load->library('excel');
    $this->load->helper('selisih');
    if($this->session->userdata('login') != 1 )
    {
      redirect(base_url() );
    }
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('admin/include/v_header');
    // $data['kode_absensi'] = $this->m_absensi->getkodeabsensi();
    $data['jumlah_karyawan'] = $this->m_karyawan->getKaryawan()->num_rows();
    $this->load->view('admin/v_home', $data);
    $this->load->view('admin/include/v_footer');
  }
  function fetch()
  {
    $data = $this->m_absensi->select();
    $output = '

    <table class="table table-striped jambo_table bulk_action">
      <thead>
        <tr class="headings">

          <th class="column-title">NIP </th>
          <th class="column-title">Tanggal Masuk </th>
          <th class="column-title">Scan Masuk </th>
          <th class="column-title">Scan Keluar </th>
          <th class="column-title">Terlambat </th>
          <th class="column-title">Jam Kerja </th>
          <th class="column-title">Lembur </th>
          <th class="column-title">Potongan </th>
          <th class="bulk-actions" colspan="7">
            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
          </th>
        </tr>
      </thead>
     ';
     if($data->num_rows() > 0){

       foreach ($data->result() as $ff) {
         $global_nip = $ff->nip;
       }
       $nip2 = $global_nip;
       $select_gaji = $this->m_absensi->getKaryawan($nip2);
       foreach($select_gaji->result() as $jj){
         $global_kode_divisi = $jj->kode_divisi;
       }
       //---------------------------------------------------------------------------------
       $global_kode_divisi2 = $global_kode_divisi;
       $getGaji2     = $this->m_absensi->getGaji($global_kode_divisi2);
       foreach($getGaji2->result() as $rowGaji)
       {
         $lemburan_global        = $rowGaji->lembur;
         $potongan_gaji_global   = $rowGaji->potongan;
         $gaji_pokok_global      = $rowGaji->gaji;
       }
       //-------------------------------------- end get gaji -----------------------------




       foreach($data->result() as $row)
       {
         $output .= '
         <tbody>
           <tr class="even pointer">

             <td class=" ">'.$row->nip.'</td>
             <td class=" ">'.$row->tgl_absen.'</td>
             <td class=" ">'.$row->scan_masuk.'</td>
             <td class="a-right a-right ">'.$row->scan_keluar.'</td>
             <td class=" ">'.selisih($row->scan_masuk, $row->jam_masuk).'</td>
             <td class=" ">'.selisih($row->scan_keluar, $row->scan_masuk).'</td>
             <td class=" ">'.number_format(getJam($row->scan_keluar, $row->jam_keluar) * $lemburan_global) .'</td>
          ';
          if($h = getJam($row->scan_masuk, $row->jam_masuk) ){
            $output .= '<td class=" ">'.number_format($h * $potongan_gaji_global)  .'</td> ';
          }
          $output .= '
             </tr>
             </tbody>
          ';
       }
          $output .= '</table>';

          //get Karyawan --------------------------------------------------------------------
          $nip = $row->nip;
          $select = $this->m_absensi->getKaryawan($nip);
          foreach($select->result() as $key){
            $output .= '
            <div class="x_title">
              <h3>Detail Karyawan</h3>
              <div class="clearfix"></div>
            </div>
            <table class="table table-striped jambo_table">
              <thead>
                <tr class="headings">
                  <th> Nama Karyawan</th>
                  <td>: '.$key->nama_depan.' '.$key->nama_belakang.' </td>
                </tr>
                <tr class="headings">
                  <th> Jabatan  </th>
                  <td>: '.$key->jabatan.' </td>
                </tr>
                <tr class="headings">
                  <th> Divisi  </th>
                  <td>: '.$key->nama_divisi.'  </td>
                </tr>
              </thead>
            </table>
            ';
          }
          //---------------------------------------------------------------------------------
          $kode_divisi = $key->kode_divisi;
          $getGaji     = $this->m_absensi->getGaji($kode_divisi);
          foreach($getGaji->result() as $rowGaji)
          {
            $lemburan      = $rowGaji->lembur;
            $potongan_gaji = $rowGaji->potongan;
            $gaji_pokok    = $rowGaji->gaji;
          }
          //-------------------------------------- end get gaji -----------------------------

          //------------------------------- get total lembur --------------------------------
          $sum_lembur   = 0;
          $sum_potongan = 0;
          foreach($data->result() as $row)
          {
            $sum_lembur += str_replace(",","", getJam($row->scan_keluar, $row->jam_keluar) * $lemburan);
            $sum_potongan += str_replace(",","", getJam($row->scan_masuk, $row->jam_masuk) * $potongan_gaji);
          }
          //------------------------------- get total lembur ---------------------------------
          $Total_gaji = $gaji_pokok + $sum_lembur - $sum_potongan;

          $output .= '

              <div class="x_title">
                <h3>Rincian Gaji</h3>
                <div class="clearfix"></div>
              </div>


              <table class="table table-striped jambo_table">
                <thead>
                  <tr class="headings">
                    <th> Total Lembur  </th>
                    <td>: RP. '. number_format($sum_lembur).' </td>

                  </tr>
                  <tr class="headings">
                    <th> Total Potongan  </th>
                    <td>: RP. '. number_format($sum_potongan).' </td>
                  </tr>
                  <tr class="headings">
                    <th> Gaji Pokok  </th>
                    <td>: RP. '.number_format($gaji_pokok).'  </td>
                  </tr>
                  <tr class="headings">
                    <th> Total  </th>
                    <td>: RP. '.number_format($Total_gaji).' </td>
                  </tr>
                </thead>
              </table>
          ';

          $output .= '
            <form id="simpan-gaji" method="post">
              <input type="hidden" name="kode_penggajian" value="'.$this->m_absensi->getkodePenggajian().'">
              <input type="hidden" name="nip" value="'.$nip.'">
              <input type="hidden" name="lembur" value="'.$sum_lembur.'">
              <input type="hidden" name="potongan" value="'.$sum_potongan.'">
              <input type="hidden" name="total_gaji" value="'.$Total_gaji.'">
              <input type="hidden" name="tgl_penggajian" value="'.$row->tgl_penggajian.'">

              <input type="submit" name="submit" value="SIMPAN" class="btn btn-info">
              <a href='.base_url('admin/home/hapusabsensi?nip='.$nip).' class="btn btn-danger">BATALKAN</a>
            </form>
          ';

     }else{
       $output .= '<p> Silahkan Upload File Absensi</p>';
     }



     echo $output;
  }

  function importAbsen()
  {
    if(isset($_FILES["file"]["name"]))
		{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow      = $worksheet->getHighestRow();
				$highestColumn   = $worksheet->getHighestColumn();


				for($row=2; $row<=$highestRow; $row++)
				{


					$nip              = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$tgl_absen 			  = $worksheet->getCellByColumnAndRow(1, $row)->getFormattedValue();
					$jam_masuk  			= $worksheet->getCellByColumnAndRow(2, $row)->getFormattedValue();
					$jam_keluar 		  = $worksheet->getCellByColumnAndRow(3, $row)->getFormattedValue();
					$scan_masuk			  = $worksheet->getCellByColumnAndRow(4, $row)->getFormattedValue();
          $scan_keluar		  = $worksheet->getCellByColumnAndRow(5, $row)->getFormattedValue();

          $terlambat        = insertselisih($scan_masuk, $jam_masuk);
          $jam_kerja        = insertselisih($scan_keluar, $scan_masuk);
          $lembur           = insertselisih($scan_keluar, $jam_keluar);
          $tanggal_penggajian = $this->input->post('tanggal');


					$data[] = array(
						'nip'		            => $nip,
						'tgl_absen'		    	=> $tgl_absen,
						'jam_masuk'			    => $jam_masuk,
						'jam_keluar'  	   	=> $jam_keluar,
						'scan_masuk'		    => $scan_masuk,
            'scan_keluar'       => $scan_keluar,
            'terlambat'         => $terlambat,
            'jam_kerja'         => $jam_kerja,
            'lembur'            => $lembur,
            'tgl_penggajian'    => $tanggal_penggajian
					);
				}
			}
      // print_r($data);
      $check_nip = $this->m_absensi->cekdata($nip);
      if($check_nip->num_rows() > 0 ){
        $this->m_absensi->insert($data);
        echo 'Absensi berhasil di Import';
      }else{
        echo "NIP karyawan tidak terdaftar";
      }



		}
  }

  function simpanGaji()
  {
    $kode_penggajian    = $this->input->post('kode_penggajian');
    $tanggal_penggajian = $this->input->post('tgl_penggajian');
    $nip                = $this->input->post('nip');
    $total_lembur       = $this->input->post('lembur');
    $total_potongan     = $this->input->post('potongan');
    $total_gaji         = $this->input->post('total_gaji');

    $data = array(
      'id_penggajian'       => $kode_penggajian,
      'tgl_penggajian'      => $tanggal_penggajian,
      'nip'                 => $nip,
      'total_lemburan'      => $total_lembur,
      'total_potongan'      => $total_potongan,
      'total_gaji'          => $total_gaji,
      'status_penggajian'   => 'proses'
    );
     $insert = $this->db->insert('tb_penggajian', $data);

    if($insert){
      $data2 = array(
        'status' => 'ok'// update agar tidak tampil
      );
      $where = array(
        'tgl_penggajian' => $tanggal_penggajian
      );
      $this->db->where($where);
      $this->db->update('tb_daftar_absensi', $data2);
      echo "Gaji karyawan berhasil disimpan";
    }

  }

  function getPenggajian()
  {
    $data = $this->m_absensi->getPenggajian();
    echo json_encode($data);
  }

  function hapusabsensi()
  {
    $where = array(
      'nip' => $_GET['nip'],
      'status' => ''
    );

    $this->db->where($where);
    $this->db->delete('tb_daftar_absensi');
    redirect(base_url('admin/home') );
  }




}
