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
                            <i class="fa fa-user"></i>Productos
                            <button class="btn btn-success btn-md ml-4" id="btnAgregar">
                                <i class="far fa-plus-square"></i> Agregar Productos </button>
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
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Precio</th>
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
                                    <i class="fa fa-user"></i>Productos
                                </h4>
                                <hr>
                                <form class="form-horizontal" role="form" id="miForm" enctype="multipart/form-data">
                                    <input type="hidden" name="id_producto" id="id_producto" value="0">
                                    <div class="form-group row">
                                        <label for="nombre" class="col-sm-2 col-form-label">Nombre Producto:
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nombre" name="nombre"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion: </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="descripcion" name="descripcion"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="foto1" class="col-sm-2 col-form-label">Foto: </label>
                                        <div class="col-sm-10">
                                            <div class="img-thumbnail" id="divFoto1"
                                                style="width: 100px; height: 100px; ">

                                            </div>
                                            <span>
                                                Haga Click para Seleccionar Foto1
                                            </span>
                                            <input type="file" id="foto1" name="foto1" class="d-none" required>
                                        </div>
                                    </div>
                                    <!--finprimera foto-->
                                    <div class="form-group row">
                                        <label for="foto12" class="col-sm-2 col-form-label">Foto: </label>
                                        <div class="col-sm-10">
                                            <div class="img-thumbnail" id="divFoto2"
                                                style="width: 150px; height: 150px; ">

                                            </div>
                                            <span>
                                                Haga Click para Seleccionar Foto2
                                            </span>
                                            <input type="file" id="foto2" name="foto2" class="d-none" required>
                                        </div>
                                    </div>
                                    <!--fin segunda foto-->
                                    <div class="form-group row">
                                        <label for="foto12" class="col-sm-2 col-form-label">Foto: </label>
                                        <div class="col-sm-10">
                                            <div class="img-thumbnail" id="divFoto3"
                                                style="width: 200px; height: 200px; ">

                                            </div>
                                            <span>
                                                Haga Click para Seleccionar Foto3
                                            </span>
                                            <input type="file" id="foto3" name="foto3" class="d-none" required>
                                        </div>
                                    </div>
                                    <!--fin tercera foto-->
                                    <div class="form-group row">
                                        <label for="precio" class="col-sm-2 col-form-label">Precio: </label>
                                        <div class="col-sm-10">
                                            <input type="float" class="form-control" id="precio" name="precio"
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
    <script type="text/javascript" src="<?php echo URL; ?>public_html/js/productos.js"></script>