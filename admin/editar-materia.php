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
        Editar Materias
        <small>Desde aqui podes editar la informacion de las materias</small>
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Editar Materias</h3>
                    </div>
                    <div class="box-body">
                        <?php
                            $sql = "SELECT * FROM materias WHERE idMaterias = $id ";
                            $resultado = $conn->query($sql);
                            $materia = $resultado->fetch_assoc();
                        ?>
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-materia.php" enctype="multipart/form-data">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="nombre_materia">Nombre:</label>
                                          <input type="text" class="form-control" id="nombre_materia" name="nombre_materia" placeholder="Nombre"  value="<?php echo $materia['nombreMateria']; ?>" >
                                    </div>
                                    <div class="form-group">
                                        <label for="imagen_actual">Programa Actual</label>
                                        <br>
                                        <input type="text" class="form-control" id="progama_actual" name="progama_actual" placeholder="progama_actual" readonly="readonly" value="<?php echo $materia['programaMateria']; ?>">
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
                                                        $carrera_actual = $materia['carrera'];
                                                        $sql = "SELECT * FROM carreras ";
                                                        $resultado = $conn->query($sql);
                                                        while($carMat = $resultado->fetch_assoc()) {
                                                            if($carMat['idCarreras'] == $carrera_actual) { ?>
                                                                <option value="<?php echo $carMat['idCarreras']; ?>" selected>
                                                                    <?php echo $carMat['nombreCarrera']; ?>
                                                                </option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $carMat['idCarreras']; ?>" >
                                                                    <?php echo $carMat['nombreCarrera']; ?>
                                                                </option>
                                                            <?php }
                                                        }
                                                    } catch (Exception $e) {
                                                        echo "Error: " . $e->getMessage();
                                                    }


                                                    ?>
                                          </select>
                                    </div>
                              </div>
                              <!-- /.box-body -->

                              <div class="box-footer">
                                  <input type="hidden" name="registro" value="actualizar">
                                  <input type="hidden" name="id_registro" value="<?php echo $materia['idMaterias']; ?>">
                                  <button type="submit" class="btn btn-primary" id="crear_registro">Añadir</button>
                                  <a href="lista-materias.php"><button type="button" class="btn btn-primary">Salir</button></a>
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
