<?php
require_once VIEW_PATH . 'Templates/headMain.php'
?>
</head>

<body>

  <div class="container">

    <div class="row justify-content-center">


      <div class="col-xl-10 col-lg-12 col-md-9 mt-5 text-white" style="background-color:rgba(0,94,91,0.8);border-radius: 1rem;">
        <div class="row g-0">
          <div class="col-md-6 col-lg-5 d-none d-md-block">
            <img src="assets/imagenes/mental_games.png" alt="ArkGames" class="img-fluid p-1 my-5" style="border-radius: 1rem 0 0 1rem;" />
          </div>
          <div class="col-md-6 col-lg-7 d-flex align-items-center">
            <div class="card-body p-4 p-lg-5 text-black">

              <form action="?c=usuario&a=validar" method="POST">
                <h2 class="fw-bold mb-0 text-white text-center">Empezar a jugar</h2>
                <h5 class="fw-normal mb-4 pb-3 text-center">Ingrese sus datos</h5>

                <div class="form-outline mb-4">
                  <input id="txtapodo" type="text" placeholder="Apodo" name="txtapodo" required class="form-control form-control-user">
                </div>

                <div class="form-outline mb-4">
                  <input id="txtnombre" type="text" placeholder="Nombre" name="txtnombre" required class="form-control form-control-user">
                </div>

                <div class="pt-1 mb-4 text-end">
                  <a class="btn btn-secondary btn-user btn-block mx-3" href="index.php"> Cancelar </a>
                  <button class="btn btn-info btn-user btn-block" type="submit"> Ingresar </button>
                </div>

                <?php
                if (isset($_SESSION['notificar_pwd']) && $_SESSION['notificar_pwd'] == 1) {
                  echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                      </svg>
                      <div>'
                    . $_SESSION['mensaje_pwd'] .
                    '</div>
                    </div>';
                  unset($_SESSION['notificar_pwd'], $_SESSION['mensaje_pwd']);
                }
                ?>


              </form>

            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>