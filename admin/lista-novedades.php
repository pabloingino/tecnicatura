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
            Listado de Noticias
            <small></small>
          </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Administra las Noticias del instituto</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tituto</th>
                  <th>Texto</th>
                  <th>Fecha</th>
                  <th>Activa?</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                        <?php
                            try {
                                $sql = "SELECT * FROM novedades";
                                $resultado = $conn->query($sql);
                            } catch (Exception $e) {
                                $error = $e->getMessage();
                                echo $error;
                            }
                            while($novedad = $resultado->fetch_assoc() ) { ?>

                                <tr>
                                    <td><?php echo $novedad['tituloNovedad'];?></td>
                                    <td><?php echo $novedad['textNovedad']; ?></td>
                                    <td><?php echo $novedad['fechaNovedad']; ?></td>
                                    <td>
                                      <?php
                                            if ($novedad['isActive'] == 1) {
                                                echo "Si";
                                            }else {
                                                echo "No";
                                            }
                                       ?>
                                    </td>
                                    <td>
                                        <a href="editar-novedad.php?id=<?php echo $novedad['idNovedad'] ?>" class="btn bg-orange btn-flat margin">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" data-id="<?php echo $novedad['idNovedad'] ?>" data-tipo="novedad" class="btn bg-maroon bnt-flat margin borrar_registro">
                                            <i class="fa fa-trash"></i>
                                        </a>

                                    </td>
                                </tr>
                            <?php }  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Tituto</th>
                    <th>Texto</th>
                    <th>Fecha</th>
                    <th>Activa?</th>
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
