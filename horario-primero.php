<?php  if($cuatri == 1):?>
<?php try {
      require_once('includes/funciones/bd_conexion.php');
      $sql = "SELECT idCurso, diaCurso, horaCurso, añoCurso, ordenDia, cuatrimestre, nombreMateria, nombreProfesor ";
      $sql .= "FROM cursos ";
      $sql .= "INNER JOIN materias ";
      $sql .= "ON cursos.materiaCurso=materias.idMaterias ";
      $sql .= "INNER JOIN profesores ";
      $sql .= "ON cursos.profesorCurso=profesores.idProfesor ";
      $sql .= "WHERE añoCurso = 1 AND cuatrimestre = 1 ";
      $sql .= "ORDER BY ordenDia";
      $resultado = $conn->query($sql);
    } catch (Exception $e) {
      $error = $e->getMessage();
    }?>
      <!-- VARIABLES PARA VALIDAR LA CANTIDAD DE CLASES POR DIA -->
      <?php
        $lu = 0;
        $ma = 0;
        $mi = 0;
        $ju = 0;
        $vi = 0;

       ?>
      <div class="calendario">
        <?php while($cursos = $resultado->fetch_all(MYSQLI_ASSOC) ) { ?>
          <?php $dias = array(); ?>
          <?php foreach($cursos as $curso) {
             $dias[] = $curso['añoCurso'];
             //----- ACA VALIDO LA CANIDAD DE CLASES POR DIA -----
             if ($curso['ordenDia'] == 1) {
               $lu++;
             }
             if ($curso['ordenDia'] == 2) {
               $ma++;
             }
             if ($curso['ordenDia'] == 3) {
               $mi++;
             }
             if ($curso['ordenDia'] == 4) {
               $ju++;
             }
             if ($curso['ordenDia'] == 5) {
               $vi++;
             }

           } ?>


          <?php $dias = array_values(array_unique($dias)) ?>

          <?php $contador = 0; ?>

          <?php foreach($cursos as $curso): ?>
                 <?php if($contador < count($dias)): ?>
                   <?php $curso_nivel = $curso['añoCurso']; ?>
                   <?php if($curso_nivel == $dias[$contador]): ?>
                         <h3>
                               <i class="fa fa-calendar" aria-hidden="true"></i>
                               <?php echo $anio . '° año ' . $cuatri .'° cuatrimestre'; ?>
                         </h3>

                        <?php $contador++; ?>
                   <?php endif; ?>

                 <?php endif; ?>

                <div class="dia">

                      <p class="titulo"><?php echo $curso['diaCurso'] . " " . $curso['ordenDia']; ?></p>
                      <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $curso['nombreMateria'] . " " . $curso['horaCurso'] . " hrs"; ?>
                     <p>


                     </p>
                     <p><i class="fa fa-user" aria-hidden="true"></i>
                           <?php echo $curso['nombreProfesor'] . " " . $curso['añoCurso']; ?>
                     </p>

                </div>
          <?php endforeach; ?>
      </div> <!--.calendario-->
      <?php } ?>

      <?php $conn->close();  ?>
      <?php endif; ?>
  <?php if($cuatri == 2): ?>
    <?php try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT idCurso, diaCurso, horaCurso, añoCurso, ordenDia, cuatrimestre, nombreMateria, nombreProfesor ";
          $sql .= "FROM cursos ";
          $sql .= "INNER JOIN materias ";
          $sql .= "ON cursos.materiaCurso=materias.idMaterias ";
          $sql .= "INNER JOIN profesores ";
          $sql .= "ON cursos.profesorCurso=profesores.idProfesor ";
          $sql .= "WHERE añoCurso = 1 AND cuatrimestre = 2 ";
          $sql .= "ORDER BY ordenDia";
          $resultado = $conn->query($sql);
        } catch (Exception $e) {
          $error = $e->getMessage();
        }?>
          <div class="calendario">


            <?php while($cursos = $resultado->fetch_all(MYSQLI_ASSOC) ) { ?>

              <?php $dias = array(); ?>
              <?php foreach($cursos as $curso) {
                 $dias[] = $curso['añoCurso'];
               } ?>


              <?php $dias = array_values(array_unique($dias)) ?>

              <?php $contador = 0; ?>

              <?php foreach($cursos as $curso): ?>
                     <?php if($contador < count($dias)): ?>
                       <?php $curso_nivel = $curso['añoCurso']; ?>
                       <?php if($curso_nivel == $dias[$contador]): ?>
                             <h3>
                                   <i class="fa fa-calendar" aria-hidden="true"></i>
                                  <?php echo $anio . '° año ' . $cuatri .'° cuatrimestre'; ?>
                             </h3>

                            <?php $contador++; ?>
                       <?php endif; ?>

                     <?php endif; ?>


                    <div class= "dia" >
                          <p class="titulo"><?php echo $curso['diaCurso'] . " " . $curso['ordenDia']; ?></p>
                          <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $curso['nombreMateria'] . " " . $curso['horaCurso'] . " hrs"; ?>
                         <p>


                         </p>
                         <p><i class="fa fa-user" aria-hidden="true"></i>
                               <?php echo $curso['nombreProfesor'] . " " . $curso['añoCurso']; ?>
                         </p>

                    </div>

              <?php endforeach; ?>
          </div> <!--.calendario-->
          <?php } ?>

          <?php $conn->close();  ?>

    <?php endif; ?>
