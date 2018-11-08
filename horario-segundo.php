<?php  if($cuatri == 1):?>
                  <?php try {
                        $sql2 = "SELECT idCurso, diaCurso, horaCurso, añoCurso, ordenDia, cuatrimestre, nombreMateria, nombreProfesor ";
                        $sql2 .= "FROM cursos ";
                        $sql2 .= "INNER JOIN materias ";
                        $sql2 .= "ON cursos.materiaCurso=materias.idMaterias ";
                        $sql2 .= "INNER JOIN profesores ";
                        $sql2 .= "ON cursos.profesorCurso=profesores.idProfesor ";
                        $sql2 .= "WHERE añoCurso = 2 AND cuatrimestre = 1 ";
                        $sql2 .= "ORDER BY ordenDia";
                        $resultado2 = $conn->query($sql2);
                      } catch (Exception $e) {
                        $error = $e->getMessage();
                      }?>
                        <div class="calendario">


                          <?php while($cursos = $resultado2->fetch_all(MYSQLI_ASSOC) ) { ?>

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

                        <?php //$conn->close();  ?>
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
                            $sql .= "WHERE añoCurso = 2 AND cuatrimestre = 2 ";
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

                            <?php //$conn->close();  ?>

                      <?php endif; ?>
