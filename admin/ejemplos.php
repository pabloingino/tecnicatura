<?php
  switch ($id) {
  case '1':
   ?>
    <option value="" disabled >- Seleccione el dia -</option>
    <option value="1" selected>Lunes</option>
    <option value="2" >Martes</option>
    <option value="3" >Miercoles</option>
    <option value="4" >Jueves</option>
    <option value="5" >Viernes</option>
  <?php   break; ?>
<?php   case '2':  ?>
    <option value="" disabled >- Seleccione el dia -</option>
    <option value="1" >Lunes</option>
    <option value="2" selected>Martes</option>
    <option value="3" >Miercoles</option>
    <option value="4" >Jueves</option>
    <option value="5" >Viernes</option>
<?php   break; ?>
<?php   case '3':  ?>
    <option value="" disabled >- Seleccione el dia -</option>
    <option value="1" >Lunes</option>
    <option value="2" >Martes</option>
    <option value="3" selected>Miercoles</option>
    <option value="4" >Jueves</option>
    <option value="5" >Viernes</option>
<?php   break; ?>
<?php   case '4':  ?>
    <option value="" disabled >- Seleccione el dia -</option>
    <option value="1" >Lunes</option>
    <option value="2" >Martes</option>
    <option value="3" >Miercoles</option>
    <option value="4" selected>Jueves</option>
    <option value="5" >Viernes</option>
<?php   break; ?>
<?php   case '5':  ?>
    <option value="" disabled >- Seleccione el dia -</option>
    <option value="1" >Lunes</option>
    <option value="2" >Martes</option>
    <option value="3" >Miercoles</option>
    <option value="4" >Jueves</option>
    <option value="5" selected>Viernes</option>
<?php   break;
    default:?>
    <option value="" disabled selected>- Seleccione el dia -</option>
    <option value="1" >Lunes</option>
    <option value="2" >Martes</option>
    <option value="3" >Miercoles</option>
    <option value="4" >Jueves</option>
    <option value="5" >Viernes</option>
    <?php   break;
?>





<?php
  if ($id == 1) {?>
    echo <option value="" disabled >- Seleccione el dia -</option>;
    echo <option value="1" selected>Lunes</option>;
    echo <option value="2" >Martes</option>;
    echo <option value="3" >Miercoles</option>;
    echo <option value="4" >Jueves</option>;
    echo <option value="5" >Viernes</option>;
  }
<?php
  if ($id == 2) {
    echo <option value="" disabled >- Seleccione el dia -</option>;
    echo <option value="1" >Lunes</option>;
    echo <option value="2" selected>Martes</option>;
    echo <option value="3" >Miercoles</option>;
    echo <option value="4" >Jueves</option>;
    echo <option value="5" >Viernes</option>;
  }?>
<?php
  if ($id == 3) {
    echo <option value="" disabled >- Seleccione el dia -</option>;
    echo <option value="1" >Lunes</option>;
    echo <option value="2" >Martes</option>;
    echo <option value="3" selected>Miercoles</option>;
    echo <option value="4" >Jueves</option>;
    echo <option value="5" >Viernes</option>;
  }?>
<?php
  if ($id == 4) {
    echo <option value="" disabled >- Seleccione el dia -</option>;
    echo <option value="1" >Lunes</option>;
    echo <option value="2" >Martes</option>;
    echo <option value="3" >Miercoles</option>;
    echo <option value="4" selected>Jueves</option>;
    echo <option value="5" >Viernes</option>;
  }?>
<?php
  if ($id == 5) {
    echo <option value="" disabled >- Seleccione el dia -</option>;
    echo <option value="1" >Lunes</option>;
    echo <option value="2" >Martes</option>;
    echo <option value="3" >Miercoles</option>;
    echo <option value="4" >Jueves</option>;
    echo <option value="5" selected>Viernes</option>;
  }
?>

<?php if ($curso['cuatrimestre'] == 1) { ?>
  <option value="" disabled >- Seleccione el cuatrimestre -</option>
  <option value="1" selected>Primero</option>
  <option value="2" >Segundo</option>
<?php  } else {?>
  <option value="" disabled >- Seleccione el cuatrimestre -</option>
  <option value="1" >Primero</option>
  <option value="2" selected>Segundo</option>
<?php }?>






<?php if ($curso['añoCurso'] == 1) { ?>
  <option value="" disabled >- Seleccione el año -</option>
  <option value="1" selected>Primero</option>
  <option value="2" >Segundo</option>
  <option value="3" >Tercero</option>
<?php  } if ($curso['añoCurso'] == 2) { ?>
  <option value="" disabled >- Seleccione el año -</option>
  <option value="1" >Primero</option>
  <option value="2" selected>Segundo</option>
  <option value="3" >Tercero</option>
<?php  } if ($curso['añoCurso'] == 3) { ?>
  <option value="" disabled >- Seleccione el año -</option>
  <option value="1" >Primero</option>
  <option value="2" >Segundo</option>
  <option value="3" selected>Tercero</option>
<?php  } ?>
