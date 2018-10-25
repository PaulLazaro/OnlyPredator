<?php
    #entrada
    $nombres=$_POST["nombres"];
    $apellidos=$_POST["apellidos"];
    $correo=$_POST["correo"];
    $contra=$_POST["contra"];
    $confirmar=$_POST["confirmar"];
    $fechanac=$_POST["fechanac"];
    #proceso
    if($contra!=$confirmar){
        header("Location:registrarse.php?error=1");
    }
    else{
        $contra=sha1($contra);
        $db= new PDO('mysql:host=localhost;dbname=portal 1;charset=utf8mb4','root','');
        $db->query("INSERT INTO usuario VALUES(NULL,'$correo','$contra',SYSDATE(),'$nombres','$apellidos','$fechanac')");
        #salida
        header("Location:CONF_usuario.php");
    }
    
    
?>