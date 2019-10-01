<?php  
  session_start();
  if ($_SESSION["usuario"] != "1") {
    header("Location: ../../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../../vendor/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../css/estilos.css">
		<link rel="stylesheet" href="../../css/simple-sidebar.css">
		<link rel="shortcut icon" href="../../files/img/ITMS2.ico">
		<title>Subir curso</title>
	</head>


	<body>
    <div class="d-flex toggled" id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">

        <div class="">
            <a href="home.php">
              <img src="../../files/img/Logo ITMS.png" class="logo">
            </a>
        </div>

        <div class="list-group list-group-flush b_right">

          <ul class="navbar-nav list-group-item-action">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                <div class="barra"></div>
                <span>Mi Perfil</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="subir_curso.php">Subir curso</a>
                <a class="dropdown-item" href="mis_cursos.php">Mis cursos</a>
                <a class="dropdown-item" href="../models/actualizar_perfil.php">Actualizar perfil</a>
                <br>
                <a class="dropdown-item" href="../models/cerrar_sesion.php">Cerrar sesión</a>
                <br>
              </div>
            </li>
          </ul>

          <a href="#" class="list-group-item list-group-item-action enlaces">
            <div class="barra"></div>
            <span>Audios</span>
          </a>

          <a href="#" class="list-group-item list-group-item-action enlaces">
            <div class="barra"></div>
            <span>Videos</span>
          </a>

          <a href="#" class="list-group-item list-group-item-action enlaces">
            <div class="barra"></div>
            <span>Multimedia</span> 
          </a>

          <a href="#" class="list-group-item list-group-item-action enlaces">
            <div class="barra"></div>
            <span>Documentos</span> 
          </a>

          <div class="row centro color3 b_bottom2" style="width: 106%; padding-top: 14%; padding-bottom: 5%">
              <a href="../views/home.php"><img src="../../files/img/ITMS2.png" class="logohome"></a>
          </div>

          <div class="t_centro color3 b_bottom" style="font-size: 11px; padding-top: 5%; padding-bottom: 5%">
            ITMS Capacitación (1) 593-1770<br>
            &copy; Todos los derechos reservados <br>
            2019
          </div>

        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navegacion b_bottom fixed-top">
        <button class="btn boton_menu" id="menu-toggle">
          <i class="fas fa-bars"></i>
        </button>

          <ul class="navbar-nav sesion">
            <li class="nav-item">
              <?php 
                echo "Bienvenido(a) ".$_SESSION["nombres"]." ".$_SESSION["apellidos"];
              ?>
            </li>
          </ul>
      </nav>

      <br>
      <br>
      <br>
      <br>
      <br>

      <div class="container div2 color2">
        <div class="row b_bottom">
          <div class="col-sm-3 color1">
            <img src="../../files/img/Logo ITMS.png" class="logo2">
          </div>
          <div class="col-sm-9 encabezado2">
            Subir curso
          </div>
        </div>

        <form action="../models/subir_curso.php" enctype="multipart/form-data" method="POST">
          
          <div class="row espacio">
            <div class="col-sm-4 t_centro">
              <label for="name">Nombre del archivo</label>
            </div>
            <div class="col-sm-7">
              <input type="text" name="nombre" id="name" class="form-control inputs" placeholder="nombre archivo..">
            </div>
          </div>
          
          <div class="row espacio">
            <div class="col-sm-4 t_centro">
              <label for="file">Agregar archivo</label>
            </div>
            <div class="col-sm-8">
              <input type="file" name="archivo">
            </div>
          </div>

          <br>
          <div class="row espacio centro">
              <input type="submit" class="btn btn-sm btn-outline-dark" value="Subir archivo"></input>
          </div>
          <br>
        </form>
      </div>
		

    		<script src="../../vendor/js/bootstrap.bundle.min.js"></script>
    		<script src="../../vendor/jquery/jquery.js"></script>
      	<script src="https:kit.fontawesome.com/2c36e9b7b1.js"></script>


		 <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>
	</body>
</html>