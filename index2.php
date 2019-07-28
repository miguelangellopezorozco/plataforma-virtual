<?php
include('/plataforma/includes/conectar.php');

if(isset($_REQUEST['user'])&& !empty($_REQUEST['user'])){
    $u = $_REQUEST['user'];
    $p = $_REQUEST['pass']; 
    $n = $_REQUEST['nombres'];
    $f = $_FILES['foto']['name'];
    $t = $_REQUEST['tipo'];
    $checar = mysqli_query("SELECT * FROM usuario WHERE usuario='".$u."'");
    if($checar ==1){ 
        echo "ya esta registrado";
        
    }else{
        mysqli_query("INSERT INTO usuarios VALUES('$u','$p','$n','$f','$t')");
     /*   move_uploaded_files($_FILES['foto']['tmp_name'],"plataforma/archivos/".$u.$f);
        header("Location: index.php");*/
    }
       
     
}

?>
  
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <link rel="stylesheet" type = "text/css" href="plataforma/css/Mi_Estilo.css">   
  
        
          
        <title>Plataforma</title> 
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
    <h1 style= "color:brown;" align="center">Plataforma </h1> 
     <hr>
     

     <article class="Barra" >
     <a  href="sign.php" >  Ingresa</a>
     <a href="sign_up.php">  Registrate</a>
     </article>
     <hr>
        <h1>Iniciar sesion</h1> 
        <form action="index.php" method="post">
            Usuario <br>
            <input type="text" name="u" placeholder="Introduce tu usuario" required><br>
            Password <br>
            <input type="text" name="p" placeholder="Intoduce tu password" required><br>
            <input type="submit" value="Inciar"><br>
            
            
            <div id="Maindiv">
                <center>
                    <button class="btn_continuar" onclick="location.href='inicio.php'">Continuar</button>
                </center>
            </div>  
            
                
            
        </form>
        <hr>
        <h1>Registro</h1>
        <form action="index.php" method="post" enctype="multipart/form-data">
            
            Usuario <br>
            <input type="text" name="user" placeholder="Introduce tu usuario" required><br>
            Password <br>
            <input type="text" name="pass" placeholder="Introduce tu contraseña" required><br>
            Nombre <br>
            <input type="text" name="nombre" placeholder="Introduce tu nombre" required><br>
            Foto <br>
            <input type="file" name="foto" required><br>
            Tipo <br>
            <select name="tipo" id="tipo">
                <option value="profesor">Profesor </option>
                <option value ="alumno"> Alumno</option>
            </select>
            <br>
            <br>
            
            <input type="submit" value="Registrar"><br>
            
        </form>    
    </body>
</html>