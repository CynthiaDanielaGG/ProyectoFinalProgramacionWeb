<?php
session_start();
 ?>
 <!-- Se hace referencia que utilizara las variables del archivo conexion.php-->
<?php require_once("includes/conexion.php"); ?>

<?php
//Aqui se pregunta si la sesion del usuario ya esta iniciada
if(isset($_SESSION["session_vendedor"])){
// en caso de cerrarse la sesion se manda a la pagina principal
	header("Location: vendedor/panel/index.php");
}
if(isset($_SESSION["session_admin"])){
// en caso de cerrarse la sesion se manda a la pagina principal
	header("Location: administrar.php");
}
 ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <script src="css/sweetalert.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
  <div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Renta y Venta de mobiliario</b>Tec</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicia tu sesión</p>

    <form id='formlogin' nam='formlogin' method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="email" placeholder="correo electronico" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id ="btnentrar" name = "btnentrar">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
<?php
if(isset($_POST["btnentrar"]))
{
  $email = $_POST['email'];
  $password = $_POST['password'];

  if ($email == "admin@gmail.com" && $password == "123456") {
    # code...
    #Pagina del administrador
 		$_SESSION['session_admin']=$email;
 		//Aqui va el link a la pagina del administrador
 		header("Location: administrar.php");
  }else {
    # code...
    //primero comprobamos si se trata de un vendedor
 			$query = mysql_query("SELECT * FROM usuario WHERE email='".$email."'");
      $numrows=mysql_num_rows($query);
      if ($numrows!=0) {
        $row=mysql_fetch_assoc($query);
        if ($password == $row['password']) {
          $_SESSION["session_vendedor"] = $row['nombre'];
          header("Location: vendedor/panel/index.php");
        }else {
          $mensaje = "Contraseña incorrecta!";
          echo "<script type='text/javascript'>";
          echo "swal('Oops..!','".$mensaje."','error')";
          echo "</script>";
        }

      }else {
        $mensaje = "Usuario no registrado en el sistema!";
        echo "<script type='text/javascript'>";
        echo "swal('Oops..!','".$mensaje."','error')";
        echo "</script>";
      }
  }
}
 ?>
