<?php require_once("../conexionBD/conexion.php"); ?>
<?php
  header('Content-Type: application/json');
  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $email = $_GET['correo_trabajador'];
    //Se corregio la forma de obtener la informacion que sea hacia con mysql por mysqli
    $query = mysqli_query($con,"SELECT * FROM usuario WHERE email = '".$email."' AND tipo='Vendedor'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0){
      $row=mysqli_fetch_assoc($query);
      echo json_encode(array('nombre' => $row['nombre'], 'correo' => $row['email']));
      http_response_code(200);
    }else{
      echo "El trabajador no existe";
    }
  }
 ?>
