<?php
        
       require "plataforma/includes/conectar.php";
        
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link rel="stylesheet" type = "text/css" href="plataforma/css/Mi_Estilo_sign_up.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>

    <?php require 'plataforma/includes/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>



     <article id="area_registro">
         <form action="plataforma/includes/conectar.php" method="POST" > 
 
                Usuario <br>
                <input type="text" name="usuario" placeholder="Introduce tu usuario" required><br>
                Password <br>
                <input type="password" name="password" placeholder="Introduce tu contraseña" required><br>
                Password <br>
                <input type="password" name="conf_pass" placeholder="confirma tu contraseña" required><br>
                Nombre <br>
                <input type="text" name="nombre" placeholder="Introduce tu nombre" required><br>
                Foto </br>
                <input type="file" name="foto" id="foto"></br>
                Tipo <br>
                <select name="tipo" id="tipo" > 
                    <option value="profesor">Profesor </option>
                    <option value ="alumno"> Alumno</option>
                </select>
                <br>
                <br>

                <input type="submit" value="Registrar"><br>

            </form>

        </article>
  </body>
</html>
