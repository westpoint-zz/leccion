<!DOCTYPE html>
<html>
<head>
    <title>Crear Vehículo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Crear Vehículo</h1>
        <form action="{{ route('vehiculos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" class="form-control" value="{{ old('marca') }}">
                @error('marca')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" class="form-control" value="{{ old('modelo') }}">
                @error('modelo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="anio">Año:</label>
                <input type="number" id="anio" name="anio" class="form-control" value="{{ old('anio') }}">
                @error('anio')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
