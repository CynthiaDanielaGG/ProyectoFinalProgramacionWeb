<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar | Trabajador</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/select2.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Programacion</b>WEB</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                </ul>
              </li>
            </ul>
          </li>

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php
              require_once('../conexionBD/conexion.php');

                  $resultado = mysqli_query($con,"SELECT foto_perfil,nombre,apellido_paterno,apellido_materno,fecha_nacimiento,genero,telefono,celular FROM datos_personales where id_datospersonales = 1");
                  $fila = mysqli_fetch_array($resultado);

                        echo "<img src='../".$fila[0]."' class='user-image' alt='User Image'>";


              echo "<span class='hidden-xs'>".$fila[1]." ".$fila[2]." ".$fila[3]."</span>";
              ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php
                echo "
                  <img src='../".$fila[0]."' class='img-circle' alt='User Image'>

                  <p>
                    ".$fila[1]." ".$fila[2]." ".$fila[3]." - Administradora
                    <small>Programacion Web</small>
                  </p>";
                  ?>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">

                  </div>
                  <div class="col-xs-4 text-center">

                  </div>
                  <div class="col-xs-4 text-center">

                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">

                </div>
                <div class="pull-right">
                  <a href="../login/login.php" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>


        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php
          echo "
          <img src='../".$fila[0]."' class='img-circle'alt='User Image'>
        </div>
        <div class='pull-left info'>
          <p>".$fila[1]."</p>";
           ?>
          <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">


        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"><center>MENÚ</center></li>

        <li class="treeview">

            <a href="#">
              <i class="fa fa-group"></i> <span>Trabajadores</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../Trabajador/agregar.php"><i class="fa fa-circle-o"></i> Agregar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Modificar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Eliminar</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
            <!--iconos-->
            <i class="fa  fa-cart-plus"></i> <span>Productos</span>
              <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="../index.html"><i class="fa fa-circle-o"></i> Ver catalogo de productos</a></li>
              <li><a href="../index.html"><i class="fa fa-circle-o"></i> Agregar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Modificar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Eliminar</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-street-view"></i> <span>Clientes</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="../index.html"><i class="fa fa-circle-o"></i> Agregar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Modificar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Eliminar</a></li>

            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa  fa-truck"></i> <span>Flete</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="../index.html"><i class="fa fa-circle-o"></i> Agregar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Modificar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Eliminar</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dollar"></i> <span>Venta</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="../index.html"><i class="fa fa-circle-o"></i> Realizar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Modificar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Eliminar</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-tty"></i> <span>Renta</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../index.html"><i class="fa fa-circle-o"></i>Ver agenda</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Realizar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Modificar</a></li>
              <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Eliminar</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-file-text-o"></i> <span>Amortizaciones</span>
            </a>

          </li>
          <li>
            <a href="#">
              <i class="fa fa-bar-chart-o"></i> <span>Grafica</span>
              <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
            </a>

              <ul class="treeview-menu">
                <li><a href="../index.html"><i class="fa fa-circle-o"></i>Reporte de venta</a></li>
                <li><a href="../index2.html"><i class="fa fa-circle-o"></i> Reporte de renta</a></li>
              </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrar un nuevo empleado

      </h1>
      <ol class="breadcrumb">
        <li><a href="../administrador/perfil.php"><i class="fa fa-dashboard"></i>Datos Administrador</a></li>
        <li><a href="#">Trabajadores</a></li>
        <li class="active">Agregar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos personales</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" name="f1" id="registerform" action="agregar.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre(s)</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre" name="nombre">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellido Paterno</label>
                  <input type="text" class="form-control" name="apellido_pat" id="apellido_pat" placeholder="Introduce tu apellido paterno">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellido Materno</label>
                  <input type="text" class="form-control" name="apellido_mat" id="apellido_mat" placeholder="Introduce tu apellido materno">
                </div>

              <!--Calendario-->
              <div class="form-group">
                <label>Fecha de nacimiento:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fecha_nac" id="fecha_nac" placeholder="aaaa-mm-dd">
                </div>
                <!-- /.input group -->
              </div>
              <!--Fin de Calendario-->
              <!--Genero-->
              <div class="form-group">
                <label>Genero:</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="genero" id="genero" value="hombre" checked>
                    Hombre
                  </label>
                  <label>
                    <input type="radio" name="genero" id="genero" value="mujer">
                    Mujer
                  </label>
                </div>
              </div>
              <!--Telefono-->
              <!-- phone mask -->
            <div class="form-group">
              <label>Telefono:</label>

              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </div>
                <input type="text" class="form-control"  id="telefono" name="telefono">
              </div>
              <!-- /.input group -->
            </div>
            <div class="form-group">
              <label>Telefono:</label>

              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </div>
                <input type="text" class="form-control"  id="celular" name="celular">
              </div>
              <!-- /.input group -->
            </div>
              <!--Email-->
              <label for="inputEmail3">Email</label>

              <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
              </div>
              <!--Password-->
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name ="password" id="password" placeholder="Password">
                </div>
                <!--Agregar-->
                <div class="form-group">
                  <label for="exampleInputFile">Archivo imagen:</label>
                  <input type="file" id="foto" name ="foto">
                  <p class="help-block">selecciona una imagen</p>
                </div>
                <!--Select-->
                <div class="form-group">
                  <label>Tipo:</label>
                  <select class="form-control" id="tipo" name="tipo">
                    <option id="vendedor" name="vendedor">vendedor</option>
                    <option id="chofer" name ="chofer">chofer</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" id="registrar" name="registrar">Registrar</button>
              </div>
            </form>
          </div>

        </div>

<?php require_once("../conexionBD/conexion.php"); ?>
<?php


if(isset($_POST['registrar'])){

  //variables
  $nombreT =$_POST['nombre'];
  $apellido_patT=$_POST['apellido_pat'];
  $apellido_matT=$_POST['apellido_mat'];
  $generoT=$_POST['genero'];
  $fecha_nacT=$_POST['fecha_nac'];
  $telefonoT=$_POST['telefono'];
  $celularT=$_POST['celular'];
  $emailT=$_POST['email'];
  $passwordT=$_POST['password'];
  $tipoT=$_POST['tipo'];
  $ruta="imgusuarios";
  $archivo=$_FILES['foto']['tmp_name'];
  $nombreArchivo=$_FILES['foto']['name'];
  move_uploaded_file($archivo,"../".$ruta."/".$nombreArchivo);
  $ruta=$ruta."/".$nombreArchivo;
  $q=mysqli_query($con,"SELECT * FROM datos_personales");
  $num=mysqli_num_rows($q);
  $id_usuario=$num+1;

  echo "<script>alert('".$nombreT.",".$apellido_patT.",".$apellido_matT.",".$generoT.",".$fecha_nacT.",".$telefonoT.",".$celularT.",".$emailT.",".$passwordT.",".$ruta.",".$tipoT.",".$id_usuario."')</script>";

  if($nombreT!="" && $apellido_patT!="" && $apellido_matT!="" && $generoT!=""
  && $fecha_nacT!="" && $telefonoT!="" && $celularT!="" && $emailT!="" && $passwordT!=""
  && $ruta!=""){

    $query=mysqli_query($con,"SELECT * FROM usuario WHERE email ='".$emailT."'");
    $numrows=mysqli_num_rows($query);
    if($numrows==0){
    $sql1="INSERT INTO usuario(email,password,tipo)VALUES('".$emailT."','".$passwordT."','".$tipoT."')";
    $sql="INSERT INTO datos_personales(nombre,apellido_paterno,apellido_materno,fecha_nacimiento,genero,telefono,celular,foto_perfil,id_usuario)VALUES('".$nombreT."','".$apellido_patT."','".$apellido_matT."','".$fecha_nacT."','".$generoT."','".$telefonoT."','".$celularT."','".$ruta."',".$id_usuario.")";


                    	$result1=mysqli_query($con,$sql1);
                      $result=mysqli_query($con,$sql);

                    	if($result){
                    	 echo"<script>alert('Trabajador registrado exitosamente')</script>";
                    	} else {
                    	  echo"<script>alert('Error al registrar al Trabajador')</script>";
                    	}
                    	} else {
                    	  echo"<script>alert('Trabajador ya existente')</script>";
                    	}

                    } else {
                    	  echo"<script>alert('No debe de haber campos vacios')</script>";
                    }
                    }

  //echo "<script>alert(".$nombreT.",".$apellido_patT.",".$apellido_matT.",".$generoT.",".$fecha_nacT.",".$telefonoT.",".$celularT.",".$emailT.",".$passwordT.",".$ruta.")</script>";




 ?>


<!-- ./wrapper -->
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });








  });
</script>

</body>
</html>
