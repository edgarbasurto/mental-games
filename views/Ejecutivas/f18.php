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
		
						<h4 class="card-title">Ordena esta lista que está relacionada con <i>montar en taxi</i>:</h4>
			
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
					</select>
					<div class="col">
						<h3>Subir al taxi.</h3>
					</div>
					<span id="error1" class="errorX col"></span>
				</div>


				<div class="row mb-4">
					<select id="input2" name="input2" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
					</select>
					<div class="col">
						<h3>Dar el alto a un taxi.</h3>
					</div>
					<span id="error2" class="errorX col"></span>
				</div>

				<div class="row mb-4">
					<select id="input3" name="input3" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
					</select>
					<div class="col">
						<h3>Pagar el viaje.</h3>
					</div>
					<span id="error3" class="errorX col"></span>
				</div>

				<div class="row mb-4">
					<select id="input4" name="input4" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
					</select>
					<div class="col">
						<h3>Bajar del taxi.</h3>
					</div>
					<span id="error4" class="errorX col"></span>
				</div>

				<div class="row mb-4">
					<select id="input5" name="input5" class="form-select col">
						<option disabled selected value> -- </option>
						<option value="value1">1</option>
						<option value="value2">2</option>
						<option value="value3">3</option>
						<option value="value4">4</option>
						<option value="value5">5</option>
					</select>
					<div class="col">
						<h3>Decir el destino al taxista.</h3>
					</div>
					<span id="error5" class="errorX col"></span>
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


	<script src="assets/js/scriptF18.js"></script>
</body>

</html>