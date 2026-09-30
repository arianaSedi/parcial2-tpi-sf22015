<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method=post>

            <h2>Formulario</h2>
            <label for="">Carnet del estudiante: </label>
            <input type="text" name="carnet" >

            <br><br>
            <label for="">Codigo del Equipo: </label>
            <input type="text" name="codigo" >

            <br><br>
            <label for="">Nombre del equipo: </label>
            <input type="text" name="nombre" >
            
            <br><br>
            <label for="">Tipo: </label>
            <input type="text" name="tipo" >

            <br><br>
            <button type="submit"></button>


        </form>
    </div>
    
</body>
</html>