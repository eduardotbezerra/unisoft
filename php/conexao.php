<?php
    $obj_mysqli = new mysqli("localhost", "root", "", "unisoft");
 
    if ($obj_mysqli->connect_errno)
    {
      echo "Ocorreu um erro na conexão com o banco de dados.";
      exit;
    }
     
    mysqli_set_charset($obj_mysqli, 'utf8');
     
    ?>