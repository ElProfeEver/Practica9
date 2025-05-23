<?php

require_once "conexion.php";
//$db=set_charset('utf8');
 $db = "alumnos";

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];

echo"<br>Datos recibidos: <br><br>";
echo "$nombre, $correo, $pass <br>";

//Enviar consulta SQL
$sql = "INSERT INTO informacion (id,nombre, correo, pass)
        VALUES (null,'$nombre', '$correo', '$pass')";

if (mysqli_query( $conexion, $sql)) {
      echo "<br> Nuevo registro creado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error( $conexion);
}
mysqli_close( $conexion);
?>