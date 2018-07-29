  <div class="right_col" role="main">

          <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Karyawan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>


                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="form-karyawan" class="form-horizontal form-label-left input_mask karyawan_form" method="post" action="<?= base_url('admin/karyawan/simpanKaryawan') ?> ">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label>Nama depan  </label>
                        <input type="text" name="nama_depan" class="form-control has-feedback-left" id="nama_depan" placeholder="Nama depan" required>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label>Nama belakang </label>
                        <input type="text" name="nama_belakang" class="form-control" id="nama_belakang" placeholder="Nama belakang" required>
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label>Alamat</label>
                        <textarea name="alamat" rows="5" class="form-control has-feedback-left" id="alamat" cols="80" required></textarea>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label>NIP Karyawan</label>
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="Nama belakang" required>
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label>No. telepon</label>
                        <input type="text" class="form-control" name="no_telepon" id="telepon" placeholder="Nama belakang" required>
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>



                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                        <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback passwordid">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" name="password" id="inputSuccess5" placeholder="*****">
                        <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Divisi </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="divisi" id="divisi">
                            <option value=""> -- pilih divisi --  </option>
                            <?php foreach($data_divisi->result() as $key){
                              echo "<option value='$key->kode_divisi'> $key->nama_divisi </option>";
                            } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal gabung</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="date" name="tanggal_join" class="form-control" id="tgl_gabung"  placeholder="Read-Only Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12" name="jabatan" required="required" id="jabatan" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <a href="<?= base_url('admin/karyawan') ?> " class="btn btn-info btn-xs">Cancel</a>
						               <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="simpan" class="btn btn-success btn-simpan">Submit</button>
                            <button type="submit" name="update" class="btn btn-warning btn-update">Update</button>
                        </div>  <p><?= $this->session->flashdata('msg'); ?> </p>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>

          <div class="x_panel">
            <div class="x_title">
              <h4>Data Karyawan</h4>
            </div>
            <table class="table table-striped table-hover" >
              <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No. Telepon</th>
                  <th>Email</th>
                  <th>Divisi</th>
                  <th>Jabatan</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody id="show_karyawan" >
                <?php foreach($data_kar as $key): ?>
                  <tr>
                    <td><?= $key->nip ?> </td>
                    <td><?= $key->nama_depan.' '.$key->nama_belakang ?> </td>
                    <td><?= $key->alamat ?> </td>
                    <td><?= $key->no_telepon ?> </td>
                    <td><?= $key->email ?> </td>
                    <td><?= $key->kode_divisi ?></td>
                    <td><?= $key->jabatan ?></td>
                    <td>
                    <a href="#" class="btn btn-warning btn-xs btn-edit"
                     data-nip="<?= $key->nip ?>" data-nama_depan="<?= $key->nama_depan ?>" data-nama_belakang="<?= $key->nama_belakang ?>"
                     data-alamat="<?= $key->alamat ?>" data-telepon="<?= $key->no_telepon ?>" data-email="<?= $key->email ?>" data-divisi="<?= $key->kode_divisi ?>"
                     data-jabatan="<?= $key->jabatan ?>">EDIT</a>
                    <a href="javascript:;" data-nip="<?= $key->nip ?>" class="btn btn-danger btn-xs btn-hapus">HAPUS</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

          </div>


                      <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p>Anda yakin ingin mengahapus data ini ?</p>
                  </div>
                  <div class="modal-footer">
                    <form class="form-hapus" method="post">
                      <input type="hidden" id="nip_konfirmasi" name="nip" >
                      <a href="javascript:;" class="btn btn-info btn-xs btn-konfirmasi"><i class="fa fa-trash fa-2x"></i></a>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>

                  </div>
                </div>

              </div>
            </div>



  </div>
  <script src="<?= base_url().'assets/vendors/jquery/dist/jquery.min.js' ?> "></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.btn-update').hide();

      $('.btn-edit').click(function(){

        
        $('.btn-update').show('slow', function(){
            $('.btn-simpan').hide('slow');
        });

        $('.passwordid').hide();
        $('.btn-simpan').hide();

        var nip           = $(this).attr('data-nip');
        var nama_depan    = $(this).attr('data-nama_depan');
        var nama_belakang = $(this).attr('data-nama_belakang');
        var alamat        = $(this).attr('data-alamat');
        var telp          = $(this).attr('data-telepon');
        var email         = $(this).attr('data-email');
        var divisi        = $(this).attr('data-divisi');
        var jabatan       = $(this).attr('data-jabatan');



        $('#nip').val(nip);
        $('#nama_depan').val(nama_depan);
        $('#nama_belakang').val(nama_belakang);
        $('#alamat').val(alamat);
        $('#telepon').val(telp);
        $('#email').val(email);
        $('#divisi').val(divisi);
        $('#jabatan').val(jabatan);

      });

      $(document).on('click', '.btn-hapus', function(){
        $('#myModal').modal('show');
          var nip = $(this).attr('data-nip');
          $('#nip_konfirmasi').val(nip);

      });

      $(document).on('click', '.btn-konfirmasi', function(){
        var data = $('.form-hapus').serialize();

        $.ajax({
            type:'POST',
            url:'<?= base_url('admin/karyawan/hapusKaryawan') ?>',
            data:data,
            success:function(data){
              alert(data);
              // $('#myModal').modal('hide');
              window.location.href = '<?= base_url('admin/karyawan') ?>';
            }
        });


      });


    });
  </script>
