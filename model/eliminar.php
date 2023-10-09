<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include '../model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM usuarios where id = ?;");
    $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: ../usuario.php?mensaje=eliminado');
    } else {
        header('Location: ../usuario.php?mensaje=error');
    }
    
?>