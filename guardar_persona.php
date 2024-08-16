<?php
include 'con_bd.php';

if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $cumpleanios = $_POST['cumpleanios'];

    $consulta = "INSERT INTO contactos(nombre, apellidos, cumpleanios) VALUES ('$nombre', '$apellidos', '$cumpleanios')";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        header("Location: index.php?success=1");
        $mensaje = "¡Gracias! Los datos han sido guardados.</h3>";
        exit();
    } else {
        header("Location: index.php?error=1");
        $mensaje = "Error al guardar los datos.";
        exit();
    }
}
?>
