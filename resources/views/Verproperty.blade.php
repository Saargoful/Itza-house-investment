@include('partials.nav') 
<br>
<br>
<br>
<br>
<br>


{{-- VER TODOS LOS DATOS DE LA Propiedad --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Propiedad - {{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body class="custom-background">


    <div class="container mt-5">
        <div class="dashboard-container">
            <div class="dashboard-header-container">
                <h2 class="dashboard-header">Detalles de la Propiedad</h2>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
                <div class="property-details">
                    @if($property->images)
                    <div class="property-images" style="text-align: center;">
                        @foreach($property->images as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="{{ $property->title }}" width="400px" height="250px" style="margin: 10px;">
                        @endforeach
                    </div>
                @endif
                <br>
                <h3 class="bold-text">Titulo de la propiedad: {{ $property->title }}</h3>
                <strong class="bold-text">Descripcion de la propiedad:</strong>
                <p class="normal-text">{{ $property->description }}</p>
                
                <strong class="bold-text">Precio:</strong>
                <p class="normal-text">{{ $property->price }}</p>
                
                <strong class="bold-text">Tipo de Propiedad:</strong>
                <p class="normal-text">{{ $property->property_type }}</p>
                
                <strong class="bold-text">Tipo:</strong>
                <p class="normal-text">{{ $property->type }}</p>
                
                <strong class="bold-text">Habitaciones:</strong>
                <p class="normal-text">{{ $property->rooms }}</p>
                
                <strong class="bold-text">Baños:</strong>
                <p class="normal-text">{{ $property->bathrooms }}</p>
                
                <strong class="bold-text">Amenidades:</strong>
                <p class="normal-text">{{ $property->amenities }}</p>
                
                <strong class="bold-text">Ubicación:</strong>
                <p class="normal-text">{{ $property->location }}</p>
                
                <strong class="bold-text">Metros de Terreno:</strong>
                <p class="normal-text">{{ $property->land_area }}</p>
                
                <strong class="bold-text">Metros de Construcción:</strong>
                <p class="normal-text">{{ $property->construction_area }}</p>
                

                  

                    <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Volver al Dashboard</a>
                    <br>
                        <br>
                        <br>
<br>
                </div>
            </div>
        </div>
    </div>

  
</body>
</html>


<style>
    .bold-text {
    font-weight: bold;
    color: black !important;
}
.bold-text {
    font-weight: bold;
    color: #000; /* Negro fuerte */
}

.normal-text {
    color: #000; /* Negro normal */
}


    </style>