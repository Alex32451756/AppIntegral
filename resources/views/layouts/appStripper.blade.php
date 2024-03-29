<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--BOOSTRAP-->
    <link href="{{asset('css/nav.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <!--full calendar-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
     <!-- Google Fonts Roboto -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
     <!-- MDB -->
     <link rel="stylesheet" href="css/mdb.min.css" />
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('head')
</head>
<body style="background-color: #FFFFFF; background-image: linear-gradient(180deg, #FFFFFF 0%, #4d5b8c 50%, #ec4646 100%);">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
       <img style="width: 95px; height: 40px;" src="{{asset('images/logo.png')}}" alt="" class="rounded-pill">
      </a>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/home">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/editarPerfil">Perfil</a>
          </li>

        </ul>
        <ul class="navbar-nav d-flex flex-row ms-auto me-4">

          <li class="nav-item me-3 me-lg-5 dropdown">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset(Auth::user()->foto)}}" class="rounded-circle" height="22" alt="" loading="lazy" />
                  <span class="badge badge-dark">{{Auth::user()->username}}</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li class="nav-item"><button class="dropdown-item" type="button">Perfil</button></li>
                  <li class="nav-item"> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <button  type="button" class="dropdown-item">
                                      {{ __('Logout') }}
                                    </button> </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                     </form>
                  </li>

                </ul>
              </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
    <main class="">
        @yield('content')
    </main>
    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-twitter"></i></a>

              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-instagram"></i></a>

          </section>
          <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright:
          <a class="text-white" href="#">RabbitBoys</a>
      </div>
      <!-- Copyright -->
  </footer>
    <!--BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--full calender-->
    <script src="{{asset('js/agendaStri.js')}}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>
