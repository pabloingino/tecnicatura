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
            Listado de Profesores
            <small></small>
          </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Administra los Profesores del instituto</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>DNI</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                        <?php
                            try {
                                $sql = "SELECT * FROM profesores";
                                $resultado = $conn->query($sql);
                            } catch (Exception $e) {
                                $error = $e->getMessage();
                                echo $error;
                            }
                            while($profesor = $resultado->fetch_assoc() ) { ?>

                                <tr>
                                    <td><?php echo $profesor['idProfesor'];?></td>
                                    <td><?php echo $profesor['nombreProfesor']; ?></td>
                                    <td><?php echo $profesor['apellidoProfesor']; ?></td>
                                    <td><?php echo $profesor['dniProfesor']; ?></td>
                                    <td>
                                        <a href="editar-profesor.php?id=<?php echo $profesor['idProfesor'] ?>" class="btn bg-orange btn-flat margin">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" data-id="<?php echo $profesor['idProfesor'] ?>" data-tipo="profesor" class="btn bg-maroon bnt-flat margin borrar_registro">
                                            <i class="fa fa-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                            <?php }  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
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
