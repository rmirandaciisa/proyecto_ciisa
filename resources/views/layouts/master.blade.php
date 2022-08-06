<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestor De Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    
     <!--Header-->
    @section('header')
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="https://ciisa.cl/wp-content/uploads/2018/01/Logo-Ciisa-Sitio.png" width="220px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                        <a class="nav-link " href="/producto">Productos</a>
                        <a class="nav-link " href="/categoria">Categorias</a>
                        <a class="nav-link " href="/sucursal">Sucursales</a>
                        <a class="nav-link " href="/inicioSesion">Iniciar sesión</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Registrar Categorias, Sucursales y Productos
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item " href="categoria/create">Registrar Categoria</a></li>
                                <li><a class="dropdown-item" href="sucursal/create">Registrar Sucursal</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="producto/create">Registrar Producto</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    @show

    <!--Body-->

    <div class="container">
        @yield('content')
    </div>


    <!--Footer-->
    @section('footer')
        <!-- FOOTER -->
        <footer class="container justify-content-center align-items-center d-flex pt-5">
                <p>&copy; 2022–2022 Ciisa, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
    @show


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>