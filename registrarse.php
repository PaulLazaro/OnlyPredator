<?php    
    session_start();    
    if(isset($_SESSION["correo"])){
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    <?php include 'cabecera.php' ?>
    <h1>Unete a la familia OnlyPredator's</h1>
    <?php if(isset($_GET["error"])) {?>

        <p style="color:red">Las contraseñas no coinciden</p>

    <?php }?>    
    <form action="procesar_registrate.php" method="post">
        <div>
            Nombres: <input type="text" name="nombres" id="nombre">
        </div>
        <div>
            Apellidos: <input type="text" name="apellidos" id="apellidos">
        </div>
        <div>
            Correo: <input type="email" name="correo" id="correo">
        </div>
        <div>
            Fecha de nacimiento: <input type="date" name="fechanac" id="fechanac">
        </div>
        <div>
            Contraseña: <input type="password" name="contra" id="contra">
        </div>
        <div>
            Confirmar contraseña: <input type="password" name="confirmar" id="confirmar">
        </div>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>