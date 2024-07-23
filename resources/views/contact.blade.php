@include("partials.nav")
<!doctype html>
<html lang="en">

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                <h1 class="mb-2 special-heading">Comunícate con nosotros</h1>
                
                
              <style>
              /* Estilos para las etiquetas h1 con la clase special-heading */
.special-heading {
    font-family: "DM Sans", sans-serif;
    
    color: #333; /* Cambia el color según tu diseño */
    /* Otros estilos personalizados */
}

            </style>
<br>
<br>
         
              <p class="text-white">   </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
        <br>
        <br>
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>O, aún mejor, ¡ven a visitarnos!</h2>
          <p>
            Nos encanta recibir a nuestros clientes, así que ven en cualquier momento durante las horas de oficina.</p>
        </div>
      </div>



       


         
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function() {
       
        @if($errors->any())
            $('#errorModal').modal('show'); 
        @endif
    });
</script>

<!-- Modal de Bootstrap para mostrar los errores -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Formulario Incompleto o Erroneo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Mostrar los mensajes de error aquí -->
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Contenedor principal -->
<div class="container">
    <div class="row">
        <!-- Formulario de contacto (2/3 de la página) -->
        <div class="col-lg-8 mb-5">
            <form action="{{ route('contact.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="form-group row">
                    <div class="col-md-6 mb-4 mb-lg-0">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required maxlength="100" pattern="[A-Za-z\s]+">
                        @error("nombre")
                        <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required maxlength="12">
                        @error("telefono")
                        <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required maxlength="100">
                        @error("email")
                        <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Escribe tu mensaje" cols="30" rows="10" required></textarea>
                        @error("mensaje")
                        <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6 mr-auto">
                    <input type="submit" class="btn btn-block btn-custom py-3 px-5" value="Enviar Mensaje">

                  </div>
              </div>
          </form>


                <style>
                    /* Estilos para el botón personalizado */
.btn-custom {
    background-color: #000; /* Color de fondo negro */
    color: #fff; /* Color de texto blanco */
    font-family: "DM Sans", sans-serif; /* Tipo de letra DM Sans */
    font-size: 16px; /* Tamaño de fuente */
    border: none; /* Sin borde */
}

.btn-custom:hover {
    background-color: #333; /* Cambio de color al pasar el ratón */
    /* Puedes añadir más estilos hover si lo deseas */
}

                </style>




            @if(session("info"))
            <script>
                alert("{{ session('info') }}");
            </script>
            @endif
        </div>
        
       
        <div class="col-lg-4">
            <div class="bg-white p-3 p-md-5">
                <h3 class="text-black mb-4">Información</h3>
                <ul class="list-unstyled footer-link">
                    <li class="d-block mb-3">
                        <span class="d-block text-black">Dirección:</span>
                        <span>Nayarit, México</span>
                    </li>
                    <li class="d-block mb-3">
                        <span class="d-block text-black">Teléfono:</span>
                        <span>+52 322 318 9510</span>
                    </li>
                    <li class="d-block mb-3">
                        <span class="d-block text-black">Horario de Atención:</span>
                        <span>
                            <table class="horarios">
                                <thead>
                                    <tr>
                                        <th>Día</th>
                                        <th>Horario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Lun</td>
                                        <td>09:00 a.m. – 05:00 p.m.</td>
                                    </tr>
                                    <tr>
                                        <td>Mar</td>
                                        <td>09:00 a.m. – 05:00 p.m.</td>
                                    </tr>
                                    <tr>
                                        <td>Mié</td>
                                        <td>09:00 a.m. – 05:00 p.m.</td>
                                    </tr>
                                    <tr>
                                        <td>Jue</td>
                                        <td>09:00 a.m. – 05:00 p.m.</td>
                                    </tr>
                                    <tr>
                                        <td>Vie</td>
                                        <td>09:00 a.m. – 05:00 p.m.</td>
                                    </tr>
                                    <tr>
                                        <td>Sáb</td>
                                        <td>Cerrado</td>
                                    </tr>
                                    <tr>
                                        <td>Dom</td>
                                        <td>Cerrado</td>
                                    </tr>
                                </tbody>
                            </table>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    ul.horarios {
        font-size: 10px;
        line-height: 1.5;
    }
    ul.horarios li {
        margin-bottom: 8px;
    }
    table.horarios {
        font-size: 15px;
        line-height: 1.5;
        width: 100%;
        border-collapse: collapse;
    }
    table.horarios th,
    table.horarios td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
 
</style>


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

