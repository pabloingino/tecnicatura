<?php include_once 'includes/templates/header-section.php';
      require_once('includes/funciones/bd_conexion.php');
?>




        <section class="seccion contenedor">
              <h2>Horarios</h2>
                <form class="horarios" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                  <select class="" name="anio">
                    <option value="" disabled selected>--SELECIONE EL AÑO--</option>
                      <option value="1">Primer Año</option>
                      <option value="2">Segundo Año</option>
                      <option value="3">Tercer Año</option>
                  </select> <br>
                  <label for="">CUATRIMESTRE</label> <br>
                  <input class="radio-check" type="radio" name="cuatrimestre" value="1" checked> Primero
                  <span></span>
                  <input class="radio-check" type="radio" name="cuatrimestre" value="2"> Segundo <br>
                  <input class="consultar" type="submit" name="submit" value="Consultar">

                </form>
                <?php
                  $anio = 0;
                  if (isset($_POST['submit'])) {
                    $anio = $_POST['anio'];
                    $cuatri = $_POST['cuatrimestre'];
                  }
                  if (isset($_POST['submit'])){
                    if (empty($anio)) {
                      echo "<p class='error'>* Debes seleccionar el año que deseas consultar</p>";
                    }
                    if (empty($cuatri)) {
                      echo "<p class='error'>* Debes seleccionar el cuatrimestre que deseas consultar</p>";
                    }
                  }?>
                  <!-- //ACA CREAMOS LAS CONSULTAS PARA LOS HORARIOS -->
                  <?php  if($anio == 1):?>
                    <?php include_once 'horario-primero.php'; ?>
                  <?php endif; ?>
                  <!-- ACA SE TERMINA EL AÑO -->
                  <!-- //ACA CREAMOS LAS CONSULTAS PARA LOS HORARIOS -->
                  <?php  if($anio == 2):?>
                    <?php include_once 'horario-segundo.php'; ?>
                  <?php endif; ?>
                  <!-- ACA SE TERMINA EL AÑO -->
                  <!-- //ACA CREAMOS LAS CONSULTAS PARA LOS HORARIOS -->
                  <?php  if($anio == 3):?>
                    <?php include_once 'horario-tercero.php'; ?>
                  <?php endif; ?>
                  <!-- ACA SE TERMINA EL AÑO -->

      </section>
      <!-- <section class="seccion contenedor">

      </section> -->

    <?php include_once 'includes/templates/footer.php'; ?>
