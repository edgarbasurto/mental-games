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
				<h4 class="card-title">Ordena esta lista que está relacionada con <i>cenar en un restaurante</i>:</h4>
			</div>
			<div class="card-body">


				<div class="row mb-4">

					<select id="input1" name="input1" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
						<option value="value6">6</option>
						<option value="value7">7</option>
						<option value="value8">8</option>
					</select>
					<div class="col">
						<h3>Llamar a un restaurante.</h3>
					</div>
					<span id="error1" class="errorX"></span>

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
						<option value="value7">7</option>
						<option value="value8">8</option>
					</select>
					<div class="col">
						<h3>Reservar una mesa.</h3>
					</div>
					<span id="error2" class="errorX"></span>
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
						<option value="value7">7</option>
						<option value="value8">8</option>
					</select>
					<div class="col">
						<h3>Ir al restaurante.</h3>
					</div>
					<span id="error3" class="errorX"></span>
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
						<option value="value7">7</option>
						<option value="value8">8</option>
					</select>
					<div class="col">
						<h3>Aguardar en la entrada del restaurante.</h3>
					</div>
					<span id="error4" class="errorX"></span>
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
					<option value="value7">7</option>
					<option value="value8">8</option>
				</select>
				<div class="col">
					<h3>Pedir los platos al camarero.</h3>
				</div>
				<span id="error5" class="errorX"></span>
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
					<option value="value7">7</option>
					<option value="value8">8</option>
				</select>
				<div class="col">
					<h3>Leer el menú.</h3>
				</div>
				<span id="error6" class="errorX"></span>
			</div>

			<div class="row mb-4">
				<select id="input7" name="input7" class="form-select col">
					<option disabled selected value> -- </option>
					<option value="value1">1</option>
					<option value="value2">2</option>
					<option value="value3">3</option>
					<option value="value4">4</option>
					<option value="value5">5</option>
					<option value="value6">6</option>
					<option value="value7">7</option>
					<option value="value8">8</option>
				</select>
				<div class="col">
					<h3>Arreglarse para la ocasión.</h3>
				</div>
				<span id="error7" class="errorX"></span>
			</div>

			<div class="row mb-4">
				<select id="input8" name="input8" class="form-select col">
					<option disabled selected value> -- </option>
					<option value="value1">1</option>
					<option value="value2">2</option>
					<option value="value3">3</option>
					<option value="value4">4</option>
					<option value="value5">5</option>
					<option value="value6">6</option>
					<option value="value7">7</option>
					<option value="value8">8</option>
				</select>
				<div class="col">
					<h3>Decidir los platos.</h3>
				</div>
				<span id="error8" class="errorX"></span>
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

	<script src="assets/js/scriptF20.js"></script>
</body>

</html>