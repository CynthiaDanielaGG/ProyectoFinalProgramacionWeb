<?php
  session_start();
  unset($_SESSION["session_vendedor"]);
  session_destroy();
  header("location: index.html");
 ?>
