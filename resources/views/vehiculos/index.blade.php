<!DOCTYPE html>
<html>
<head>
    <title>Lista de Vehiculos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container mt-4">
        <h1 class="mb-4">Lista de Vehículos</h1>
        <a href="{{ route('vehiculos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Vehículo</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>{{ $vehiculo->anio }}</td>
                    <td>
                        <a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
