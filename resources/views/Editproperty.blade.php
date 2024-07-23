@include('partials.nav')
<br>
<br>
<br>
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Propiedad - {{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body class="custom-background">
    <div class="container">
        <div class="dashboard-container mt-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2>Editar Propiedad </h2> <h2>{{ $property->title }}</h2>
                    <br>
                    
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Volver al Dashboard</a>
                    <form action="{{ route('properties.update', $property->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $property->title }}" maxlength="16">
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $property->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ $property->price }}">
                        </div>

                        <div class="form-group">
                            <label for="property_type">Tipo de Propiedad</label>
                            <select class="form-control" id="property_type" name="property_type">
                                <option value="Terreno" {{ $property->property_type == 'Terreno' ? 'selected' : '' }}>Terreno</option>
                                <option value="Casa" {{ $property->property_type == 'Casa' ? 'selected' : '' }}>Casa</option>
                                <option value="Departamento" {{ $property->property_type == 'Departamento' ? 'selected' : '' }}>Departamento</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type">Renta/Venta</label>
                            <textarea class="form-control" id="type" name="type">{{ $property->type }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="rooms">Habitaciones</label>
                            <input type="number" class="form-control" id="rooms" name="rooms" value="{{ $property->rooms }}">
                        </div>

                        <div class="form-group">
                            <label for="bathrooms">Baños</label>
                            <input type="number" class="form-control" id="bathrooms" name="bathrooms" value="{{ $property->bathrooms }}" step="0.5">
                        </div>
                        

                        <div class="form-group">
                            <label for="amenities">Amenidades</label>
                            <textarea class="form-control" id="amenities" name="amenities" rows="3">{{ $property->amenities }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="location">Ubicación</label>
                            <input type="text" class="form-control" id="location" name="location" value="{{ $property->location }}">
                        </div>

                        <div class="form-group">
                            <label for="land_area">Metros de Terreno</label>
                            <input type="number" class="form-control" id="land_area" name="land_area" value="{{ $property->land_area }}">
                        </div>

                        <div class="form-group">
                            <label for="construction_area">Metros de Construcción</label>
                            <input type="number" class="form-control" id="construction_area" name="construction_area" value="{{ $property->construction_area }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        {{-- <button type="button" class="btn btn-secondary btn-cancel">Cancelar</button> --}}
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const cancelButton = document.querySelector('.btn-cancel');
        cancelButton.addEventListener('click', function () {
            window.location.href = '/dashboard';
        });
    });
</script>

<style>

    .btn-secondary {
    position: absolute;
    top: 20px;
    right: 30px; 
}


.dashboard-container {
    position: relative;
}

@media (max-width: 768px) {
    .btn-secondary {
        top: 5px;
        right: 15px; 
        font-size: 0.875rem; 
    }
}


@media (max-width: 576px) {
    .btn-secondary {
        top: 0;
        right: 10px; 
        font-size: 0.75rem; 
        padding: 0.25rem 0.5rem; 
    }
}






    </style>