<!DOCTYPE html>
<html>
<head>
    <title>Lista de Vehiculos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container mt-4">
        <h1 class="mb-4">Lista de Vehículos</h1>
        <a href="<?php echo e(route('vehiculos.create')); ?>" class="btn btn-primary mb-3">Crear Nuevo Vehículo</a>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success"><?php echo e($message); ?></div>
        <?php endif; ?>
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
                <?php $__currentLoopData = $vehiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($vehiculo->marca); ?></td>
                    <td><?php echo e($vehiculo->modelo); ?></td>
                    <td><?php echo e($vehiculo->anio); ?></td>
                    <td>
                        <a href="<?php echo e(route('vehiculos.show', $vehiculo->id)); ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="<?php echo e(route('vehiculos.edit', $vehiculo->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
                        <form action="<?php echo e(route('vehiculos.destroy', $vehiculo->id)); ?>" method="POST" style="display:inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\wamp64\www\vehiculos_crud\resources\views/vehiculos/index.blade.php ENDPATH**/ ?>