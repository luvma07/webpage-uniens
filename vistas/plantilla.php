<!DOCTYPE html>
<html lang="es">
<head>
    
<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Universidad de Ensenada</title>
	<link rel="shortcut icon" href="images/favicon_ue.ico" type="image/x-icon">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vistas/css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="vistas/css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="vistas/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="vistas/css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="vistas/css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php  

    $servidor = Ruta::ctrRutaServidor(); 
	$url = Ruta::ctrRuta();

    ?>

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER-->
    <div id="preloader">
        <div class="loader">
            <img src="<?php echo $servidor; ?>images/loader.gif" alt="#" />
        </div>
    </div>
    <!--end loader -->

    <?php
        include "modulos/cabecera.php";

        //include "modulos/banner.php";

        //include "modulos/sociales.php";

       // include "modulos/main.php";

        include "modulos/laeyl.php";

        //var_dump("Hola");
    ?>

    <!--=====================================
    SCRIPS JS 
    ======================================-->

    <!-- ALL JS FILES -->
    <script src="vistas/js/jquery.min.js"></script>
	<script src="vistas/js/popper.min.js"></script>
    <script src="vistas/js/bootstrap.min.js"></script>

    <!-- ALL PLUGINS -->
    <script src="vistas/js/jquery.magnific-popup.min.js"></script>
    <script src="vistas/js/jquery.pogo-slider.min.js"></script>
    <script src="vistas/js/slider-index.js"></script>
    <script src="vistas/js/smoothscroll.js"></script>
    <script src="vistas/js/form-validator.min.js"></script>
    <script src="vistas/js/contact-form-script.js"></script>
    <script src="vistas/js/isotope.min.js"></script>
    <script src="vistas/js/images-loded.min.js"></script>
    <script src="vistas/js/custom.js"></script>

    <!-- counter js -->
	<script src="vistas/ajax/contador.js"></script>

</body>
</html>