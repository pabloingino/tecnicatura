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

<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>

<script src="js/main.js"></script>




<script type="text/javascript">
$(document).ready( function () {
    $('.tablaHorarios').DataTable({
          //aca se personaliza el plugins
          language: {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
          }
        });
    });

</script>

</body>
</html>
