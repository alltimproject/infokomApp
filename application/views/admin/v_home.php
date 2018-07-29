

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Karyawan </span>
              <div class="count"><?= $jumlah_karyawan ?></div>
            </div>


            <div class="row x_title">
              <div class="col-md-6">
                <h1><a href="#" class="btn btn-round btn-default btn-lg btn-upload">UPLOAD ABSENSI</a>
                  <small>

                   </small>
                </h1>
              </div>

              <div class="col-md-6">
                <form method="post" id="import_form" enctype="multipart/form-data">

                  <div class="form-group">
                      <label>Pilih Absensi Karyawan</label>
                      <input type="file" name="file" id="file" class="form-control" required accept=".xls, .xlsx">
                  </div>
                  <div class="form-group">
                      <label>Tanggal Penggajian</label>
                      <input type="date" name="tanggal" id="tgl_penggajian" class="form-control" required>
                  </div>

                  <br/>
                  <input type="submit" style="float:right;" name="import" value="IMPORT DATA" class="btn btn-info">
                </form>
              </div>
            </div>

          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">



                <div class="col-md-12 col-sm-9 col-xs-12" id="show-absensi">
                    <!--table -->
                    <div class="table-responsive">

                    </div>
                  <!-- table -->
                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />





          <div class="row">


            <div class="col-md-8 col-sm-8 col-xs-12">

              <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Histori Penggajian <small>geo-presentation</small></h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="dashboard-widget-content">
                        <div class="col-md-12 hidden-small">
                          <h2 class="line_30"></h2>

                          <table class="countries_list jambo_table">
                            <thead>
                              <tr class="headings">
                                <th>ID Penggajian</th>
                                <th>Tanggal Penggajian</th>
                                <th>NIP</th>
                                <th>Nama Karyawan</th>
                                <th>Email</th>
                                <th>Total Gaji</th>
                              </tr>
                            </thead>
                            <tbody id="show-penggajian"></tbody>
                          </table>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">



              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<script src="<?= base_url().'assets/vendors/jquery/dist/jquery.min.js' ?> "></script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#import_form').hide();
    load_data();
    loadpenggajian();

      $('.btn-upload').click(function(){
        $('#import_form').show('slow', function(){
          $('.btn-upload').hide('slow');
        });
      });

    function load_data()
    {
      $.ajax({
        url:"<?php echo base_url();  ?>admin/home/fetch",
        method:"POST",
        success:function(data){
          $('#show-absensi').html(data);
        }
      });
    }



    $('#import_form').on('submit', function(event){

      event.preventDefault();
      $.ajax({

        url:"<?= base_url(); ?>admin/home/importAbsen",
        method:"POST",
        data:new FormData(this),
        contentType:false,
        cache:false,
        processData:false,
        success:function(data){
          $('#file').val('');
          $('#tgl_penggajian').val('');
          load_data();
          alert(data);
          $('#import_form').hide('slow');
        }
      })


    });

    $('#show-absensi').on('submit','#simpan-gaji', function(event){
      event.preventDefault();
      var data = $('#simpan-gaji').serialize();
      $.ajax({
        type:'POST',
        url:"<?= base_url(); ?>admin/home/simpanGaji",
        data:data,
        success:function(data){
          loadpenggajian();
          load_data().show(3000);
          $('#import_form').show('slow');
        }
      });
    });


    function loadpenggajian()
    {
      $.ajax({
        type:'ajax',
        url:'<?php echo base_url('admin/home/getPenggajian') ?>',
        async:false,
        dataType:'json',
        success:function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++)
          {
            html += '<tr>'+
                    '<td>'+data[i].id_penggajian+'</td>'+
                    '<td>'+data[i].tgl_penggajian+'</td>'+
                    '<td>'+data[i].nip+'</td>'+
                    '<td>'+data[i].nama_depan+' '+data[i].nama_belakang+'</td>'+
                    '<td>'+data[i].email+'</td>'+
                    '<td>'+data[i].total_gaji+'</td>'+
                    '</tr>';
          }
          $('#show-penggajian').html(html);
        }
      });
    }


  });
</script>
