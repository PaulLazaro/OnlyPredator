<?php
    session_start();    
    $db= new PDO('mysql:host=localhost;dbname=portal;charset=utf8mb4','root','');
    $sentencia = $db->query("SELECT * FROM noticias");
    $noticias=$sentencia->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onlypredator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'cabecera.php' ?>
    <p>Ultimos modelos</p>
   
</body>
</html>