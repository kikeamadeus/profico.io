<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profico - Soluciones Urbanas</title>

    <!-- Favicon y Presentación -->
    <link rel="mask-icon" sizes="any" color="#ffffff" href="../assets/img/profico.svg">
    <link rel="shortcut icon" type="image/x-ico" href="../assets/img/profico.ico">
    <link rel="apple-touch-icon" href="../assets/img/profico.png" />
    <link rel="apple-touch-icon-precomposed" href="../assets/img/profico_57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/img/profico_72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/img/profico_114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../assets/img/profico_152x152.png">

    <!-- Librerías de estilos -->
    <link rel="stylesheet" href="../assets/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/css/profico.css">
    <link rel="stylesheet" href="../assets/css/profico.responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Iconos y Fuentes de Sistema -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <ul id="dropDown_Menu" class="dropdown-content">
        <li><a href="registros.php">Registros</a></li>
        <li><a href="movilidad.php">Movilidad</a></li>
        <li><a href="sanitarios.php">Sanitarios</a></li>
        <li><a href="cfe.php">Productos CFE</a></li>
    </ul>
    <ul id="dropDown_Menu_Mobile" class="dropdown-content">
        <li><a href="registros.php">Registros</a></li>
        <li><a href="movilidad.php">Movilidad</a></li>
        <li><a href="sanitarios.php">Sanitarios</a></li>
        <li><a href="cfe.php">Productos CFE</a></li>
    </ul>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <!-- Dropdown Structure -->
                <div id="navContainer" class="container">
                    <a href="#!" class="brand-logo"><img src="../assets/img/profico_navbar.png" alt=""></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                        <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                            <path fill="#333" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"></path>
                        </svg>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="../.">Inicio</a></li>
                        <li><a href="../nosotros">Nosotros</a></li>
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="dropDown_Menu">Categorias
                                <svg style="width:21px;height:21px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#333" d="M7,10L12,15L17,10H7Z"></path>
                                </svg>
                            </a>
                        </li>
                        <!--li><a href="#!">Portafolio</a></li-->
                        <!--li>
                            <a href="../catalogo" class="btn btn-sesion">
                                <svg style="width:22px;height:22px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path>
                                </svg>
                            </a>
                        </li-->
                        <!--li><a href="#!" class="btn btn-sesion">Iniciar Sesión</a></li-->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="#!">Nosotros</a></li>
        <li>
            <a class="dropdown-trigger" href="#!" data-target="dropDown_Menu_Mobile">Catalogo
                <svg style="width:21px;height:21px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                    <path fill="#333" d="M7,10L12,15L17,10H7Z"></path>
                </svg>
            </a>
        </li>
        <li><a href="#!">Portafolio</a></li>
        <li>
            <a href="#!" class="btn btn-sesion">
                <svg style="width:22px;height:22px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                    <path fill="#fff" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path>
                </svg>
            </a>
        </li>
    </ul>

    <section id="prodlistSection">
        <div id="prodlistContainer" class="container center-align">
            <h1 class="prodlistTitle">Diseñamos el futuro</h1>
            <h3 class="prodlistSubtitle">Soluciones Urbanas</h3>
            <div class="input-field">
                <input id="inputSearch" name="buscador" placeholder="Búsqueda de Productos" type="text">
            </div>
            <!--button class="btn btn-search" onclick="buscar()">Buscar</button-->
        </div>
    </section>

    <section id="productsSection">
        <div id="productsContainer" class="container center-align">
            <h2 class="productsTitle">Productos</h2>
            <div id="prodRowRen1" class="row">
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_cfe1.jpg" alt="Profico84B">
                            <p class="prodName">BROCAL 84-A PROFICO</p>
                            <p class="skillName">(Sin Descripción)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #e19d22;">Producto CFE</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #686868;">Registro Eléctrico</label>
                                </div>
                            </div>
                            <a href="#cotice1" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico_84B.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice1" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="../accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">BROCAL 84-A PROFICO</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='BROCAL 84-A PROFICO' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="cliente" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_cfe1.jpg" alt="Profico84B">
                            <p class="prodName">BROCAL 84-B PROFICO</p>
                            <p class="skillName">(Sin Descripción)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #e19d22;">Producto CFE</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #686868;">Registro Eléctrico</label>
                                </div>
                            </div>
                            <a href="#cotice2" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico84B_1.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice2" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">BROCAL 84-B PROFICO</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='BROCAL 84-B PROFICO' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="cliente" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_cfe5.jpg" alt="Profico84B">
                            <p class="prodName">TAPA MURETE 112 CFE</p>
                            <p class="skillName">(Sin Descripción)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #e19d22;">Producto CFE</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #ffc854;">Reg.Alumbrado</label>
                                </div>
                            </div>
                            <a href="#cotice3" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/TAPA_MURETE_112.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice3" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">TAPA MURETE 112 CFE</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='TAPA MURETE 112 CFE' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="cliente" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg1.jpg" alt="Profico84B">
                            <p class="prodName">REGISTRO CIRCULAR 8"</p>
                            <p class="skillName">(TUBO DE PVC, MARCO Y TAPA POLIMERICA)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #686868;">Registro Eléctrico</label>
                                </div>
                            </div>
                            <a href="#cotice4" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/REGISTRO_CIRULAR_8.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice4" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGITRO ALUMBRADO 40X40X40 APILABLE CON CUERPO DE FIBRA DE VIDRIO, MARCO Y TAPA POLIMERICA</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGITRO ALUMBRADO 40X40X40 APILABLE CON CUERPO DE FIBRA DE VIDRIO, MARCO Y TAPA POLIMERICA' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="cliente" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="prodRowRen1" class="row">
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg2.jpg" alt="Profico84B">
                            <p class="prodName">REGISTRO ALUMBRADO </p>
                            <p class="skillName">(40X40X40)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #ffc854;">Reg.Alumbrado</label>
                                </div>
                            </div>
                            <a href="#cotice5" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Cuadrado_40x40x40_no_apliable.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice5" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGITRO ALUMBRADO 40X40X40 APILABLE CON CUERPO DE FIBRA DE VIDRIO, MARCO Y TAPA POLIMERICA</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGITRO ALUMBRADO 40X40X40 APILABLE CON CUERPO DE FIBRA DE VIDRIO, MARCO Y TAPA POLIMERICA' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="cliente" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg3.jpg" alt="Profico84B">
                            <p class="prodName">REGISTRO ALUMBRADO</p>
                            <p class="skillName">(40X60X60)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #ffc854;">Reg.Alumbrado</label>
                                </div>
                            </div>
                            <a href="#cotice6" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico_406060_apilable.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice6" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO ALUMBRADO 40X60X60 TAPA POLIMERICO Y CUERPO DE FIBRA DE VIDRIO APILABLE PROFICO</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO ALUMBRADO 40X60X60 TAPA POLIMERICO Y CUERPO DE FIBRA DE VIDRIO APILABLE PROFICO' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="cliente" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg4.jpg" alt="Profico84B">
                            <p class="prodName">REGISTRO TELEFONICO L1T</p>
                            <p class="skillName">(TAPA POLIMERICA CUERPO EN FIBRA DE VIDRIO)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #448ec9;">Reg. Telecom.</label>
                                </div>
                            </div>
                            <a href="#cotice7" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico_registro_L1T.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice7" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO TELEFONICO L1T CON TAPA POLIMERICA CUERPO EN FIBRA DE VIDRIO (APILABLE)</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO TELEFONICO L1T CON TAPA POLIMERICA CUERPO EN FIBRA DE VIDRIO (APILABLE)' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg5.jpg" alt="Profico84B">
                            <p class="prodName">REGISTRO TELEFONICO L2T</p>
                            <p class="skillName">(TAPA POLIMERICA CUERPO EN FIBRA DE VIDRIO)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #448ec9;">Reg. Telecom.</label>
                                </div>
                            </div>
                            <a href="#cotice8" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico_L2T.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice8" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO TELEFONICO L2T CON TAPA POLIMERICA CUERPO EN FIBRA DE VIDRIO (APILABLE)</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO TELEFONICO L2T CON TAPA POLIMERICA CUERPO EN FIBRA DE VIDRIO (APILABLE)' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="prodRowRen1" class="row">
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg6.jpg" alt="Profico84B">
                            <p class="prodName">REGISTRO TELEFONICO L3T</p>
                            <p class="skillName">(TAPA POLIMERICA CUERPO EN FIBRA DE VIDRIO)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #448ec9;">Reg. Telecom.</label>
                                </div>
                            </div>
                            <a href="#cotice9" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico_L3T.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice9" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO TELEFONICO L3T CON TAPA POLIMERICA CUERPO EN FIBRA DE VIDRIO (APILABLE)</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO TELEFONICO L3T CON TAPA POLIMERICA  CUERPO EN FIBRA DE VIDRIO (APILABLE)' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg7.jpg" alt="Profico84B">
                            <p class="prodName">REGISTRO 60X60X65</p>
                            <p class="skillName">(TAPA POLIMERICA, CUERPO EN FIBRA DE VIDRIO)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #448ec9;">Reg. Telecom.</label>
                                </div>
                            </div>
                            <a href="#cotice10" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico_60x60x60_apilable.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice10" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO 60X60X65 CON TAPA POLIMERICA Y CUERPO EN FIBRA DE VIDRIO (APILABLE)</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO 60X60X65 CON TAPA POLIMERICA Y CUERPO EN FIBRA DE VIDRIO (APILABLE)' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg8.jpg" alt="Profico84B">
                            <p class="prodName">REGISTRO CIRCULAR DE 8"</p>
                            <p class="skillName">(CUERPO PVC 1M, MARCO Y TAPA POLIMERICA)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #686868;">Registro Eléctrico</label>
                                </div>
                            </div>
                            <a href="#cotice11" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Registro_8in_1m.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice11" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO CIRCULAR DE 8" CON CUERPO DE PVC 1M, MARCO Y TAPA POLIMERICA</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO CIRCULAR DE 8" CON CUERPO DE PVC 1M, MARCO Y TAPA POLIMERICA' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg9.jpg" alt="Registro_conico_60x80x70">
                            <p class="prodName">REGISTRO CONICO</p>
                            <p class="skillName">(60X80X70 MARCO)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #686868;">Registro Eléctrico</label>
                                </div>
                            </div>
                            <a href="#cotice12" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Registro_conico_60x80x70.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice12" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO CONICO 60X80X70 MARCO Y TAPA POLIMERICA Y CUERPO DE FIBRA DE VIDRIO</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO CONICO 60X80X70 MARCO Y TAPA POLIMERICA Y CUERPO DE FIBRA DE VIDRIO' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="prodRowRen1" class="row">
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_1.jpg" alt="Profico 1">
                            <p class="prodName">Tapa Telmex</p>
                            <p class="skillName">(50X60 EN CONCRETO POLIMERICO)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #448ec9;">Reg. Telecom.</label>
                                </div>
                            </div>
                            <a href="#cotice13" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico_Tapa_Telmex.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice13" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">TAPA 50X60 EN CONCRETO POLIMERICO CON LOGOTIPO TELMEX</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value="TAPA 50X60 EN CONCRETO POLIMERICO CON LOGOTIPO TELMEX" name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg10.jpg" alt="RTB 24x36x24 LENDOZA">
                            <p class="prodName">REGISTRO MEGA</p>
                            <p class="skillName">(24x36x24 CUERPO DE FIBRA LENDOZA)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #448ec9;">Reg. Telecom.</label>
                                </div>
                            </div>
                            <a href="#cotice14" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico_Mega_243624_T22_apilable.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice14" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO MEGA 24"X36"X24" CON MARCO Y TAPA POLIMERICA Y CUERPO DE FIBRA LENDOZA</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO MEGA 24"X36"X24" CON MARCO Y TAPA POLIMERICA Y CUERPO DE FIBRA LENDOZA' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_2.jpg" alt="Profico 2">
                            <p class="prodName">REGISTRO SUPER</p>
                            <p class="skillName">(17X30X24 CUERPO DE FIBRA LENDOZA)</p>
                            <div id="rowLabel" class="row">
                                <div id="prodCol" class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div id="prodCol" class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #448ec9;">Reg. Telecom.</label>
                                </div>
                            </div>
                            <a href="#cotice15" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico_Super_173024_apilable.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Ventana Modal -->
                    <div id="cotice15" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO SUPER 17"X30x24" CON MARCO Y TAPA POLIMERICA Y CUERPO DE FIBRA LENDOZA</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO SUPER 17"X30x24" CON MARCO Y TAPA POLIMERICA Y CUERPO DE FIBRA LENDOZA' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg11.jpg" alt="Profico84B">
                            <p class="prodName">REGISTRO ALUMBRADO</p>
                            <p class="skillName">(30X30X30 FIBRA DE VIDRIO)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #ffc854;">Reg.Alumbrado</label>
                                </div>
                            </div>
                            <a href="#cotice16" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Profico_30x30x30_apilable.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice16" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO ALUMBRADO FIBRA DE VIDRIO 30X30X30 APILABLE MARCA PROFICO</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO ALUMBRADO FIBRA DE VIDRIO 30X30X30 APILABLE MARCA PROFICO' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="prodRowRen1" class="row">
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_5.jpg" alt="Profico 5">
                            <p class="prodName">REGISTRO TIPO CUBETA</p>
                            <p class="skillName">(COLOR ROJO CON LEYENDA DE "ELECTRICO")</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #686868;">Reg. Eléctrico</label>
                                </div>
                            </div>
                            <a href="#cotice17" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Cubeta_ELECTRICO_ROJO.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice17" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="../accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO CIRCULAR TIPO CUBETA COLOR ROJO CON MARCO Y TAPA CONCRETO POLIMERICO CON LEYENDA DE "ELECTRICO"</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO CIRCULAR TIPO CUBETA COLOR ROJO CON MARCO Y TAPA CONCRETO POLIMERICO CON LEYENDA DE "ELECTRICO"' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_6.jpg" alt="Profico 6">
                            <p class="prodName">REGISTRO TIPO CUBETA</p>
                            <p class="skillName">(COLOR AMARILLO CON LEYENDA "ALUMBRADO")</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #686868;">Reg. Eléctrico</label>
                                </div>
                            </div>
                            <a href="#cotice18" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Cubeta_ALUMBRADO AMARILLO.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice18" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="../accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO CIRCULAR TIPO CUBETA COLOR AMARILLO CON MARCO Y TAPA CONCRETO POLIMERICO CON LEYENDA "ALUMBRADO"</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="text" value='REGISTRO CIRCULAR TIPO CUBETA COLOR AMARILLO CON MARCO Y TAPA CONCRETO POLIMERICO CON LEYENDA "ALUMBRADO"' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_7.jpg" alt="REB CUBETA VERDE">
                            <p class="prodName">REGISTRO TIPO CUBETA</p>
                            <p class="skillName">(COLOR VERDE CON LEYENDA "TIERRA")</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #686868;">Registro Eléctrico</label>
                                </div>
                            </div>
                            <a href="#cotice19" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/Cubeta_SISTEMA_DE_TIERRA_VERDE.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice19" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="../accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO CIRCULAR TIPO CUBETA COLOR VERDE CON MARCO Y TAPA CONCRETO POLIMERICO CON LEYENDA "TIERRA"</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO CIRCULAR TIPO CUBETA COLOR VERDE CON MARCO Y TAPA CONCRETO POLIMERICO CON LEYENDA "TIERRA"' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg12.jpg" alt="RTB CONICO 11X18 T5">
                            <p class="prodName">REGISTRO CONICO</p>
                            <p class="skillName">(12" x 18" TIER 5)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #448ec9;">Reg. Telecom.</label>
                                </div>
                            </div>
                            <a href="#cotice20" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/REGISTRO_CONICO_12in_x_18in_TIER_5.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice20" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO CONICO 12" x 18" TIER 5</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO CONICO 12" x 18" TIER 5' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="prodRowRen1" class="row">
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg13.jpg" alt="RTB CONICO 20X24 T8">
                            <p class="prodName">REGISTRO CONICO</p>
                            <p class="skillName">(20"x 24" TIER 8)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #448ec9;">Reg. Telecom.</label>
                                </div>
                            </div>
                            <a href="#cotice21" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/REGISTRO_CONICO_24_in_x_24_in_TIER_8.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice21" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO CONICO 20"x 24" TIER 8</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO CONICO 20"x 24" TIER 8' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_reg14.jpg" alt="RTB CONICO 20X24 T15">
                            <p class="prodName">REGISTRO CONICO</p>
                            <p class="skillName">(20"x 24" TIER 15)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #448ec9;">Reg. Telecom.</label>
                                </div>
                            </div>
                            <a href="#cotice22" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/REGISTRO_CONICO_24_in_x_24_in_TIER_15.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice22" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGISTRO CONICO 20"x 24" TIER 15</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGISTRO CONICO 20"x 24" TIER 15' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_mov1.jpg" alt="CANAL DE DESAGÜE">
                            <p class="prodName">CANAL DE DESAGÜE</p>
                            <p class="skillName">(REGILLA ANCHO DE 20CM X 20CM X 1M)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #5aa7de;">Movilidad Urbano</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #dac64d;">Vialidad</label>
                                </div>
                            </div>
                            <a href="#cotice23" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/CANAL_DE_DESAGÜE_CON_REGILLA_ANCHO_DE_20CM_X_20CM_X_1M.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice23" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="../accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">CANAL DE DESAGÜE CON REGILLA ANCHO DE 20CM X 20CM X 1M (CANALETA DE CONCRETO POLIMERICO 1 m)</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='CANAL DE DESAGÜE CON REGILLA ANCHO DE 20CM X 20CM X 1M (CANALETA DE CONCRETO POLIMERICO 1 m)' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="razonsocial" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="tel" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_3.jpg" alt="BSB CON BISAGRA 24"">
                            <p class=" prodName">BROCAL DE ALCANTARILLADO</p>
                            <p class="skillName">(CON BISAGRA EN CONCRETO POLIMERICO 24")</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #8b6c9b;">Sanitario</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #6c8e9b;">Registro Sanitario</label>
                                </div>
                            </div>
                            <a href="#cotice24" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/BSB_CON_BISAGRA_24.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice24" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="../accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">BROCAL DE ALCANTARILLADO CON BISAGRA EN CONCRETO POLIMERICO 24" PROFICO PERSONALIZADO</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='BROCAL DE ALCANTARILLADO CON BISAGRA EN CONCRETO POLIMERICO 24" PROFICO PERSONALIZADO' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="prodRowRen2" class="row">
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_4.jpg" alt="BSB SIN BISAGRA 24"">
                            <p class=" prodName">BROCAL ALCANTARILLADO</p>
                            <p class="skillName">(SIN BISAGRA MODELO PROFICO 24")</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #8b6c9b;">Sanitario</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #6c8e9b;">Registro Sanitario</label>
                                </div>
                            </div>
                            <a href="#cotice25" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/BSB_SIN_BISAGRA_24.pdf" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice25" class="modal">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="../accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">BROCAL ALCANTARILLADO SIN BISAGRA MODELO PROFICO 24"</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='BROCAL ALCANTARILLADO SIN BISAGRA MODELO PROFICO 24"' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" type="text">
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l3">
                    <div id="prodCard" class="card">
                        <div class="card-content">
                            <img id="prodImg" class="responsive-img materialboxed" src="../assets/img/catalogo/profico_8.jpg" alt="Profico 8">
                            <p class="prodName">REGISTRO ALUMBRADO</p>
                            <p class="skillName">(40X40X40 APILABLE)</p>
                            <div id="rowLabel" class="row">
                                <div class="col s6 l6 m6">
                                    <label id="prodCategoria" style="background-color: #989898;">Registros</label>
                                </div>
                                <div class="col s6 l6 m6">
                                    <label id="prodSubcategoria" style="background-color: #686868;">Registro Eléctrico</label>
                                </div>
                            </div>
                            <a href="#cotice26" class="btn btn-cotizar modal-trigger">Cotizar</a>
                            <a href="../assets/doc/REGISTRO_ALUMBRADO_40X40X40_APILABLE.pdf" class="btn btn-download" target="_blank" class="btn btn-download tooltipped" data-position="bottom" data-tooltip="Ficha Técnica">
                                <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M14,2L20,8V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V4A2,2 0 0,1 6,2H14M18,20V9H13V4H6V20H18M12,19L8,15H10.5V12H13.5V15H16L12,19Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Ventana Modal -->
                    <div id="cotice26" class="modal modalCotice">
                        <div class="modal-content">
                            <h3 class="coticeModalTitle">Solicitar Cotización</h3>
                            <form action="../accion/sendcotice.php" method="POST" class="center-align">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="row">
                                            <div class="col s9 m9 l9">
                                                <h6 class="coticeTitleProduct">Producto:</h6>
                                                <p class="coticeTextProduct">REGITRO ALUMBRADO 40X40X40 APILABLE CON CUERPO DE FIBRA DE VIDRIO, MARCO Y TAPA POLIMERICA</p>
                                            </div>
                                            <div class="col s3 m3 l3">
                                                <div class="input-data">
                                                    <input id="inputNumber" placeholder="Cantidad" name="cantidad" min="1" max="999" patterns="[0-9]{1,5}" type="number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <input id="inputData" type="hidden" value='REGITRO ALUMBRADO 40X40X40 APILABLE CON CUERPO DE FIBRA DE VIDRIO, MARCO Y TAPA POLIMERICA' name="producto" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Razon Social" name="cliente" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div id="rowForm" class="row">
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Correo Electrónico" name="correo" type="text" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l6">
                                        <div class="input-field">
                                            <input id="inputData" placeholder="Teléfono (Opcional)" name="telefono" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <textarea id="textarea1" placeholder="Escriba alguna personalización o cambios en el producto" name="mensaje" class="materialize-textarea"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-form">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="page-footer">
        <div id="footerContainer" class="container">
            <div class="row">
                <div class="col s12 m12 l6">
                    <h4 class="footerTitle">¿Como llegar?</h4>
                    <div class="iframe">
                        <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.6619988488806!2d-103.44652244871955!3d25.616145509114755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fd1185b5c8281%3A0x7817d0fe139dd81d!2sPROFICO%20S.A.%20DE%20C.V.!5e0!3m2!1ses-419!2smx!4v1720623164496!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <h5 class="footerTitle">Para mayor información:</h5>
                    <form action="#!" method="POST">
                        <div class="input-field">
                            <input id="inputData" placeholder="Nombre Completo" type="text">
                        </div>
                        <div id="rowForm" class="row">
                            <div class="col s12 m12 l6">
                                <div class="input-field">
                                    <input id="inputData" placeholder="Correo Electrónico" type="text">
                                </div>
                            </div>
                            <div class="col s12 m12 l6">
                                <div class="input-field">
                                    <input id="inputData" placeholder="Teléfono (Opcional)" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <input id="inputData" placeholder="Asunto" type="text">
                        </div>
                        <textarea id="textarea1" placeholder="Escriba su mensaje" class="materialize-textarea"></textarea>
                        <button type="submit" class="btn btn-form">Enviar Mensaje</button>
                    </form>
                    <hr id="divider">
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div id="footerContainer" class="container">
                © <?php echo '2024' ?> Profico: Productos de Fibra y Concreto S.A. de C.V.
                <!--a class="grey-text text-lighten-4 right" href="#!">Powered by Arcobit</a-->
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <script src="../assets/js/profico.js"></script>
    <script src="../assets/js/busqueda.js"></script>
</body>

</html>