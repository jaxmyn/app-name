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
        body {
      font-family: Arial, sans-serif;
      background: url('https://img.freepik.com/vector-gratis/fondo-geometrico-abstracto-estructura-metalica_52683-59421.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {background-color: #f5f5f5;}
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
                  <li><a class="dropdown-item" href="#">Categoria</a></li>
                  <li><a class="dropdown-item" href="#">Lista de Productos</a></li>
                  <li><a class="dropdown-item" href="{{ route('productos') }}">Ingresar productos</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Contable
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Ingresos</a></li>
                  <li><a class="dropdown-item" href="#">Egresos</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                  <li><a class="dropdown-item" href="#">Lista de Clientes</a></li>
                  <li><a class="dropdown-item" href="#">Agregar cliente</a></li>
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

    <div class="container">
        <h2>Registro de Ventas</h2>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2022-03-01</td>
                    <td>Producto 1</td>
                    <td>10</td>
                    <td>100</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>2022-03-02</td>
                    <td>Producto 2</td>
                    <td>20</td>
                    <td>200</td>
                    <td>4000</td>
                </tr>
                <tr>
                    <td>2022-03-03</td>
                    <td>Producto 3</td>
                    <td>30</td>
                    <td>300</td>
                    <td>9000</td>
                </tr>
                <?php
                $ventas = [
                    ['fecha' => '2022-03-01', 'producto' => 'Producto 1', 'cantidad' => 10, 'precio' => 100],
                    ['fecha' => '2022-03-02', 'producto' => 'Producto 2', 'cantidad' => 20, 'precio' => 200],
                    ['fecha' => '2022-03-03', 'producto' => 'Producto 3', 'cantidad' => 30, 'precio' => 300],
                ];

                $totalVentas = 0;
                $gananciaTotal = 0;

                foreach ($ventas as $venta) {
                    $totalVenta = $venta['cantidad'] * $venta['precio'];
                    $totalVentas += $totalVenta;
                    $gananciaTotal += $totalVenta;  // Asumiendo que la ganancia es igual al total en este ejemplo

                    echo '<tr>';
                    echo '<td>' . $venta['fecha'] . '</td>';
                    echo '<td>' . $venta['producto'] . '</td>';
                    echo '<td>' . $venta['cantidad'] . '</td>';
                    echo '<td>' . $venta['precio'] . '</td>';
                    echo '<td>' . $totalVenta . '</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
        <tfoot>
            <tr id="total-row">
                <td colspan="4">Total de Ventas</td>
                <td><?php echo $totalVentas; ?></td>
            </tr>
            <tr id="total-row">
                <td colspan="4">Ganancia Total</td>
                <td><?php echo $gananciaTotal; ?></td>
            </tr>
        </tfoot>
        </table>
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
