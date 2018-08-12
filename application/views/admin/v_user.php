  <div class="right_col" role="main">



  <div class="row">
      <div class="col-md-4">
        <div class="x_panel">
          <form class="" action="<?= base_url('admin/user/simpanUser')  ?>" method="post">
            <div class="form-group">
              <label>Email</label>
              <input type="email" id="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
              <select class="form-control" id="level" name="level" required>
                <option value="">-- pilih level --</option>
                <option value="ADMIN">ADMIN</option>
                <option value="DIREKTUR">DIREKTUR</option>
              </select>
            </div>

            <div class="form-group">
              <input type="submit" name="simpan" value="SIMPAN" class="btn btn-info btn-simpan">
              <input type="submit" name="update" value="UPDATE" class="btn btn-success btn-update">
            </div>

            <!-- notif -->
            <?php if($this->session->flashdata('msg') ): ?>
            <div class="panel panel-warning">
              <div class="panel-heading">
                <?= $this->session->flashdata('msg') ?>
              </div>
            </div>
            <?php endif; ?>

            <!-- notif -->
          </form>
        </div>

      </div>
      <div class="col-md-8">
        <div class="x_panel">
            <div class="x_title">
              <h3> Hak Akses user </h3>
            </div>

            <table class="table table-striped table-hover" >
              <thead>
                <tr>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($data_user as $key): ?>
                  <tr>
                    <td><?= $key->email_admin ?> </td>
                    <td><?= $key->username ?> </td>
                    <td><?= $key->level ?> </td>
                    <td>
                      <a href="javascript:;" class="btn btn-warning btn-xs btn-edit"
                      data-email="<?= $key->email_admin ?>" data-username="<?= $key->username ?>"
                      data-level="<?= $key->level ?>">Edit</a>

                      <a href="<?= base_url('admin/user/hapusUser?id='.$key->email_admin) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin ingin menghapus ? ')" >Hapus</a>
                    </td>
                  </tr>


                <?php endforeach; ?>
              </tbody>
            </table>

        </div>
      </div>
  </div>
  </div>
  <script src="<?= base_url().'assets1/vendors/jquery/dist/jquery.min.js' ?> "></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.btn-update').hide();

      $('.btn-edit').click(function(){
        $('.btn-update').show('slow', function(){
          $('.btn-simpan').hide('slow');
        });
        var email    = $(this).attr('data-email');
        var username = $(this).attr('data-username');
        var level    = $(this).attr('data-level');

        $('#email').val(email);
        $('#username').val(username);
        $('#level').val(level);
        $('#password').val("");




      });


    });
  </script>
