<?php
$nombre_form = $_POST["nombre"];
$apellido_form = $_POST["apellido"];
$edad_form = $_POST["edad"];
$mensaje_form = $_POST["mensaje"];


$conexion = mysqli_connect("localhost","root", "" ,"prueba1") or exit ("no se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$edad_form', '$mensaje_form', )");

mysqli_close($conexion);