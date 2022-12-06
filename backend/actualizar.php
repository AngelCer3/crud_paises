<?php
    include "../backend/conexion.php";
    $conexion = conexion();

    $id = $_POST['id'];
    $pais = $_POST['pais'];
    $continente = $_POST['continente'];
    $bandera = $_POST['url'];

    $sql = "UPDATE t_paises SET nombrePais = '$pais' , continente = '$continente', bandera = '$bandera' WHERE idPais = '$id'";
    $respuesta = mysqli_query($conexion,$sql);

    if($respuesta){
        header('location:../vistas/banderas.php');
    }else{
        echo "No se pudo actualizar";
    }

?>