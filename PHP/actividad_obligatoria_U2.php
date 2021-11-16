<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
    <title>Actividad Obligatoria -Unidad 2-POO</title>
</head>
<body>
 <?php

    $textcolor = "text-success";
    $center = "center";
    
    echo "<div align=$center>";   
    
    #Nombre
    $nombre = "Gianni Lucas";
    echo "<h1>Nombre: </h1>";
    echo "<h2 class=$textcolor>".$nombre."</h2>";
    echo "<br>" ;

    #Apellido   
    $apellido = "Cerdá";
    echo "<h1>Apellido: </h1>";
    echo "<h2 class=$textcolor>".$apellido."</h2>";
    echo "<br>";

    #Edad
    $edad = "28";
    echo "<h1>Edad: </h1>";
    echo "<h2 class=$textcolor>".$edad."</h2>";
    echo "<br>";

    #Hobbie
    $hobbie = "Videojuegos";
    echo "<h1>Hobbie: </h1>";
    echo "<h2 class=$textcolor>".$hobbie."</h2>";
    echo "<br>";

    #Editor de código preferido
    $editor = "VSCode";
    echo "<h1>Editor: </h1>";
    echo "<h2 class=$textcolor>".$editor."</h2>";
    echo "<br>";

    #SO
    echo "<h1> Descripción del Sistema: </h1>";
    echo "<h2 class=$textcolor>".php_uname()."</h2>";
    echo "<br>";

    echo "</div>";
 ?>   
    
</body>
</html>