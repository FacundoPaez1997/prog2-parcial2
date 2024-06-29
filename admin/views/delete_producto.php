<?php
$id = $_GET['id'] ?? false;
$producto = (new Producto())->productoPorId($id);
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mb-5 fw-bold">¿Está seguro que desea eliminar este producto?</h1>
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <h2 class="fs-6">Nombre del Producto:</h2>
                    <p><?= $producto->getNombre() ?></p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="d-grid gap-2">
                        <a href="actions/delete_product.php?id=<?= $producto->getId() ?>" role="button" class="btn btn-danger btn-lg">Eliminar Producto</a>
                        <a href="index.php" role="button" class="btn btn-secondary btn-lg mt-3">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
