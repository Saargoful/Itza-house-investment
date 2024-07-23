
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
        <title>Administrar propiedades - {{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    </head>
    <body class="custom-background">
        <div class="container">
            <div class="dashboard-container mt-5">
                <div class="dashboard-header-container">
                    <h2 class="dashboard-header">{{ __('Administrar propiedades') }}</h2>
                    <button type="button" class="add-property-btn" data-bs-toggle="modal" data-bs-target="#addPropertyModal">
                        <i class="fas fa-plus"></i> <span>Agregar Propiedad</span>
                    </button>
                </div>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                @if($properties->isEmpty())
                                    <br>
                                    <h3>No hay propiedades disponibles.</h3>
                                    <br>
                                @else
                                    <div class="property-list">
                                        @foreach($properties as $property)
                                            <div class="property-item">
                                                <div class="property-details">
                                                    <h3>{{ $property->title }}</h3>
                                                    <p>{{ $property->description }}</p>
                                                    <p>Precio: {{ $property->price }}</p>
                                                    <p>Tipo: {{ $property->property_type }}</p>
                                                    @if($property->images)
                                                    <div class="property-images">
                                                        @foreach($property->images as $image)
                                                            <img src="{{ asset('storage/' . $image) }}" alt="{{ $property->title }} " width="400px" height="250px">
                                                        @endforeach
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="property-actions">
                                                    <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                                    <button class="btn btn-sm btn-danger delete-property-btn" data-id="{{ $property->id }}">Eliminar</button>
                                                    <a class="btn btn-sm btn-info view-property-btn" href="{{ route('properties.view', $property->id) }}" class="btn btn-sm btn-blue">Ver Detalles</a>
                                                    

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <style>
        
        </style>
    


                           {{-- MODAL PARA ELIMINAR PROPIEDAD --}}
                     
<div class="modal" id="deletePropertyModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar Propiedad</h5>
                <button type="button" class="btn-close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas eliminar esta propiedad?</p>
                <form id="deletePropertyForm" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="deletePropertyId" name="property_id">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <button type="button" class="btn btn-secondary btn-cancel">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

                        
                       {{-- MODAL PARA AGREGAR PROPIEDAD --}}
<div class="modal" id="addPropertyModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Propiedad</h5>
                <button type="button" class="btn-close" aria-label="Close" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row full-width">
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" id="title" name="title" required placeholder="Maximo 16 caracteres" maxlength="16">
                        </div>
                    </div>
                    


                    <div class="form-row full-width">
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required placeholder="Agregue la descripcion de la propiedad"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" class="form-control" id="price" name="price" required placeholder="La cantidad debe de ser en numero enteros" >
                        </div>





                        <div class="form-group">
                            <label for="property_type">Tipo de Propiedad</label>
                            <select class="form-control" id="property_type" name="property_type" required>
                                <option value="Terreno">Terreno</option>
                                <option value="Casa">Casa</option>
                                <option value="Departamento">Departamento</option>
                            </select>
                        </div>
                    </div>
        
                    <div class="form-row full-width">
                        <div class="form-group">
                            <label for="type">Renta/venta</label>
                            <textarea class="form-control" id="type" name="type" ></textarea>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <label for="images">Imágenes</label>
                            <input type="file" class="form-control" id="images" name="images[]" accept="image/*">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="rooms">Habitaciones</label>
                            <input type="number" class="form-control" id="rooms" name="rooms" placeholder="Maximo 2 digitos ">
                        </div>
                        <div class="form-group">
                            <label for="bathrooms">Baños</label>
                            <input type="number" class="form-control" id="bathrooms" name="bathrooms" placeholder="Maximo 2 digitos y .5 para medio baño">
                        </div>
                    </div>
                    <div class="form-row full-width">
                        <div class="form-group">
                            <label for="amenities">Amenidades</label>
                            <textarea class="form-control" id="amenities" name="amenities" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-row full-width">
                        <div class="form-group">
                            <label for="location">Ubicación</label>
                            <input type="text" class="form-control" id="location" name="location">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="land_area">Metros de Terreno</label>
                            <input type="number" class="form-control" id="land_area" name="land_area" placeholder="No decimales">
                        </div>
                        <div class="form-group">
                            <label for="construction_area">Metros de Construcción</label>
                            <input type="number" class="form-control" id="construction_area" name="construction_area" placeholder="No decimales">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
                        
                        
    </body>
    </html>


    


                {{-- JAVASCRIPT PARA CONTROLAR MODALES --}}
                <script>
                    document.addEventListener('DOMContentLoaded', (event) => {
                        // Función para abrir y cerrar modales
                        function openModal(modal) {
                            modal.style.display = 'block';
                        }
                
                        function closeModal(modal) {
                            modal.style.display = 'none';
                        }
                
                        // Función para agregar evento de cierre al hacer clic fuera del modal
                        function closeModalOnClickOutside(modal) {
                            window.addEventListener('click', function(event) {
                                if (event.target === modal) {
                                    closeModal(modal);
                                }
                            });
                        }
                
                        // Agregar Propiedad Modal
                        const addPropertyModal = document.getElementById('addPropertyModal');
                        const addPropertyBtn = document.querySelector('.add-property-btn');
                        const addBtnClose = addPropertyModal.querySelector('.btn-close');
                
                        addPropertyBtn.addEventListener('click', function () {
                            openModal(addPropertyModal);
                        });
                
                        addBtnClose.addEventListener('click', function () {
                            closeModal(addPropertyModal);
                        });
                
                        closeModalOnClickOutside(addPropertyModal);
                
                        // Eliminar Propiedad Modal
                        const deletePropertyModal = document.getElementById('deletePropertyModal');
                        const deletePropertyBtns = document.querySelectorAll('.delete-property-btn');
                        const deletePropertyForm = document.getElementById('deletePropertyForm');
                        const deletePropertyIdInput = document.getElementById('deletePropertyId');
                        const deleteModalCloseBtn = deletePropertyModal.querySelector('.btn-close');
                        const deleteCancelBtn = deletePropertyModal.querySelector('.btn-cancel'); 
                
                        deletePropertyBtns.forEach(button => {
                            button.addEventListener('click', function () {
                                const propertyId = this.getAttribute('data-id');
                                deletePropertyIdInput.value = propertyId;
                                deletePropertyForm.action = `/properties/${propertyId}`;
                                openModal(deletePropertyModal);
                            });
                        });
                
                        deleteModalCloseBtn.addEventListener('click', function () {
                            closeModal(deletePropertyModal);
                        });
                
                        deleteCancelBtn.addEventListener('click', function () {
                            closeModal(deletePropertyModal);
                        });
                
                        closeModalOnClickOutside(deletePropertyModal);
                    });
      
                </script>
                
                
                
 
</body>
</html>

