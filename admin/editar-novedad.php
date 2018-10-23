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
        Crear Noticias
        <small>modifique el formulario para editar una noticia</small>
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
                        <?php
                            $sql = "SELECT * FROM novedades WHERE idNovedad = $id ";
                            $resultado = $conn->query($sql);
                            $novedad = $resultado->fetch_assoc();
                        ?>
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-novedad.php" enctype="multipart/form-data">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="tituloNovedad">Titulo:</label>
                                          <input type="text" class="form-control" id="tituloNovedad" name="tituloNovedad" placeholder="Titulo" value="<?php echo $novedad['tituloNovedad']; ?>">
                                    </div>
                                    <div class="form-group">
                                          <label for="textoNovedad">Texto:</label>
                                          <textarea class="form-control" id="textoNovedad" name="textoNovedad" rows="8" placeholder="Texto" value="<?php echo $novedad['textNovedad']; ?>"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="fechaNovedad">Fecha: </label>
                                      <input type="date" class="form-control" id="fechaNovedad" name="fechaNovedad" placeholder="Fecha" value="<?php echo $novedad['fechaNovedad']; ?>" >
                                    </div>
                                    <label for="activa">Activar:</label>
                                    <select class="form-control seleccionar" name="activa">
                                      <option value="" disabled>- Selecione el estado de la noticia -</option>
                                      <?php
                                            if ($novedad['isActive'] == 1) { ?>
                                                  <option value="1" selected>Si</option>
                                                  <option value="0" >No</option>"
                                      <?php      }else { ?>
                                                  <option value="1" >Si</option>
                                                  <option value="0" selected>No</option>"
                                          <?php    } ?>
                                       ?>
                                    </select>

                              </div>
                              <!-- /.box-body -->

                              <div class="box-footer">
                                  <input type="hidden" name="registro" value="actualizar">
                                  <input type="hidden" name="id_registro" value="<?php echo $novedad['idNovedad']; ?>">
                                  <button type="submit" class="btn btn-primary" id="crear_registro">Añadir</button>
                                  <a href="lista-novedades.php"><button type="button" class="btn btn-primary">Salir</button></a>
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
