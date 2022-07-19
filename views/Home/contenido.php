<?php
require_once VIEW_PATH . 'Templates/headMain.php'
?>
</head>

<body>
	<?php
	include_once VIEW_PATH . 'Templates/headerGames.php'
	?>


	<h1 class="tituloContenido">TALLERES</h1>
	<p class="indicaciones">Acceda a cualquier taller con un click</p>
	<div class="indiceContenido">

		<div class="talleresFila">

			<div class="contenedorBotonTaller">

				<div class="icon">
					<a href="?c=atencion"><span class="icon-icono-01"></span></a>
				</div>

				<div class="button">
					<a href="?c=atencion"><b>Atención</b></a>
				</div>
				<!-- <div class="container">
					<div class="star-widget">
						<input type="radio" name="rate" id="rate-10">
						<label for="rate-10" class="fas fa-star"></label>
						<input type="radio" name="rate" id="rate-9">
						<label for="rate-9" class="fas fa-star"></label>
						<input type="radio" name="rate" id="rate-8">
						<label for="rate-8" class="fas fa-star"></label>
						<input type="radio" name="rate" id="rate-7">
						<label for="rate-7" class="fas fa-star"></label>
						<input type="radio" name="rate" id="rate-6">
						<label for="rate-6" class="fas fa-star"></label>
						<input type="radio" name="rate" id="rate-5">
						<label for="rate-5" class="fas fa-star"></label>
						<input type="radio" name="rate" id="rate-4">
						<label for="rate-4" class="fas fa-star"></label>
						<input type="radio" name="rate" id="rate-3">
						<label for="rate-3" class="fas fa-star"></label>
						<input type="radio" name="rate" id="rate-2">
						<label for="rate-2" class="fas fa-star"></label>
						<input type="radio" name="rate" id="rate-1">
						<label for="rate-1" class="fas fa-star"></label>
					</div>
				</div> -->
				Actividades enfocadas a mejorar <br>y mantener la apacidad de <br>concentración.


			</div>

			<div class="contenedorBotonTaller">
				<div class="icon">
					<a href="?c=ejecutivas"><span class="icon-icono-02"></span></a>
				</div>
				<div class="button">
					<a href="?c=ejecutivas"><b>Funciones ejecutivas</b></a>
				</div>
				<!-- <div class="star_rating">
					<button class="star" checked>&#9734;</button>
					<button class="star">&#9734;</button>
					<button class="star">&#9734;</button>
					<button class="star">&#9734;</button>
					<button class="star">&#9734;</button>
				</div> -->



				Actividades que estimula las
				<br>facultades cognitivas de
				<br> razonamiento, control
				<br>atencional y toma de
				<br> decisiones.
			</div>
			<div class="contenedorBotonTaller">
				<div class="icon">
					<a href="?c=lenguaje"><span class="icon-icono-04"></span></a>
				</div>

				<div class="button">
					<a href="?c=lenguaje"><b>Lenguaje</b></a>
				</div>
				Actividades para entrenar la
				<br> capacidad comunicativa tanto
				<br> expresiva como comprensiva.
			</div>


		</div>

		<div class="talleresFila">
			<div class="contenedorBotonTaller">
				<div class="icon">
					<a href="?c=memoria"><span class="icon-icono-03"></span></a>
				</div>
				<div class="button">
					<a href="?c=memoria"><b>Memoria</b></a>
				</div>
				Actividades enfocadas a <br>mejorar la capacidad <br>de memoria.
			</div>
			<!-- <div class="contenedorBotonTaller">
				<div class="icon">
					<a href="?c=percepcion"><span class="icon-icono-05"></span></a>
				</div>
				<div class="button">
					<a href="?c=percepcion"><b>Percepción</b></a>
				</div>
				Actividades que estimulan <br>la capacidad para identificar <br>los objetos del entorno.
			</div>-->

			<div class="contenedorBotonTaller">
				<div class="icon">
					<a href="?c=lectoviso"><span class="icon-icono-06"></span></a>
				</div>
				<div class="button">
					<a href="?c=lectoviso"><b>Lectoescritura y Visoconstrucción</b></a>
				</div>
				Actividades que estimulan <br>la capacidad cognitiva <br>integral de la persona.
			</div> 
		</div>
	</div>

	<?php
	include_once VIEW_PATH . 'Templates/footer.php'
	?>
<script>
	const allStars = document.querySelectorAll('.star');

	allStars.forEach((star, i) => {
		star.onclick = function () {
			let current_star_level = i + 1;
			 
			allStars.forEach((star,j)=>{
				if (current_star_level >= j + 1) {
					star.innerHTML = '&#9733';
				}else{
					star.innerHTML = '&#9734';
				}
			})
		}
	})
</script>

</body>

</html>