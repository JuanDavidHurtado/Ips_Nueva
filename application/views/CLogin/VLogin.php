<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IPS NUEVA | INICIO SESIÓN</title>
  <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico') ?>" /> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/dist/css/bootstrap.min.css"); ?>" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url("assets/Ionicons/css/ionicons.min.css"); ?>" />

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("assets/dist/css/AdminLTE.min.css"); ?>" />
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url("assets/plugins/iCheck/square/blue.css"); ?>" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<?php echo form_open_multipart('CLogin/login'); ?>
<div class="login-box">
 
  <?php if (isset($msg)) { ?>
                        <!-- Presentacion del mensajes de error-->
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i style="font-size:15px" class="fa">&#xf071;</i> Error !</strong> <?= $msg ?>
                        </div>
  <?php } ?>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <img class="img-responsive" src="<?= base_url("assets/img/Logo.png"); ?>" /><br>
    <p class="login-box-msg"><b>Sistema de Información Validador de Rips</b></p>

    <form>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="log" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="pwd" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
<!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>-->
    <!-- /.social-auth-links -->
<!--
    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?= base_url("assets/jquery/dist/jquery.min.js") ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url("assets/bootstrap/dist/js/bootstrap.min.js") ?>"></script>

<!-- iCheck -->
<script src="<?= base_url("assets/plugins/iCheck/icheck.min.js") ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
