@include("partials.nav")


<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

  <link href="{{ asset('/fonts/icomoon/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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



      {{-- VISUALIZAR DATOS --}}

      <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('{{ $propiedad->image_url }}')">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <span class="h4 text-primary mb-4 d-block">${{ number_format($propiedad->price) }}</span>
                        <h1 class="mb-2">{{ $propiedad->title }}</h1>
                        
                        <p class="text-center mb-5">
                            <span class="small address d-flex align-items-center justify-content-center">
                                <span class="icon-room mr-3 text-primary"></span>
                                <span>{{ $propiedad->location }}</span>
                            </span>
                        </p>

                        <div class="d-flex media-38289 justify-content-around mb-5">
                            <div class="sq d-flex align-items-center">
                                <span class="wrap-icon icon-fullscreen"></span>
                                <span>{{ $propiedad->land_area }}  mt²</span>
                            </div>
                            <div class="bath d-flex align-items-center">
                              <span class="wrap-icon"><i class="fas fa-home"></i></span>
                              <span>{{ $propiedad->construction_area }} mt²</span>
                          </div>
                            <div class="bed d-flex align-items-center">
                                <span class="wrap-icon icon-bed"></span>
                                <span>{{ $propiedad->rooms }}.</span>
                            </div>
                            <div class="bath d-flex align-items-center">
                                <span class="wrap-icon icon-bath"></span>
                                <span>{{ $propiedad->bathrooms }}</span>
                            </div>
                            
                        </div>
                        <p><a href="/contact" class="btn btn-primary text-white">Contactar Agente</a></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- VISUALIZAR DATOS --}}

    {{-- MAS DETALLADO --}}

    

   <div class="site-section">
    <div class="container">
        <div class="row">
        
            <div class="col-md-8">
                <div class="property-details mb-4">
                    
                    <h2>{{ $propiedad->type }}</h2><h2>{{ $propiedad->title }}</h2>
                    <p class="price text-primary">${{ number_format($propiedad->price) }}</p>

                    <p style="font-weight: 900;"><strong>Ubicación:</strong></p>
                    <p class="location">{{ $propiedad->location }}</p>

                    <p style="font-weight: 900;"><strong>Descripción:</strong></p>
                    <p class="description">{{ $propiedad->description }}</p>

                    <p style="font-weight: 900;"><strong>Tipo de Inmueble:</strong></p>
                    <p class="property-type">{{ $propiedad->property_type }}</p>

                    <p style="font-weight: 900;"><strong>Amenidades:</strong></p>
                    <p class="amenities">{{ $propiedad->amenities }}</p>
                </div>
            </div>

           
            <div class="col-md-4">
                <div class="image-gallery">
                    <div class="main-image mb-4">
                        @if($propiedad->images && $propiedad->images->count() > 0)
                            <img id="currentImage" src="{{ $propiedad->images->first()->image_path }}" alt="Property Image" class="img-fluid">
                        @else
                            <img id="currentImage" src="/images/default.jpg" alt="Default Image" class="img-fluid">
                        @endif
                    </div>
                    <div class="thumbnail-images">
                        @if($propiedad->images && $propiedad->images->count() > 0)
                            @foreach ($propiedad->images as $image)
                                <img src="{{ $image->image_path }}" alt="Property Thumbnail" class="thumbnail img-fluid">
                            @endforeach
                        @else
                            <img src="/images/default.jpg" alt="Default Thumbnail" class="thumbnail img-fluid">
                        @endif
                    </div>
                </div>
            </div>
        </div>
       
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <p><a href="/contact" class="btn btn-primary text-white">Contactar Agente</a></p>
            </div>
        </div>
    </div>
</div>

<style>
.image-gallery {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.main-image img {
    width: 100%;
    max-width: 600px;
    margin-bottom: 20px;
    cursor: pointer;
}

.thumbnail-images {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.thumbnail img {
    width: 100px;
    margin: 5px;
    cursor: pointer;
    border: 2px solid transparent;
    transition: border 0.3s;
}

.thumbnail img:hover {
    border: 2px solid #000;
}

@media (max-width: 768px) {
    .main-image img {
        max-width: 100%;
    }

    .thumbnail img {
        width: 70px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mainImage = document.getElementById('currentImage');
    const thumbnails = document.querySelectorAll('.thumbnail img');

    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            mainImage.src = this.src;
        });
    });

    mainImage.addEventListener('click', function() {
       
    });
});
</script>



 {{-- MAS DETALLADO FIN --}}
    

   

    

  @include("partials.footer")

    </div>

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

