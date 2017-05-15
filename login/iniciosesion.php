<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email=="" AND $password==""){
      //mnsg error
    }elseif($email=='admin@gmail.com' AND $password=='admin123'){
      
    }


  }
 ?>
