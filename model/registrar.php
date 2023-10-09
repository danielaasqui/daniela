<?php
    //verificar si los elementos tienen algo
    if(empty($_POST["oculto"]) || 
    empty($_POST["txtNombre"]) || 
    empty($_POST["txtUsuario"]) )
    
    {
        header('Location: usuario.php?mensaje=falta'); //si este vacio
        exit();
    }

    if ($_POST['rEstado'] == "1") { //asignar el valor del estado, si es 1(boolean) es igual a 1 (entero)
        $status = 1; //se convierte en entero
    } 
    elseif ($_POST['rEstado'] == "0") {
        $status = 0;
    }

    include_once 'conexion.php'; //llamar a la conexion 

    $nombre = $_POST["txtNombre"]; //asignar de POST (lo que viene) a una variable php
    $usuario = $_POST["txtUsuario"];
    
    //se usa prepare en la consulta por que estamos usando variables, variable ID es automatica
    $sentencia = $bd->prepare("INSERT INTO usuarios(nombres,usuario,estado) 
    VALUES (?,?,?);"); //solo en prepare se usa ? para invocar las variables
    $resultado = $sentencia->execute([$nombre,$usuario,$status]); //Asignamos las variables

    if ($resultado === TRUE) { //aparezca registra si resultado es afirmativo
        header('Location: ../usuario.php?mensaje=registrado');
    } else { //en caso que salga error
        header('Location: ../usuario.php?mensaje=error');
        exit();
    }
    
?>