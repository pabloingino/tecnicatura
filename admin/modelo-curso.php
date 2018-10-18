<?php
include_once 'funciones/funciones.php';

//if ($_POST['registro'] == 'nuevo' || $_POST['registro'] == 'actualizar') {
  $anio = $_POST['año_curso'];
  $dia = $_POST['dia_curso'];
  $hora= $_POST['hora_curso'];
  $materia = $_POST['materia_curso'];
  $profesor = $_POST['profesor'];
  $cuatrimestre = $_POST['cuatrimestre'];
  switch ($dia) {
    case '1':
      $diaCurso = "Lunes";
      break;
    case '2':
      $diaCurso = "Martes";
      break;
    case '3':
      $diaCurso = "Miercoles";
      break;
    case '4':
      $diaCurso = "Jueves";
      break;
    case '5':
      $diaCurso = "Viernes";
      break;
    default:

      break;
  }
//}




if($_POST['registro'] == 'nuevo'){
    try {
        $stmt = $conn->prepare('INSERT INTO cursos (materiaCurso, profesorCurso, ordenDia, diaCurso, horaCurso, añoCurso, cuatrimestre) VALUES ( ?, ?, ?, ?, ?, ?, ?)  ');
        $stmt->bind_param('iiisiii', $materia, $profesor, $dia, $diaCurso, $hora, $anio, $cuatrimestre);
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_insertado' => $id_insertado
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
    $id_registro = $_POST['id_registro'];

    try {
        $stmt = $conn->prepare('UPDATE cursos SET materiaCurso = ?, profesorCurso = ?, ordenDia = ?, diaCurso = ?, horaCurso = ?, añoCurso = ?, cuatrimestre = ? WHERE idCurso = ? ');
        $stmt->bind_param('iiisiiii', $materia, $profesor, $dia, $diaCurso, $hora, $anio, $cuatrimestre, $id_registro );
        $stmt->execute();
        if($stmt->affected_rows) {
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
        $stmt = $conn->prepare('DELETE FROM cursos WHERE idCurso = ? ');
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
