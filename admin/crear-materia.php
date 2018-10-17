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
        Crear Materias
        <small>llena el formulario para añadir una materia</small>
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Crear Materia</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-materia.php" enctype="multipart/form-data">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="nombre_invitado">Nombre:</label>
                                          <input type="text" class="form-control" id="nombre_materia" name="nombre_materia" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                      <label for="archivo_programa">Programa:</label>
                                      <input type="file" id="archivo_programa" name="archivo_programa">
                                      <p class="help-block">Añada el pdf del progama aca</p>
                                    </div>
                                    <div class="form-group">
                                          <label for="nombre">Carrera:</label>
                                          <select name="carrera" class="form-control seleccionar">
                                              <option value="0">- Seleccione -</option>
                                                    <?php
                                                        try {
                                                            $sql = "SELECT * FROM carreras ";
                                                            $resultado = $conn->query($sql);
                                                            while($carMat = $resultado->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $carMat['idCarreras']; ?>">
                                                                            <?php echo $carMat['nombreCarrera']; ?>

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
                                  <button type="submit" class="btn btn-primary" id="crear_registro">Añadir</button>
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
