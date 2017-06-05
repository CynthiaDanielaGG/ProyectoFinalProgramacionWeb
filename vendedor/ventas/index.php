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
          <form class="" action="" method="post" id="formulario_venta">
          <div class="row">
            <div class="bloque-inputs col-xs-12">
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold">Cantidad</label>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="number" name="cantidad" id="cantidad_producto" value="1" class="form-control" required="" min="1">
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold">Selecciona un flete:</label>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <select class="form-control" name="flete" id="combo_flete" placeholder="Seleccione un parentesco">

								    </select>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold">Selecciona un chofer:</label>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <select class="form-control" name="chofer" id="combo_chofer" placeholder="Seleccione un parentesco">

								     </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="bloque-inputs col-xs-12">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <label class="control-label" style="font-weight:bold">Escribe el domicilio donde sera entregado el producto.</label>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <textarea name="texto_domicilio" class="form-control" rows="5" cols="30" placeholder="Escribe la dirección" required=""></textarea>
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
                    <br>
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
                  <input type="hidden" name="vendedor_id" value='<?php echo $_SESSION["vendedor_id"]; ?>'>
                    <input type="hidden" id="usuario_id" name="cliente_id">
                    <div class="box-body" style="display: block;">
                      <table class="table no-margin" id="detalles">
                        <thead style="background-color:#A9D0F5">
                          <th>Opciones</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                          <th>Precio</th>
                          <th>Subtotal</th>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                          <th>TOTAL</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th><h4 id="total">$ 0.00</h4></th>
                        </tfoot>
                      </table>
                    </div>
                    <input type="hidden" id="total_venta" name="venta_total" value="">
                    <div class="box-footer clearfix">
                      <button type="submit" class="btn btn-success pull-right">
                        <i class="fa fa-credit-card"></i> Vender
                      </button>
                    </div>
                </div>
              </div>
            </div>
          </div>
          </form>
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
        $("#usuario_id").val(data.id);
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

  $("#formulario_venta").submit(function(e){
    e.preventDefault();
    e.stopPropagation();

    $.ajax({
      url: 'crear_venta.php',
      type: 'POST',
      data: $(this).serialize(),
      dataType: 'json',

      beforeSend: function() {
        swal({
        title: "Enviando...",
        text: "Se esta procesando la venta...<br> <i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i>",
        html: true,
        showConfirmButton: false,
        showLoaderOnConfirm: true
      });
      },
      success: function(data)
      {
        if (data.mensaje == 'OK') {
          $("#cantidad_producto").val("1");
          $("#id_producto").html("");
          $("#nombre_producto").html("");
          $("#descripcion_producto").html("");
          $("#precio_venta_producto").html("");
          $("#total").html("$ 0.00");
          $("#total_venta").val("0");
          swal({
            title: "Muy bien!",
            text: "Venta realizada!",
            type: "success",
            showCancelButton: false,
            confirmButtonColor: "#7ADD55",
            confirmButtonText: "Cerrar",
            closeOnConfirm: false
          },
          function(){
            window.location.reload();
          });
          //swal("Muy Bien!", "Venta realizada!", "success");
        }
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
<script type="text/javascript">
$(document).ready(function () {
  $('#btn_add').click(function()
  {
    agregar();
  });
});
var cont = 0;
var total = 0;
var subtotal = [];
$("#guardar").hide();
function agregar() {
  idarticulo = $("#id_producto").html();
  articulo = $("#nombre_producto").html();
  cantidad_art = $("#cantidad_producto").val();
  precio_venta = $("#precio_venta_producto").html();

  if (idarticulo != "" && cantidad_art != "" && cantidad_art > 0 && precio_venta != "") {
    subtotal[cont] = (cantidad_art * precio_venta);
    total = total + subtotal[cont];
    var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</td><td><input type="hidden" name="cantidad_articulo[]" value="'+cantidad_art+'"><label>'+cantidad_art+'</label></td> <td><label>'+precio_venta+'</label></td><td><input type="hidden" name="subtotal_articulo[]" value="'+subtotal[cont]+'">'+subtotal[cont]+'</td></tr>';
    cont ++;
    limpiar();
    $("#total").html("$ "+total);
    $("#total_venta").val(total);
    evaluar();
    $("#detalles").append(fila);
  }else {
    alert("Error al ingresar el detalle de la venta de los datos del producto");
  }

}
function limpiar()
{
  $("#cantidad_producto").val("1");
  $("#id_producto").html("");
  $("#nombre_producto").html("");
  $("#descripcion_producto").html("");
  $("#precio_venta_producto").html("");
}

function evaluar() {
  if (total > 0) {
    $("#guardar").show();
  }else {
    $("#guardar").hide();
  }
}
function eliminar(index) {
  total = total - subtotal[index];
  $("#total").html("$ "+total);
  $("#total_venta").val(total);
  $("#fila" + index).remove();
  evaluar();
}
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url: "getFletes.php",
			type:"GET",
			success: function(result){
				$('#combo_flete').empty();
        $('#combo_flete').append("<option value=''>Seleccione un flete</option>");
				$.each(result, function (index, value){
				  $('#combo_flete').append("<option value='" + value.id + "'>" + value.modelo + "</option>");
				});
			}
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url: "getChofer.php",
			type:"GET",
			success: function(result){
				$('#combo_chofer').empty();
        $('#combo_chofer').append("<option value=''>Seleccione un chofer</option>");
				$.each(result, function (index, value){
				  $('#combo_chofer').append("<option value='" + value.id + "'>" + value.nombre + "</option>");
				});
			}
		});
	});
</script>
</body>
</html>
