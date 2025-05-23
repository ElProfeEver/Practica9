<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
         <div class="center">
            <h1>Practica #9</h1>
    <form action="insert.php" method="post">
        <div class="inputbox">
            <input name="nombre" id="nombre" type="text" required="required">
            <span>Nombre</span>
        </div>
        <div class="inputbox">
            <input name="correo" id="correo" type="email" required="required">
            <span>Correo</span>
        </div>
        <div class="inputbox">
            <input name="pass" id="pass" type="password" required="required">
            <span>Contraseña</span>
        </div>
        <div class="inputbox">
            <input name="guardar" type="submit" value="Guardar">
        </div>
    </form>
        </div>
</body>
<script src="script.js"></script>
</html>