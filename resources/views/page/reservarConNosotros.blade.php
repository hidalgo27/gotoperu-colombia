@extends('layouts.page.app')
@section('content')

    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <img src="{{asset('images/FOTOGRAMA8.jpg')}}" alt="" loading="lazy">
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h2 class="h1 font-weight-light h2 mt-5">RESERVE CON NOSOTROS</h2>
                    {{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
                </div>
            </div>
        </div>
        <div class="position-absolute-bottom p-2">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <a href="" class="mx-2">
                        <i data-feather="facebook" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="" class="mx-2">
                        <i data-feather="twitter" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="" class="mx-2">
                        <i data-feather="youtube" class="text-white" stroke-width="1"></i>
                    </a>
                    <a href="" class="mx-2">
                        <i data-feather="instagram" class="text-white" stroke-width="1"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5 bg-white">
        <div class="container ">
            <div class="row mb-5">
                <div class="col">
                    <h1 class=" text-center text-g-green font-weight-bolder my-3">¿POR QUÉ ELEGIR <span class=" text-g-yellow">GOTOPERU?</span></h1>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-6 card border-0 ">
                    <div class="mx-3 p-3 border border-g-yellow shadow card-body ">
                        <div class="row">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/trustworthy.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder text-g-dark-light">RESERVA CON CONFIANZA</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>Planifique su viaje sin riesgos con GOTOPERU, disfrutando de plazos flexibles y tranquilidad. Nuestros depósitos comienzan desde el 20%. Aplican terminos y condiciones.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 card border-0">
                    <div class="mx-3 p-3 border border-g-green shadow card-body">
                        <div class="row row-eq-height">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/location.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder  text-g-dark-light">EXPERTOS EN VIAJES LOCALES DE CONFIANZA</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>GOTOPERU se estableció en 2010 y desde entonces ha estado creando recorridos inolvidables en Perú. Nuestros consultores de viajes tienen un amplio conocimiento de nuestro país y utilizarán su experiencia para diseñar su viaje perfecto a Perú.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class=" col-md-6 card border-0">
                    <div class="mx-3 p-3 border border-g-green shadow card-body">
                        <div class="row">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/review.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder  text-g-dark-light">EXCELENTES TESTIMONIOS</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>GOTOPERU apuesta por el mejor servicio, y esto se refleja año tras año cuando Tripadvisor nos premia con su Certificado de Excelencia. Nos enorgullecemos de los comentarios de nuestros clientes, el 97% de nuestros viajeros dicen que nos recomendarían a familiares y amigos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 card border-0">
                    <div class="mx-3 p-3 border border-g-yellow shadow card-body">
                        <div class="row row-eq-height">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/photographer.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder  text-g-dark-light">EXPERIENCIA SIN ESTRÉS</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>Manejamos todos los detalles para la planificación de unas vacaciones inolvidables en Perú. Nuestro agente estará ahí desde tu llegada y en cada punto de servicio, para que ahorres tiempo y esfuerzo. Puede mirar hacia adelante y disfrutar de su viaje a Perú sabiendo que GOTOPERU lo tiene todo a la mano.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class=" col-md-6 card border-0">
                    <div class="mx-3 p-3 border border-g-yellow shadow card-body">
                        <div class="row">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/appreciation.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder  text-g-dark-light">ESTÁS EN BUENAS MANOS</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>Sabemos que estamos aquí no solo para lo porgramado, sino también en situaciones imprevistas o a veces perturbadoras, como huelgas. Si surge algo inesperado durante su viaje a Perú nosotros nos encargaremos de ajustar su itinerario mientras lo mantendremos seguro e informado.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 card border-0">
                    <div class="mx-3 p-3 border border-g-green shadow card-body">
                        <div class="row row-eq-height">
                            <div class=" col-3 my-auto text-center">
                                <img src="{{asset('images/hotel.png')}}" width="65">
                            </div>
                            <div class=" col-9 my-auto ">
                                <h5 class=" font-weight-bolder  text-g-dark-light">HOTELES CUIDADOSAMENTE SELECCIONADOSS</h5>
                            </div>
                        </div>
                        <hr class="pt-2">
                        <div class="row">
                            <div class="col">
                                <p>Nuestros representantes de GOTOPERU seleccionan personalmente cada hotel incluido en su itinerario, asegurando que cada uno cumpla con nuestros altos estándares en cuanto a servicio, calidad, ubicación y carácter. Tener un lugar cómodo y amigable para descansar después de un día de exploración es muy importante y parte de tu experiencia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-2 banner-about">
        <div class=" container-fluid py-">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="text-g-green font-weight-bold my-5">NUESTRAS CERTIFICACIONES Y COMPROMISO</h4>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-8 my-auto lead">
                        <p>Estos son algunos reconocimientos obtenidos por GOTOPERU a lo largo de estos años, todos gracias al compromiso con la calidad, la sostenibilidad del ambiente y la responsabilidad social empresarial, que reflejan nuestro compromiso de crear experiencias de viaje inigualables y seguras para usted.</p>
                    </div>
                    <div class="col-lg-4 my-auto">  
                        <div class="row">
                            <div class="col-6">   
                                <img src="{{asset('images/trip-advisor-certificate-of-excellence-2021.png')}}" width="180">
                            </div>
                            <div class="col-6">  
                                <img src="{{asset('images/wttc-safetravels.png')}}" width="130">
                            </div>  
                        </div> 
                    </div>
                </div>
                <div class="row mt-5 mx-auto text-center pb-5">
                    <div class="col-lg-2 col-md-3 ">
                        <img src="{{asset('images/peru.png')}}"  width="120">
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <img src="{{asset('images/asta.png')}}" width="120">
                    </div>
                    <div class="col-lg-2 col-md-3 ">
                        <img src="{{asset('images/apavit.png')}}" width="120">
                    </div>
                    <div class="col-lg-2 col-md-3 ">
                        <img src="{{asset('images/expedia.png')}}" width="120">
                    </div>
                    <div class="col-lg-2 col-md-3 ">
                        <img src="{{asset('images/apotur.png')}}"  width="120">
                    </div>
                    <div class="col-lg-2 col-md-3 ">
                        <img src="{{asset('images/prom-peru.png')}}"  width="120">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="py-3 bg-light">
        <div class="container">
            <div class="row py-3">
                <div class=" pt-5">
                    <h4 class="text-g-green font-weight-bolder pb-3">¿QUÉ DICEN NUESTROS CLIENTES?</h4>
                    <p class="lead">Nuestros clientes satisfechos son nuestra mejor carta de presentación, te invitamos a ver algunos de los testimonios</p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-12 mb-4 mb-md-0 col-md">
                    <a class="venobox" data-gall="myGallery" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=K148e9ocQ-4&list=PLEye0Mu52p3l-qV5MDmiLO0QiWOlQrLTB&index=8">
                        <div class="position-relative">
                            <img src="{{asset('images/test_mex.jpg')}}" alt="Nuestros pasajeros" class="w-100" loading="lazy">
                            <div class="position-absolute-top bg-g-yellow text-white text-center font-weight-bold p-1">México</div>
                            <div class="position-absolute-bottom text-white p-3 icon-play">
                                <i class="fas fa-play fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 mb-4 mb-md-0 col-md">
                    <a class="venobox" data-gall="myGallery" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=kbvhgHWBtAk&list=PLEye0Mu52p3l-qV5MDmiLO0QiWOlQrLTB&index=2">
                        <div class="position-relative">
                            <img src="{{asset('images/test_col.jpg')}}" alt="Nuestros pasajeros" class="w-100" loading="lazy">
                            <div class="position-absolute-top bg-g-yellow text-white text-center font-weight-bold p-1">Colombia</div>
                            <div class="position-absolute-bottom text-white p-3 icon-play">
                                <i class="fas fa-play fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 mb-4 mb-md-0 col-md">
                    <a class="venobox" data-gall="myGallery" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=krIJlvw13ZU&list=PLEye0Mu52p3l-qV5MDmiLO0QiWOlQrLTB&index=10">
                        <div class="position-relative">
                            <img src="{{asset('images/test_chi.jpg')}}" alt="Nuestros pasajeros" class="w-100" loading="lazy">
                            <div class="position-absolute-top bg-g-yellow text-white text-center font-weight-bold p-1">Chile</div>
                            <div class="position-absolute-bottom text-white p-3 icon-play">
                                <i class="fas fa-play fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="consulte" class="pt-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-6 col-md-2">
                    <img src="{{asset('images/logo-gotoperu-black.png')}}" alt="logo" class="w-100" loading="lazy">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-7">
                    <h5 class="font-weight-bold text-center">CONSULTA DE VIAJES</h5>
                    <form-inquire></form-inquire>
                </div>
            </div>
        </div>
    </section>
@stop