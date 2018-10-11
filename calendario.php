<?php include_once 'includes/templates/header.php'; ?>




        <section class="seccion contenedor">
              <h2>Calendario de Eventos</h2>

              <?php
                  try {
                    require_once('includes/funciones/bd_conexion.php');
                    $sql = "SELECT idCurso, diaCurso, horaCurso, añoCurso, nombreMateria, nombreProfesor ";
                    $sql .= "FROM cursos ";
                    $sql .= "INNER JOIN materias ";
                    $sql .= "ON cursos.materiaCurso=materias.idMaterias ";
                    $sql .= "INNER JOIN profesores ";
                    $sql .= "ON cursos.profesorCurso=profesores.idProfesor ";
                    $sql .= "ORDER BY añoCurso ";
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                  }
               ?>

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
                                          <!--  <?php echo $curso['añoCurso']; ?>-->
                                          <?php switch ($curso['añoCurso']) {
                                        case 1:
                                          echo 'Primer Año';
                                          break;
                                        case 2:
                                          echo 'Segundo Año';
                                          break;
                                        case 3:
                                          echo 'Tercer Año';
                                          break;
                                        default:
                                            echo "";
                                            break;
                                          }
                                       ?> 

                                    </h3>
                                    
                                   <?php $contador++; ?>
                              <?php endif; ?>
                              
                            <?php endif; ?>

                           <div class="dia">
                                 <p class="titulo"><?php echo $curso['diaCurso']; ?></p>
                                 <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $curso['nombreMateria'] . " " . $curso['horaCurso'] . " hrs"; ?>
                                <p>
                                      <?php $categoria_evento = $curso['horaCurso']; ?>

                                </p>
                                <p><i class="fa fa-user" aria-hidden="true"></i>
                                      <?php echo $curso['nombreProfesor'] . " " . $curso['añoCurso']; ?>
                                </p>

                           </div>
                            
                     <?php endforeach; ?>
                 </div> <!--.calendario-->
                 <?php } ?> 

            <?php
               $conn->close();
            ?>


        </section>


    <?php include_once 'includes/templates/footer.php'; ?>
