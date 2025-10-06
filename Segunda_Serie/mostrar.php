<?php
include 'config.php';

$result = $conn->query("SELECT * FROM personas");
echo "<h2>Usuarios Registrados</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Fecha Registro</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['correo']}</td>
            <td>{$row['fecha_registro']}</td>
          </tr>";
}
echo "</table>";
$conn->close();
?>
