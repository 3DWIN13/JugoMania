<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.82.0">
  <title>JugoMania</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    body{
      overflow-x: hidden;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="pricing.css" rel="stylesheet">
</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check" viewBox="0 0 16 16">
      {{-- <title>Check</title> --}}
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
  </svg>

  <div class="container py-3">
    <header class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
          {{-- <title>Jugos</title> --}}
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
            fill="currentColor"></path>
        </svg>
        <span class="fs-4">JugoMania</span>
      </a>


      @if (Route::has('login'))
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        @auth
        <a href="{{ url('/dashboard') }}" class="me-3 py-2 text-dark text-decoration-none">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="me-3 py-2 text-dark text-decoration-none">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="me-3 py-2 text-dark text-decoration-none">Register</a>
        @endif
        @endauth
      </nav>
      @endif


    </header>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">JUGOS Y PRECIOS</h1>
      <p class="fs-5 text-muted">Elige y pide tu jugo al mejor precio</p>
    </div>

    <main>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

        {{-- se pintan todos los productos en la paginas con php --}}
        @foreach ($jugos as $item)
            
        
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal">{{$item->nombre_p}}</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">{{$item->precio_p}}$<small class="text-muted fw-light">/DO</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <p>
                  {{$item->descripcion_p}}
                </p>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">SELECCIONAR</button>
            </div>
          </div>
        </div>

      
        @endforeach

        {{-- fin de la pintura --}}
      </div>

      <h2 class="display-6 text-center mb-4">Pide Tus Jugos</h2>


      <div class="row align-items-md-stretch justify-content-center">
        <div class="col-md-6">
          <div class="h-100 p-5 text-white bg-dark rounded-3">
            {{-- formulario de pedidos de los jugos --}}
            <form id="FormularioJugo" action="" method="">
              <div class="row">

                <div class="col-md-6" style="padding-bottom: 5%">
                  <label for="validationCustom04" class="form-label">Jugo</label>
                  <select name="validationCustom04" class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Elige...</option>
                    {{-- se llenan las opciones con php --}}
                    @foreach ($jugos as $item)
                    <option value="{{$item->precio_p}}/{{ $item->id }}">{{$item->nombre_p}}</option>    
                    @endforeach
                    
                    
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-5" style="padding-bottom: 5%">
                  <label for="validationCustom05" class="form-label">Cantidad por unidad</label>
                  <input type="number" name="validationCustom05" class="form-control" id="validationCustom05" required>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="col-md-1" style="margin-top: 31px; padding-bottom: 5%">
                  <button type="button" value="" class="btn btn-outline-light"
                    style="border-radius: 100%">+</button>
                </div>

              </div>
            </form>
           
            {{-- formulario de pedidos de los jugos FIN --}}


            {{-- vista de los jugos anadidos --}}
            <div class="col-md-12">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Tus Jugos seleccionados</span>
                <span id="span_de_cantidad" class="badge bg-primary rounded-pill">0</span>
              </h4>
              <ul id="listaJugo" class="list-group mb-3">
{{--  los jugos anadidos --}}
              </ul>
              {{-- Total de los jugos --}}
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total (DO)</span>
                  <strong>$0</strong>
                </li>
              </ul>
            </div>
            {{-- vista de los jugos anadidos FON--}}

            <button class="btn btn-outline-light" type="button">Example button</button>
          </div>
        </div>
      </div>



  </div>

<template id="template-Lista" >
  <li name="lista" id="lista_`+lista+`" class="list-group-item d-flex justify-content-between lh-sm">
    <div>
      <h6 id="`+jugoselecionado+`" class="my-0">`+jugoselecionado+`</h6>
      <button type="button" id="eliminar" class="btn-close" aria-label="Close"></button>
     
    </div>
    
    <span  class="text-muted">`+cantidad+`</span>
    <input type="hidden" id="lacantidad" value="`+cantidad+`" />
    
    </li> 
</template>
  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
        <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="{{ asset('js/funcion_lista.js ') }}"></script>

</body>

</html>