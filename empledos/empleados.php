<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Consulta para obtener la lista de empleados
$query = "SELECT * FROM empleados";
$result = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
</head>
<body>
    <h1>Lista de Empleados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Puesto</th>
            <th>Salario</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['puesto'] . "</td>";
            echo "<td>" . $row['salario'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>




