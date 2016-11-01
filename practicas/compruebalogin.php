<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      try {
          
          $base = new PDO("mysql:host=localhost; dbname=usuariosPildora", "root", "");
          $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql= "select * from usuario_table where usuario = :login and clave= :password";
          $resultado = $base->prepare($sql);
          $login = htmlentities(addslashes($_POST["usuario"]));
          $password = htmlentities(addslashes($_POST["password"]));
          $resultado->bindValue(":login", $login);
          $resultado->bindValue(":password", $password);
          $resultado->execute();
          $numeroRegistro = $resultado->rowCount();
          
          if($numeroRegistro != 0) {
              header("location:logueado.php");
          }  else {
              header("location:login.php");
          }
          
          
      } catch (Exception $ex) {
         die("Error:" . $ex->getMessage());
      }
        ?>
    </body>
</html>
