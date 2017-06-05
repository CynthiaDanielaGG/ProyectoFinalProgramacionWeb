<?php
  session_start();
  unset($_SESSION["session_vendedor"]);
  unset($_SESSION["vendedor_id"]);
  session_destroy();
  header("location: index.html");
 ?>
