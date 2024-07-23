@include("partials.nav")

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

  <link href="{{ asset('/fonts/icomoon/style.css') }}" rel="stylesheet">


  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
  <link href="{{ asset('fonts/flaticon/font/flaticon.css') }}" rel="stylesheet">
  <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
  <link href="{{ asset("/css/style.css") }}" rel="stylesheet">


  <!-- MAIN CSS -->
  <link href="{{ asset("/css/style.css") }}" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-2">Nuestras Propiedades</h1>
              {{-- <p class="text-white">        </p> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
{{-- BUSCAR --}}
<form action="">
  <div class="realestate-filter">
    <div class="container">
      <div class="realestate-filter-wrap nav">
        <a href="#for-rent" class="active" data-toggle="tab" id="rent-tab" aria-controls="rent" aria-selected="true">Renta</a>
        <a href="#for-sale" class="" data-toggle="tab" id="sale-tab" aria-controls="sale" aria-selected="false">Venta</a>
      </div>
    </div>
  </div>

<style>
    #rent-tab.active,
    #sale-tab.active {
  background-color: #ffe600;
}
</style>
  
  <div class="realestate-tabpane pb-5">
    <div class="container tab-content">
       <div class="tab-pane active" id="for-rent" role="tabpanel" aria-labelledby="rent-tab">

         <div class="row">
           <div class="col-md-4 form-group">
             <select name="" id="" class="form-control w-100">
               <option value="">Tipo de Inmueble</option>
               <option value="">Terreno</option>
               <option value="">Casa</option>
               <option value="">Departamento</option>
               
             </select>
           </div>
           <div class="col-md-4 form-group">
             <input type="text" class="form-control" placeholder="Titulo">
           </div>
           <div class="col-md-4 form-group">
             <input type="text" class="form-control" placeholder="Lugar">
           </div>
         </div>

         <div class="row">
           <div class="col-md-4 form-group">
             <select name="" id="" class="form-control w-100">
               <option value="">Recamaras</option>
               {{-- <option value="">0</option> --}}
               <option value="">1</option>
               <option value="">2</option>
               <option value="">3+</option>
             </select>
           </div>
           <div class="col-md-4 form-group">
             <select name="" id="" class="form-control w-100">
               <option value="">Baños</option>
               {{-- <option value="">0</option> --}}
               <option value="">1</option>
               <option value="">2</option>
               <option value="">3+</option>
             </select>
           </div>
           <div class="col-md-4 form-group">
             <div class="row">
               <div class="col-md-6 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Precio Min</option>
                   <option value="">$100</option>
                   <option value="">$200</option>
                   <option value="">$300</option>
                   <option value="">$400</option>
                 </select>
               </div>
               <div class="col-md-6">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Precio Max</option>
                   <option value="">$25,000</option>
                   <option value="">$50,000</option>
                   <option value="">$75,000</option>
                   <option value="">$100,000</option>
                   <option value="">$100,000,000</option>
                 </select>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-md-4">
             <input type="submit" class="btn btn-black py-3 btn-block" value="Buscar">
           </div>
         </div>

       </div>
       <div class="tab-pane" id="for-sale" role="tabpanel" aria-labelledby="sale-tab">
         <div class="row">
           <div class="col-md-4 form-group">
             <select name="" id="" class="form-control w-100">
              <option value="">Tipo de Inmueble</option>
              <option value="">Terreno</option>
              <option value="">Casa</option>
              <option value="">Departamento</option>
              <option value="">Villa</option>
             </select>
           </div>
           <div class="col-md-4 form-group">
              <input type="text" class="form-control" placeholder="Titulo">
            </div>
            <div class="col-md-4 form-group">
              <input type="text" class="form-control" placeholder="Lugar">
            </div>
          </div>

         <div class="row">
           <div class="col-md-4 form-group">
             <select name="" id="" class="form-control w-100">
              <option value="">Recamaras</option>
              {{-- <option value="">0</option> --}}
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3+</option>
             </select>
           </div>
           <div class="col-md-4 form-group">
             <select name="" id="" class="form-control w-100">
              <option value="">Baños</option>
               {{-- <option value="">0</option> --}}
               <option value="">1</option>
               <option value="">2</option>
               <option value="">3+</option>
             </select>
           </div>
           <div class="col-md-4 form-group">
             <div class="row">
               <div class="col-md-6 form-group">
                 <select name="" id="" class="form-control w-100">
                  <option value="">Precio Min</option>
                  <option value="">$100</option>
                  <option value="">$200</option>
                  <option value="">$300</option>
                  <option value="">$400</option>
                 </select>
               </div>
               <div class="col-md-6">
                 <select name="" id="" class="form-control w-100">
                  <option value="">Precio Max</option>
                  <option value="">$25,000</option>
                  <option value="">$50,000</option>
                  <option value="">$75,000</option>
                  <option value="">$100,000</option>
                  <option value="">$100,000,000</option>
                 </select>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-md-4">
             <input type="submit" class="btn btn-black py-3 btn-block" value="Buscar">
           </div>
         </div>

       </div>
    </div>
  </div>
</form>
{{-- BUSCAR --}}
    {{-- @include("partials.form") --}}

 {{-- VER PROPIEDADES --}}
{{-- VER PROPIEDADES --}}
<body>
  <div class="container">
      <h2>Lista de Propiedades</h2>
      <div class="row">
          @foreach($propiedades as $propiedad)
          <div class="col-md-4 mb-5">
              <a href="{{ route('properties.show', $propiedad->id) }}" class="d-block" style="text-decoration: none; color: inherit;">
                  <div class="media-38289">
                      @php
                          $images = is_array($propiedad->images) ? $propiedad->images : json_decode($propiedad->images, true);
                      @endphp
                      @if(is_array($images) && !empty($images))
                          <img src="/storage/{{ $images[0] }}" alt="Image of {{ $propiedad->title }}" width="350" height="200">
                      @endif
                      <div class="text">
                          <div class="mb-2">
                              <h2 style="color: #ffc600;">{{ $propiedad->title }}</h2>
                          </div>  
                          <div class="d-flex justify-content-between mb-3">
                              <div class="sq d-flex align-items-center">
                                  <span class="wrap-icon icon-fullscreen"></span>
                                  <span>{{ $propiedad->land_area }} mt²</span>
                              </div>
                              <div class="bed d-flex align-items-center">
                                  <span class="wrap-icon icon-bed"></span>
                                  <span>{{ $propiedad->rooms }}</span>
                              </div>
                              <div class="bath d-flex align-items-center">
                                  <span class="wrap-icon icon-bath"></span>
                                  <span>{{ $propiedad->bathrooms }}</span>
                              </div>
                          </div>

                          <h3 class="mb-3" style="color: #ffc600;">
                              ${{ number_format($propiedad->price, 0) }}
                          </h3>
                          <span class="d-block small address d-flex align-items-center">
                              <span class="icon-room mr-3 text-primary"></span>
                              <span>{{ $propiedad->location }}</span>
                          </span>
                      </div>
                  </div>
              </a>
          </div>
          @endforeach
      </div>
  </div>

         
         <div class="row mt-5">
          <div class="col-12 text-center">
            <div class="mt-2">
              Página {{ $propiedades->currentPage() }} de {{ $propiedades->lastPage() }}
          </div>
          <br>
              @if ($propiedades->onFirstPage())
                  <span class="btn btn-secondary disabled">&laquo; Anterior</span>
              @else
                  <a href="{{ $propiedades->previousPageUrl() }}" class="btn btn-primary mr-2">&laquo; Anterior</a>
              @endif
      
              @if ($propiedades->hasMorePages())
                  <a href="{{ $propiedades->nextPageUrl() }}" class="btn btn-primary">Siguiente &raquo;</a>
              @else
                  <span class="btn btn-secondary disabled">Siguiente &raquo;</span>
              @endif
      
             
          </div>
      </div>
      
        <br>
        <br>
        
      </div>
      </body>
  
    {{-- FIN VER PROPIEDADES --}}

    @include("partials.footer")


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>


