<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<header>
        <nav class="botonera_principal"> 
            <li><a href="index.php">home</a></li>
            <li><a href="formulario.php">formulario</a></li>
            <li><a href="formulario2.php">formulario 2</a></li>
        </nav>
    </header>

<form action="procesar.php" method="get">
        nombre: <input type="text" name="nombre"><br>
        apellido: <input type="text" name="apellido"><br>
        edad: <input type="text" name="edad"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>