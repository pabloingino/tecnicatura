<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Estos son todos los cursos disponibles</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table display tablaHorarios" style="width:100%">
          <caption>Primer Año Primer Cuatrimestre</caption>
          <thead>
          <tr>
            <th style="display: none;">Orden</th>
            <th>Dia</th>
            <th>Materia</th>
            <th>Hora</th>
            <th>Año</th>
            <th>Profesor</th>
            <th>cuatrimestre</th>
            <th>Programa</th>
          </tr>
          </thead>
          <tbody>
                  <?php
                      try {
                          $sql = "SELECT idCurso, diaCurso, ordenDia, horaCurso, añoCurso, cuatrimestre, nombreMateria, programaMateria, nombreProfesor,  apellidoProfesor";
                          $sql .= " FROM cursos ";
                          $sql .= " INNER JOIN materias ";
                          $sql .= " ON cursos.materiaCurso=materias.idMaterias ";
                          $sql .= " INNER JOIN profesores ";
                          $sql .= " ON cursos.profesorCurso=profesores.idProfesor ";
                          $sql .= " WHERE añoCurso = 1  AND cuatrimestre = 1";
                          $sql .= " ORDER BY ordenDia ";
                          $resultado = $conn->query($sql);
                      } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                      }
                      while($cursos = $resultado->fetch_assoc() ) { ?>
                          <tr>
                              <td style="display: none;"><?php echo $cursos['ordenDia']; ?></td>
                              <td><?php echo $cursos['diaCurso']; ?></td>
                              <td><?php echo $cursos['nombreMateria']; ?></td>
                              <td><?php echo $cursos['horaCurso']; ?></td>
                              <td><?php
                                        if ($cursos['añoCurso'] == 1) {
                                            echo "Primero";
                                        }
                                        if ($cursos['añoCurso'] == 2) {
                                            echo "Segundo";
                                        }
                                        if ($cursos['añoCurso'] == 3) {
                                            echo "Tercero";
                                        }
                                    ?>
                              </td>
                              <td><?php echo $cursos['nombreProfesor'] . " " . $cursos['apellidoProfesor']; ?></td>
                              <td>
                                <?php
                                          if ($cursos['cuatrimestre'] == 1) {
                                              echo "Primero";
                                          }
                                          if ($cursos['cuatrimestre'] == 2) {
                                              echo "Segundo";
                                          }
                                  ?>
                              </td>
                              <td>
                                  <a href="img/programa_materia/<?php echo $cursos['programaMateria']; ?>" class="btn btn-flat margin">
                                    <i class="glyphicon glyphicon-cloud-download"></i>
                                  </a>
                              </td>
                          </tr>
                      <?php }  ?>
          </tbody>
          <tfoot>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </tfoot>
        </table>
        <!-- TABLA DE PRIMER AÑO SEGUNDO CUATRIMESTRE  -->
        <table class="table display tablaHorarios" style="width:100%">
          <caption>Primer Año Segundo Cuatrimestre</caption>
          <thead>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </thead>
          <tbody>
                  <?php
                      try {
                          $sql = "SELECT idCurso, diaCurso, ordenDia, horaCurso, añoCurso, cuatrimestre, nombreMateria, nombreProfesor,  apellidoProfesor";
                          $sql .= " FROM cursos ";
                          $sql .= " INNER JOIN materias ";
                          $sql .= " ON  cursos.materiaCurso=materias.idMaterias ";
                          $sql .= " INNER JOIN profesores ";
                          $sql .= " ON cursos.profesorCurso=profesores.idProfesor ";
                          $sql .= " WHERE  añoCurso = 1  AND cuatrimestre = 2";
                          $sql .= " ORDER BY  ordenDia ";
                          $resultado = $conn->query($sql);
                      } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                      }
                      while($cursos = $resultado->fetch_assoc() ) { ?>
                          <tr>
                            <td style="display: none;"><?php echo $cursos['ordenDia']; ?></td>
                            <td><?php echo $cursos['diaCurso']; ?></td>
                            <td><?php echo $cursos['nombreMateria']; ?></td>
                            <td><?php echo $cursos['horaCurso']; ?></td>
                              <td><?php
                                        if ($cursos['añoCurso'] == 1) {
                                            echo "Primero";
                                        }
                                        if ($cursos['añoCurso'] == 2) {
                                            echo "Segundo";
                                        }
                                        if ($cursos['añoCurso'] == 3) {
                                            echo "Tercero";
                                        }
                                    ?>
                              </td>
                              <td><?php echo $cursos['nombreProfesor'] . " " . $cursos['apellidoProfesor']; ?></td>
                              <td>
                                <?php
                                          if ($cursos['cuatrimestre'] == 1) {
                                              echo "Primero";
                                          }
                                          if ($cursos['cuatrimestre'] == 2) {
                                              echo "Segundo";
                                          }
                                  ?>
                              </td>
                              <td>
                                  <a href="img/programa_materia/<?php echo $cursos['programaMateria']; ?>" class="btn btn-flat margin">
                                    <i class="glyphicon glyphicon-cloud-download"></i>
                                  </a>
                              </td>
                          </tr>
                      <?php }  ?>
          </tbody>
          <tfoot>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </tfoot>
        </table>
        <!-- TABLA DE SEGUNDO AÑO PRIMERO CUATRIMESTRE  -->
        <table class="table display tablaHorarios" style="width:100%">
          <caption>Segundo Año Primer Cuatrimestre</caption>
          <thead>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </thead>
          <tbody>
                  <?php
                      try {
                          $sql = "SELECT idCurso, diaCurso, ordenDia, horaCurso, añoCurso, cuatrimestre, nombreMateria, nombreProfesor,  apellidoProfesor";
                          $sql .= " FROM cursos ";
                          $sql .= " INNER JOIN materias ";
                          $sql .= " ON  cursos.materiaCurso=materias.idMaterias ";
                          $sql .= " INNER JOIN profesores ";
                          $sql .= " ON cursos.profesorCurso=profesores.idProfesor ";
                          $sql .= " WHERE  añoCurso = 2  AND cuatrimestre = 1";
                          $sql .= " ORDER BY  ordenDia ";
                          $resultado = $conn->query($sql);
                      } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                      }
                      while($cursos = $resultado->fetch_assoc() ) { ?>
                          <tr>
                            <td style="display: none;"><?php echo $cursos['ordenDia']; ?></td>
                            <td><?php echo $cursos['diaCurso']; ?></td>
                            <td><?php echo $cursos['nombreMateria']; ?></td>
                            <td><?php echo $cursos['horaCurso']; ?></td>
                              <td><?php
                                        if ($cursos['añoCurso'] == 1) {
                                            echo "Primero";
                                        }
                                        if ($cursos['añoCurso'] == 2) {
                                            echo "Segundo";
                                        }
                                        if ($cursos['añoCurso'] == 3) {
                                            echo "Tercero";
                                        }
                                    ?>
                              </td>
                              <td><?php echo $cursos['nombreProfesor'] . " " . $cursos['apellidoProfesor']; ?></td>
                              <td>
                                <?php
                                          if ($cursos['cuatrimestre'] == 1) {
                                              echo "Primero";
                                          }
                                          if ($cursos['cuatrimestre'] == 2) {
                                              echo "Segundo";
                                          }
                                  ?>
                              </td>
                              <td>
                                  <a href="img/programa_materia/<?php echo $cursos['programaMateria']; ?>" class="btn btn-flat margin">
                                    <i class="glyphicon glyphicon-cloud-download"></i>
                                  </a>
                              </td>
                          </tr>
                      <?php }  ?>
          </tbody>
          <tfoot>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </tfoot>
        </table>
        <!-- TABLA DE SEGUNDO AÑO SEGUNDO CUATRIMESTRE  -->
        <table class="table display tablaHorarios" style="width:100%">
          <caption>Segundo Año Segundo Cuatrimestre</caption>
          <thead>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </thead>
          <tbody>
                  <?php
                      try {
                          $sql = "SELECT idCurso, diaCurso, ordenDia, horaCurso, añoCurso, cuatrimestre, nombreMateria, nombreProfesor,  apellidoProfesor";
                          $sql .= " FROM cursos ";
                          $sql .= " INNER JOIN materias ";
                          $sql .= " ON  cursos.materiaCurso=materias.idMaterias ";
                          $sql .= " INNER JOIN profesores ";
                          $sql .= " ON cursos.profesorCurso=profesores.idProfesor ";
                          $sql .= " WHERE  añoCurso = 2  AND cuatrimestre = 2";
                          $sql .= " ORDER BY  ordenDia ";
                          $resultado = $conn->query($sql);
                      } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                      }
                      while($cursos = $resultado->fetch_assoc() ) { ?>
                          <tr>
                            <td style="display: none;"><?php echo $cursos['ordenDia']; ?></td>
                            <td><?php echo $cursos['diaCurso']; ?></td>
                            <td><?php echo $cursos['nombreMateria']; ?></td>
                            <td><?php echo $cursos['horaCurso']; ?></td>
                              <td><?php
                                        if ($cursos['añoCurso'] == 1) {
                                            echo "Primero";
                                        }
                                        if ($cursos['añoCurso'] == 2) {
                                            echo "Segundo";
                                        }
                                        if ($cursos['añoCurso'] == 3) {
                                            echo "Tercero";
                                        }
                                    ?>
                              </td>
                              <td><?php echo $cursos['nombreProfesor'] . " " . $cursos['apellidoProfesor']; ?></td>
                              <td>
                                <?php
                                          if ($cursos['cuatrimestre'] == 1) {
                                              echo "Primero";
                                          }
                                          if ($cursos['cuatrimestre'] == 2) {
                                              echo "Segundo";
                                          }
                                  ?>
                              </td>
                              <td>
                                  <a href="img/programa_materia/<?php echo $cursos['programaMateria']; ?>" class="btn btn-flat margin">
                                    <i class="glyphicon glyphicon-cloud-download"></i>
                                  </a>
                              </td>
                          </tr>
                      <?php }  ?>
          </tbody>
          <tfoot>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </tfoot>
        </table>
        <!-- TABLA DE TERCER AÑO PRIMER CUATRIMESTRE  -->
        <table class="table display tablaHorarios" style="width:100%">
          <caption>Tercer Año Primer Cuatrimestre</caption>
          <thead>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </thead>
          <tbody>
                  <?php
                      try {
                          $sql = "SELECT idCurso, diaCurso, ordenDia, horaCurso, añoCurso, cuatrimestre, nombreMateria, nombreProfesor,  apellidoProfesor";
                          $sql .= " FROM cursos ";
                          $sql .= " INNER JOIN materias ";
                          $sql .= " ON  cursos.materiaCurso=materias.idMaterias ";
                          $sql .= " INNER JOIN profesores ";
                          $sql .= " ON cursos.profesorCurso=profesores.idProfesor ";
                          $sql .= " WHERE  añoCurso = 3  AND cuatrimestre = 1";
                          $sql .= " ORDER BY  ordenDia ";
                          $resultado = $conn->query($sql);
                      } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                      }
                      while($cursos = $resultado->fetch_assoc() ) { ?>
                          <tr>
                            <td style="display: none;"><?php echo $cursos['ordenDia']; ?></td>
                            <td><?php echo $cursos['diaCurso']; ?></td>
                            <td><?php echo $cursos['nombreMateria']; ?></td>
                            <td><?php echo $cursos['horaCurso']; ?></td>
                              <td><?php
                                        if ($cursos['añoCurso'] == 1) {
                                            echo "Primero";
                                        }
                                        if ($cursos['añoCurso'] == 2) {
                                            echo "Segundo";
                                        }
                                        if ($cursos['añoCurso'] == 3) {
                                            echo "Tercero";
                                        }
                                    ?>
                              </td>
                              <td><?php echo $cursos['nombreProfesor'] . " " . $cursos['apellidoProfesor']; ?></td>
                              <td>
                                <?php
                                          if ($cursos['cuatrimestre'] == 1) {
                                              echo "Primero";
                                          }
                                          if ($cursos['cuatrimestre'] == 2) {
                                              echo "Segundo";
                                          }
                                  ?>
                              </td>
                              <td>
                                  <a href="img/programa_materia/<?php echo $cursos['programaMateria']; ?>" class="btn btn-flat margin">
                                    <i class="glyphicon glyphicon-cloud-download"></i>
                                  </a>
                              </td>
                          </tr>
                      <?php }  ?>
          </tbody>
          <tfoot>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </tfoot>
        </table>
        <!-- TABLA DE TERCERO AÑO SEGUNDO CUATRIMESTRE  -->
        <table class="table display tablaHorarios" style="width:100%">
          <caption>Tercer Año Segundo Cuatrimestre</caption>
          <thead>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </thead>
          <tbody>
                  <?php
                      try {
                          $sql = "SELECT idCurso, diaCurso, ordenDia, horaCurso, añoCurso, cuatrimestre, nombreMateria, nombreProfesor,  apellidoProfesor";
                          $sql .= " FROM cursos ";
                          $sql .= " INNER JOIN materias ";
                          $sql .= " ON  cursos.materiaCurso=materias.idMaterias ";
                          $sql .= " INNER JOIN profesores ";
                          $sql .= " ON cursos.profesorCurso=profesores.idProfesor ";
                          $sql .= " WHERE  añoCurso = 3  AND cuatrimestre = 2";
                          $sql .= " ORDER BY  ordenDia ";
                          $resultado = $conn->query($sql);
                      } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                      }
                      while($cursos = $resultado->fetch_assoc() ) { ?>
                          <tr>
                            <td style="display: none;"><?php echo $cursos['ordenDia']; ?></td>
                            <td><?php echo $cursos['diaCurso']; ?></td>
                            <td><?php echo $cursos['nombreMateria']; ?></td>
                            <td><?php echo $cursos['horaCurso']; ?></td>
                              <td><?php
                                        if ($cursos['añoCurso'] == 1) {
                                            echo "Primero";
                                        }
                                        if ($cursos['añoCurso'] == 2) {
                                            echo "Segundo";
                                        }
                                        if ($cursos['añoCurso'] == 3) {
                                            echo "Tercero";
                                        }
                                    ?>
                              </td>
                              <td><?php echo $cursos['nombreProfesor'] . " " . $cursos['apellidoProfesor']; ?></td>
                              <td>
                                <?php
                                          if ($cursos['cuatrimestre'] == 1) {
                                              echo "Primero";
                                          }
                                          if ($cursos['cuatrimestre'] == 2) {
                                              echo "Segundo";
                                          }
                                  ?>
                              </td>
                              <td>
                                  <a href="img/programa_materia/<?php echo $cursos['programaMateria']; ?>" class="btn btn-flat margin">
                                    <i class="glyphicon glyphicon-cloud-download"></i>
                                  </a>
                              </td>
                          </tr>
                      <?php }  ?>
          </tbody>
          <tfoot>
            <tr>
              <th style="display: none;">Orden</th>
              <th>Dia</th>
              <th>Materia</th>
              <th>Hora</th>
              <th>Año</th>
              <th>Profesor</th>
              <th>cuatrimestre</th>
              <th>Programa</th>
            </tr>
          </tfoot>
        </table>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
