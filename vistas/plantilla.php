<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FIT</title>
  <link rel="shortcut icon" type="image/png" href="vistas/dist/img/favicon-iron.ico>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- SweetAlert 2 -->
    <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
    <link href="vistas/plugins/sweetalert2/sweetalert2.min.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse ">

 
<?php
if(isset($_SESSION['login']) && $_SESSION['login'] == 'activa' ){

  echo '<div class="wrapper">';

// Nav 
  include "vistas/modulos/nav.php";
// menu
  include "vistas/modulos/menu.php";
// paginas
  if(isset($_GET["enlace"])){
    if($_GET["enlace"]=="inicio" ||
       $_GET["enlace"]=="registro"||
       $_GET["enlace"]=="clientes" ||
       $_GET["enlace"]=="planes" ||
       $_GET["enlace"]=="productos"||
       $_GET["enlace"]=="calendario"||
       $_GET["enlace"]=="contacto"||
       $_GET["enlace"]=="instalaciones"||
       $_GET["enlace"]=="registro"||
       $_GET["enlace"]=="rutinas"||
       $_GET["enlace"]=="perfil"||
       $_GET["enlace"]=="crud"||
       $_GET["enlace"]=="salir"
    
    ){ 
      include "vistas/modulos/".$_GET["enlace"].".php";
    }else{
      include "vistas/modulos/404.php";

    }
  }else{
    include "vistas/modulos/inicio.php";

  }

  
  // pie de pagina
  include "vistas/modulos/pie.php";

  echo '</div>' ;
  } else{
    include "vistas/modulos/login.php";
  }
 ?>


 


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vistas/dist/js/demo.js"></script>

<script src="vistas/plugins/moment/moment.min.js"></script>
<script src="vistas/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- general -->
<script src="vistas/js/general.js"></script>

</body>
</html>
