<?php
        $id = $_GET['id'];

        if(!filter_var($id, FILTER_VALIDATE_INT)):
            die("Error");
        else:
        include_once 'funciones/sesiones.php';
        include_once 'templates/header.php';
        include_once 'funciones/funciones.php';
        include_once 'templates/barra.php';
        include_once 'templates/navegacion.php';


?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Curso
        <small>llena el formulario para editar un cursos</small>
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Editar Curso</h3>
                    </div>
                    <div class="box-body">
                        <?php
                            $sql = "SELECT * FROM cursos WHERE idCurso = $id ";
                            $resultado = $conn->query($sql);
                            $curso = $resultado->fetch_assoc();
                        ?>


                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-curso.php">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="dia">Dia de cursada:</label>
                                          <select name="dia_curso" class="form-control seleccionar">
                                            <?php
                                              switch ($curso[ordenDia]) {
                                              case '1':
                                               ?>
                                                <option value="" disabled >- Seleccione el dia -</option>
                                                <option value="1" selected>Lunes</option>
                                                <option value="2" >Martes</option>
                                                <option value="3" >Miercoles</option>
                                                <option value="4" >Jueves</option>
                                                <option value="5" >Viernes</option>
                                              <?php   break; ?>
                                            <?php   case '2':  ?>
                                                <option value="" disabled >- Seleccione el dia -</option>
                                                <option value="1" >Lunes</option>
                                                <option value="2" selected>Martes</option>
                                                <option value="3" >Miercoles</option>
                                                <option value="4" >Jueves</option>
                                                <option value="5" >Viernes</option>
                                            <?php   break; ?>
                                            <?php   case '3':  ?>
                                                <option value="" disabled >- Seleccione el dia -</option>
                                                <option value="1" >Lunes</option>
                                                <option value="2" >Martes</option>
                                                <option value="3" selected>Miercoles</option>
                                                <option value="4" >Jueves</option>
                                                <option value="5" >Viernes</option>
                                            <?php   break; ?>
                                            <?php   case '4':  ?>
                                                <option value="" disabled >- Seleccione el dia -</option>
                                                <option value="1" >Lunes</option>
                                                <option value="2" >Martes</option>
                                                <option value="3" >Miercoles</option>
                                                <option value="4" selected>Jueves</option>
                                                <option value="5" >Viernes</option>
                                            <?php   break; ?>
                                            <?php   case '5':  ?>
                                                <option value="" disabled >- Seleccione el dia -</option>
                                                <option value="1" >Lunes</option>
                                                <option value="2" >Martes</option>
                                                <option value="3" >Miercoles</option>
                                                <option value="4" >Jueves</option>
                                                <option value="5" selected>Viernes</option>
                                            <?php   break;
                                                default:?>
                                                <option value="" disabled selected>- Seleccione el dia -</option>
                                                <option value="1" >Lunes</option>
                                                <option value="2" >Martes</option>
                                                <option value="3" >Miercoles</option>
                                                <option value="4" >Jueves</option>
                                                <option value="5" >Viernes</option>
                                                <?php   break; }
                                            ?>
                                          </select>
                                    </div>

                                    <div class="form-group">
                                          <label for="nombre">Materia:</label>
                                          <select name="materia_curso" class="form-control seleccionar">
                                              <option value="0" disabled selected>- Seleccione la materia-</option>
                                                    <?php
                                                        try {
                                                            $sql = "SELECT * FROM materias ";
                                                            $resultado = $conn->query($sql);
                                                            while($materias = $resultado->fetch_assoc()) {
                                                              if($materias['idMaterias'] == $curso['materiaCurso']) { ?>
                                                                      <option value="<?php echo $materias['idMaterias']; ?>" selected>
                                                                          <?php echo $materias['nombreMateria']; ?>
                                                                      </option>
                                                                  <?php } else { ?>
                                                                      <option value="<?php echo $materias['idMaterias']; ?>" >
                                                                          <?php echo $materias['nombreMateria']; ?>
                                                                      </option>

                                                            <?php }
                                                          }
                                                        } catch (Exception $e) {
                                                            echo "Error: " . $e->getMessage();
                                                        }


                                                    ?>
                                          </select>
                                    </div>
                                    <div class="bootstrap-timepicker">
                                          <div class="form-group">
                                                <label>Hora:</label>

                                                <div class="input-group">
                                                      <input type="number" class="form-control" name="hora_curso" min="1" max="5" value="<?php echo $curso['horaCurso']; ?>" placeholder="Selecione la cantidad de horas diaria de la cursada">

                                                      <div class="input-group-addon">
                                                          <i class="fa fa-clock-o"></i>
                                                      </div>
                                                </div>
                                              </div>
                                    </div>
                                    <div class="form-group">
                                          <label>cuatrimestre:</label>
                                          <select name="cuatrimestre" class="form-control seleccionar">
                                            <?php if ($curso['cuatrimestre'] == 1) { ?>
                                              <option value="" disabled >- Seleccione el cuatrimestre -</option>
                                              <option value="1" selected>Primero</option>
                                              <option value="2" >Segundo</option>
                                            <?php  } else {?>
                                              <option value="" disabled >- Seleccione el cuatrimestre -</option>
                                              <option value="1" >Primero</option>
                                              <option value="2" selected>Segundo</option>
                                            <?php }?>
                                          </select>
                                          <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                          <label>Año Curso:</label>
                                          <select name="año_curso" class="form-control seleccionar">
                                            <?php if ($curso['añoCurso'] == 1) { ?>
                                              <option value="" disabled >- Seleccione el año -</option>
                                              <option value="1" selected>Primero</option>
                                              <option value="2" >Segundo</option>
                                              <option value="3" >Tercero</option>
                                            <?php  } if ($curso['añoCurso'] == 2) { ?>
                                              <option value="" disabled >- Seleccione el año -</option>
                                              <option value="1" >Primero</option>
                                              <option value="2" selected>Segundo</option>
                                              <option value="3" >Tercero</option>
                                            <?php  } if ($curso['añoCurso'] == 3) { ?>
                                              <option value="" disabled >- Seleccione el año -</option>
                                              <option value="1" >Primero</option>
                                              <option value="2" >Segundo</option>
                                              <option value="3" selected>Tercero</option>
                                            <?php  } ?>
                                          </select>
                                          <!-- /.input group -->
                                    </div>


                                    <div class="form-group">
                                          <label for="nombre">Profesor:</label>
                                          <select name="profesor" class="form-control seleccionar" >
                                              <option value="0">- Seleccione -</option>
                                                    <?php
                                                        try {
                                                            $sql = "SELECT idProfesor, nombreProfesor, apellidoProfesor FROM profesores;";
                                                            $resultado = $conn->query($sql);
                                                            while($profesor = $resultado->fetch_assoc()) {
                                                              if($profesor['idProfesor'] == $curso['profesorCurso']) { ?>
                                                                      <option value="<?php echo $profesor['idProfesor']; ?>" selected>
                                                                          <?php echo $profesor['nombreProfesor'] . " " . $profesor['apellidoProfesor']; ?>
                                                                      </option>
                                                                  <?php } else { ?>
                                                                      <option value="<?php echo $profesor['idProfesor']; ?>" >
                                                                          <?php echo $profesor['nombreProfesor'] ." ". $profesor['apellidoProfesor']; ?>
                                                                      </option>

                                                            <?php }
                                                          }
                                                        } catch (Exception $e) {
                                                            echo "Error: " . $e->getMessage();
                                                        }


                                                    ?>
                                          </select>
                                    </div>
                                    <div class="box-footer">
                                        <input type="hidden" name="registro" value="actualizar">
                                        <input type="hidden" name="id_registro" value="<?php  echo $id; ?>">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                              </form>
                        </div>
                              <!-- /.box-body -->
                  </div>
                  <!-- /.box -->

                </section>
                <!-- /.content -->

                </div>
        </div>
  </div>
  <!-- /.content-wrapper -->

  <?php
          include_once 'templates/footer.php';
      endif;
  ?>
