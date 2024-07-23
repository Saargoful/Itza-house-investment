<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo Electrónico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 10px 0;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            line-height: 1.6;
            color: #333333;
        }
        .content p {
            margin: 10px 0;
        }
        .content p strong {
            color: #555555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
        </div>
        <div class="content">
            <h2>Datos de la persona interesada:</h2>
            <p><strong>Nombre:</strong> {{$data["nombre"]}}</p>
            <p><strong>Telefono:</strong> {{$data["telefono"]}}</p>
            <p><strong>Correo:</strong> {{$data["email"]}}</p>
            <p><strong>Mensaje:</strong> {{$data["mensaje"]}}</p>
           
        </div>
    </div>
</body>
</html>
