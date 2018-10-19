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
        Crear Noticias
        <small>llena el formulario para añadir una noticia</small>
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Crear Noticia</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-novedad.php" enctype="multipart/form-data">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="tituloNovedad">Titulo:</label>
                                          <input type="text" class="form-control" id="tituloNovedad" name="tituloNovedad" placeholder="Titulo">
                                    </div>
                                    <div class="form-group">
                                          <label for="textoNovedad">Texto:</label>
                                          <textarea class="form-control" id="textoNovedad" name="textoNovedad" rows="8" placeholder="Texto"></textarea>
                                    </div>
                                    <div class="form-group">
                                          <label for="fechaNovedad">Fecha:</label>
                                          <input type="date" class="form-control" id="fechaNovedad" name="fechaNovedad" placeholder="Fecha" >
                                    </div>
                                    <div class="form-group">
                                            <label for="activa">Activar:</label>
                                            <select class="form-control seleccionar" name="activa">
                                                <option value="" disabled selected>- Selecione el estado de la noticia -</option>
                                                <option value="1" >Si</option>
                                                <option value="0" >No</option>"

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
