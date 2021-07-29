<?php  

    $servidor = Ruta::ctrRutaServidor(); 
	$url = Ruta::ctrRuta();
/*
    $readJson = "";
    $archivoConfig = "$url/config.txt";
    $config = fopen($archivoConfig, "r");

    while(!feof($config)){          
        $readJson .= (string) fgets($config, 1024);
    }

    $cabeceraText = get_object_vars(json_decode($readJson));

    foreach ($cabeceraText as $key => $value) {
        if (is_object($value)) {

            $valueArray = get_object_vars($value);
            $remplazar = array($key => $valueArray);
            $fullArray = array_replace($cabeceraText, $remplazar);
            $cabeceraText = $fullArray;
            
            foreach ($value as $key1 => $value1) {
                if (is_object($value1)) {
    
                    $valueArray1 = get_object_vars($value1);
                    $remplazar1 = array($key1 => $valueArray1);
                    $fullArray1 = array_replace($valueArray, $remplazar1);
                    $valueArray = $fullArray1;
               
                }
            }
        }
    }

    $remplazar = array("carreras" => $fullArray1);
    $fullArray = array_replace($cabeceraText, $remplazar);
    var_dump($fullArray);
*/
?>

<!--=====================================
Cabecera #12385b
======================================-->

<header class="top-header">
    <div class="section contact_section" style="background: transparent" id="cabezera">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo $url ?>">
                    <img src="<?php echo $servidor ?>images/UniEns_logo_1t_Blanco.png" alt="image">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">

                        <?php

                            //foreach ($fullArray as $key => $value) {
                            //    echo '<li><a class="nav-link" href="#">'.$value.'</a></li>';
                            //}
                            

                        ?>


<!--
                        <li><a class="nav-link active" href="<?php echo $url ?>">Inicio</a></li>

                        IMPLEMENTACION DEL ABOUT ME
                        <li><a class="nav-link" href="about.html">¿Quiénes somos?</a></li>
                        

                        <li class="nav-item dropdown dropdown-hover"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oferta Educativa</a>
                            <ul>
                                <div class="dropdown-menu dropdown-hover-menu" aria-labelledby="navbarDropdownMenuLink">

                                    <a class="dropdown-item" href="LCE.html"> Ciencias de la Educación </a>
                                    <a class="dropdown-item" href="LC.html"> Criminología </a>
                                    <a class="dropdown-item" href="LD.html"> Derecho </a>
                                    <a class="dropdown-item" href="vistas/modulos/laeyl.php"> Administración de Empresas y Logística </a>
                                    <a class="dropdown-item" href="LII.html"> Ingeniería Industrial </a>
                                    <a class="dropdown-item" href="LNI.html"> Negocios Internacionales </a>
                                    <a class="dropdown-item" href="LF.html"> Filosofía </a>
                                    <a class="dropdown-item" href="LMA.html"> Medios Audiovisuales </a>

                                </div>
                            </ul>
                        </li>

                        <li><a class="nav-link" href="#formulario">Contacto</a></li>

                        <li class="nav-item dropdown dropdown-hover"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nuestros Campus</a>
                            <ul>
                                <div class="dropdown-menu dropdown-hover-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#"> Ensenada </a>
                                    <a class="dropdown-item" href="#"> San Quintin </a>
                                </div>
                            </ul>
                        </li>

                        <li><a class="nav-link" href="http://moodle.universidaddeensenada.edu.mx/">Aula Virtual</a></li>
                        -->
                    </ul>
                </div>
                <!-- IMPLEMENTACION DEL BUSCADOR
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Buscar">
                    <a class="search-btn" style="background: #12385b">
                        <img src="<?php echo $servidor ?>images/search_icon.png" alt="#" />
                    </a>
                </div>
                -->
            </div>
        </nav>
    </div>
</header>

