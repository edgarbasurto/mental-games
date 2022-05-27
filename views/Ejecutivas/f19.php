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
		
						<h4 class="card-title">Ordena esta lista que está relacionada con <i>viajar en tren</i>:</h4>
		
			</div>

			<div class="card-body row">


				<div class="row mb-4">
					<select id="input1" name="input1" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
						<option value="value6">6</option>
					</select>
					<div class="itemM18 col">
						<h3>Esperar al tren en el andén.</h3>
					</div>
				</div>


				<div class="row mb-4">
					<select id="input2" name="input2" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
						<option value="value6">6</option>
					</select>
					<div class="itemM18 col">
						<h3>Subir al tren.</h3>
					</div>
				</div>

				<div class="row mb-4">
					<select id="input3" name="input3" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
						<option value="value6">6</option>
					</select>
					<div class="itemM18 col">
						<h3>Comprar los billetes.</h3>
					</div>
				</div>

				<div class="row mb-4">
					<select id="input4" name="input4" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
						<option value="value6">6</option>
					</select>
					<div class="itemM18 col">
						<h3>Salir de la estación de trenes.</h3>
					</div>
				</div>

				<div class="row mb-4">
					<select id="input5" name="input5" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
						<option value="value6">6</option>
					</select>
					<div class="itemM18 col">
						<h3>Bajar del tren.</h3>
					</div>
				</div>

				<div class="row mb-4">
					<select id="input6" name="input6" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
						<option value="value6">6</option>
					</select>
					<div class="itemM18 col">
						<h3>Buscar el asiento.</h3>
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

	<script src="assets/js/scriptF19.js"></script>
</body>

</html>