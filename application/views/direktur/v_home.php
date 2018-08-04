<div class="right_col" role="main">

<!-- top tiles -->
<div class="row tile_count">

<div class="col-md-6 col-sm-4 col-xs-6 tile_stats_count">
<div class="x_panel">
  <span class="count_top"><i class="fa fa-user"></i> Menungu Konfirmasi</span>
  <div class="count"><?= $data_gaji_menunggu->num_rows(); ?></div>
</div>
</div>

<div class="col-md-6 col-sm-4 col-xs-6 tile_stats_count">
<div class="x_panel">
  <span class="count_top"><i class="fa fa-user"></i> Konfirmasi Berhasil </span>
  <div class="count"><?= $data_gaji_konfirmasi->num_rows(); ?></div>
</div>
</div>


</div>
<!-- /top tiles -->

<div class="col-md-12 col-sm-6 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2><i class="fa fa-bars"></i> Data Penggajian <small>Infokom</small></h2>
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
        <ul class="nav nav-tabs tabs-left">
          <li class="active"><a href="#home" data-toggle="tab">Menunggu Konfirmasi</a>
          </li>
          <li><a href="#profile" data-toggle="tab">Konfirmasi Berhasil</a>
          </li>
        </ul>
      </div>

      <div class="col-xs-9">
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home">
            <p class="lead">Menunggu Konfirmasi</p>

            <table class="table table-striped jambo_table bulk_action" >
              <thead>
                <tr>
                  <th>Tanggal Penggajian </th>
                  <th>Nip</th>
                  <th>Total Lemburan</th>
                  <th>Total Potongan</th>
                  <th>Total Gaji</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($data_gaji_menunggu->result() as $key): ?>
                <tr>
                  <td> <?=  tanggal_indo($key->tgl_penggajian) ?> </td>
                  <td><?= $key->nip ?></td>
                  <td><?= number_format($key->total_lemburan) ?></td>
                  <td><?= number_format($key->total_potongan) ?></td>
                  <td><?= number_format($key->total_gaji) ?></td>
                  <td>

                    <form class="form-validasi" method="post">
                      <input type="hidden" name="nip" value="<?= $key->nip ?>">
                      <input type="hidden" name="tgl" value="<?= $key->tgl_penggajian ?>">
                      <input type="submit" name="simpanValidasi" value="VALIDASI" class="btn btn-info btn-xs">
                    </form>

                  </td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>


          </div>
          <div class="tab-pane" id="profile">
            <p class="lead">Konfirmasi Berhasil</p>
            <table class="table table-striped jambo_table bulk_action" >
              <thead>
                <tr>
                  <th>Tanggal Penggajian </th>
                  <th>Nip</th>
                  <th>Total Lemburan</th>
                  <th>Total Potongan</th>
                  <th>Total Gaji</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($data_gaji_konfirmasi->result() as $key): ?>
                <tr>
                  <td> <?=  tanggal_indo($key->tgl_penggajian) ?> </td>
                  <td><?= $key->nip ?></td>
                  <td><?= number_format($key->total_lemburan) ?></td>
                  <td><?= number_format($key->total_potongan) ?></td>
                  <td><?= number_format($key->total_gaji) ?></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>

      <div class="clearfix"></div>

    </div>
  </div>
</div>
</div>

<script src="<?= base_url().'assets/vendors/jquery/dist/jquery.min.js' ?> "></script>
<script type="text/javascript">
  $(document).ready(function(){

    $('.form-validasi').on('submit', function(event){
      event.preventDefault();
      var data = $('.form-validasi').serialize();

      $.ajax({
        type:'POST',
        url:"<?= base_url('direktur/home/simpanValidasi') ?>",
        data:data,
        success:function(data){
          alert(data);
          window.location.href = '<?= base_url('direktur/home') ?> ';
        }
      });



    })





  });
</script>
