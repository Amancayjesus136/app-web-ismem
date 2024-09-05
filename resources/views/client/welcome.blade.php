<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Ismem | Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/layout.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<style>
    .bg-custom {
    background-color: #074bb0 !important;
}
</style>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing navbar-light bg-custom fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="https://proyecto.ismemvirtual.com/ismem2024/logoismem.png" class="card-logo card-logo-dark" alt="logo dark" height="60" style="border-radius: 30px">
                    <img src="https://proyecto.ismemvirtual.com/ismem2024/logoismem.png" class="card-logo card-logo-light" alt="logo light" height="60" style="border-radius: 30px">
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fs-15 active" href="#hero"><span class="text-success">Inicio</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#carreras"><span class="text-white">Carreras</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#marketplace"><span class="text-white">Inscripciones</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#talleres"><span class="text-white">Talleres</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#creators"><span class="text-white">Contactos</span></a>
                        </li>
                    </ul>

                    <div class="">
                        <a href="https://www.facebook.com/iestp.ismem/?locale=es_LA" class="btn btn-primary btn-sm">
                            <i class="ri-facebook-circle-fill ri-2x"></i>
                        </a>
                        <a href="https://x.com/ismem?lang=es" class="btn btn-info btn-sm">
                            <i class="ri-twitter-fill ri-2x"></i>
                        </a>
                        <a href="https://www.youtube.com/@ismemtv/featured" class="btn btn-danger btn-sm">
                            <i class="ri-youtube-fill ri-2x"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/ismem/" class="btn btn-secondary btn-sm">
                            <i class="ri-linkedin-box-fill ri-2x"></i>
                        </a>
                        <a href="tel:+51924488433" class="btn btn-success btn-sm">
                            <i class="ri-phone-fill ri-2x"></i>
                        </a>
                        <a href="mailto:tecnologicoismem@gmail.com" class="btn btn-warning btn-sm">
                            <i class="ri-mail-send-line ri-2x"></i>
                        </a>
                    </div>
                </div>

            </div>
        </nav>

        <style>
            .customizer-setting {
                position: fixed;
                bottom: 40px;
                left: 20px;
                z-index: 1000;
                }
        </style>

        <div class="customizer-setting d-none d-md-block">
            <a href="https://api.whatsapp.com/send?phone=924488433" class="btn-wsp" target="_blank">
                <div class="btn-success rounded-pill shadow-lg btn btn-icon btn-lg p-2">
                    <i class="ri-whatsapp-line mdi-cog-outline fs-22"></i>
                </div>
            </a>
        </div>
            <div class="bg-overlay bg-overlay-pattern"></div>

        {{-- modal de anuncios --}}
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid mx-auto" src="{{ asset('assets/img/ismem2/img1.webp') }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid mx-auto" src="{{ asset('assets/img/ismem2/img2.webp') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid mx-auto" src="{{ asset('assets/img/ismem2/img1.webp') }}" alt="Third slide">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- modal de anuncios --}}

        <section class="section nft-hero" id="hero">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-10">
                        <div class="text-star">
                            <h1 class="text-white mb-4">
                                <b>Somos tu camino</b><br>
                                <span class="text-white"><b>al éxito</b></span>
                            </h1>
                            <video class="mb-3" id="welcome-video" width="100%" autoplay muted controls loop>
                                <source src="{{ asset('assets/images/videos/video_welcome.mp4') }}" type="video/mp4">
                            </video>

                            <div class="hstack gap-2 justify-content-center mb-5">
                                <a href="#" class="btn btn-primary">Registrate <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                                <a href="#" class="btn btn-danger">Inicia Seción<i class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-1 col-sm-10">
                    </div>

                    <div class="col-lg-6 col-sm-10">
                        <div>
                            <form id="dniForm">
                                <div class="row">
                                    <div class="col-12 col-sm-8">
                                        <div class="mb-3">
                                            <label for="dniInput" class="form-label text-white">Traer datos con DNI: <span class="text-danger">(opcional)</span></label>
                                            <input type="number" class="form-control mb-2" id="dniInput" name="dni" placeholder="Ingresa número de documento" maxlength="8" pattern="\d{8}" required>
                                            <span id="dniMessage" class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 mt-2 mt-sm-4">
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-info w-100" style="margin-top: 7px">Consultar datos</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <span id="dniMessage" class="text-danger"></span>

                            @if(isset($data))
                                <ul id="dniData" hidden>
                                    <li class="text-white"><strong>Nombre:</strong> {{ $data['nombres'] ?? 'No disponible' }}</li>
                                    <li class="text-white"><strong>Apellido Paterno:</strong> {{ $data['apellidoPaterno'] ?? 'No disponible' }}</li>
                                    <li class="text-white"><strong>Apellido Materno:</strong> {{ $data['apellidoMaterno'] ?? 'No disponible' }}</li>
                                    <li class="text-white"><strong>Tipo de Documento:</strong> {{ $data['tipoDocumento'] ?? 'No disponible' }}</li>
                                    <li class="text-white"><strong>Número de Documento:</strong> {{ $data['numeroDocumento'] ?? 'No disponible' }}</li>
                                    <li class="text-white"><strong>Último Dígito:</strong> {{ $data['digitoVerificador'] ?? 'No disponible' }}</li>
                                </ul>
                            @endif

                            <form id="consultaForm" class="tablelist-form needs-validation" alt="user-profile-image" enctype="multipart/form-data" autocomplete="off" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="line"></div>

                                    <div class="col-12 col-sm-4">
                                        <div class="mb-3">
                                            <label for="generoSelect" class="form-label text-white">Carrera <span class="text-white">*</span></label>
                                            <select id="generoSelect" class="form-control" name="con_carrera" required>
                                                <option value="" disabled selected>Seleccione..</option>
                                                <option value="Sistemas">Sistemas</option>
                                                <option value="Contabilidad">Contabilidad</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Se ve bien!
                                            </div>
                                            <div class="invalid-feedback text-end">
                                                La carrera es necesaria
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="mb-3">
                                            <label for="exampleInputDni" class="form-label text-white">DNI <span class="text-white">*</span></label>
                                            <input type="number" id="exampleInputDni" class="form-control" name="con_numero_dni" required>
                                            <div class="valid-feedback">
                                                Se ve bien!
                                            </div>
                                            <div class="invalid-feedback text-end">
                                                El DNI es necesaria
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="mb-3">
                                            <label for="ciudadSelect" class="form-label text-white">Ciudad <span class="text-white">*</span></label>
                                            <select id="ciudadSelect" class="form-control" name="con_ciudad" required>
                                                <option value="" disabled selected>Seleccione</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Se ve bien!
                                            </div>
                                            <div class="invalid-feedback text-end">
                                                La ciudad es necesaria
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputNombres" class="form-label text-white">Nombres <span class="text-white">*</span></label>
                                            <input type="text" id="exampleInputNombres" name="con_nombres" class="form-control" placeholder="Nombres completos" required>
                                            <div class="valid-feedback">
                                                Se ve bien!
                                            </div>
                                            <div class="invalid-feedback text-end">
                                                Los nombres es necesaria
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="mb-2">
                                            <label for="exampleInputApellidos" class="form-label text-white">Apellidos <span class="text-white">*</span></label>
                                            <input type="text" id="exampleInputApellidos" name="con_apellidos" class="form-control" placeholder="Apellidos completos" required>
                                            <div class="valid-feedback">
                                                Se ve bien!
                                            </div>
                                            <div class="invalid-feedback text-end">
                                                Los apellidos es necesaria
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="mb-2">
                                            <label for="exampleInputCelular" class="form-label text-white">Celular <span class="text-white">*</span></label>
                                            <input type="number" class="form-control" name="con_celular" placeholder="Ingresar teléfono" required>
                                            <div class="valid-feedback">
                                                Se ve bien!
                                            </div>
                                            <div class="invalid-feedback text-end">
                                                El celular es necesaria
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="mb-2">
                                            <label for="generoSelect" class="form-label text-white">Género <span class="text-white">*</span></label>
                                            <select id="generoSelect" class="form-control" name="con_genero" required>
                                                <option value="" disabled selected>Seleccione..</option>
                                                <option value="masculino">Masculino</option>
                                                <option value="femenino">Femenino</option>
                                                <option value="prefiero_no_decirlo">Prefiero no decirlo</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Se ve bien!
                                            </div>
                                            <div class="invalid-feedback text-end">
                                                El genero es necesario
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label for="exampleInputCorreo" class="form-label text-white">Correo <span class="text-white">*</span></label>
                                            <input type="email" class="form-control" name="con_correo" placeholder="correo@gmail.com" required>
                                            <div class="valid-feedback">
                                                Se ve bien!
                                            </div>
                                            <div class="invalid-feedback text-end">
                                                El correo es necesario
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div>
                                            <label for="floatingTextarea2" class="form-label text-white">Mensaje <span class="text-white">*</span></label>
                                            <div class="form-floating">
                                                <textarea class="form-control" name="con_mensaje" id="floatingTextarea2" style="height: 100px" required></textarea>
                                                <div class="valid-feedback">
                                                    Se ve bien!
                                                </div>
                                                <div class="invalid-feedback text-end">
                                                    El mensaje descriptivo es necesario
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-info" style="border-radius: 20px">Enviar consulta</button>
                                </div>
                            </form>

                            <div id="formResponse"></div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="section" id="wallet">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xxl-4 col-lg-4 col-md-6 product-item upto-15">
                        <div class="card explore-box card-animate">
                            <div class="card-body">
                                <h6 class="fs-16 mb-3"><a href="apps-nft-item-details.html">¿Por qué Estudiar en el Instituto ISMEM?</a></h6>
                                <div>
                                    <span class="text-muted float-end">Estudiar en el ISMEM te ofrece una oportunidad invaluable para adquirir conocimientos especializados y habilidades prácticas en un entorno educativo estructurado. Los principales beneficios es que te permite desarrollar competencias especializadas que son altamente valoradas en el mercado laboral.</span>
                                </div>
                            </div>
                            <div class="position-relative rounded overflow-hidden">
                                <img src="https://ismem.edu.pe/assets/images/instituto.jpg" alt="" class="card-img-top explore-img">
                                <div class="discount-time">
                                    <h5 id="auction-time-1" class="mb-0 text-white"></h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-4 col-lg-4 col-md-6 product-item upto-15">
                        <div class="card explore-box card-animate">
                            <div class="card-body">
                                <h6 class="fs-16 mb-3"><a href="apps-nft-item-details.html">Obtén tu bachiller técnico</a></h6>
                                <div>
                                    <span class="text-muted float-end">El Bachillerato técnico te ofrece una formación más práctica y especializada, preparándote para ingresar directamente al mundo laboral teniendo más oportunidades y continuar tus estudios en la educación universitaria. <br><br><br><br></span>
                                </div>
                            </div>
                            <div class="position-relative rounded overflow-hidden">
                                <img src="https://ismem.edu.pe/assets/images/contabilidad.png" alt="" class="card-img-top explore-img">
                                <div class="discount-time">
                                    <h5 id="auction-time-1" class="mb-0 text-white"></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-lg-4 col-md-6 product-item upto-15">
                        <div class="card explore-box card-animate">
                            <div class="card-body">
                                <h6 class="fs-16 mb-3"><a href="apps-nft-item-details.html">Somos lincenciado por minedu</a></h6>
                                <div>
                                    <span class="text-muted float-end">Cumplimos con todas las condiciones básicas de calidad establecidas en la ley y los autoriza a brindar sus carreras profesionales de Contabilidad y Desarrollo de Sistemas de Información; garantizando que la propuesta educativa que permite a los estudiantes accedan a una educación de calidad en todos los aspectos. <br><br></span>
                                </div>
                            </div>
                            <div class="position-relative rounded overflow-hidden">
                                <img src="https://ismem.edu.pe/assets/images/sistemas.png" alt="" class="card-img-top explore-img">
                                <div class="discount-time">
                                    <h5 id="auction-time-1" class="mb-0 text-white"></h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row justify-content-center" style="margin-top: 50px">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="text-center">
                                <h3 class="mb-3 fw-semibold">Horarios flexibles</h3>
                                <p class="text-muted ff-secondary">Tu eliges como estudiar:</p>
                            </div>
                        </div>
                    </div>

                    <div class="row g-lg-5 g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fw-semibold"><i class="bx bxs-graduation fs-24 align-middle text-success me-1"></i> Carreras</h5>
                                </div>
                            </div>
                            <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box" id="genques-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="false" aria-controls="genques-collapseOne">
                                            Laboratorios
                                        </button>
                                    </h2>
                                    <div id="genques-collapseOne" class="accordion-collapse collapse" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            En forma permanente para Contabilidad y Desarrollo de Sistemas de Información
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo" aria-expanded="false" aria-controls="genques-collapseTwo">
                                            Turno Diurno
                                        </button>
                                    </h2>
                                    <div id="genques-collapseTwo" class="accordion-collapse collapse" aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            Lunes a Viernes: 08:00 AM - 1:00 PM
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="genques-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseThree" aria-expanded="false" aria-controls="genques-collapseThree">
                                            Turno Nocturno
                                        </button>
                                    </h2>
                                    <div id="genques-collapseThree" class="accordion-collapse collapse" aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                        <div class="accordion-body ff-secondary">
                                            Lunes a Sabados: 06:00 PM - 10:00 PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="d-flex align-items-center mb-2">
                                <div class="flex-grow-1">
                                    <h5 class="mb-0 fw-semibold"><i class="bx bx-laptop fs-24 align-middle text-info me-1"></i>Talleres</h5>
                                </div>
                            </div>

                            <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box" id="privacy-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseOne" aria-expanded="false" aria-controls="privacy-collapseOne">
                                            Clases Presenciales
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseOne" class="accordion-collapse collapse" aria-labelledby="privacy-headingOne" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body ff-secondary">
                                            Personalizadas y en forma permanente
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseTwo" aria-expanded="false" aria-controls="privacy-collapseTwo">
                                            Opción 1
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseTwo" class="accordion-collapse collapse" aria-labelledby="privacy-headingTwo" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body ff-secondary">
                                            Lunes - Miercoles - Viernes: 04:00 PM - 06:30 PM
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="privacy-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#privacy-collapseThree" aria-expanded="false" aria-controls="privacy-collapseThree">
                                            Opción 2
                                        </button>
                                    </h2>
                                    <div id="privacy-collapseThree" class="accordion-collapse collapse" aria-labelledby="privacy-headingThree" data-bs-parent="#privacy-accordion">
                                        <div class="accordion-body ff-secondary">
                                            Martes - Jueves: 04:00 PM - 06:30 PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="section bg-light" id="carreras">
            <section class="services-section spad" id="CarreraId">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mb-4">
                                <h3>CARRERAS</h3>
                                <img src="{{ asset('assets/img/line.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <p class="text-center mb-4">Carreras en las que podrás especializarte:</p>

                    <div class="row">
                        <div class="col-lg-6 product-item artwork crypto-card 3d-style">
                            <div class="card explore-box card-animate">
                                <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                    <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                                <div class="explore-place-bid-img">
                                    <img src="{{ asset('assets/img/ismem2/img2.webp') }}" alt="" class="card-img-top">
                                    <div class="bg-overlay"></div>
                                    <div class="place-bid-btn">
                                        <a href="#!" class="btn btn-primary"><i class="ri-eye-fill align-bottom me-1"></i> Ver más</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1 text-black">Desarrollo de Sistemas de Información</h5>
                                    <p class="text-muted mb-0">Estudiar Desarrollo de Sistemas de Información, no solo te ofrece la posibilidad de entrar al mundo de la tecnología, te permite crear una aplicación para solucionar un problema que veas en el mundo, sino que también sus beneficios van desde su amplia variedad de opciones de trabajo y beneficios económicos, hasta disfrutar de las innovaciones que se generarán en un futuro.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 product-item artwork crypto-card 3d-style">
                            <div class="card explore-box card-animate">
                                <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                    <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                                </div>
                                <div class="explore-place-bid-img">
                                    <img src="{{ asset('assets/img/ismem2/img3.webp') }}" alt="" class="card-img-top">
                                    <div class="bg-overlay"></div>
                                    <div class="place-bid-btn">
                                        <a href="#!" class="btn btn-primary"><i class="ri-eye-fill align-bottom me-1"></i> Ver más</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="mb-1 text-black">Contabilidad</h5>
                                    <p class="text-muted mb-0">Estudiar contabilidad proporciona una gran cantidad de conocimientos útiles para la vida, desde el manejo financiero personal hasta el entendimiento de los mercados y la economía. ¡Elegir esta carrera podrá beneficiarte en muchos aspectos! Los técnicos en Contabilidad tienen una gran responsabilidad y estatus en una organización. <br></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </section>
        <!-- end marketplace -->

        <!-- start features -->
        <section class="section" id="talleres">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-7 col-md-7">
                        <div class="text-start mb-4">
                            <h3><b>NUESTROS TALLERES</b></h3>
                            <img src="{{ asset('assets/img/line.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{ asset('assets/img/ismem2/excel.webp') }}" alt="" class="card-img-top">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-primary"><i class="ri-eye-fill align-bottom me-1"></i> Ver más</a>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: #405189">
                                <h5 class="mb-1 text-white">Microsoft Ecxel</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{ asset('assets/img/ismem2/marqueting.webp') }}" alt="" class="card-img-top">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-primary"><i class="ri-eye-fill align-bottom me-1"></i> Ver más</a>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: #405189">
                                <h5 class="mb-1 text-white">Comunity Manager</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{ asset('assets/img/ismem2/manager.webp') }}" alt="" class="card-img-top">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#!" class="btn btn-primary"><i class="ri-eye-fill align-bottom me-1"></i> Ver más</a>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: #405189">
                                <h5 class="mb-1 text-white">Operador Informático</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- end container -->
        </section><!-- end features -->

        <style>
            /* Default styles for mobile devices */
.img-resize {
    width: 100%;
    height: auto;
}

/* Styles for larger screens (tablets and desktops) */
@media (min-width: 768px) {
    .img-resize {
        width: 250px; /* Adjust the width */
        height: 200px; /* Adjust the height */
    }
}

@media (min-width: 992px) {
    .img-resize {
        width: 300px; /* For larger screens */
        height: 250px;
    }
}

        </style>

        <section class="section">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-7 col-md-7">
                        <div class="mb-4">
                            <h3><b>SITIOS INTERESANTES</b></h3>
                            <img src="{{ asset('assets/img/line.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{ asset('assets/img/ismem2/talleres.webp') }}" alt="" class="card-img-top img-resize">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#" class="btn btn-primary"><i class="ri-eye-fill align-bottom me-1"></i> Ver más</a>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: #405189">
                                <h5 class="mb-1 text-white">Talleres</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{ asset('assets/img/ismem2/radio.webp') }}" alt="" class="card-img-top img-resize">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#" class="btn btn-primary"><i class="ri-eye-fill align-bottom me-1"></i> Ver más</a>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: #405189">
                                <h5 class="mb-1 text-white">Radio</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{ asset('assets/img/ismem2/testimonio.webp') }}" alt="" class="card-img-top img-resize">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#" class="btn btn-primary"><i class="ri-eye-fill align-bottom me-1"></i> Ver más</a>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: #405189">
                                <h5 class="mb-1 text-white">Testimonios</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"><i class="mdi mdi-cards-heart fs-16"></i></button>
                            </div>
                            <div class="explore-place-bid-img">
                                <img src="{{ asset('assets/img/ismem2/eventos.webp') }}" alt="" class="card-img-top img-resize">
                                <div class="bg-overlay"></div>
                                <div class="place-bid-btn">
                                    <a href="#" class="btn btn-primary"><i class="ri-eye-fill align-bottom me-1"></i> Ver más</a>
                                </div>
                            </div>
                            <div class="card-body" style="background-color: #405189">
                                <h5 class="mb-1 text-white">Eventos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section spad mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-4">
                            <h3>Ubicación</h3>
                            <img src="{{ asset('assets/img/line.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <p class="text-center mb-3">Ubicación de nuestro sede:</p>

                <div class="row">
                    <div class="col-lg-6 product-item artwork crypto-card 3d-style">
                        <div class="card explore-box card-animate">
                            <div class="bookmark-icon position-absolute top-0 end-0 p-2">
                                <button type="button" class="btn btn-icon active" data-bs-toggle="button" aria-pressed="true"></button>
                            </div>
                            <div class="card-body">
                                <h5 class="mb-1 text-white">Desarrollo de Sistemas de Información</h5>
                                <p class="text-muted mb-0">Ubícame en nuestra página web es la herramienta ideal para encontrar fácilmente la ubicación de nuestro local. Ingresa tu dirección o permite que detectemos tu ubicación actual, y te mostraremos la ruta más rápida para llegar a nosotros. Con información clara sobre distancias y tiempos estimados, Ubícame te guía paso a paso para que encuentres nuestro local sin ningún problema. ¡Visítanos pronto!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 product-item artwork crypto-card 3d-style">
                        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.5079351907466!2d-76.94080552416597!3d-12.213848645035766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b95f0a4e311f%3A0xa9c82b1646700213!2sINSTITUTO%20SUPERIOR%20MARIA%20ELENA%20MOYANO!5e0!3m2!1ses-419!2spe!4v1709594800864!5m2!1ses-419!2spe"
                                    style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <img src="{{ asset('assets/img/ismem2/logo-oficial.jpg') }}" alt="logo light" height="50" style="border-radius: 30px">
                            </div>
                            <div class="mt-4 fs-14">
                                <p>Premium Multipurpose Admin & Dashboard Template</p>
                                <p>You can build any type of web application like eCommerce, CRM, CMS, Project management apps, Admin Panels, etc using Velzon.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Enlaces</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-15">
                                        <li><a href="#">Inicio</a></li>
                                        <li><a href="#">Carreras</a></li>
                                        <li><a href="#">Inscripciones</a></li>
                                        <li><a href="#">Talleres</a></li>
                                        <li><a href="#">Contactos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Talleres</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-15">
                                        <li><a href="#">Microsoft Office</a></li>
                                        <li><a href="#">Oratoria</a></li>
                                        <li><a href="#">Comunity Manager</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Ubicación</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list fs-15">
                                        <li><a href="#">Av. Vallejo St.2 Gp.15 Mz.M Lt.09</a></li>
                                        <li><a href="#">tecnologicoismem@gmail.com</a></li>
                                        <li><a href="#">+51 924 488 433</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script> document.write(new Date().getFullYear()) </script> © ISMEM - VES
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/iestp.ismem/?locale=es_LA" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://x.com/ismem?lang=es" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-twitter-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.youtube.com/@ismemtv/featured" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-youtube-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.linkedin.com/company/ismem/" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-box-fill"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ciudadSelect = document.getElementById('ciudadSelect');

            fetch('/data/ciudades.json')
                .then(response => response.json())
                .then(data => {
                    data.forEach(ciudad => {
                        const option = document.createElement('option');
                        option.value = ciudad.value;
                        option.textContent = ciudad.name;
                        ciudadSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error loading cities:', error));
        });
    </script>

    <script>
        (function () {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

    <script>
        document.getElementById('dniInput').addEventListener('input', function(e) {
            const input = e.target;
            if (input.value.length > 8) {
                input.value = input.value.slice(0, 8);
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const modalElement = document.getElementById('staticBackdrop');
        const modal = new bootstrap.Modal(modalElement);

        modal.show();

        modalElement.querySelector('.btn-close').addEventListener('click', function() {
            modal.hide();  // Cerrar el modal
        });

        modalElement.addEventListener('click', function(event) {
            if (event.target === modalElement) {
                    modal.hide();
                }
            });
        });

    </script>

    <script>
        function togglePlayPause() {
            var video = document.getElementById('welcome-video');
            var controlBtn = document.getElementById('video-control-btn');

            if (video.paused) {
                video.play();
                controlBtn.innerHTML = '<i class="fa-solid fa-circle-pause"></i> Pausar video';
            } else {
                video.pause();
                controlBtn.innerHTML = '<i class="fa-solid fa-circle-play"></i> Ver video';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('dniForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const dniInput = document.getElementById('dniInput').value;
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch('{{ route('welcome.consultarDni') }}', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ dni: dniInput })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const nombres = capitalizeWords(data.data.nombres || '');
                    const apellidoPaterno = capitalizeWords(data.data.apellidoPaterno || '');
                    const apellidoMaterno = capitalizeWords(data.data.apellidoMaterno || '');

                    const apellidosCompletos = `${apellidoPaterno} ${apellidoMaterno}`.trim();

                    document.getElementById('exampleInputNombres').value = nombres;
                    document.getElementById('exampleInputApellidos').value = apellidosCompletos;
                    document.getElementById('exampleInputDni').value = dniInput;

                    Swal.fire({
                        title: 'Consulta Exitosa',
                        text: 'Los datos han sido obtenidos correctamente.',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    title: 'Error',
                    text: 'Hubo un problema al hacer la solicitud.',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
            });
        });

        function capitalizeWords(str) {
            return str.toLowerCase().replace(/\b\w/g, function(letter) {
                return letter.toUpperCase();
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('consultaForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);
            const formElements = form.querySelectorAll('input, select, textarea');
            let valid = true;

            formElements.forEach(element => {
                if (!element.checkValidity()) {
                    valid = false;
                }
            });

            if (valid) {
                Swal.fire({
                    title: '¿Está seguro?',
                    text: "Confirme si desea enviar la consulta.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, enviar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch('{{ route('welcome.store_consulta') }}', {
                            method: 'POST',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: formData
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: data.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                form.reset();
                                form.classList.remove('was-validated');
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: data.message,
                                });
                            }
                        })
                        .catch(error => {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Hubo un problema al enviar la consulta.',
                            });
                        });
                    }
                });
            } else {
                form.classList.add('was-validated');
            }
        });
    </script>


    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/pages/nft-landing.init.js"></script>
</body>

</html>
