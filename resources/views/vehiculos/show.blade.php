<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Vehiculo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Detalle del Vehículo</h1>
        <p><strong>Marca:</strong> {{ $vehiculo->marca }}</p>
        <p><strong>Modelo:</strong> {{ $vehiculo->modelo }}</p>
        <p><strong>Año:</strong> {{ $vehiculo->anio }}</p>
        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Volver</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
