<?php
    include "../backend/conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];

    $sql = "DELETE FROM t_paises WHERE idPAIS='$id'";
    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        header('location:../vistas/banderas.php');
    }else{
        echo "No se pudo eliminar";
    }
?>