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
        Crear Profesores
        <small>modifique el formulario para editar un profesor</small>
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Crear Invitado</h3>
                    </div>
                    <div class="box-body">
                        <?php
                            $sql = "SELECT * FROM profesores WHERE idProfesor = $id ";
                            $resultado = $conn->query($sql);
                            $profesor = $resultado->fetch_assoc();
                        ?>
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-profesor.php" enctype="multipart/form-data">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="nombre_invitado">Nombre:</label>
                                          <input type="text" class="form-control" id="nombre_invitado" name="nombre_profesor" placeholder="Nombre" value="<?php echo $profesor['nombreProfesor']; ?>">
                                    </div>
                                    <div class="form-group">
                                          <label for="apellido_profesor">Apellido:</label>
                                          <input type="text" class="form-control" id="apellido_profesor" name="apellido_profesor" placeholder="Apellido" value="<?php echo $profesor['apellidoProfesor']; ?>">
                                    </div>
                                    <div class="form-group">
                                      <label for="dni_profesor">DNI: </label>
                                      <input type="number" class="form-control" id="dni_profesor" name="dni_profesor" placeholder="DNI" value="<?php echo $profesor['dniProfesor']; ?>" >
                                    </div>

                              </div>
                              <!-- /.box-body -->

                              <div class="box-footer">
                                  <input type="hidden" name="registro" value="actualizar">
                                  <input type="hidden" name="id_registro" value="<?php echo $profesor['idProfesor']; ?>">
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
