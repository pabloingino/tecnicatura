<?php
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
        Crear Curso
        <small>llena el formulario para crear un curso</small>
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Crear Curso</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-curso.php">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="dia">Dia de cursada:</label>
                                          <select name="dia_curso" class="form-control seleccionar">
                                            <option value="" disabled selected>- Seleccione el dia -</option>
                                            <option value="1" >Lunes</option>
                                            <option value="2" >Martes</option>
                                            <option value="3" >Miercoles</option>
                                            <option value="4" >Jueves</option>
                                            <option value="5" >Viernes</option>
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
                                                            while($materias = $resultado->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $materias['idMaterias']; ?>">
                                                                            <?php echo $materias['nombreMateria'];  ?>

                                                                    </option>

                                                            <?php }
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
                                                      <input type="number" class="form-control" name="hora_curso" min="1" max="5" placeholder="Selecione la cantidad de horas diaria de la cursada">

                                                      <div class="input-group-addon">
                                                          <i class="fa fa-clock-o"></i>
                                                      </div>
                                                </div>
                                              </div>
                                    </div>
                                    <div class="form-group">
                                          <label>cuatrimestre:</label>
                                          <select name="cuatrimestre" class="form-control seleccionar">
                                            <option value="" disabled selected>- Seleccione el cuatrimestre -</option>
                                            <option value="1" >Primero</option>
                                            <option value="2" >Segundo</option>
                                          </select>
                                          <!-- /.input group -->
                                    </div>
                                    <div class="form-group">
                                          <label>Año Curso:</label>
                                          <select name="año_curso" class="form-control seleccionar">
                                            <option value="" disabled selected>- Seleccione el año -</option>
                                            <option value="1" >Primero</option>
                                            <option value="2" >Segundo</option>
                                            <option value="3" >Tercero</option>
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
                                                            while($profesor = $resultado->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $profesor['idProfesor']; ?>">
                                                                            <?php echo $profesor['nombreProfesor'] . " " . $profesor['apellidoProfesor']; ?>

                                                                    </option>

                                                            <?php }
                                                        } catch (Exception $e) {
                                                            echo "Error: " . $e->getMessage();
                                                        }


                                                    ?>
                                          </select>
                                    </div>
                              </div>
                              <!-- /.box-body -->

                              <div class="box-footer">
                                  <input type="hidden" name="registro" value="nuevo">
                                  <button type="submit" class="btn btn-primary">Añadir</button>
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
  ?>
