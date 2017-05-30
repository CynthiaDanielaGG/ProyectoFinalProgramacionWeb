<?php
  session_start();
  if(!isset($_SESSION["session_vendedor"])){
  // en caso de cerrarse la sesion se manda a la pagina principal
  	header("Location: login.php");
  }
 ?>
<?php include("../../header.php"); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include("../main_header.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("../sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Panel de ventas
        <small>Gestione ventas...</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Aqui</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="panel panel-info">
        <div class="container-fluid">
          <br>
          <div class="row">
            <div class="col-xs-12">
              <form method="GET" id="form_buscar_cliente">
                <div class="form-group">
						      <div class="input-group">
						        <span class="input-group-btn">
						          <button type="submit" class="btn btn-info btn-sm">Buscar <i class="fa fa-search"></i></button>
						        </span>
						        <input type="text" class="form-control input-sm" name="correo_cliente" placeholder="Buscar un cliente..." required=""/>
						      </div>
                </div>
              </form>
            </div>
          </div>
          <br>
          <div class="row" style="display: none" id="div_cliente">
            <div class="col-md-12 col-sm-12 col-md-12 col-xs-12">
              <div class="bloque-inputs col-xs-12">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <label class="control-label" style="font-weight:bold">Nombre del cliente</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <label class="control-label" style="font-weight:bold" id="nombre_cliente"></label>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <label class="control-label" style="font-weight:bold">Email</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <label class="control-label" style="font-weight:bold" id="email_cliente"></label>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <form method="GET" id="form_buscar_producto">
                <div class="form-group">
						      <div class="input-group">
						        <span class="input-group-btn">
						          <button type="submit" class="btn btn-info btn-sm">Buscar <i class="fa fa-search"></i></button>
						        </span>
						        <input type="text" class="form-control input-sm" name="name_producto" placeholder="Buscar un producto..." required=""/>
						      </div>
                </div>
              </form>
            </div>
          </div>
          <br>
          <div class="row" style="display: none" id="div_producto">
            <div class="bloque-inputs col-xs-12">
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold">Codigo</label>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold" id="id_producto"></label>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold">Nombre producto</label>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold" id="nombre_producto"></label>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold">Descripcion</label>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold" id="descripcion_producto"></label>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold">Precio de venta</label>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold" id="precio_venta_producto"></label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="bloque-inputs col-xs-12">
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold">Cantidad</label>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="number" name="cantidad" value="" class="form-control" required="" min="1">
                  </div>

                </div>
              </div>
            </div>
            <div class="bloque-inputs col-xs-12">
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <br>
                    <button type="button" id="btn_add" class="btn btn-success form-control"> Agregar <i class="fa fa-angle-double-right fa-lg"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="bloque-inputs col-xs-12">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Detalle de venta</h3>
                    </div>
                  </div>
                  <div class="box-body" style="display: block;">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <td>Codigo</td>
                          <td>Nombre</td>
                          <td>Precio</td>
                          <td>Subtotal</td>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("../../footer.php"); ?>
  <?php include("../../control_sidebar.php"); ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../../js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>

<script type="text/javascript">
  $("#form_buscar_cliente").submit(function(e){
    e.preventDefault();
    e.stopPropagation();

    $.ajax({
      url: 'buscar_cliente.php',
      type: 'GET',
      data: $(this).serialize(),
      dataType: 'json',

      beforeSend: function() {

      },
      success: function(data)
      {
        $("#nombre_cliente").html(data.nombre);
        $("#email_cliente").html(data.correo);
        document.getElementById("div_cliente").style.display = "block";
      },
      error: function()
      {

      },
      complete: function()
      {

      }
    })
  });

  $("#form_buscar_producto").submit(function(e){
    e.preventDefault();
    e.stopPropagation();

    $.ajax({
      url: 'getProductos.php',
      type: 'GET',
      data: $(this).serialize(),
      dataType: 'json',

      beforeSend: function() {

      },
      success: function(data)
      {
        $("#id_producto").html(data.id)
        $("#nombre_producto").html(data.nombre);
        $("#descripcion_producto").html(data.descripcion);
        $("#precio_venta_producto").html(data.precio_venta);
        document.getElementById("div_producto").style.display = "block";
      },
      error: function()
      {

      },
      complete: function()
      {

      }
    })
  });
</script>
</body>
</html>