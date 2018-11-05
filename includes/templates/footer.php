<?php
    try {
      require_once('includes/funciones/bd_conexion.php');
      $sql4 = "SELECT * FROM `datosinstituto` WHERE  idDatos = '1'";
      $resultado4 = $conn->query($sql4);
    } catch (Exception $e) {
      $error = $e->getMessage();
    }
 ?>
 <?php while($datos = $resultado4->fetch_assoc() ){ ?>
     <footer class="site-footer">
      <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Contactanos</h3>
                <p><i class="fa fa-home"></i><?php echo " " . $datos['direccionInstituto'] . " " . $datos['numeroCasa'] . " CP. " . $datos['codigoPostal'] . " " . $datos['localidadInstituto']; ?><p>
                <p><i class="fa fa-envelope-o"></i><?php echo " " . $datos['emailInstituto']; ?><p>
                <p><i class="fa fa-phone-square"></i><?php echo " " . $datos['telefonoInstituto']; ?><p>
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



          <!-- Begin MailChimp Signup Form -->
          <!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->
          <!-- <style type="text/css"> -->

          <!-- </style>
      <div style="display:none;">
          <div id="mc_embed_signup">
          <form action="//easy-webdev.us11.list-manage.com/subscribe/post?u=b3bb37039b6fbf3db0c1a8331&amp;id=20463b69f2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
          	<h2>Suscribete al Newsletter y no te pierdas nada de este evento</h2>
          <div class="indicates-required"><span class="asterisk">*</span> es obligatorio</div>
          <div class="mc-field-group">
          	<label for="mce-EMAIL">Correo Electrónico  <span class="asterisk">*</span>
          </label>
          	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          	<div id="mce-responses" class="clear">
          		<div class="response" id="mce-error-response" style="display:none"></div>
          		<div class="response" id="mce-success-response" style="display:none"></div>
          	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b3bb37039b6fbf3db0c1a8331_20463b69f2" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Suscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
          </form>
          </div> -->
          <!-- <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script> -->
          <!--End mc_embed_signup-->
        <!-- </div> -->
</footer>
<div id="fb-root"></div>
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
