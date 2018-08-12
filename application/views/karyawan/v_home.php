<!-- page content -->
<div class="right_col" role="main">
    <div id="lihat-absens-data"></div>
  <div class="col-md-12 col-sm-12 col-xs-12 menu-absensi">

                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> SLIP GAJI <small><?= $this->session->userdata('fullname_karyawan') ?> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left ">
                        <li class="active"><a href="#home" data-toggle="tab">Lihat Slip</a>
                        </li>
                        <li><a href="#profile" data-toggle="tab">Biodata</a>
                        </li>

                      </ul>
                    </div>

                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="home">
                          <p class="lead">SLIP</p>
                      <?php if($slip_gaji->num_rows() > 0  ){ ?>
                      <?php foreach($slip_gaji->result() as $slip): ?>
                        <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">

                          <div class="x_panel">
                            <div class="x_title">
                              <h2><?= bulan_indo($slip->tgl_penggajian) ?><small>SLIP GAJI</small></h2>
                              <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?= base_url('karyawan/home/lihatabsensi/'.$slip->tgl_penggajian) ?> " class="lihat-absensi" data-tgl="<?= $slip->tgl_penggajian ?>" data-nip="<?= $this->session->userdata('nip_karyawan') ?>">Lihat Daftar Absensi</a>
                                    </li>
                                    </li>
                                  </ul>
                                </li>

                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Total Lemburan</th>
                                    <th>Total Potongan</th>
                                    <th>Total Gaji</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>

                                  <tr>
                                    <th scope="row">1</th>
                                    <td><?= number_format($slip->total_lemburan) ?></td>
                                    <td><?= number_format($slip->total_potongan) ?></td>
                                    <td><?= number_format($slip->total_gaji) ?></td>
                                    <td><a href="<?= base_url('karyawan/slip/gaji/'.$slip->id_penggajian) ?>" target="_blank">Download Slip gaji</a> </td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endforeach; ?>
                            <!-- end of accordion -->
                      <?php }else{ ?>

                      <?php echo "Tidak ada data"; ?>


                      <?php } ?>
                        </div>
                        <div class="tab-pane" id="profile">
                          <!-- profile tab -->
                          <table class="table table-striped">
                            <tr>
                              <th>Nama Karyawan </th>
                              <th>: <?= $this->session->userdata('fullname_karyawan') ?></th>
                            </tr>
                            <tr>
                              <th>Jabatan</th>
                              <th>: <?= $this->session->userdata('jabatan_karyawan') ?></th>
                            </tr>
                            <tr>
                              <th>NIP</th>
                              <th>: <?= $this->session->userdata('nip_karyawan'); ?></th>
                            </tr>
                            <tr>
                              <th>Divisi</th>
                              <th>: <?= $this->session->userdata('divisi_karyawan'); ?></th>
                            </tr>

                          </table>

                        </div>

                      </div>
                    </div>

                    <div class="clearfix"></div>

                  </div>
                </div>
              </div>

</div>
<script src="<?= base_url().'assets1/vendors/jquery/dist/jquery.min.js' ?> "></script>
<script type="text/javascript">

  $(document).ready(function(){





  });


</script>
