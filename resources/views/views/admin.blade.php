<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Gestionar Casas</title>
  <!-- Enlace a los estilos de la plantilla -->
  <link rel="stylesheet" href="path/to/your/template/css/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/your/template/css/style.css">
  <!-- Enlace a estilos personalizados -->
  <link rel="stylesheet" href="path/to/your/custom/css/admin.css">
  <link href="{{ asset('css/admin') }}" rel="stylesheet">
</head>
<body>
  <!-- Navbar de la plantilla -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <!-- Puedes agregar aquí más elementos de la navbar según la plantilla -->
  </nav>

  <!-- Contenido principal -->
  <div class="container mt-4">
    <h2>Gestionar Casas</h2>
    <!-- Aquí va el contenido de la tabla de casas -->
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Precio</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <!-- Aquí se deben listar dinámicamente las casas desde la base de datos -->
          <tr>
            <td>1</td>
            <td>Casa Ejemplo 1</td>
            <td>Calle Ejemplo 123</td>
            <td>$250,000</td>
            <td>
              <a href="#" class="btn btn-sm btn-primary">Editar</a>
              <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
              <!-- Otros botones de acción según sea necesario -->
            </td>
          </tr>
          <!-- Puedes repetir este bloque para cada casa en la base de datos -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Scripts de la plantilla -->
  <script src="path/to/your/template/js/jquery.min.js"></script>
  <script src="path/to/your/template/js/bootstrap.bundle.min.js"></script>
  <!-- Scripts personalizados -->
  <script src="path/to/your/custom/js/admin.js"></script>
</body>
</html>
