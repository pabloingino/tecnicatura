<?php
    try {
      require_once('includes/funciones/bd_conexion.php');
      $sql = "SELECT * FROM `novedades` WHERE  isActive = 1";
      $resultado = $conn->query($sql);
    } catch (Exception $e) {
      $error = $e->getMessage();
    }
 ?>

 <section class="invitados contenedor seccion">
                     <h2>Nuestros Novedades</h2>
                     <ul class="lista-invitados clearfix">

                         <?php while($novedades = $resultado->fetch_assoc() ){ ?>

                             <li>
                                 <div class="invitado">
                                     <a class="invitado-info" href="#invitado<?php echo $novedades['idNovedad']; ?>">
                                         <!-- <img src="img/invitados/<?php echo $novedades['tituloNovedad'] ?>" alt="Imagen invitado"> -->
                                         <p><?php echo $novedades['tituloNovedad'];?></p>
                                     </a>
                                 </div> <!-- END .invitado -->
                             </li>

                             <!-- <div style="display:none;"> -->
                                <div >
                                 <div class="invitado-info" id="invitado<?php echo $novedades['idNovedad']; ?>">
                                     <h2><?php echo $novedades['tituloNovedad'] ?></h2>
                                     <!-- <img src="img/<?php echo $novedades['url_imagen'] ?>" alt=""> -->
                                     <p><?php echo $novedades['textNovedad'] ?></p>
                                 </div>

                             </div>

             <?php } ?>

                     </ul> <!-- END lista-invitados -->
                 </section> <!-- END .invitados -->

<?php
  $conn->close();
?>
