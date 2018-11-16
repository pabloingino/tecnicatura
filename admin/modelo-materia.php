<?php
include_once 'funciones/funciones.php';

//$nombre = $_POST['nombre_materia'];
//$carrera = $_POST['carrera'];



if($_POST['registro'] == 'nuevo'){
    /*
    $respuesta = array(
        'post' => $_POST,
        'file' => $_FILES
    );
    die(json_encode($respuesta));
    */
    $nombre = $_POST['nombre_materia'];
    $carrera = $_POST['carrera'];
    $directorio = "../img/programa_materia/";
    $tipo = $_FILES['archivo_programa']['type'];
    if(!is_dir($directorio)){
        mkdir($directorio, 0755, true);
    }

    if ($tipo=="application/pdf"){
      if(move_uploaded_file($_FILES['archivo_programa']['tmp_name'], $directorio . $_FILES['archivo_programa']['name'])) {
          $imagen_url = $_FILES['archivo_programa']['name'];
          $programa_resultado = "Se subió correctamente";
      } else {
          $respuesta = array(
              'respuesta' => error_get_last()
          );
      }
    }
     if ($tipo!="application/pdf"){
      $respuesta = array(
          'respuesta' => 'pdf',);

        die(json_encode($respuesta));
      }



    try {
        $stmt = $conn->prepare('INSERT INTO materias (nombreMateria, programaMateria, carrera) VALUES (?, ?, ?) ');
        $stmt->bind_param("sss", $nombre, $imagen_url, $carrera );
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_insertado' => $id_insertado,
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));

}

if($_POST['registro'] == 'actualizar'){
    $nombre = $_POST['nombre_materia'];
    $carrera = $_POST['carrera'];
    $id_registro = $_POST['id_registro'];
    $directorio = "../img/programa_materia/";
    $tipo = $_FILES['archivo_programa']['type'];

    if(!is_dir($directorio)){
        mkdir($directorio, 0755, true);
    }

    if ($tipo=="application/pdf"){
      if(move_uploaded_file($_FILES['archivo_programa']['tmp_name'], $directorio . $_FILES['archivo_programa']['name'])) {
          $imagen_url = $_FILES['archivo_programa']['name'];
          $imagen_resultado = "Se subió correctamente";
      } else {
          $respuesta = array(
              'respuesta' => error_get_last()
          );
      }
    }
     if ($tipo!="application/pdf"){
      $respuesta = array(
          'respuesta' => 'pdf',);

        die(json_encode($respuesta));
      }



    try {
        if($_FILES['archivo_programa']['size'] > 0 ) {

            // con imagen
            $stmt = $conn->prepare('UPDATE materias SET nombreMateria = ?,  programaMateria = ?, carrera = ? WHERE idMaterias = ? ');
            $stmt->bind_param("ssss", $nombre, $imagen_url, $carrera, $id_registro);

        } else {
            // sin imagen
            $stmt = $conn->prepare('UPDATE materias SET nombreMateria = ?, carrera = ? WHERE idMaterias = ? ');
            $stmt->bind_param("sss", $nombre, $carrera,   $id_registro);
        }
        $estado = $stmt->execute();

        if($estado == true) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_actualizado' => $id_registro
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }

    die(json_encode($respuesta));

}

if($_POST['registro'] == 'eliminar'){

    $id_borrar = $_POST['id'];

    try {
        $stmt = $conn->prepare('DELETE FROM materias WHERE idMaterias = ? ');
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_eliminado' => $id_borrar
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()
        );
    }
    die(json_encode($respuesta));
}
