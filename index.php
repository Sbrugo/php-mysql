<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>PHP MySQL</title>
</head>
<body>
    <h2>PHP y MySQL</h2>
    <form action="guardar_persona.php" method="POST">
        <label>Nombre: </label>
        <input type="text" name="nombre"><br/>
        <label>Apellidos: </label>
        <input type="text" name="apellidos"><br/>
        <label>Cumpleaños: </label>
        <input type="date" name="cumpleanios"><br/>
        <input type="submit" name="guardar" value="Guardar">
    </form>

</body>
</html>
