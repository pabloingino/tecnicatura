<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">

        <?php
             $archivo = basename($_SERVER['PHP_SELF']);
             $pagina = str_replace(".php", "", $archivo);
             if($pagina == 'noticias' || $pagina == 'index'){
              echo '<link rel="stylesheet" href="css/colorbox.css">';
             } else if($pagina == 'conferencia') {
                echo '<link rel="stylesheet" href="css/lightbox.css">';
             }
        ?>


        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="<?php echo $pagina; ?>">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header class="site-header">
      <div class="barra">
            <div class="contenedor clearfix">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="logo instituto">
                    </a>
                </div>

                <div class="menu-movil">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <nav class="navegacion-principal clearfix">
                    <a href="/tecnicatura/admin/login.php">Admin</a>
                    <a href="carreras.php">Carreras</a>
                    <a href="horarios.php">Alumnos</a>
                    <a href="noticias.php">Noticias</a>
                    <a href="registro.php">Contacto</a>
                </nav>
            </div><!--.contenedor-->
        </div> <!--.barra-->



            <div class="hero-section">


                        <!-- <h1 class="nombre-sitio">ifts n°4</h1> -->

                    </div>

                </div>
            </div><!--.hero-->
        </header>
