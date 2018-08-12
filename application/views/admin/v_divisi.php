  <div class="right_col" role="main">
    <div class="row">
      <div class="x_panel">
        <div class="x_title">
          <h4>Form Divisi</h4>
        </div>
        <div class="col-md-4">
          <form action="<?= base_url('admin/divisi/simpanDivisi') ?>" method="post">

              <div class="form-group">
                <label>KODE DIVISI</label>
                <input type="text" class="form-control" name="kode_divisi" value="<?= $kode_divisi ?> " id="kode_divisi" readonly>
              </div>
              <div class="form-group">
                <label>Nama Divisi</label>
                <input type="text" class="form-control" name="nama_divisi" id="nama_divisi" required>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" id="simpan" value="SIMPAN" class="btn btn-info btn-xs">
                <input type="submit" name="update" id="update" value="UPDATE" class="btn btn-success btn-xs">
                <a href="javascript:;" id="batal" class="btn btn-danger btn-xs">BATAL</a>
              </div>

          </form>
        </div>

        <div class="col-md-8">
          <div class="x_title">
            <h5>DATA DIVISI</h5>
          </div>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                  <td>KODE DIVISI</td>
                  <td>Nama Divisi</td>
                  <td>Opsi</td>
              </tr>
            </thead>
            <tbody>
              <?php foreach($data_divisi as $key): ?>
                <tr>
                  <td><?= $key->kode_divisi ?></td>
                  <td><?= $key->nama_divisi ?></td>
                  <td>
                    <a href="javascript:;" class="btn btn-warning btn-xs btn-edit" data-nama="<?= $key->nama_divisi ?>" data-id="<?= $key->kode_divisi ?>">EDIT</a>
                    <a href="<?= base_url('admin/divisi/hapus/'.$key->kode_divisi) ?> " onclick="return confirm('Anda yakin ingin menghapus ?')" class="btn btn-danger btn-xs">HAPUS</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>


      </div>
    </div>


  </div>
  <script src="<?= base_url().'assets1/vendors/jquery/dist/jquery.min.js' ?> "></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#update').hide();
      $('#batal').hide();

      $('.btn-edit').click(function(){
        var kode = $(this).attr('data-id');
        var nam  = $(this).attr('data-nama');

        $('#nama_divisi').val(nam);
        $('#kode_divisi').val(kode);
        $('#simpan').hide('slow',function(){
          $('#update').show('slow');
            $('#batal').show('slow');
        });

        $('#batal').click(function(){
          $('#simpan').show('slow',function(){
            $('#update').hide('slow');
              $('#batal').hide('slow');
              window.location = '<?= base_url('admin/divisi') ?>';
          });
        });


      });


    });
  </script>
