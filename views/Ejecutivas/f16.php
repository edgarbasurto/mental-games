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

				<h4 class="card-title">Ordena los pasos a dar para <i>lavarse el pelo</i>. Escribe el número debajo de cada dibujo:</h4>

			</div>

			<div class="card-body row">

				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0 card">
					<div class="itemM16 text-center">
						<img alt="imagen" src="assets/imagenes/m16/m16-01.jpg" id="item16" class="imgM16">
						<h4>Aclarar y secar el pelo</h4>
					</div>
					<select id="input1" name="input1" class="form-select">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
					</select>

				</div>

				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0 card">
					<div class="itemM16 text-center">
						<img alt="imagen" src="assets/imagenes/m16/m16-02.jpg" id="item16" class="imgM16">
						<h4>Echarse champú y frotar</h4>
					</div>
					<select id="input2" name="input2" class="form-select">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
					</select>
				</div>

				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0 card">
					<div class="itemM16 text-center">
						<img alt="imagen" src="assets/imagenes/m16/m16-03.jpg" id="item16" class="imgM16">
						<h4>Mojar el pelo</h4>
					</div>
					<select id="input3" name="input3" class="form-select">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
					</select>
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


	<script src="assets/js/scriptF16.js"></script>
</body>

</html>