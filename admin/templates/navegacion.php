<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">

      <div class=" info">

        <p><?php echo $_SESSION['nombre']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Buscar...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menú de Administración</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="dashboard.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar"></i>
          <span>Cursos</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="lista-cursos.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
          <li><a href="crear-curso.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-book" aria-hidden="true"></i>
          <span>Materias</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="lista-materias.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
          <li><a href="crear-materia.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
          <span>Profesores</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="lista-profesores.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
          <li><a href="crear-profesores.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          <span>Carreras</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="lista-carreras.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
          <li><a href="crear-carrera.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-address-card" aria-hidden="true"></i>
          <span>Noticias</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="lista-novedades.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
          <li><a href="crear-novedad.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-address-book" aria-hidden="true"></i>
          <span>Informacion</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="informacion.php"><i class="fa fa-edit" aria-hidden="true"></i> Editar Info</a></li>

        </ul>
      </li>

      <?php if($_SESSION['nivel'] == 1): ?>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-user" aria-hidden="true"></i>
          <span>Administradores</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="lista-admin.php"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
          <li><a href="crear-admin.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
        </ul>
      </li>

    <?php endif; ?>

      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-comments" aria-hidden="true"></i>
          <span>Testimoniales</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Ver Todos</a></li>
          <li><a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar</a></li>
        </ul>
      </li> -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<!-- =============================================== -->
