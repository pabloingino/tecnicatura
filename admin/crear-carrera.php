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
        Crear Carreras
        <small>llena el formulario para añadir una carrera</small>
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Crear Carrera</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-carrera.php" enctype="multipart/form-data">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="nombreCarrera">Nombre:</label>
                                          <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripCarrera">Descripcion: </label>
                                        <textarea class="form-control" id="descripCarrera" name="descripCarrera" rows="8" placeholder="Descripcion"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="programaCarrera">Programa:</label>
                                      <input type="file" id="programaCarrera" name="programaCarrera">
                                      <p class="help-block">Añada el programa de la carrera aquí</p>
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
