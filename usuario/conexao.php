
<?php
function Conexao(){
      $localhost = "localhost"; //your host name
      $username = "root"; // your database name
      $password = ""; // your database password
      $dbname = "unisoft";
      
      
      $con = new mysqli($localhost, $username, $password, $dbname);
      mysqli_set_charset($con, 'utf8');

      
      if($con->connect_error) {
          die("connection failed : " . $con->connect_error);
      }

}





?>