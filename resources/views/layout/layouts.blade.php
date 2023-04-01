<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página</title>


    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="{{ asset('css/estiloYo.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

    <script src="{{ asset('js/mdb.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" ">
        <div class="d-flex justify-content-center align-items-center">
            <button class="navbar-toggler bg-light m-3" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                aria-label="Toggle navigation"><i class="bi bi-list"></i></button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    @guest
                            <li class="nav-item active">
                                <a class="nav-link text-dark fw-bold" aria-current="page"
                                    href="http://127.0.0.1:8000/">
                                    <i class="fas fa-sharp fa-solid fa-house-user m-2"></i>
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-bold" aria-current="page"
                                    href="http://127.0.0.1:8000/login">
                                    <i class="fas fa-solid fa-user m-2"></i>Inicio de sesión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-bold" aria-current="page"
                                    href="http://127.0.0.1:8000/formulario">
                                    <i class="fas fa-regular fa-id-card m-2"></i>Crear cuenta</a>
                            </li>
                    @endguest

                    @auth
                            <ul class="d-flex align-items-center">
                                <li class="nav-item ">
                                    <a style="color:#F20746;" class="nav-link fw-bold">
                                      <i style="color: #000;" class="fas fa-solid fa-user"></i>
                                      {{ auth()->user()->username }}
                                    </a>
                                </li>

                            </ul>
                            <div class="d-flex ">
                                <ul class=" navbar-nav ml-auto derecha">


                                    <li class="nav-item">
                                        <a href="{{ route('post.create') }}" class="nav-link  botonesAuth ">
                                            <i class="fas fa-plus-circle m-1"></i>Añadir dulces
                                        </a>
                                    </li>

                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn botonesAuth1  fw-bold">
                                          Cerrar sesión
                                        </button>
                                    </form>
                            </div>
                        </ul>
                @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://img2.rtve.es/i/?w=1600&i=1628606892247.jpg');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Dulceria UTA</h1>
          <h4 class="mb-3">Creadores: Equipo 1</h4>
          <a class="btn btn-outline-light btn-lg" href="#!" role="button"
          >“Preocúpate por la calidad de tus productos, mucha gente no está preparada para la excelencia y sorprenderás”</a
          >
        </div>
      </div>
    </div>
  </div>
      </header>

      <div class="container mt-5 mb-5">
        <h1>@yield('titulo')</h1>
        <hr class="hr">
        @yield('contenido')
      </div>



      <footer>
        <div class="flex container ">
            <div class="footer-acerca">
                <h5>Acerca de Dulcerias UTA</h5>
                <p>Esto es solo una tarea para la universidad IDGS del cuatrimestre 8-A-II, todo esto es con fines educativos
                    y de aprendizaje. los productos seleccionados vistos en este página es mero gusto de los creadores de esta misma página
                    somos dulceros de corazón y nunca de ocasión.</p>
            </div>
      
            <div class="footer-links">
                <h5>Links rapidos</h5>
                <ul>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Testimonios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
      
            <div class="footer-suscribete">
                <h5 class="sigueme">Sigueme</h5>
                <ul>
                    <li><a href="https://twitter.com/m07636150" target="_blank"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="https://www.instagram.com/ulises_fc/" target="_blank"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="https://github.com/Rck23" target="_blank"><span class="fab fa-github"></span></a></li>
                    <li><a href="https://www.linkedin.com/in/ulises-mart%C3%ADnez-olivares-09276b258/" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
                </ul>
            </div>
        </div>
      
        <small>
            Copyright &copy; 2023 Seguridad en el desarrollo de aplicaciones | Universidad Tecnológica de Aguascalientes <span class="fa fa-heart"></span> Realizado por <a href="https://github.com/Rck23">Equipo 1</a>
        </small>
      </footer>
      
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      
      <script type="text/javascript" src="{!! asset('js/animacion.js') !!}" async></script>

</body>
</html>
