<?php
        $id = $_GET['id'];
        if(!filter_var($id, FILTER_VALIDATE_INT)) {
            die("Error");
        }

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
        Editar Carrera
        <small>Modifica el formulario para editar una carrera</small>
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Editar Carrera</h3>
                    </div>
                    <div class="box-body">
                        <?php
                            $sql = "SELECT * FROM carreras WHERE idCarreras = $id ";
                            $resultado = $conn->query($sql);
                            $carrera = $resultado->fetch_assoc();
                        ?>
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-carrera.php" enctype="multipart/form-data">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="nombreCarrera">Nombre:</label>
                                          <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" placeholder="Nombre" value="<?php echo $carrera['nombreCarrera']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripCarrera">Descripcion: </label>
                                        <textarea class="form-control" id="descripCarrera" name="descripCarrera" rows="8" placeholder="Descripcion"><?php echo $carrera['descripCarrera']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="imagen_actual">Programa Actual</label>
                                        <br>
                                        <input type="text" class="form-control" id="programaCarrera" name="programaCarrera" readonly="readonly" placeholder="Programa" value="<?php echo $carrera['programaCarrera']; ?>">

                                    </div>
                                    <div class="form-group">
                                      <label for="programaCarrera">Programa:</label>
                                      <input type="file" id="programaCarrera" name="programaCarrera">
                                      <p class="help-block">Añada el programa de la carrera aquí</p>
                                    </div>
                              </div>
                              <!-- /.box-body -->

                              <div class="box-footer">
                                  <input type="hidden" name="registro" value="actualizar">
                                  <input type="hidden" name="id_registro" value="<?php echo $carrera['idCarreras']; ?>">
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
