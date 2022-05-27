<header>
  <!-- <div class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container">

            <a class="navbar-brand" href="index.php">
                <img alt="JuegosMentales" height="80" class="d-inline-block align-text-top" src="../../assets/imagenes/mentalgames2.png">
            </a>
            <nav>
                <a href="../../index.php">Inicio</a>
                <span id="puntos"></span>
                <span id="tiempo"></span>
            </nav>
        </div>
    </div> -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="#">
      <img class="logo" alt="JuegosMentales" src="assets/imagenes/mentalgame-icono.png" style="height: 35px;"></a>
      <a class="navbar-brand" href="#">Mental Games</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
         
          <li class="nav-item">
            <span class="nav-link active" id="puntos"></span>
          </li>
          <li class="nav-item">
            <span class="nav-link active" id="tiempo"></span>
          </li>
        </ul>
        <!-- <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form> -->
        <li class="nav-item dropdown" style="list-style:none;">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-circle-user"></i> <?php echo ($_SESSION['NickName']) ?></a>
          <ul class="dropdown-menu" aria-labelledby="dropdown07">
            <li><a class="dropdown-item" href="#">login</a></li>
            <li><a class="dropdown-item" href="#">Ver avances</a></li>
            <li><a class="dropdown-item" href="?c=usuario&a=end">Cerrar Sesión</a></li>
          </ul>
        </li>
        <div> </div>
      </div>
    </div>
  </nav>

</header>