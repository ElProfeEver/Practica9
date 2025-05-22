<?php

require_once "conexion.php";
//$db->set_charset('utf8');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];

echo "<br>Datos recibidos: <br>";
echo "$nombre, $correo, $pass";

//Enviar consulta SQL
$sql = "INSERT INTO informacion (id,nombre, correo, pass)
        VALUES(null,'$nombre', '$correo', '$pass')";
$resultado = mysqli_query($db, $sql) or trigger_error("Query failed! SQL - error: " . mysqli_error($db), E_USER_ERROR);

echo "$resultado";
?>