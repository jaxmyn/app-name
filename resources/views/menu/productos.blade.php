<!DOCTYPE html>
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
     body {
      font-family: Arial, sans-serif;
      background: url('https://img.freepik.com/vector-gratis/fondo-geometrico-abstracto-estructura-metalica_52683-59421.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .form-register {
      width: 40%;
      margin: 0 auto;
      margin-top: 50px;
    }

    .form-register label {
      display: block;
      margin-top: 20px;
    }

    .form-register input[type="text"],
    .form-register input[type="email"],
    .form-register input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .form-register button[type="submit"] {
      width: 30%;
      padding: 10px;
      margin-top: 20px;
      background-color: #900C3F;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .form-register button[type="submit"]:hover {
      background-color: #e84227;
    }

    .btn-delete {
      width: 30%;
      padding: 10px;
      margin-top: 20px;
      background-color: #900C3F;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .btn-delete:hover {
      background-color: #e84227;
    }
  </style>
</head>

<body>
    <<section>
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
                      <li><a class="dropdown-item" href="#">Vender</a></li>
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

  <section class="regi_prod">
    <div class="form-register">
      <h1>REGISTRO DE PRODUCTOS</h1>
      <form action="/submit_form" method="post">

        <label for="fname">Nombre del producto:</label>
        <input type="text" id="fname1" name="fname">

        <label for="lname">Descripcion:</label>
        <input type="text" id="fname" name="fname">

        <label for="email">Precio:</label>
        <input type="number" id="precio" name="precio" step="1" required>

        <label for="pwd">Categoria:</label>
        <select id="categoria" name="categoria">
          <option value="electronica">Electrónica</option>
          <option value="ropa">Ropa</option>
          <option value="hogar">Hogar</option>
          <option value="otros">Otros</option>
        </select>
        <br>

        <button type="submit">Registrar producto</button>
        <button class="btn-delete" id="delete-btn">Eliminar contenido</button>
      </form>
    </div>

    <script>
      function clearInput() {
        document.getElementById("fname1").value = "";
        document.getElementById("fname").value = "";
        document.getElementById("precio").value = "";
      }

      document.getElementById("delete-btn").addEventListener("click", clearInput);

      document.getElementById('delete').onclick = function () {
        window.location.href = "http://localhost:8080/app-name/public/home";
      };
    </script>
  </section>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>
