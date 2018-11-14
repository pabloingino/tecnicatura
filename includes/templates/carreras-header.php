<?php
  try {
    require_once('includes/funciones/bd_conexion.php');
    $sql = "SELECT * FROM carreras WHERE idCarreras = 1";
    $resultado = $conn->query($sql);
  } catch (Exception $e) {
    $error = $e->getMessage();
  }
?>

<section class="seccion contenedor">

<?php while($carreras = $resultado->fetch_all(MYSQLI_ASSOC) ) { ?>

     <?php $nombre = array(); ?>
     <?php foreach($carreras as $carrera) {
        $nombre[] = $carrera['nombreCarrera'];
      } ?>


     <?php $nombre = array_values(array_unique($nombre)) ?>

     <?php foreach($carreras as $carrera): ?>
      <h2><?php echo $carrera['nombreCarrera']; ?></h2>
      <p><?php echo $carrera['descripCarrera']; ?></p>
    <a href="carreras.php"><button class="button">VER MAS...</button></a>
    <span></span>
    </div>
     <?php endforeach; ?>
 </div> <!--.calendario-->
 <?php } ?>

<?php
//$conn->close();
?>



</section> <!--seccion-->
