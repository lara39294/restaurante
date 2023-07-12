<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Mantenimiento
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo URL; ?>usuarios">Usuarios</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo URL; ?>restaurantes">Restaurantes</a>
                    <a class="dropdown-item" href="<?php echo URL; ?>productos">Productos</a>
                    <a class="dropdown-item" href="<?php echo URL; ?>ingredientes">Ingredientes</a>
                </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Informes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Restaurantes</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Productos</a>
                    <a class="dropdown-item" href="#">Ingredientes</a>
                    <a class="dropdown-item" href="#">Usuarios</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL; ?>login/cerrar">Cerrar Sesion</a>
            </li>
        </ul>
        <img src="<?php echo URL; ?>public_html/images/avatar2.jpg" width="50xp" class="img-rounded">
        <span>
            <?php echo $_SESSION["nuser"] ?>
        </span>
    </div>
</nav> -->
<!--El USO DE ICONOS FUE DE TABLER ICON YA QUE LOS DE FONT AWESON NO SE VEIAN -->
<nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="<?php echo URL; ?>dashboard"><img src="<?php echo URL; ?>public_html/images/logo.jpg" width="60"
            class="img-rounded"></a>

    <div class="collapse navbar-collapse mt-2" id="navbarTogglerDemo03">
        <img src="<?php echo URL; ?>public_html/images/avatar2.jpg" width="50xp" class="img-rounded mb-3">
        <span class="mb-3 text-white">
            <?php echo $_SESSION["nuser"] ?>
        </span>
        
        <!--El USO DE ICONOS FUE DE TABLER ICON YA QUE LOS DE FONT AWESON NO SE VEIAN -->
        <ul class="list-group">
            <li class="list-group-item active"><i class="fas fa-tools"></i> Mantenimiento</li>
            <li class="list-group-item"><a class="dropdown-item" href="<?php echo URL; ?>dashboard"><svg
                        xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2" width="28"
                        height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                        <path d="M10 12h4v4h-4z" />
                    </svg> Dashboard</a></li>
            <li class="list-group-item"><a class="dropdown-item" href="<?php echo URL; ?>usuarios"><svg
                        xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-cog" width="28"
                        height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h2.5" />
                        <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M19.001 15.5v1.5" />
                        <path d="M19.001 21v1.5" />
                        <path d="M22.032 17.25l-1.299 .75" />
                        <path d="M17.27 20l-1.3 .75" />
                        <path d="M15.97 17.25l1.3 .75" />
                        <path d="M20.733 20l1.3 .75" />
                    </svg> Usuarios</a></li>
            <li class="list-group-item"><a class="dropdown-item" href="<?php echo URL; ?>restaurantes"><svg
                        xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools-kitchen" width="28"
                        height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 3h8l-1 9h-6z" />
                        <path d="M7 18h2v3h-2z" />
                        <path d="M20 3v12h-5c-.023 -3.681 .184 -7.406 5 -12z" />
                        <path d="M20 15v6h-1v-3" />
                        <path d="M8 12l0 6" />
                    </svg> Restaurantes</a>
            </li>
            <li class="list-group-item"><a class="dropdown-item" href="<?php echo URL; ?>productos"><svg
                        xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart-plus"
                        width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 17h-11v-14h-2" />
                        <path d="M6 5l6 .429m7.138 6.573l-.143 1h-13" />
                        <path d="M15 6h6m-3 -3v6" />
                    </svg> Productos</a></li>
            <li class="list-group-item"><a class="dropdown-item" href="<?php echo URL; ?>ingredientes"><svg
                        xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cherry-filled" width="28"
                        height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M16.588 5.191l.058 .045l.078 .074l.072 .084l.013 .018a.998 .998 0 0 1 .182 .727l-.022 .111l-.03 .092c-.99 2.725 -.666 5.158 .679 7.706a4 4 0 1 1 -4.613 4.152l-.005 -.2l.005 -.2a4.002 4.002 0 0 1 2.5 -3.511c-.947 -2.03 -1.342 -4.065 -1.052 -6.207c-.166 .077 -.332 .15 -.499 .218l.094 -.064c-2.243 1.47 -3.552 3.004 -3.98 4.57a4.5 4.5 0 1 1 -7.064 3.906l-.004 -.212l.005 -.212a4.5 4.5 0 0 1 5.2 -4.233c.332 -1.073 .945 -2.096 1.83 -3.069c-1.794 -.096 -3.586 -.759 -5.355 -1.986l-.268 -.19l-.051 -.04l-.046 -.04l-.044 -.044l-.04 -.046l-.04 -.05l-.032 -.047l-.035 -.06l-.053 -.11l-.038 -.116l-.023 -.117l-.005 -.042l-.005 -.118l.01 -.118l.023 -.117l.038 -.115l.03 -.066l.023 -.045l.035 -.06l.032 -.046l.04 -.051l.04 -.046l.044 -.044l.046 -.04l.05 -.04c4.018 -2.922 8.16 -2.922 12.177 0z"
                            stroke-width="0" fill="currentColor" />
                    </svg> Ingredientes</a>
            </li>
        </ul>
        <br>
        <ul class="list-group">
            <li class="list-group-item active"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-report" width="28" height="28" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697" />
                    <path d="M18 14v4h4" />
                    <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2" />
                    <path d="M8 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                    <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path d="M8 11h4" />
                    <path d="M8 15h3" />
                </svg> Reportes</li>
            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-file-description" width="28" height="28" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M9 17h6" />
                    <path d="M9 13h6" />
                </svg> Restaurantes</li>
            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-file-description" width="28" height="28" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M9 17h6" />
                    <path d="M9 13h6" />
                </svg> Productos</li>
            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-file-description" width="28" height="28" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M9 17h6" />
                    <path d="M9 13h6" />
                </svg> ingredinetes</li>
            <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-file-description" width="28" height="28" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                    <path d="M9 17h6" />
                    <path d="M9 13h6" />
                </svg> Usurios</li>
        </ul>
        <ul class="list-group mt-2">
            <li class="list-group-item">
                <a href="<?php echo URL; ?>login/cerrar" class="btn btn-danger">Cerrar Sesion</a>
            </li>
        </ul>
    </div>
</nav>