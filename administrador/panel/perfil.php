<?php

session_start();
if(!isset($_SESSION["session_admin"])){
// en caso de cerrarse la sesion se manda a la pagina principal
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perfil | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Programacion</b>WEB</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <ul class="dropdown-menu">

                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                </ul>
              </li>
            <!--   <li class="footer"><a href="#">See All Messages</a></li>-->
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">

            <ul class="dropdown-menu">
            <!--  <li class="header">You have 10 notifications</li>-->
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                </ul>
              </li>

            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">

            <ul class="dropdown-menu">
              <!--<li class="header">You have 9 tasks</li>-->
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">

                      <div class="progress xs">

                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">

                      <div class="progress xs">

                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">

                      <div class="progress xs">

                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              Administrador
              <?php
              //require_once('../../conexionBD/conexion.php');

                  //$resultado = mysqli_query($con,"SELECT foto_perfil,nombre,apellido_paterno,apellido_materno,fecha_nacimiento,genero,telefono,celular FROM datos_personales where id_datospersonales = 1");
                  //$fila = mysqli_fetch_array($resultado);

                        //echo "<img src='../".$fila[0]."' class='user-image' alt='User Image'>";


              //echo "<span class='hidden-xs'>".$fila[1]." ".$fila[2]." ".$fila[3]."</span>";
              ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <?php
              /*echo "
                <img src='../".$fila[0]."' class='img-circle' alt='User Image'>

                <p>
                  ".$fila[1]." ".$fila[2]." ".$fila[3]." - Administradora
                  <small>Programacion Web</small>
                </p>";*/
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
                  <a href="../../cerrar_sesion_admin.php" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <!--  <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
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
          /*echo "
          <img src='../".$fila[0]."' class='img-circle'alt='User Image'>
        </div>
        <div class='pull-left info'>
          <p>".$fila[1]."</p>";*/
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
        <li class="header"><center> MENU</center></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i> <span>Trabajadores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../Trabajador/agregar.php"><i class="fa fa-circle-o"></i> Agregar</a></li>
            <!--Se modifico el acceso a la vista para modificar-->
            <li><a href="../Trabajador/modificar.php"><i class="fa fa-circle-o"></i> Modificar</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Eliminar</a></li>
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
        <li id="salir">
          <a href="../../cerrar_sesion_admin.php">
            <i class="fa fa-external-link" aria-hidden="true"></i>
            <span>Cerrar sesión</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center>  Bienvenido administrador(a)</center>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->

          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Acerca de mi:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Educación:</strong>

              <p class="text-muted">
                Instituto Tecnologico de Chilpancingo
              </p>
              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Ubicación</strong>

              <p class="text-muted">Chilpancingo de los Bravo, Guerrero</p>

              <hr>

              <strong><i class="fa fa-calendar"></i> Fecha de nacimiento</strong>

              <p>
                <?php  /*echo "
                <p class='text-muted'>".$fila[4]."</p>
                ";*/
                ?>
                </p>

              <hr>
              <strong><i class="fa fa-mars"></i> Genero</strong>

              <p>
                <?php  /*echo "
                <p class='text-muted'>".$fila[5]."</p>
                ";*/
                ?>
                </p>

              <hr>
              <strong><i class="fa  fa-phone"></i> Telefono</strong>

              <p>
                <?php  /*echo "
                <p class='text-muted'>".$fila[6]."</p>
                ";*/
                ?>
                </p>

              <hr>
              <strong><i class="fa  fa-mobile-phone "></i> Celular:</strong>

              <p>
                <?php /* echo "
                <p class='text-muted'>".$fila[7]."</p>
                ";*/
                ?>
                </p>

              <hr>

                </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Actividad Reciente</a></li>

            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

                </div>
                <!-- /.post -->


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          Actualmente
                        </span>
                  </li>

                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-graduation-cap bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Estudio universitario</a></h3>
                      <div class="timeline-body">
                        Actualmente cursa el octavo semestre de la carrera de Ingenieria en Sistemas Computacionales
                      </div>
                      <div class="timeline-footer">
                      </div>
                    </div>
                  </li>

                  <li>
                    <i class="fa  fa-github bg-purple"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Aportaciones</a></h3>

                      <div class="timeline-body">
                        Participacion en el desarrollo de una aplicacion web con Python y Django, en Django Girls Puebla 2017
                      </div>
                      <div class="timeline-footer">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa  fa-youtube bg-red"></i>

                    <div class="timeline-item">


                      <h3 class="timeline-header"><a href="#">Se unio a </a> Programacion JJE</h3>

                      <div class="timeline-body">
                        Canal de Youtube enfocado a dar fundamentos de programacion de diversos lenguajes
                      </div>
                      <div class="timeline-footer">

                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          año 2016
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> </span>

                      <h3 class="timeline-header"><a href="#">Galeria</a> de fotos</h3>

                      <div class="timeline-body">
                        <img src="../../otrasimg/certificado.jpg" width="200" higth="180" alt="..." class="margin">
                        <img src="../../otrasimg/puebla.jpg" width="200" higth="200" alt="..." class="margin">
                        <img src="../../otrasimg/bd.jpg" width="150" higth="200" alt="..." class="margin">

                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">


              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Programacion Web</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>