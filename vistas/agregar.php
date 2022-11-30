<?php include "../vistas/header.php";?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4" id="cuerpoCard">
                    <div class="body-card">
                        <form action="../backend/agregar.php" method="POST" enctype="multipart/form-data">
                            <label for="pais">Pais</label>
                            <input type="text" name="pais" id="pais" class="form-control">
                            <br>
                            <label for="continente">Continente</label>
                            <select name="continente" id="continente" class="form-select">
                                <option value="America">America</option>
                                <option value="Europa">Europa</option>
                                <option value="Asia">Asia</option>
                                <option value="Oceania">Oceania</option>
                                <option value="Africa">Africa</option>
                            </select>
                            <br>
                            <label for="" class="text">URL of IMG</label>
                            <input type="text" name="url" id="url" class="form-control" placeholder="Ingresa la URL de la imagen de la bandera">
                            <br>
                            <button class="btn btn-danger"><i class="fa-solid fa-flag"></i>Agregar</button>
                        </form>
                        <br>
                        <a href="./index.php"><button class="btn btn-primary"><i class="fa-solid fa-share-from-square"></i>Regresar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "../vistas/footer.php";?>