<?php 
    include "../vistas/header.php"; 
    include "../backend/conexion.php";
    
    $conexion = conexion();

    $sql = "SELECT * FROM t_paises";
    $respuesta = mysqli_query($conexion,$sql);
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4" id="cuerpoCard">
                    <div class="card-body">
                        <p>
                            <a href="./agregar.php"><button class="btn btn-primary"><i class="fa-solid fa-flag"></i>Agregar Nuevo Pais</button></a>
                        </p>
                        <table id="table" class="table table-striped" style="width:100%" >
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nombre Del Pais</th>
                                    <th>Continente</th>
                                    <th>Bandera</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($ver= mysqli_fetch_array($respuesta)):?>
                                <tr>
                                    <td><?php echo $ver['idPais'];?></td>
                                    <td><?php echo $ver['nombrePais'];?></td>
                                    <td><?php echo $ver['continente'];?></td>
                                    <td><img src="<?php echo $ver['bandera'];?>" alt="" width="100px"></td>
                                    <td>
                                        <a href="./actualizar.php?idp=<?php echo $ver['idPais']; ?>"><button class="btn btn-danger"><i class="fa-solid fa-user-pen"></i>Editar</button></a>
                                    </td>
                                    <td>
                                        <a href="../backend/eliminar.php?idp=<?php echo $ver['idPais']; ?>"><button class="btn btn-warning"><i class="fa-solid fa-user-xmark"></i>Eliminar</button></a>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include "../vistas/footer.php"; ?>