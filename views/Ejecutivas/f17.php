<?php
require_once VIEW_PATH . 'Templates/headMain.php'
?>
</head>

<body>
	<?php
	include_once VIEW_PATH . 'Templates/headerGames.php'
	?>

	<div class="container">
		<div class="card">
			<div class="card-header">

				<h4 class="card-title">Ordena los pasos a dar para <i>comprar el pan</i>. Escribe el número debajo de cada dibujo:</h4>

			</div>

			<div class="card-body row">

				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 card">

					<img alt="imagen" src="assets/imagenes/m17/m17-01.jpg" id="item16" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Pagar el pan</h5>

						<select id="input1" name="input1" class="form-select row">
							<option disabled selected value> -- </option>
							<option value="value1">1</option>
							<option value="value2">2</option>
							<option value="value3">3</option>
							<option value="value4">4</option>
						</select>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 card">

					<img alt="imagen" src="assets/imagenes/m17/m17-02.jpg" id="item16" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Salir de la panadería</h5>

						<select id="input2" name="input2" class="form-select row">
							<option disabled selected value> -- </option>
							<option value="value1">1</option>
							<option value="value2">2</option>
							<option value="value3">3</option>
							<option value="value4">4</option>
						</select>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 card">

					<img alt="imagen" src="assets/imagenes/m17/m17-03.jpg" id="item16" class="card-img-top">
					<div class="card-body">
						<h5 class="text-center">Pedir el pan</h5>

						<select id="input3" name="input3" class="form-select row">
							<option disabled selected value> -- </option>
							<option value="value1">1</option>
							<option value="value2">2</option>
							<option value="value3">3</option>
							<option value="value4">4</option>
						</select>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 card">	

					<img alt="imagen" src="assets/imagenes/m17/m17-04.jpg" id="item16" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title text-center">Entrar en la panadería</h5>

						<select id="input4" name="input4" class="form-select row">
							<option disabled selected value> -- </option>
							<option value="value1">1</option>
							<option value="value2">2</option>
							<option value="value3">3</option>
							<option value="value4">4</option>
						</select>
					</div>
				</div>




			</div>


			<div class="card-footer text-end">
				<button type="button" onclick="pausarConteo()" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Terminado <i class="fa-solid fa-play"></i>
				</button>
			</div>
		</div>

	</div>


	<?php
	include_once VIEW_PATH . 'Templates/modalPuntaje.php'
	?>

	<?php
	include_once VIEW_PATH . 'Templates/footer.php'
	?>

	<script src="assets/js/scriptF17.js"></script>
</body>

</html>