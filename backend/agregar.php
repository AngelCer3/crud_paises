<?php
    include "../backend/conexion.php";
    $conexion = conexion();
    $pais = $_POST['pais'];
    $continente = $_POST['continente'];
    $bandera = $_POST['url'];
    $sql = "INSERT INTO t_paises (nombrePais,continente,bandera) VALUES ('$pais','$continente','$bandera')";
    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        header('location:../vistas/index.php');
    }else{
        echo "No se pudo insertar";
    }

?>