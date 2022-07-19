<?php
require_once VIEW_PATH . 'Templates/headMain.php'
?>
<style>
	.contenido-juego {
		max-width: 400px;
		height: 500px;
	}

	.item-cuadro {
		width: 150px;
		height: 150px;
		position: absolute;
		border: 8px black solid;
		border-radius: 10px;
	}

	.pos1 {
		top: 15%;
		left: 30px;
	}

	.pos2 {
		top: 30%;
		left: 30%;
	}

	.pos3 {
		top: 15%;
		right: 35%;
	}

	.pos4 {
		top: 25%;
		right: 10%;
	}

	.pos5 {
		bottom: 25%;
		left: 15%;
	}

	.pos6 {
		bottom: 10%;
		left: 40%;
	}
	.pos7 {
		bottom: 30%;
		right: 30%;
	}
	.pos8 {
		bottom: 10%;
		right: 20px;
	}
	@media screen and (max-width: 981px) {

		.item-cuadro {
			margin-top: 50px;
			width: 100px;
			height: 100px;
		}
	}
</style>



</head>

<body>

	<?php
	include_once VIEW_PATH . 'Templates/headerGames.php'
	?>

	<div class="container">

		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col">
						<h4 class="card-title">Fíjate qué objetos hay y en qué lugar se encuentran. Luego tendrás que recordarlos.</h4>
					</div>
				</div>

			</div>

			<div class="card-body">

				<div class="contenido-juego">
					<div class="item-cuadro pos1">
					<img alt="imagen" src="assets/imagenes/memoria/m46-02.png" style="width: 100%;">
					</div>
					<div class="item-cuadro pos2">
					<img alt="imagen" src="assets/imagenes/memoria/m46-01.png" style="width: 100%;">
					</div>
					<div class="item-cuadro pos3">

					</div>
					<div class="item-cuadro pos4">
					<img alt="imagen" src="assets/imagenes/memoria/m46-03.png" style="width: 100%;">
					</div>
					<div class="item-cuadro pos5">
						
					</div>
					<div class="item-cuadro pos6">
						
					</div>
					<div class="item-cuadro pos7">
					
					</div>
					<div class="item-cuadro pos8">
						<img alt="imagen" src="assets/imagenes/memoria/m46-04.png" style="width: 100%;">
					</div>
				</div>



			</div>
			<div class="card-footer text-end">
				<a type="button" onclick="pausarConteo()" class="btn btn-primary" href="?c=memoria&a=ficha47">
					¡Listo! <i class="fa-solid fa-play"></i>
				</a>
			</div>

		</div>

	</div>

	<?php
	include_once VIEW_PATH . 'Templates/modalPuntaje.php'
	?>

	<?php
	include_once VIEW_PATH . 'Templates/footer.php'
	?>

	<script src="assets/js/scriptF1.js"></script>
</body>

</html>