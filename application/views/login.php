<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page WAGateway</title>

  <link rel="icon" href="<?= base_url('assets/img/favicon-wa.ico') ?>" type="image/svg+xml">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
<!-- icheck bootstrap -->
<link href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>" rel="stylesheet">
<!-- Theme style -->
<link href="<?php echo base_url('assets/dist/css/adminlte.min.css'); ?>" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="#" class="h1"><i class="fa-brands fa-whatsapp" style="font-size: 100; color: green;"></i> <b>WA</b>Gateway</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

        <?php if($this->session->flashdata('error')): ?>
            <p style="color:red"><?= $this->session->flashdata('error') ?></p>
        <?php endif; ?>

      <form action="<?= site_url('auth/login_process') ?>" method="post" class="mb-3">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="#" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
      <span class="h6">Developed by: <a href="https://instagram.com/burhanfauzisalam">Bukan Sarjana Komputer</a></span>
    </div>
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.jss'); ?>"></script>
</body>
</html>
