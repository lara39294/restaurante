<!DOCTYPE html>
<html>

<head>
    <?php include_once "app/view/secciones/css.php"; ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark">
                <section id="menu">
                    <?php include_once "app/view/secciones/menu.php"; ?>
                </section>
                <!--fin del menu-->
            </div>
            <div class="col-md-9">
                <!--fin del encabezado-->
                <section id="centro">
                    <div class="content-panel mt-4" id="panelDatos">
                        <h4>
                            <i class="fa fa-user"></i>Restaurantes
                            <button class="btn btn-success btn-md ml-4" id="btnAgregar">
                                <i class="far fa-plus-square"></i> Agregar Restaurantes </button>
                        </h4>
                        <hr>
                        <div id="contentTable">
                            <div class="row mb-1">
                                <div class="input-group col-md-4 mb-2">
                                    <input type="search" class="form-control py-2" placeholder="Buscar" id="txtSearch">
                                    <span class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Correlativo</th>
                                        <th scope="col">Nombres</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Contacto</th>
                                        <th scope="col">Fecha de Ingreso</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                    <nav aria-label="Page navigation example" class="float-right">
                                        <ul class="pagination">

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-panel mt-2 d-none" id="panelFormulario">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <h4>
                                    <i class="fa fa-user"></i>Restaurante
                                </h4>
                                <hr>
                                <form class="form-horizontal" role="form" id="miForm" enctype="multipart/form-data">
                                    <input type="hidden" name="id_restaurantes" id="id_restaurantes" value="0">
                                    <div class="form-group row">
                                        <label for="nombres" class="col-sm-2 col-form-label">Nombre de Restaurante:
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nombres" name="nombres"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="direccion" class="col-sm-2 col-form-label">Direccion: </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="direccion" name="direccion"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telefono" class="col-sm-2 col-form-label">Telefono: </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="telefono" name="telefono"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="contacto" class="col-sm-2 col-form-label">Contacto: </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="contacto" name="contacto"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="foto" class="col-sm-2 col-form-label">Foto: </label>
                                        <div class="col-sm-10">
                                            <div class="img-thumbnail" id="divFoto"
                                                style="width: 200px; height: 200px; ">

                                            </div>
                                            <span>
                                                Haga Click para Seleccionar Foto
                                            </span>
                                            <input type="file" id="foto" name="foto" class="d-none" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fecha" class="col-sm-2 col-form-label">Fecha de Ingreso: </label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="fecha" name="fecha"
                                                required>
                                        </div>
                                    </div>
                                    <div class="alert alert-danger d-none mb-2" role="alert" id="mensaje">
                                    </div>
                                    <button type="button" class="btn btn-secondary" id="btnCancelar">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" id="btnEnviar">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!--fin del contenido-->
                <section id="pie">
                    <?php include_once "app/view/secciones/footer.php"; ?>
                </section>
            </div>
        </div>
    </div>
    <?php include_once "app/view/secciones/script.php"; ?>
    <script type="text/javascript" src="<?php echo URL; ?>public_html/js/restaurantes.js"></script>
</body>

</html>