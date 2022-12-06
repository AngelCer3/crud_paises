<?php
    include "../backend/conexion.php";
    $conexion = conexion();
    if(isset($_GET['continente'])){
        $continente = $_GET['continente'];
        $sql = "SELECT * FROM t_paises WHERE continente='$continente'";
    }else{
        $sql = "SELECT * FROM t_paises";
    }
    $respuesta = mysqli_query($conexion,$sql);
    $row = mysqli_num_rows($respuesta);

    if($row > 0 ){
        header('location:../vistas/mostrar.php');
    }else{
        echo "No existe esta bandera";
    }
?>