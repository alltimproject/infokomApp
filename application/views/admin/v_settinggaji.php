  <div class="right_col" role="main">

    <div class="x_panel">
      <div class="x_title">
        <h3>Form Setting Gaji</h3>
      </div>

      <div class="col-md-4">
        <form action="<?= base_url('admin/divisi/simpanGajiDivisi') ?> " method="post">
          <div class="form-group">
            <label>Kode Divisi</label>
            <select class="form-control" name="kode_divisi" id="kode_divisi" required>
              <option value="">-- Pilih Divisi -- </option>
              <?php foreach($data_divisi as $key){
              echo "<option value='$key->kode_divisi'> $key->nama_divisi  </option>";
              } ?>
            </select>
          </div>

          <div class="form-group">
            <label>Gaji Pokok</label>
            <input type="number" name="gaji" class="form-control" id="gaji" required>
          </div>

          <div class="form-group">
            <label>Lembur</label>
            <input type="number" name="lembur" class="form-control" id="lembur" required>
          </div>

          <div class="form-group">
            <label>Potongan</label>
            <input type="number" name="potongan" class="form-control" id="potongan" required>
          </div>

          <div class="form-group">
            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-info btn-xs btn-simpan">
            <input type="submit" name="update" value="UPDATE" class="btn btn-success btn-xs btn-update">
            <a href="javascript:;" class="btn btn-danger btn-xs btn-cancel">BATAL</a>
          </div>

        </form> <p class="msg"><?= $this->session->flashdata('msg'); ?> </p>
      </div>

      <div class="col-md-8">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Divisi</th>
              <th>Gaji Pokok</th>
              <th>Lembur</th>
              <th>Potongan</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($gaji_divisi as $key): ?>
              <tr>
                <td><?= $key->nama_divisi ?></td>
                <td><?= number_format($key->gaji)  ?> </td>
                <td><?= number_format($key->lembur)  ?> </td>
                <td><?= number_format($key->potongan)  ?> </td>
                <td>
                  <a href="javascript:;" class="btn btn-warning btn-xs btn-edit" data-gaji="<?= $key->gaji ?>" data-lembur="<?= $key->lembur ?>" data-potongan="<?= $key->potongan ?>" data-divisi="<?= $key->kode_divisi ?>">EDIT</a>
                  <a href="<?= base_url('admin/divisi/hapusGaji/'.$key->kode_divisi) ?> " class="btn btn-danger btn-xs">HAPUS</a>
                </td>

              </tr>

            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

    </div>
   </div>
  <div>

    <script src="<?= base_url().'assets/vendors/jquery/dist/jquery.min.js' ?> "></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.btn-update').hide();
        $('.btn-cancel').hide();

        $('.btn-edit').click(function(){

          var gaji   = $(this).attr('data-gaji');
          var lembur = $(this).attr('data-lembur');
          var potongan = $(this).attr('data-potongan');
          var kode     = $(this).attr('data-divisi');

          $('#gaji').val(gaji);
          $('#lembur').val(lembur);
          $('#potongan').val(potongan);
          $('#kode_divisi').val(kode);

          $('.btn-simpan').hide('slow', function(){
            $('.btn-update').show('slow');
            $('.btn-cancel').show('slow');
          });
        });
        });

        $('.msg').show('slow', function(){
          $('.msg').hide(5000);

        $('.btn-cancel').click(function(){
          $('.btn-simpan').hide('slow', function(){
            $('.btn-update').hide('slow');
            $('.btn-cancel').hide('slow');
            $('.btn-simpan').show('slow',function(){
              window.location = '<?= base_url('admin/divisi/gajidivisi') ?>';
            });


          });
        });




      });
    </script>
