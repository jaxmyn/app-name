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

form {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    box-sizing: border-box;
}

.category {
    text-align: center;
    margin: 20px;
}

img {
    width: 150px;
    height: 150px;
    object-fit: cover;
}

h2 {
    color: #333;
    margin-top: 10px;
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

        <form>
            <div class="category">
                <img src="https://tecstore.pe/media/magefan_blog/laptop_1_1_.jpg" alt="Alimentos">
                <h2>laptos</h2>
            </div>

            <div class="category">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGCBUTExcVExMXExcXGRcXFxkYFxcZFxcXGhoYGRcXGRcaHysjGhwoHxgZJDUkKCwuMjIyGSE3PDcwOyszNC4BCwsLDw4PHRERHTEoISkxMjExMTMxMTExMTMxMTExMzExMTExMTExMTExMTExMTExMTExLjExMTExMTExMTExMf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xABGEAABAwIDBAcECAQDBwUAAAABAAIRAyEEEjEiQVFhBQYTMnGBkRRC0fAHI1JiobHB4XKCkvFTotIVJDNDY+LyRIOTssL/xAAaAQACAwEBAAAAAAAAAAAAAAAAAQIDBAUG/8QALxEAAgIBBAIBAgMIAwAAAAAAAAECEQMEEhMhMUFRInEFYZEUIzJCgaGxwVLR4f/aAAwDAQACEQMRAD8A6TqT16wz8KwVqzadRjA14cQDIETdcj9JvXZuKaaOGu0nbebSBub8V5pk4qWlmGi6MIJSuuzbGKu6G4ZsOly9U+jD6QGMLcLiXQ3u0qjjYcGOO4cD5LyqswlVy2FCd1ta6FN1HbXX9z67aQRa4KzOlehadYEFouvE+of0j1sEG0qwNegLATtsH3SdRyPqvZer3WvCYxoNGswu3scctQeLDdZ0p43uiULdB3E5LH/R+4OzUXFh5G3or/QfU6qHA16ssF8o1dyJ4LuU2o8NEuIAGpJgK563M1tL3q8rjtsVrYECwC8f+mHrRmrjDUnWpXeQffPu+Q/E8lt9ffpEZSY6lgnCpVMg1BdlPiQdHu4RYb+C8bYxz3EudJJJJNySbkk7ypabHKMt78+gwY5xlurv0aeH6ee07Y7Tx1XuP0ZY7tsBTfGW72xwh5Xz/UwR3QV7T9B1QnAOabFlV49Q136q3VbnDsu1Usjhtn4s63rE2cO8cl5Dh3f7vUbwLx6Er2TpZs0XjkvDsfihSFZhMHM6PO/6qf4e/of3Lfw9/u5fc4s97zVtrrLPe+Sp2VFOORWyGPIk2dR1A6cOCxbHkns37FQfcJ73i0wfI8V9B03ggEGQbzx4FfLGay9r+hvrB7RhvZ3malAADi6n7p/l7vhlWbV47W9FOpgmtyOn6zdGCvT+8Lg8CFF1ReSxzTq0wfRbhEqngMKKbnx7xB/CFmWS8bg/6GdZP3bi/wChZr90+CznustDE913gsnNZGJdDxK0KreHwA1cLqPo8gv8itIp5JtdIU5NOjnemMFTe4tLRovJOuRayvkYSI5r1/HO+sPgvFeuVN4xVVxY6JscpiI4roaaTUTpaaTjHySYTEtDdoiVq9BdIOouzUahad8Gx5OabHzXFMxElXcNWI0Wu4z6NynDIqPbegeuDKkMrxTd9r3Hf6fO3NdUHLwShiDC3er/AFrrYQgO+tpb2E3aN5Ydx5aeGqw59D7x/oYNR+Hp/Vj/AE/6PUukejmVmkOaDPJeV9a+rFTCONSjOXUtG7wXqXQvSlLFUxUovDmn1B3gjcVPjsK2q0tcNVlwaieGW2Xj4MmDUTwyp+PaPGsHiWYqlldGcLnOl29mS02K6Prf0Q7A4gVWCGONxuErA66Xc17dHCV2OS4bkdbkWxyj4OacSlRkQsVM5+1l7FYSDCt9GdHZtVs9J4QEyp+iaYAhb1jinZ0lhgnZzXSmByFZNSku76YwgcFy+Iw8FV5cKl2irNgUu0Y5YhrSDIsRoRqtMYaVZo9FuduWf9mbMq0kmV8P1gxlMQzF12jh2r49CVFjOmsTVEVa9WqOD3ucPQlaTuhH8FTxPRjm6gpS08l4Y3pZx7RlOxLuP4KEvPEq5VwxG5V3Ulmnjn7ZlyQn7bHUcW9u8+d17X9AeM7TD1wYltUH1Y2/4Lw8sW51P6y1ujqhfRgh0B7Hd1wGngeag9zi4t9Mhum47W+j6T6YqhtJxJgBpXzT1m6QFWs8t0zGOcWldL1n+kSrjqfZOb2LD3g0kl3Im1uS46s2kBM/mrcUXCDSa78l2OLjjaUl357IcPhnP7qkfh3t1B/NV24hze6SFZo9KPGsO8QlGePw7CEsNVJtP59Ax/Fb/UjpY4TEsrNNgYePtMNnD53gLIb0lTd3mel1p9FU8O9058sbjb81qhsl0mmaYQhLpST/AC8M+j8HiG1GNewhzXAOaRoQRIKlXBfRl020l2GLgQ2TSM6j3m+Wo8TwXerl5sbxzcTnZsTxzcWVuk3xReeDT+S5yniwKYM3W31nfGFrHgxy8rp9IuNibLXo8W+Lf5mzRYt8H9z0DovGjtGidTHqF0oXk+G6RLXNcDdpDh5GV6phqgc1rm3DgCPAiQoa3FsaZVrcXG0/k53p6pkrN4FLVZTMZ2tObiApeueDLmB7dWrnMB0i2pUYx+rbhW4o78aa9eS/DDfjTj68nFfS1hqVKuzs2hpLSXR5QuRwmIXZfSZ0fUqVu0AzNDYXBFpadCCr7lCmScp45JmuMdNpUtLFHjKwWvhSNxBClHUfJbDWP+Y7Lqv1lfgq4ey7TAqMmzm/6huP6L3To3Fsr0mVKbszXtDmnkePA7iF8vUq97r2D6D+knuZVoOnK0h7CeDrPaOU5T5lZtXBTjyLyv8ABl1SjkjyLyv8HUdfuixXwzrXAK8Q6Yd9VTae82QfKy+jsQzM1zTvBHqF819YHfXPHB7h6FGjyXCUX6/2PSZLxyi/X+zPQo8yFdaLdx6DiGyosOIKcHykC3nRLFZshYGPwt1vsdZX8D1ZfiGh8tY06E3J8lGU4xVyZCU4wVyZyGCwl1t4amAunw/U9je9VJ8AAPxV6n1cw41L3fzR+SplqYFT1UF4v9DmKeVFXCtcNAutp9CYUf8ALnxc74qdmAw40pN/H0UHqY+kyD1cfSZ5f0n0KLkBc5i+jy3UL3gYWh/hM/plJ7Jh/wDBp/0N+ChLURfmLK56mMvMT54fh1H7OToCfJfR1OhRb3aVNvgxo/RSNNMaMYP5R8FS5p/ysyyaf8p84U6CbWohfR2SlupM/ob8EnZ0v8Kn/Q34I3qq2haqqPmh7EwtC+mjRpf4NP8Aob8EgoUQZ7GmOeRnwVLin6ZU8dnzJZOB5r6Vq9H4Z3ew9F2utNhuddyru6BwR1weHP8A7TPgoqH3I7GeA9CdJ1MPVZVpuIcxwcL2tuI3gr6S6o9YqOOoCpScJgZ2TtMdvaRw4Heso9Wejz/6Oh/8bfnekp9VsC0hzMO2m7jTc9h4atcLIlGMlTv9P/QcW1TE+kzp5lGgaQOapUgQLw2Zc53DSB4rzFmNnRpXqFXqzg3a03X353/qVXq9TMG4Gzxa0PdbmFr0+XHhht7N+nzY8Ma7/Q4alQe4S1w8F6N9HfSLnUuxqWdT7v3mHSPA29Fhu+j2gDNPEV2HxYf0CvdEdWalCq17cY52Xc5gMjeJB0KefJjzY2r+3QZ82LNBrw/R29amHAg6FcN1k6vOpuNSiL8Pgu1biW7zCHVGOEEhc/DknifXgwYc08MrR4zT6dLXlldhF94TsRgcLiLjKDyXo/TfVvDYgbbWk8d/quQx/wBHkEmjVLeAN11IaqEvyOrDVYsi76OWqdTGO7tSFGzqSJvUt5LaqdVMfTMMeHDxKWl1X6SeYLg0eJ+CneLz1/Ybjh82jOZ1ew1Hae7MRxK7f6L253VKjGZabWhjTEBxJBdHIQPVV+hPo52g7FVDU+6LA+K9AweFZSY1lNoa1ogACAAseq1MNrhD2Y9TqMag4Y+7HYuqGMc5xgNa5xPAASV8sYyuaj3v+05zvUkr2j6aOsooYc4am762sIdBuyl7xP8AFoOUrwzOVTgW2Nv2ZsX0q/kWSlS9oEK7r5Luvk7ulVVgOWVRqK7Seusdo0uj6ed4b6+C7B2NDQGiwaPy4cwuV6DMS7yVl+Kk6xpcE/yu08lnyR3sqyY93k3h0iNJH6SdPIpfbfPw1P8A3D8Vzvb8+Ns27323G43+Kea/Od5Nj4OseGv48FHiRDhib3tfP4X0I+6d43FHtfhwvcDkeXA7vwWF7VHK5sSRtESWw4XDhePyQMRwvaBaZEXaSw7xpa8WslxIXCje9r5+pgyNx4OHH8krcTOl99rzzjjuI38FhOxUan/NBIGp2mwCBv5cUjsUN5B8Aw3MAuADubTHrwRxIXEjd9q+YtH+ki3IjVBxfj6GeMeMXB3xosNuI4WO61g6+8OjLmBvoJsj2gRO4XEyLd4C77WzAbzyCXGg4kjc9q4z6RyJj0JGo5JRivWftDXSLHUOGvO5WF7Q0altrH/hj7sxJ1a5uz6pwxJI56RIO1Hd2WXIczTQSjjRHiRt+2g6EaSIvbXTh3gdB4pfaeZjnAtpN+ThcwCsT2k67REz75mCHA3ADjDiCdB5Qmtq+7x2bZLu2mQJLi4yxpzGw8kuNBxI3G4rmNOM7tfDMw66cFJ7T4nf5SHb+TjrrGixGYs67Ud6QHu0LHyAGCTtOBJsIS9tEAwPduP42WL3fw7RCXGhPEjbGK3G2658WT6xrfkl9s35udr65XQeevjyWE3GNgEObcZxlcwTZjyRrG+Xb081zoDNiBBdpFRsjK3ZbYX1/BLiRHiRvNxJ56xe3vOHw4lIMXa53f8A5ab8DY8T4LFFe86b7ti0sdq47Iub6lIcVAjMBAPvMbaKg92S0WPNLiQuJHQDF33m8b/tR6+pSe121j/xcfmPULFGIk8d/v6F7DuFhfdcpO2IGnu72RbK/WTbTu70uJEeFG97VexnUf8A1EW33/dOGL+fU+dhu9Vhe13gmL3lzBbO0XAJMfdCQYkxpfL942yE3kAAX7qXELhR0AxfzrukjnqOKd7X8PPT8911z5xN7mLxchts7RcNuBbRO9rtPKb7AiHO1N2jS2pS4UDwI6FuM+fipWY8jf6/rw/Bc4MQd3OIsI2W2J7oub709mJmIMg6ZbjU6TyHeKi8CZB6dHTs6T4gfiE7F4wupu7J7WPIOQvaXNB3EgESPNcu3FefIX3ZjH2jpc2UtHFXgkX5zca33m/4KD0y8lb0qPJOvXRGJw9U1MVUbWNVxPaNJIceBBAy23aRouVBXq/0tgdjTeRLWvynlmBg/hHmvMYpO0cWnmnNeO1fwE8fhJr7PoqZkitewj7bUKnZk+CvjyfBv03q7QqLLa5XMDtPa3iV3bO6uzqKD8lK5i07t/iVTGLHEb5GYae+P+JodQdTusjpGvlZbkOUaGbi0c1mtxm/PwPfvOkn63vbo90Kmxz6NZuK4OvxBOoFnWebRY7h4oNY8OQkHXvBu0zQ3i/MrK9oB3tMbswI2TBbBe7ZvYRd105joGhgA6giWtMkEim3SbmZJsEWR3GizEjc5p4AHUd4Nhr5J7wFrkcApH1OIJ1MkG4bfMXOp2IaYJnkFlnE3u7/ADCTBs4A1TDi03tsgJ9J0bssEXDDAIOUEfVCZBgDNxJSsVmg3EgGM3DuuaCYtIa2rrlcDEQAJUnaE2md3vwNWm8HYJAk6krM9oGhfyg1LDVrg4mt3ZgkgX0SduDvBMTfsybtDhI2ry05W/uhsjZp9odYM8MpnQOAI7LiDDVI2rHEQd2tnaglgl+V9zuCyw4A6DXgye9uPZXfDrncgVhoC0GIsWARDmmDLSGS251J9QWDZonFWjOAYIs+Pdc05frhaWXdx805mKBIuHToA4Xbma6B9YYAzm+pVH2y/fB3wHgSJa6YFezIcYbCO0cREuNrk9oZADgHGHOtsNhu/wBJQi6TawnZ1ywCMlRsmKRys2Rab+gMtNz3ucA8My5ZzNftAkObADm5WiNI3rMeSTJadQ4lzXWuCHmaJ2oebTb1WVicc6nVcGmJLZ01DQNABHhA1WLX5ZY8VwdO0XYIxnKmdWcM+INSmbRcEA7Jbva60EW5XnfKxlUGQ6n5uN9oOuG0hIBBtI1WOxzSHnQjtMo7SoWjJ2QEumYzOPqq/S+MNHLkc67qgOYzZj8o/X8Fz55dZCLnuTS/IvWHHJ1ZuVar2nI8gy1pkOeQZzUxEvbLhIO4WGpNme1tdeWuvmN2vvLXEEdo7MbvtEW81j4LpDPDnOvAbqBo8GGS5u1e99I4wbLcQSDtB0CNmXRsnZAFR8k8YPx6mlnLJijOXlmXJBRk0vRoNeQDsxAvsmJDHDUUtp00xvgT4KQ4i8FxG1vLtS54E7bczznFt35Zbte5EEizO7tVLNJo311nf5l7MSAReLgWc0b6Wy3bZtXuefkdBBovsxIMQ5p0OrHQYpH/ABTLvyTnOMWbEA6NBLTlq22aRl2nhPrmsxJjvGwAs5xjY7oArOknjB+L3kydl1iR3HGL1NlpNJ063M7+e0Co1e2Id7w2vv8A226bLZff50UDMUMty3S0FjoPZiwmo4uceMGOaoMfBGguBYNGppbDJpt2uf8AYozEkts6dmJa7MLsIygCq6TeCYPnvdBRtCsQ7eId96Ae0doQ1oc63H13x08QYtBgSYvH1bbuy5yXX0myzS6HSW5Ycb5Yy7dQw1xpNk882/fqUbXzNgHNAGhz5dmmJjNVl3lxPNFCo1jiQHQSNZ2iMw+sdd+ZxPu93L+zjibS7gDtWnYJlxfAA2tAFlHEQYmLzGaIvUMvbmZJtYZd3o7tco+zO87M2ptzOMMtfTMf0SodGx2075BtN4IlreTWtt873YfFSRBmeBFxtOMBoMN03/vjNrSc0TJmYkO2nmS7K6G2+1+7qWIkgTOls0ycrf8AqGG7XD93tDaXuvlHtcBWG9rQ4fykO/ReJFe6dKDtMNWb9qnUHq0heGELl6yNNHM1sKkhJSJYQsZiOkDlqdBjac77LfxKx2lavRR+rqeDf1Xo0z0eN2yfH4nM0iVnsxJ4k6jvO1dqO97287kyrVWe6pfju9RpoVRkyJMNRkUaNT2v7xjxMxESAamo0HqnU6o1EDQmGggGIzWY6QPG5WSK5G87jNxynd4Jza3MbtYOniTby1VfKjLyI1e3OhJHJziNWyWkl7bGxNuSe2rNxeZiA3NtN0kMdBMWvZqyxVI0toN4sDOWwGmpPFKKoP3tNYk35lxzH8k+QlyGwa51kjfq8NIBadC5uy28faP4DcRxfvHv3uSJE1u8Z13AeCzGVD+WjbaQHWp6CIA+TIKx12h5vm8GN0uO/h+Ut9jU0y+3ECIkaRAcBu0B7aQJFzv/ABUoxU6OJvNnOgw4HdWs0SbcvTNbVNtTeO9UgwTaZ7onX+6d2hI3m0nMDe3eM0zsjLYf2RuHuSNHtnR7zrXntYOyRmNnR3RDd9vAhqX035pc0a5pzumhrt28eJvnGqJ90XnaDOPedmpiTtW8fVGVQBYtBAn3J01s8S47uHqUbxbi8KjRuYI49iIOX3rNJccpgDhqNVidLVvrn/xWkyeV5d+a0u3M2cRB3OJiTyqmSZ+QLHtT9do241SdBLROYTabi35Z9Ri5YU3XY7a8Mpf7crEyXA2IMsZBzFrnSIuSWtvrZFXpqo5pa7KcwcC6Bmhz+0dpbvclbNYbw3hdtP74AGZjTN9Z/ZS9pPdpm43M70tMCKv+b5Ob9kl/zY+SY/oSqeyMOdqRYumYJgBtQWs0zl3rQcSdQTq3R5ic4ytz03yDIkz++f2hywG7IBAhpgCHWEtcOMmf3XtWzo0Xj/liNp1h3HA89y3Yo7IKHwS335LzaoBHdF7AGmNS0lrZDDm2pnn4S6jXNocbAd1zjEBhhobWO1sn5lVKdZ24u3DZLzHcsMr3SfLjzSOqGDM2BuQTAymQC+kbnf8ABWWFmg57oiHWBb3XmNlwgSx4Mxc8/VtpktaNqBssES7utzUmydvjv9aBe0H3bEiIpbJzO2RLWmTPlPHR9GrcZTwGydBLDADa1zrcDjulG4LLrK4tlcNB3XN4Uzlbkqja1kxefV73ui+awImHmNl1hLagJMQTz9aXaOjV3d/6pjZHdzNeCbXTC9oJnI2JGlMZZz2EtpuBPGbeOjsLL7awBgEN2joWbO2ZaA003ZtrWEj6hgZpAAnbDiG7LNqXseC4xcZreOldtU2u4ARveQ0ZmcDUaXeX7QteBplBjdkBBy6kNLHXjgnYNmm2sTYGY3C8QXglwY5wJ4DJwHJIyoJAGpvaGuPc2nBppuIP8J+NGpU+3pPv+LhmPasNxmFg/fad6iscu8tiY2i02YTMF7Q20jcjcFl51SLnhq4BrnQH652NsL+9p6qalWJIglwJGhc4G9OwyvfDd6zaVSTDTN9WkXu4A/VvaQL3lvM8BPhyXOEjh3mn7joGenpI+1O/kJWSXfR1FJ2ZhHFpHqF4kQvZsJUuvKOnsP2WIqt+y90fwkkt/AhY9ZC0mYfxCH8L+5nwhOhC5+05tG00rV6EMtqt4sn0P7rIYVp9AVQKrQdHSw/zCB+MLtxZ3MUvqRmYt8FZtV9z8/otPpqkWOI4EhY9bVc3PJqVGTWSak0Stq/P66J4q/M/uqgclDlSsrMayMuB/wA+c6x5p3bHifXn471SDk4VD8k/FSWQkshdbU8D5D4GyeH8uWg3jTuaqiHpc/zA+GqkshPkNHtOQ/pG4g/Y0Ts41geYHO5sLcFnipyHoPhonCrHz/byU1lLFlNBtfnEXsY4EOgPEnkniseJ9XGCZ4OMkrOGI5nzJ4a965Ts/wA2O/wN1JZETWRGgKh4G2liSNDAlh2ufyIyQLEAeTRuIES0Xte6pNfy9AOG7Z1T21Y0MbuHkLix3lLksSyWX2VjuMbtl2lxYAP3zrCcKriNHG0WL5iBIFj9m5/ss/t552jUnhYSTw1TgRw9AOcRLNON1JZCfL8F3ON+UbtGjeYiQ0jx/VStqmRBdw2S4xcbIhzgdeH7Z7K/P0McCWgBwtzhKavKbaxNoGhLDcRcymsiGsiReL7SY03gcBoXUu9s3Mp3aAb2g6bOQQdoRsubc2vFvHSgK0aQN1oF7i0Eazr8hwxR3E8gC628gbZ46qSmhqaNFld02LuGyXneNkZahnVHbmJMmB946R3S6mdoRc/tGd2s6jdwm0DQlhuN5/ZHagbgOYa0cQC3ZbA5p8i9D5Pgvh7bzlEW0p2MOgAFrbmONvymbVJ0LrGIbmsJMtGV5BN+HoBbNZXO48gA48btEVNDOsI7XjJHMTaxsSw3EXMoUwU0i6agGsDQyQ23dg7TWkm3H0AUgqmIvFxBzFujv42k7x8Nc8VdwdygHQwRADX3m25KaomTA3zAkXB3hpLhPFNTBTL9Ktex3h0jmQQSabgbzvake8b4mN+QO0IuSGOsRx+IovqE63jjLmzF5zBwJMSLp3b8D6ElsTskhpcNDEZQnvHvNCpXO+Tf3pg7QI77Xtynk7X8LvRb2i4jTdlGlo2I0g6hc+aguIAPCwOl5ILCIIECOS0qFc6yTMGSSSQbg3cYtFp3KzHK2X6Z7ps6nAVZIXB9dR/vdTmKZPj2bV2HQ1SSFxfW9+bF1eTg3+kBv6KOp/gK/wAQ6gvuZMITs5QsO1HIpGg0qek+CCNRdVGuUgct8ZHRhM1+mmisztW62FQbw7j4FcvXZHktnD1y0yDyPAjgVBjKAfJAglZ9Ri3/AFR8j1EeWO5eTHQpH0HDUFRLnNNeUcppryORKRCLCxUIQmOxZSz82TUIsLHh6XMo0qe4luY+fm3wTg8/P7blEkT3BuZNn43+fFDX8Pn0GihlEo3j3lntT8k+mtgl7T5gc+RgKtKXMnuZLeyyK3l6i3DUQEva893HUeZMaKpKXMnvYcjLRqch6DnfSwundr5eUcLaCGlUy5E/Nk+RhyMudtzJtx3DzMRCUP5D0HODOWwvxVPMgO+bfqnyD5C92vPyndqQASYA8EB5GhjhGzytpAIi6pZz8z6oD/n+yfIPkL/ab/QwDzsYuQZvKH1ZPHlrfQi+aSbHVUc+9BqTr88NUco+QvU62m1Fwdd+4xNzu0WlTfdYuDcS4fEjmRbcbrRw7low5LZu0c/Z1vVYSTwC4TpKt2lV7/tuc7+ok/qu2wdTssHWqaHKWt8XbI/EhcGrs7ukL8RlclEbCE5Cz7TnUTtKeCoQU9pVyZpjInaVI0qBpUjSrEy+EiSo6yxK2q1K7rLKqarHq5XSMurldDJRKRCwmEXMlzpqEWFkgcllRJZRZJSJEKPMlzJ2G4ehMzJcydjsdKJTcyMyLCx0olJKJRYWKiUSiU7HYIRKQuSFYsoTM6XMiw3DkJuZGZFoW5DkJuZKHIsdot9G96OIIHjFlu9F4R1Rwa0ST8knksDB1crgQASNJV//AGnUyuaDlDrOgQSOE6xyW3T0lbOjps0cce/Jrda+lGFjcNSOZjDLnjR7+X3RfxXMpXFKArW3J2yjJN5JuTEhCdCEqI0ICngqMJQVFMaZMCpGuUAKeCrFItjIMQ6yznq5WKpvWTUO2Zs7tjEJUiymcEIQkAIQhAAhCEACEIQAIQhAAhCEACJQhABKEIQAIQhAAhCVMATmpqc1NDRLTUyipqVbcS+k0Q8CJ4CanBXJEkLCE5CsonRXBTgVGCnArKpFKZICnSowUsqaZYmI9VnhWiVC5qpyRsryKyGEkKQsSZVmcWU7RiE7KjKltFQxCflRlRQUMQn5UZUUFDEJ+VGVFCoYhPypMqKChqE7KjKlQUNQnQlyp0FDEJ2VLlRQUMSp0IhFBQ1CdlRlRQ6EATmhKGpwarIxZJIfTUgTGBSha8a6L4LoAlCEBXIkhyEkoUiVlUFLKELCjMhZTpQhTRYglNKEIYMEkIQokQhJCEKLSEEIyoQikKgyoyoQntQUGVGVCEbUFBlRlQhG1DpBlRlQhG1CoMqMqEI2odBlRlQhG1BQZUuRCE9qCkGRLlQhSUUS2oUNShqEKaSGkhzWp8IQrI+CaFSEoQpjYkpUISEf/9k=" alt="Alimentos">
                <h2>bocinas</h2>
            </div>

            <div class="category">
                <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2023/07/accesorios-gaming-3084392.jpg?tf=3840x" alt="Alimentos">
                <h2>accesorios</h2>
            </div>

            <div class="category">
                <img src="data:image/jpeg;base64,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" alt="Hogar">
                <h2>consolas</h2>
            </div>
        </form>
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
