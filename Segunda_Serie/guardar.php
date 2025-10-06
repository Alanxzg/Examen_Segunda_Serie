<?php
include 'config.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "INSERT INTO personas (nombre, correo) VALUES ('$nombre', '$correo')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario guardado correctamente.<br>";
    echo "<a href='mostrar.php'>Ver registros</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
