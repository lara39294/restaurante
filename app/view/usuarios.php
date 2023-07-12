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
                <section id="contenido">
                    <div class="content-panel mt-4" id="panelDatos">
                        <h4>
                            <i class="fa fa-user"></i>Usuarios
                            <button class="btn btn-success btn-md ml-4" id="btnAgregar">
                                <i class="far fa-plus-square"></i> Agregar Usuario </button>
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
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Tipo</th>
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
                                    <i class="fa fa-user"></i>Usuarios
                                </h4>
                                <hr>
                                <form class="form-horizontal" role="form" id="miForm" enctype="multipart/form-data">
                                    <input type="hidden" name="id_usuario" id="id_usuario" value="0">
                                    <div class="form-group row">
                                        <label for="usuario" class="col-sm-2 col-form-label">Usuario: </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="usuario" name="usuario"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Password: </label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password" name="password"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nombres" class="col-sm-2 col-form-label">Nombres: </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nombres" name="nombres"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="apellidos" class="col-sm-2 col-form-label">Apellidos: </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="apellidos" name="apellidos"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tipo" class="col-sm-2 col-form-label">Tipo: </label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="tipo" id="tipo" required>
                                                <option value="1" selected> Administrador</option>
                                                <option value="2">Usuario</option>
                                            </select>
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
    <script type="text/javascript" src="<?php echo URL; ?>public_html/js/usuarios.js"></script>
</body>

</html>