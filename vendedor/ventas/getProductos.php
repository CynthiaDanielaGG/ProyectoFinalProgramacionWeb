<?php require_once("../../includes/conexion.php"); ?>
<?php

  header('Content-Type: application/json');
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = $_GET['name_producto'];
    $query = mysql_query("SELECT * FROM producto WHERE nombre = '".$name."'");
    $numrows=mysql_num_rows($query);
    if ($numrows!=0) {
      $row=mysql_fetch_assoc($query);
      echo json_encode(array('id' => $row['idproductos'],'nombre'=> $row['nombre'], 'descripcion' => $row['descripcion'], 'precio_venta'=>$row['precio_venta']));
      http_response_code(200);
    }else {
      echo "Sin productos";
    }

  }

 ?>
