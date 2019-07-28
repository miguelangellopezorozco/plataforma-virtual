 <?php

$server = 'localhost';
$username = 'root';
$password = 'R3logito';
$database = 'plataforma';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}


$message = '';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])&& !empty($_POST['nombre'])&& !empty($_POST['tipo'])) {
    $sql = "INSERT INTO usuarios (usuario, password, nombre, tipo, foto) VALUES (:usuario, :password, :nombre, :tipo, :foto)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':tipo', $_POST['tipo']);
    $stmt->bindParam(':foto', $_POST['foto']);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      echo '<script type="text/javascript">location.href="http://127.0.0.1/plataforma/index.php"</script>';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
  
?>


       

<?php 
 /* 
      // Dirección o IP del servidor MySQL
      $host = "localhost";
 
      // Puerto del servidor MySQL
      $puerto = "3306";
 
      // Nombre de usuario del servidor MySQL
      $usuario = "root";
 
      // Contraseña del usuario
      $contrasena = "R3logito";
 
      // Nombre de la base de datos
      $baseDeDatos ="usuarios";
 
      // Nombre de la tabla a trabajar
     // $tabla = "personas";
 
      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos;//, $tabla;
 
         if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
         { 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }
         else
         {
            echo "Listo, estamos conectados.<br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }
         else
         {
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
      return $link; 
      } 
 
     $link = Conectarse(); 
 
 
      mysql_close($link);
  * 
  *  <?php
$sever="http://185.27.134.10:3306";
$user="epiz_23968756";
$pass="soyorgulloceug";
$bd="epiz_23968756_plataforma";
$conectar="mysql:host=$sever;dbname=$bd";
 */