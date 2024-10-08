<?php

  session_start();
  if (!isset($_SESSION['autenticao']) || $_SESSION['autenticao'] !== "SIM"){
    header('Location: index.php?Login=erro2');
  }

  
  
  

?>