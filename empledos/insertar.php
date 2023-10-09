<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$puesto = $_POST['puesto'];
$salario = $_POST['salario'];

// Insertar datos en la tabla
$query = "INSERT INTO empleados (nombre, apellido, puesto, salario) VALUES ('$nombre', '$apellido', '$puesto', '$salario')";

if (mysqli_query($conexion, $query)) {
    echo "Empleado agregado correctamente.";
} else {
    echo "Error al agregar empleado: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
