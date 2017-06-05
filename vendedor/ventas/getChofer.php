<?php require_once("../../includes/conexion.php"); ?>
<?php
  header('Content-Type: application/json');
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $query = mysql_query("SELECT id_usuario, nombre FROM usuario WHERE tipo = 'Chofer'");
    $numrows=mysql_num_rows($query);
    $array_flete = array();

    if ($numrows!=0) {
      while ($row=mysql_fetch_assoc($query)) {
        $row_flete['id'] = $row['id_usuario'];
        $row_flete['nombre'] = $row['nombre'];

        array_push($array_flete, $row_flete);
      }


      echo json_encode($array_flete);
      http_response_code(200);
    }else {
      echo "No hay fletes registrados en el sistema";
    }

  }
?>
