<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>modificar | Trabajador</title>
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

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">

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
          <div class='pull-left info'>
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
              <!--<li><a href="../index.html"><i class="fa fa-circle-o"></i> Agregar</a></li>-->
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
      Trabajador

      </h1>
      <ol class="breadcrumb">
        <li><a href="../administrador/perfil.php"><i class="fa fa-dashboard"></i>Datos Administrador</a></li>
        <li><a href="#">Trabajador</a></li>
        <li class="active">Modificar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
            <form method="GET" id="form_buscar_trabajador">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-sm">Buscar <i class="fa fa-search"></i></button>
                    </span>
                    <input type="text" class="form-control input-sm" name="correo_trabajador"
                    placeholder="Buscar el trabajador que deseas modificar..." required=""/>
                  </div>
                  <br>
                  <div class="row" style="display: none" id="div_trabajador">
                    <div class="col-md-12 col-sm-12 col-md-12 col-xs-12">
                      <div class="bloque-inputs col-xs-12">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <div class="form-group">
                            <div class="col-sx-12 col-sm-12 col-md-12">
                              <label class="control-label" style="font-weigth:bold">Nombre del trabajador</label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <input type="text" id="nombre_trabajador" name="nombre_trabajador" >
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <input type="text" id="email_trabajador" name="email_trabajador" >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
         </div>
  </div>

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


<script type="text/javascript">
  $("#form_buscar_trabajador").submit(function(e){
    e.preventDefault();
    e.stopPropagation();
  $.ajax({
    url: 'buscar_trabajador.php',
    type:'GET',
    data: $(this).serialize(),
    dataType: 'json',

    beforeSend: function(){

    },
    success:function(data)
    {
      $("#nombre_trabajador").html(data.nombre);
      $("#email_trabajador").html(data.correo);
      document.getElementById("div_trabajador").style.display="block";
    },
    error:function()
    {

    },
    complete:function(){

    }
  })
});
</script>
</body>
</html>
