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
        Dashboard
        <small>Información sobre el instituto</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box-body chart-responsive">
              <div class="chart" id="grafica-registros" style="height: 300px;"></div>
            </div>
        </div>


        <h2 class="page-header">Resumen de Registros</h2>
        <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <?php
                        $sql = "SELECT COUNT(idCurso) AS cursos FROM cursos ";
                        $resultado = $conn->query($sql);
                        $registrados = $resultado->fetch_assoc();

                    ?>
                     <!-- small box -->
                      <div class="small-box bg-aqua">
                        <div class="inner">
                          <h3><?php echo $registrados['cursos']; ?></h3>

                          <p>Total Materias</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-university"></i>
                        </div>
                        <a href="lista-cursos.php" class="small-box-footer">
                          Más Información <i class="fa fa-arrow-circle-right"></i>
                        </a>
                      </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <?php
                        $sql = "SELECT COUNT(idCurso) AS primero FROM cursos WHERE añoCurso = 1 ";
                        $resultado = $conn->query($sql);
                        $registrados = $resultado->fetch_assoc();

                    ?>
                     <!-- small box -->
                      <div class="small-box bg-yellow">
                        <div class="inner">
                          <h3><?php echo $registrados['primero']; ?></h3>

                          <p>Total Materias Primer Año</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-users"></i>
                        </div>
                        <a href="lista-cursos.php" class="small-box-footer">
                          Más Información <i class="fa fa-arrow-circle-right"></i>
                        </a>
                      </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <?php
                        $sql = "SELECT COUNT(idCurso) AS segundo FROM cursos WHERE añoCurso = 2 ";
                        $resultado = $conn->query($sql);
                        $registrados = $resultado->fetch_assoc();

                    ?>
                     <!-- small box -->
                      <div class="small-box bg-red">
                        <div class="inner">
                          <h3><?php echo $registrados['segundo']; ?></h3>

                          <p>Total Materias Segundo Año</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-user"></i>
                        </div>
                        <a href="lista-cursos.php" class="small-box-footer">
                          Más Información <i class="fa fa-arrow-circle-right"></i>
                        </a>
                      </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <?php
                        $sql = "SELECT COUNT(idCurso) AS tercero FROM cursos WHERE añoCurso =  3";
                        $resultado = $conn->query($sql);
                        $registrados = $resultado->fetch_assoc();
                        $ganancia = $registrados['tercero'];

                    ?>
                     <!-- small box -->
                      <div class="small-box bg-green">
                        <div class="inner">
                          <h3>$<?php echo round($ganancia, 2); ?></h3>

                          <p>Total Materias Tercer Año</p>
                        </div>
                        <div class="icon">
                          <i class="fa fa-graduation-cap"></i>
                        </div>
                        <a href="lista-cursos.php" class="small-box-footer">
                          Más Información <i class="fa fa-arrow-circle-right"></i>
                        </a>
                      </div>
                </div>
        </div>

</section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
          include_once 'templates/footer.php';
  ?>
