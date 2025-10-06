<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Registrar Usuario</h2>
    <form action="guardar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Correo:</label>
        <input type="email" name="correo" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="mostrar.php">Ver Usuarios Registrados</a>
</body>
</html>
