<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">

					<h5 class="modal-title" id="myModalLabel">Resultados</h5>

					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5 id="puntaje" class="col text-success text-center"></h5>
					<h5 id="puntaje2" class="col text-danger text-center"></h5>
					<div class="row">
						<i class="fa-solid fa-clock col-3 text-end" style="color: blue;"></i>
						<div id="time" class="col-9"></div>
					</div>
					<div class="row">
						<i class="fa-solid fa-check col-3 text-end" style="color: green;"></i>
						<div id="aciertos" class="col-9"></div>
					</div>
					<div class="row">
						<i class="fa-solid fa-xmark col-3 text-end" style="color: red;"></i>
						<div id="errores" class="col-9"></div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="?c=<?php echo ($_SESSION['ModuloActual'])?>&a=<?php echo ($_SESSION['FichaActual'])?>" type="button" class="btn btn-secondary" data-dismiss="modal">Reintentar</a>
					<a href="?c=<?php echo ($_SESSION['ModuloSiguiente'])?>&a=<?php echo ($_SESSION['FichaSiguiente'])?>" type="button" class="btn btn-primary">Siguiente</a>
				</div>
			</div>
		</div>
	</div>