<?php
      $claveIngresada = $_POST['claveUsuario'];
      $existeClave = false;

      $con = new PDO('mysql:host=localhost;dbname=tuxalert_app_db', 'root',"", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $con->prepare('SELECT * FROM `keys`');
      $stmt->execute();

      while ($datos = $stmt->fetch()) {
        if($claveIngresada == $datos[1]){
          $existeClave = true;
        }
      }

      if($existeClave == true){
        header("location: http://127.0.0.1/index.html#pantallaPrincipal");
      }

      $con = null;
 ?>