<?php include_once 'includes/templates/header-section.php'; ?>


                <?php
                  try {
                    require_once('includes/funciones/bd_conexion.php');
                    $sql = "SELECT * FROM carreras";
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                  }
               ?>

        <section class="seccion contenedor">

             <?php while($carreras = $resultado->fetch_all(MYSQLI_ASSOC) ) { ?>

                     <?php $nombre = array(); ?>
                     <?php foreach($carreras as $carrera) {
                        $nombre[] = $carrera['nombreCarrera'];
                      } ?>


                     <?php $nombre = array_values(array_unique($nombre)) ?>

                     <?php foreach($carreras as $carrera): ?>
                      <h2><?php echo $carrera['nombreCarrera']; ?></h2>
                      <p><?php echo $carrera['descripCarrera']; ?></p>
                    <a href="/tecnicatura/img/programa_carrera/<?php echo $carrera['programaCarrera']; ?>" download="programa_<?php echo $carrera['programaCarrera']; ?>"><button class="button">PROGRAMA</button></a>
                    <div class="linea">


                    <span></span>
                    </div>
                     <?php endforeach; ?>
                 </div> <!--.calendario-->
                 <?php } ?>

            <?php
               //$conn->close();
            ?>



        </section> <!--seccion-->



        <!-- <section class="seccion contenedor">
              <h2>Galería de fotos</h2>

              <div class="galeria">
                  <a href="img/galeria/01.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/01.jpg">
                  </a>
                  <a href="img/galeria/02.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/02.jpg">
                  </a>
                  <a href="img/galeria/03.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/03.jpg">
                  </a>
                  <a href="img/galeria/04.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/04.jpg">
                  </a>
                  <a href="img/galeria/05.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/05.jpg">
                  </a>
                  <a href="img/galeria/06.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/06.jpg">
                  </a>
                  <a href="img/galeria/07.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/07.jpg">
                  </a>
                  <a href="img/galeria/08.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/08.jpg">
                  </a>
                  <a href="img/galeria/09.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/09.jpg">
                  </a>
                  <a href="img/galeria/10.jpg" data-lightbox="galeria">
                      <img src="img/galeria/thumbs/10.jpg">
                  </a>
              </div>
        </section> -->


    <?php include_once 'includes/templates/footer.php'; ?>
