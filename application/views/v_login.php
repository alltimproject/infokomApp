<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login system | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url().'assets/vendors/bootstrap/dist/css/bootstrap.min.css' ?> " rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url().'assets/vendors/font-awesome/css/font-awesome.min.css' ?> " rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url().'assets/vendors/nprogress/nprogress.css' ?> " rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url().'assets/vendors/animate.css/animate.min.css' ?> " rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url().'assets/build/css/custom.min.css' ?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup">jjjj</a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">

        <div class="animate form login_form">
          <section class="login_content" style="background-color:rgb(27, 18, 56, 0.1);">

            <?php if($this->session->flashdata('notiflogin') ): ?>
            <div class="x_panel"  style="background-color:red;">
              <h5 style="color:white;"><?= $this->session->flashdata('notiflogin') ?></h5>
            </div>
          <?php endif; ?>

            <form class="form-inline" action="<?= base_url('login/loginaction') ?>" method="post">
                  <div class="form-group">
                    <label for="ex3">Email address</label>
                    <input type="email" id="ex3" name="email" class="form-control" placeholder="****@infokom.com">
                  </div>
                  <div class="form-group">
                    <label for="ex3">Password</label>
                    <input type="password" id="ex3" name="password" class="form-control" placeholder="***">
                  </div>

                  <button type="submit" class="btn btn-info" style="width:100px;">LOGIN</button>
            </form>


            <form>
              <h1>LOGIN</h1>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Lihat Slip gaji </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1 style="color:black;"><b> INFOKOM INTERNUSA </b></h1>
                  <p>©2016 All Rights Reserved. INFOKOM INTERNUSA ! Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form action="<?= base_url('login/loginKaryawan')  ?>" method="post">
              <h1>Login Karyawan</h1>

              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>

                <center><input type="submit" class="btn btn-default submit" name="submit" value="LOGIN"></center>


              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1 style="color:black;"><b> PT.INFOKOM INTERNUSA </b></h1>
                  <p>©2016 All Rights Reserved. INFOKOM INTERNUSA ! Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
