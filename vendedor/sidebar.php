<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../../dist/img/user7-128x128.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION["session_vendedor"]; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> En linia</a>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li id="inicio">
        <a href="../../vendedor/panel/index.php"><i class='fa fa-home'></i>
          <span>
            Inicio
          </span>
        </a>
      </li>
      <li id="perfil_cliente">
        <a href="#">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Perfil</span>
        </a>
      </li>
      <li id="clientes">
        <a href="Clientes/index.html">
          <i class="fa fa-users" aria-hidden="true"></i>
          <span>Clientes</span>
        </a>
      </li>
      <li id="ventas">
        <a href="../ventas/index.php">
          <i class='fa fa-money'></i>
          <span>Ventas</span>
        </a>
      </li>
      <li id="ventas">
        <a href="../../cerrar_sesion.php">
          <i class="fa fa-external-link" aria-hidden="true"></i>
          <span>Cerrar sesión</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
