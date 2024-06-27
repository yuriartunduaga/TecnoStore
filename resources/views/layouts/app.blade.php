<html>
    <head>
        <title>TecnoStore- @yield('titulo')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-rgb">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="/logo.png" alt="logo" width="100px">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.index')}}">Productos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('clientes.index')}}">Clientes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Facturas</a>
                      </li>

                    </form>
                  </div>
                </div>
              </nav>
              @yield('contenido')

        </div>


    </body>
</html>
