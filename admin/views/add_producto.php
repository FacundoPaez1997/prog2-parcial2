<?PHP

$producto = (new Producto())->lista_completa();

?>

<div class="row my-5">
	<div class="col">

		<h1 class="text-center mb-5 fw-bold">Administración de Productos</h1>
		<div class="row mb-5 d-flex align-items-center">

			<form class="row g-3" action="actions/add_product.php" method="POST" enctype="multipart/form-data">

				<div class="col-md-6 mb-3">
					<label for="nombre" class="form-label">Nombre del Producto</label>
					<input type="text" class="form-control" id="nombre" name="nombre" required>
				</div>

				<div class="col-md-12 mb-3">
					<label for="descripcion" class="form-label">Descripción</label>
					<textarea class="form-control" id="descripcion" name="descripcion" rows="5" required></textarea>
				</div>

				<div class="col-md-4 mb-3">
					<label for="precio" class="form-label">Precio (ARS)</label>
					<input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
				</div>

				<div class="col-md-4 mb-3">
					<label for="stock" class="form-label">Stock</label>
					<input type="number" class="form-control" id="stock" name="stock" required>
				</div>

				<div class="col-md-4 mb-3">
					<label for="categoria" class="form-label">Categoría</label>
					<select class="form-select" id="categoria" name="categoria" required>
						<option value="" selected disabled>Elija una opción</option>
						<option value="Skincare">Skincare</option>
						<option value="Maquillaje">Maquillaje</option>
						<option value="Cabello">Cabello</option>
					</select>
				</div>

				<div class="col-md-4 mb-3">
					<label for="lanzamiento" class="form-label">Fecha de Lanzamiento</label>
					<input type="date" class="form-control" id="lanzamiento" name="lanzamiento" required>
				</div>

				<div class="col-md-4 mb-3">
					<label for="contenido" class="form-label">Contenido (ml)</label>
					<select class="form-select" id="contenido" name="contenido" required>
						<option value="" selected disabled>Elija una opción</option>
						<option value="15">15 ml</option>
						<option value="30">30 ml</option>
						<option value="60">60 ml</option>
					</select>
				</div>

				<div class="col-md-4 mb-3">
					<label for="descuento" class="form-label">Descuento (%)</label>
					<select class="form-select" id="descuento" name="descuento" required>
						<option value="" selected disabled>Elija una opción</option>
						<option value="0">0%</option>
						<option value="15">15%</option>
						<option value="20">20%</option>
						<option value="40">40%</option>
					</select>
				</div>

				<div class="col-md-6 mb-3">
					<label for="imagen" class="form-label">Imagen del Producto</label>
					<input class="form-control" type="file" id="imagen" name="imagen" required>
				</div>

				<div class="col-md-6 mb-3">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="waterproof" name="waterproof" value="1">
						<label class="form-check-label" for="waterproof">Waterproof</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="vegano" name="vegano" value="1">
						<label class="form-check-label" for="vegano">Vegano</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="productoDestacado" name="productoDestacado" value="1">
						<label class="form-check-label" for="productoDestacado">Producto Destacado</label>
					</div>
				</div>

				<div class="col-12">
					<button type="submit" class="btn btn-primary">Agregar Producto</button>
				</div>
			</form>
		</div>
	</div>
</div>