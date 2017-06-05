<?php require_once("../../includes/conexion.php"); ?>
<?php
  header('Content-Type: application/json');
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Obtenemos los datos del formulario
    $flete_id = $_POST['flete'];
	  $chofer_id = $_POST['chofer'];
	  $vendedor_id = $_POST['vendedor_id'];
	  $cliente_id = $_POST['cliente_id'];
    $domicilio = $_POST['texto_domicilio'];
    $total = $_POST['venta_total'];
    //Create venta
    $sql="INSERT INTO venta (idusuario,idflete,id_vendedor,id_chofer,domicilio,fecha_venta,total)
			VALUES(".$cliente_id.",".$flete_id.",".$vendedor_id.",".$chofer_id.",'".$domicilio."',now(),".$total.")";
		$result=mysql_query($sql);
    $articulos = $_POST['idarticulo'];
    $subtotales = $_POST['subtotal_articulo'];
    //var_dump($subtotales);
    $cantidades = $_POST['cantidad_articulo'];
    $id_venta = mysql_query("SELECT max(idventa) from venta");
    $nuevo_id = mysql_fetch_array($id_venta);
    //$venta_id = intval($nuevo_id);
    for ($i=0; $i < count($articulos) ; $i++) {
      $id = intval($articulos[$i]);
      $cantidad = intval($cantidades[$i]);
      $subtotal = floatval($subtotales[$i]);

      //var_dump($venta_id[0]);
      //var_dump($id);
      //var_dump($cantidad);
      //var_dump($subtotal);
      //print $subtotal_float;
      $sql_dos = "INSERT INTO detalle_venta (id_venta,id_producto,cantidad,subtotal) VALUES(".$nuevo_id[0].",".$id.",".$cantidad.",".$subtotal.")";
      $resultado = mysql_query($sql_dos);  


      //$resultado = mysql_query($sql);
    }
    echo json_encode(array('mensaje' => 'OK'));
    http_response_code(200);
  }
?>
