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
            <div class="pull-left">
              <img src="../../dist/img/user7-128x128.jpg" class="img-circle" alt="User Image">
            </div>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="../../dist/img/user7-128x128.jpg" class="img-circle" alt="User Image">

              <p>
                <?php echo $_SESSION["session_admin"]; ?>
                <small>Miembro desde 2017</small>
              </p>
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
        <!-- Control Sidebar Toggle Button -->
        <li>
          <!--  <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
        </li>
      </ul>
    </div>
  </nav>
</header>
