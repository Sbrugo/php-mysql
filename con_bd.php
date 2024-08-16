<?php
$con = mysqli_connect("localhost", "root", "", "personas_abm");

if (mysqli_connect_errno()) {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    exit();
}
