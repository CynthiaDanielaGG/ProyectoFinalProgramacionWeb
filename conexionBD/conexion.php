<?php
require("constantes.php");
try{
$con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
$acesso = mysqli_select_db($con,DB_NAME) or die("Cannot select DB");
}catch(Exception $e){

}
 ?>
