<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Estos son todos los cursos disponibles</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="registros" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Materia</th>
            <th>Dia</th>
            <th>Hora</th>
            <th>Año</th>
            <th>Profesor</th>
            <th>cuatrimestre</th>
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
                          $sql .= " ORDER BY  idCurso";
                          $resultado = $conn->query($sql);
                      } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                      }
                      while($cursos = $resultado->fetch_assoc() ) { ?>
                          <tr>
                              <td><?php echo $cursos['nombreMateria']; ?></td>
                              <td><?php echo $cursos['diaCurso']; ?></td>
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
                          </tr>
                      <?php }  ?>
          </tbody>
          <tfoot>
          <tr>
            <th>Materia</th>
            <th>Dia</th>
            <th>Hora</th>
            <th>Año</th>
            <th>Profesor</th>
            <th>cuatrimestre</th>
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
