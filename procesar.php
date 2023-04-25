


<?php
$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$edad = $_GET["edad"];
$email = $_GET["email"];
echo "Hola, " . $nombre . ". Tu email es: " . $email;

if ($edad >= 18) {
  echo "Eres mayor de edad";
} else {
  echo "Eres menor de edad";
}


?>


