
<?php
function Conexao(){
      $localhost = "localhost";
      $username = "id11161822_root";
      $password = "bringme2019";
      $dbname = "id11161822_bringme";
      $con = new mysqli($localhost, $username, $password, $dbname);
      mysqli_set_charset($con, 'utf8');

      
      if($con->connect_error) {
          die("connection failed : " . $con->connect_error);
      }

}





?>