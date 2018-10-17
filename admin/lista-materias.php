<?php
        include_once 'funciones/sesiones.php';
        include_once 'funciones/funciones.php';
        include_once 'templates/header.php';
        include_once 'templates/barra.php';
        include_once 'templates/navegacion.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Listado de Eventos
          <small>Aquí podrás editar o borrar los eventos</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los eventos en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Programa</th>
                  <th>Carrera</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                        <?php
                            try {
                                $sql = "SELECT idMaterias, nombreMateria, programaMateria, nombreCarrera  ";
                                $sql .= " FROM materias ";
                                $sql .= " INNER JOIN carreras ";
                                $sql .= " ON  materias.carrera=carreras.idCarreras ";
                                $resultado = $conn->query($sql);
                            } catch (Exception $e) {
                                $error = $e->getMessage();
                                echo $error;
                            }
                            while($materias = $resultado->fetch_assoc() ) { ?>
                                <tr>
                                    <td><?php echo $materias['nombreMateria']; ?></td>
                                    <td><?php echo $materias['programaMateria']; ?></td>
                                    <td><?php echo $materias['nombreCarrera']; ?></td>
                                    <td>
                                        <a href="editar-materia.php?id=<?php echo $materias['idMaterias'] ?>" class="btn bg-orange btn-flat margin">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" data-id="<?php echo $materias['idMaterias']; ?>" data-tipo="materia" class="btn bg-maroon bnt-flat margin borrar_registro">
                                            <i class="fa fa-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                            <?php }  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre</th>
                  <th>Programa</th>
                  <th>Carrera</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
          include_once 'templates/footer.php';
  ?>
