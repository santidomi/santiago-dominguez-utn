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

<section class="contacto-contenido"></section>
<form action="enviar_consulta.php" method="post">
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" class="contacto_input">
    <label for="apellido">apellido</label>
    <input type="text" name="apellido" class="contacto_input">
    <label for="edad">edad</label>
    <input type="text" name="edad" class="contacto_input">
    <label for="mensaje">mensaje</label>
   <textarea name="mensaje" class="contacto_id" cols="30" rows="10"></textarea>
   <input type="submit" value="enviar formulario">
</form>
</body>
</html>


