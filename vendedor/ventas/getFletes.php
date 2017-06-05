<?php require_once("../../includes/conexion.php"); ?>
<?php
  header('Content-Type: application/json');
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $query = mysql_query("SELECT id_flete, modelo FROM flete");
    $numrows=mysql_num_rows($query);
    $array_flete = array();

    if ($numrows!=0) {
      while ($row=mysql_fetch_assoc($query)) {
        $row_flete['id'] = $row['id_flete'];
        $row_flete['modelo'] = $row['modelo'];

        array_push($array_flete, $row_flete);
      }


      echo json_encode($array_flete);
      http_response_code(200);
    }else {
      echo "No hay fletes registrados en el sistema";
    }

  }
?>
