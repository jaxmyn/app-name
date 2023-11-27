<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<style>
        /* Estilos generales */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('https://img.freepik.com/vector-gratis/fondo-geometrico-abstracto-estructura-metalica_52683-59421.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
        }

        /* Estilos para el contenedor de productos */
        .product-container {
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
        }

        /* Estilos para los productos */
        .product {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 200px;
            margin: 10px;
            padding: 10px;
            text-align: center;
        }

        .product:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .product img {
            width: 100%;
            height: auto;
        }

        .product h2 {
            margin: 10px 0;
        }

        .product p {
            margin: 10px 0;
        }

        .product a {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
        }

        .product a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    configuracion
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Usuarios</a></li>
                  <li><a class="dropdown-item" href="#">Agregar Usuario</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('categorias') }}">Categoria</a></li>
                  <li><a class="dropdown-item" href="#">Lista de Productos</a></li>
                  <li><a class="dropdown-item" href="{{ route('productos') }}">Ingresar productos</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Contable
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('ingresos') }}">Ingresos y Egresos</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('ingresos') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ventas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Reporte de Ventas</a></li>
                  <li><a class="dropdown-item" href="{{ route('ventas') }}">Vender</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Clientes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('addclientes') }}">Agregar cliente</a></li>
                </ul>
              </li>

            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <a class="btn btn-outline-success" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('SALIR') }}
            </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        </div>
        </div>
    </nav>
    </section>

<div class="product-container">
    <div class="product">
        <img src="https://falabella.scene7.com/is/image/FalabellaPE/19786913_01?wid=800&hei=800&qlt=70" alt="Producto 1">
        <h6>Xiaomi TV A Pro 50" LED UHD 4K SMART GOOGLE TV</h6>
        <a href="#">Ver más</a>
    </div>

    <div class="product">
        <img src="https://m.media-amazon.com/images/I/51-5MKQHd-L._AC_.jpg" alt="Producto 2"><br><br>
        <h6>Reloj inteligente</h6>
        <a href="#">Ver más</a>
    </div>

    <div class="product">
        <img src="https://m.media-amazon.com/images/I/414xu6mz-YL._AC_.jpg" alt="Producto 3"><br><br><br>
        <h6>Laptop ASUS ROG Strix G15 de 15,6", AMD</h6>
        <a href="#">Ver más</a>
    </div>
    <div class="product">
        <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_123322210_3645564_1?wid=800&hei=800&qlt=70" alt="Producto 3">
        <h6>Proyector Portatil Android 11 Calidad Profesional Led 4k</h6>
        <a href="#">Ver más</a>
    </div>
    <div class="product">
        <img src="https://m.media-amazon.com/images/I/41cr3dKlP2L._AC_.jpg" alt="Producto 3"><br><br>
        <h6>Proyector WiFi, Mini proyector XRPrime de 7500 lúmenes</h6>
        <a href="#">Ver más</a>
    </div>
    <div class="product">
        <img src="https://m.media-amazon.com/images/I/31nXDsoMw5L._AC_.jpg" alt="Producto 3">
        <h6>Enrutador Gigabit de doble banda ASUS</h6>
        <a href="#">Ver más</a>
    </div>
</div>
<div class="product-container">
    <div class="product">
        <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_119551157_2387464_1?wid=800&hei=800&qlt=70" alt="Producto 1">
        <h6>Consola de videojuegos inalámbrica con 10000 juegos gratuitos</h6>
        <a href="#">Ver más</a>
    </div>

    <div class="product">
        <img src="https://coolboxpe.vtexassets.com/arquivos/ids/303292-1200-auto?v=638291737568070000&width=1200&height=auto&aspect=true" alt="Producto 2">
        <h6>Control de asistencia CC Group, cámara 2MP, biométrico, reconocimiento facial</h6>
        <a href="#">Ver más</a>
    </div>

    <div class="product">
        <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_122134520_3244234_1?wid=800&hei=800&qlt=70" alt="Producto 3">
        <h6>Cargador Inalámbrico Lámpara Luces Rgb Parlante Bluetooth</h6>
        <a href="#">Ver más</a>
    </div>
    <div class="product">
        <img src="https://m.media-amazon.com/images/I/31DmztrRAfL._AC_.jpg" alt="Producto 3">
        <h6>Pioneer DMH-WT8600NEX de 10.1 pulgadas</h6>
        <a href="#">Ver más</a>
    </div>
    <div class="product">
        <img src="https://m.media-amazon.com/images/I/21LytH6CyAL.jpg" alt="Producto 3">
        <h6>Cable USB-C plano de alimentación rápida</h6>
        <a href="#">Ver más</a>
    </div>
    <div class="product">
        <img src="https://images.samsung.com/is/image/samsung/pe-giga-party-audio-mx-t70-mx-t70-pe-frontblack-221276110?$730_584_PNG$" alt="Producto 3">
        <h6>Torres de Sonido MX-T70</h6>
        <a href="#">Ver más</a>
    </div>
</div>

</body>
</html>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
