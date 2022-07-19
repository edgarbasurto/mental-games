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
				<div class="row">
					<div class="col p-0">
						<h4 class="card-title">¿Cuántos cupcake hay? Escribe el resultado en la casilla de abajo</h4>
					</div>
				</div>

			</div>

			<div class="card-body">

				<div class="row">
					<div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
					<div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
				</div>
				<div class="row">

                <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0">
						<img alt="fruta" src="assets/imagenes/m11/m11-08.png" id="frt1" class="itemM61">
					</div>
                    <div class="col p-0"></div>


				</div>



				<div class="mb-3 row text-end">
					<div class="col p-0"></div>
					<div class="col p-0"></div>
					
					<label for="total" class="form-label col">TOTAL:</label>
					<input type="number" class="form-control col" name="total" id="total" aria-describedby="helpId" placeholder="">
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

	<script src="assets/js/scriptF61.js"></script>
</body>

</html>