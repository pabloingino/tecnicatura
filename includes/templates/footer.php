<?php
    $idDatos = 1;
    try {
      require_once('includes/funciones/bd_conexion.php');
      $sql = "SELECT * FROM `datosinstituto` WHERE  idDatos = '1'";
      $dateResult = $conn->query($sql);
    } catch (Exception $e) {
      $error = $e->getMessage();
    }
    //var_dump($conn);
    //die();
 ?>
 <?php while($datos = $dateResult->fetch_assoc()){ ?>
     <footer class="site-footer">
      <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Contactanos</h3>
                <p><i class="fa fa-home"></i><?php echo "  " . $datos['direccionInstituto'] . " " . $datos['numeroCasa'] . " CP. " . $datos['codigoPostal'] . " " . $datos['localidadInstituto']; ?><p>
                <p><i class="fa fa-envelope-o"></i><?php echo "  " . $datos['emailInstituto']; ?><p>
                <p><i class="fa fa-phone-square"></i><?php echo "  " . $datos['telefonoInstituto']; ?><p>
          </div>
 <?php } ?>
          <div class="menu">
              <h3>Redes <span>sociales</span></h3>
              <nav class="redes-sociales">
                  <a href="https://www.facebook.com/pg/IFTS-N4-Instituto-De-Formaci%C3%B3n-T%C3%A9cnica-Superior-354972001274378/about/?ref=page_internal"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-linkedin " aria-hidden="true"></i></a>
              </nav>
          </div>
          <div class="footer-informacion">
            <div class="logo">
              <a href="index.php">
                  <img src="img/logo.png" alt="logo ifts">
              </a>
            </div>
          </div>
        </div>

    <p class="copyright">
      Todos los derechos Reservados DP SOLUTIONS 2018.
    </p>
</footer>
<div id="fb-root"></div>
<?php $conn->close();  ?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.lettering.js"></script>

<?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'noticias' || $pagina == 'index'){
      echo '<script src="js/jquery.colorbox-min.js"></script>';
      echo '<script src="js/jquery.waypoints.min.js"></script>';
    } else if($pagina == 'conferencia') {
      echo '<script src="js/lightbox.js"></script>';
    }
?>
<script src="js/main.js"></script>
<script src="js/cotizador.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeSzprwFmUOSsAIf36sT9hONLvf3ReD_4&callback=initMap"
async defer></script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us11.list-manage.com","uuid":"b3bb37039b6fbf3db0c1a8331","lid":"20463b69f2"}) })</script>
</body>
</html>
