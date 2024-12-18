<?php

$productos = (new Producto())->catalogoCompleto();

if (!$productos) {
    echo "<p>No se encontraron productos.</p>";
    return;
}
?>

<div class="container-admp">
    <div class="row">
        <div class="col">
            <h2 class="text-center mb-5 fw-bold">Administración de Productos</h2>
            <div class="d-flex justify-content-between mb-3">
                <a href="../admin/index.php" class="btn btn-secondary">Volver Atrás</a>
                <a href="index.php?sec=add_producto" class="btn btn-primary">Cargar Nuevo Producto</a>
            </div>


            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" width="10%">Imagen</th>
                            <th scope="col" width="10%">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Descuento</th>
                            <th scope="col">Waterproof</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos as $P) { ?>
                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src="../img/<?= htmlspecialchars($P->getImagen()) ?>" alt="Imagen de <?= htmlspecialchars($P->getNombre()) ?>" class="img-thumbnail rounded">
                                    </div>
                                </td>
                                <td><?= htmlspecialchars($P->getNombre()) ?></td>
                                <td><?= htmlspecialchars(substr($P->getDescripcion(), 0, 100)) . (strlen($P->getDescripcion()) > 100 ? '...' : '') ?></td>
                                <td>$<?= htmlspecialchars($P->getPrecio()) ?></td>
                                <td><?= htmlspecialchars($P->getStock()) ?></td>
                                <td><?= htmlspecialchars($P->getCategoria()) ?></td>
                                <td><?= htmlspecialchars($P->getDescuento()) ?>%</td>
                                <td><?= $P->getWaterproof() ? 'Sí' : 'No' ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Acciones">
                                        <a href="index.php?sec=edit_producto&id=<?= htmlspecialchars($P->getId()) ?>" role="button" class="btn btn-success btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                            </svg>
                                        </a>
                                        <a href="index.php?sec=delete_producto&id=<?= htmlspecialchars($P->getId()) ?>" role="button" class="btn btn-danger btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
