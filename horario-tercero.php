<?php  if($cuatri == 1):?>
<?php try {
      $sql3 = "SELECT idCurso, diaCurso, horaCurso, añoCurso, ordenDia, cuatrimestre, nombreMateria, nombreProfesor ";
      $sql3 .= "FROM cursos ";
      $sql3 .= "INNER JOIN materias ";
      $sql3 .= "ON cursos.materiaCurso=materias.idMaterias ";
      $sql3 .= "INNER JOIN profesores ";
      $sql3 .= "ON cursos.profesorCurso=profesores.idProfesor ";
      $sql3 .= "WHERE añoCurso = 3 AND cuatrimestre = 1 ";
      $sql3 .= "ORDER BY ordenDia";
      $resultado3 = $conn->query($sql3);
    } catch (Exception $e) {
      $error = $e->getMessage();
    }?>
      <div class="calendario">


        <?php while($cursos = $resultado3->fetch_all(MYSQLI_ASSOC) ) { ?>

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
          $sql .= "WHERE añoCurso = 3 AND cuatrimestre = 2 ";
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
