<html>
    
    <head>
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <link rel="stylesheet" type = "text/css" href="plataforma/css/Mi_Estilo_sign_in.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
         
   <?php require 'plataforma/includes/header.php'?>

        <article id="ingreso">
        <form action="index.php" method="post" enctype="multipart/form-data"> 
             
            Usuario <br>
            <input type="text" name="user" placeholder="Introduce tu usuario" ><br>
            Password <br>
            <input type="text" name="pass" placeholder="Introduce tu contraseña" ><br>

            <br>
            <br> 
            
            <input type="submit" value="Iniciar sesion"><br> 
            <input type="button" id="sign_up" value="Registrarse" onclick="location.href='signup.php'" ><br>
            
        </form>
        </article>

    </body>
</html>

