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
        Datos Instituto
        <small>llena el formulario para modificar los datos del Instituto</small>
      </h1>
    </section>
    <?php
        $sql = "SELECT * FROM `datosinstituto` WHERE `idDatos` = 1 ";
        $resultado = $conn->query($sql);
        $datos = $resultado->fetch_assoc();
    ?>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Datos Instituto</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-instituto.php">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="direccion">Dirección:</label>
                                          <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="<?php echo $datos['direccionInstituto']; ?>">
                                    </div>
                                    <div class="form-group">
                                          <label for="altura">Altura:</label>
                                          <input type="number" class="form-control" id="altura" name="altura" placeholder="Altura" value="<?php echo $datos['numeroCasa']; ?>">
                                    </div>
                                    <div class="form-group">
                                          <label for="postal">Codigo Postal: </label>
                                          <input type="number" class="form-control" id="postal" name="postal" placeholder="Codigo Postal" value="<?php echo $datos['codigoPostal']; ?>">
                                    </div>
                                    <div class="form-group">
                                          <label for="localidad">Localidad: </label>
                                          <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Localidad" value="<?php echo $datos['localidadInstituto']; ?>">
                                    </div>
                                    <div class="form-group">
                                          <label for="telefono">Telefono: </label>
                                          <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $datos['telefonoInstituto']; ?>">
                                    </div>
                                    <div class="form-group">
                                          <label for="email">E-Mail: </label>
                                          <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" value="<?php echo $datos['emailInstituto']; ?>">
                                    </div>
                              </div>
                              <!-- /.box-body -->

                              <div class="box-footer">
                                  <input type="hidden" name="registro" value="actualizar">
                                  <input type="hidden" name="id_registro" value="1">

                                  <button type="submit" class="btn btn-primary">Guardar</button>
                                  <a href="dashboard.php"><button type="button" class="btn btn-primary">Salir</button></a>
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
