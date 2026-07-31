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
        <li><a href="../catalogo/registros.php">Registros</a></li>
        <li><a href="../catalogo/movilidad.php">Movilidad</a></li>
        <li><a href="../catalogo/sanitarios.php">Sanitarios</a></li>
        <li><a href="../catalogo/cfe.php">Productos CFE</a></li>
    </ul>
    <ul id="dropDown_Menu_Mobile" class="dropdown-content">
        <li><a href="../catalogo/registros.php">Registros</a></li>
        <li><a href="../catalogo/movilidad.php">Movilidad</a></li>
        <li><a href="../catalogo/sanitarios.php">Sanitarios</a></li>
        <li><a href="../catalogo/cfe.php">Productos CFE</a></li>
    </ul>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <!-- Dropdown Structure -->
                <div id="navContainer" class="container">
                    <a href="#!" class="brand-logo"><img src="../assets/img/profico_navbar.png" alt="Profico"></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                        <svg style="width:24px;height:24px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                            <path fill="#333" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z"></path>
                        </svg>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="../.">Inicio</a></li>
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="dropDown_Menu">Categorias
                                <svg style="width:21px;height:21px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#333" d="M7,10L12,15L17,10H7Z"></path>
                                </svg>
                            </a>
                        </li>
                        <!--li><a href="#!">Portafolio</a></li-->
                        <li>
                            <a href="../catalogo" class="btn btn-sesion">
                                <svg style="width:22px;height:22px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                                    <path fill="#fff" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path>
                                </svg>
                            </a>
                        </li>
                        <!--li><a href="#!" class="btn btn-sesion">Iniciar Sesión</a></li-->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../.">Inicio</a></li>
        <li>
            <a class="dropdown-trigger" href="#!" data-target="dropDown_Menu_Mobile">Catalogo
                <svg style="width:21px;height:21px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                    <path fill="#333" d="M7,10L12,15L17,10H7Z"></path>
                </svg>
            </a>
        </li>
        <!--li><a href="#!">Portafolio</a></li-->
        <li>
            <a href="../catalogo/" class="btn btn-sesion">
                <svg style="width:22px;height:22px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                    <path fill="#fff" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z"></path>
                </svg>
            </a>
        </li>
    </ul>

    <div class="fixed-action-btn">
        <a href="https://wa.me/18712921525?text=Buenas%20tardes" target="_blank" class="btn-floating btn-large btn-whatsapp">
            <svg style="width:32px;height:32px;vertical-align:middle;margin-bottom:3px" viewBox="0 0 24 24">
                <path fill="#fff" d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 15 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M8.53 7.33C8.37 7.33 8.1 7.39 7.87 7.64C7.65 7.89 7 8.5 7 9.71C7 10.93 7.89 12.1 8 12.27C8.14 12.44 9.76 14.94 12.25 16C12.84 16.27 13.3 16.42 13.66 16.53C14.25 16.72 14.79 16.69 15.22 16.63C15.7 16.56 16.68 16.03 16.89 15.45C17.1 14.87 17.1 14.38 17.04 14.27C16.97 14.17 16.81 14.11 16.56 14C16.31 13.86 15.09 13.26 14.87 13.18C14.64 13.1 14.5 13.06 14.31 13.3C14.15 13.55 13.67 14.11 13.53 14.27C13.38 14.44 13.24 14.46 13 14.34C12.74 14.21 11.94 13.95 11 13.11C10.26 12.45 9.77 11.64 9.62 11.39C9.5 11.15 9.61 11 9.73 10.89C9.84 10.78 10 10.6 10.1 10.45C10.23 10.31 10.27 10.2 10.35 10.04C10.43 9.87 10.39 9.73 10.33 9.61C10.27 9.5 9.77 8.26 9.56 7.77C9.36 7.29 9.16 7.35 9 7.34C8.86 7.34 8.7 7.33 8.53 7.33Z"></path>
            </svg>
        </a>
    </div>

    <section id="usheadSection">
        <div id="usheadContainer" class="container center-align">
            <h1 class="usheadTitle">Nosotros</h1>
        </div>
    </section>

    <section id="usInfoSection">
        <div id="usInfoContainer" class="container center-align">
            <div id="usInfoRow" class="row">
                <div class="col s12 m12 l6">
                    <h3 class="usInfoTitle">Nuestra Historia</h3>
                    <p class="usInfoText">Somos una empresa dedicada a la fabricación de productos en fibra de vidrio y concreto polimérico. Fundada en el año 2016 hasta la actualidad hemos ido buscando la mejora en nuestros productos para brindar una mejor experiencia a nuestros clientes que están innovando en conjunto con nosotros en el uso de estos materiales.</p>
                    <div class="row">
                        <div class="col s12 m12 l6">
                            <h4 class="usInfoTitle">Misión</h4>
                            <p class="usInfoText">En PRODUCTOS DE FIBRA Y CONCRETO S.A. DE C.V. nos comprometemos a satisfacer las necesidades de nuestros clientes en la fabricación de todo tipo de productos en fibra de vidrio y concreto polimérico. Además de adecuar y capacitar a nuestro personal de trabajo para brindar la mayor calidad en cada uno de nuestros productos ofrecidos. Nuestro pensamiento va enfocado a la mejora continua tanto en nuestros procesos como en nuestros productos.</p>
                        </div>
                        <div class="col s12 m12 l6">
                            <h4 class="usInfoTitle">Visión</h4>
                            <p class="usInfoText">Nuestra visión es posicionarnos como la mejor empresa fabricante de productos basados en fibra de vidrio y concreto polimérico a nivel nacional y cumplir con los estándares más altos de calidad apoyándonos en bases normativas como la Norma Internacional ISO 9001.</p>
                            <img class="responsive-img" width="50%" src="../assets/img/qrPoliticas.png" alt="Políticas de Calidad">
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <img id="usInfoImg" class="responsive-img" src="../assets/img/Profico_nosotros1.jpg" alt="Profico 1">
                </div>
            </div>
        </div>
    </section>

    <section id="cteSection">
        <div id="cteContainer" class="container">
            <h2 class="cteTitle">Clientes</h2>
            <div class="row">
                <div class="col s12 m12 l3">
                    <img id="cteImg" class="responsive-img" src="../assets/img/profico_cliente1.jpg" alt="Cliente 1">
                </div>
                <div class="col s12 m12 l3">
                    <img id="cteImg" class="responsive-img" src="../assets/img/profico_cliente2.jpg" alt="Cliente 2">
                </div>
                <div class="col s12 m12 l3">
                    <img id="cteImg" class="responsive-img" src="../assets/img/profico_cliente3.jpg" alt="Cliente 3">
                </div>
                <div class="col s12 m12 l3">
                    <img id="cteImg" class="responsive-img" src="../assets/img/profico_cliente4.jpg" alt="Cliente 4">
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l3">
                    <img id="cteImg" class="responsive-img" src="../assets/img/profico_cliente5.jpg" alt="Cliente 5">
                </div>
                <div class="col s12 m12 l3">
                    <img id="cteImg" class="responsive-img" src="../assets/img/profico_cliente6.jpg" alt="Cliente 6">
                </div>
                <div class="col s12 m12 l3">
                    <img id="cteImg" class="responsive-img" src="../assets/img/profico_cliente7.jpg" alt="Cliente 7">
                </div>
                <div class="col s12 m12 l3">
                    <img id="cteImg" class="responsive-img" src="../assets/img/profico_cliente8.jpg" alt="Cliente 8">
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
                    <a href="https://www.facebook.com/profile.php?id=100095309043928" target="_blank"><img id="imgFacebook" src="../assets/img/facebook.png" alt="Facebook"></a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div id="footerLineContainer" class="container">
                <p class="footerText">© <?php echo '2024' ?> Profico: Productos de Fibra y Concreto S.A. de C.V.</p>
                <a id="poweredLink" class="grey-text text-lighten-4 right" href="https://arcobit.com">Powered by arcobit</a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <script src="../assets/js/profico.js"></script>
</body>

</html>