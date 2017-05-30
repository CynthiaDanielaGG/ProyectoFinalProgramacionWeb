<?php require_once("../conexionBD/conexion.php"); ?>
<?php
  header('Content-Type: application/json');
  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $email = $_GET['correo_trabajador'];
    $query = mysql_query("SELECT * FROM usuario WHERE email = '".$email."' AND tipo='vendedor'");
    $numrows=mysql_num_rows($query);
    if($numrows!=0){
      $row=mysql_fetch_assoc($query);
      echo json_encode(array('nombre' => $row['nombre'], 'correo' => $row['email']));
      http_response_code(200);
    }else{
      echo "El trabajador no existe";
    }
  }
 ?>
