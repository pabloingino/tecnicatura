<?php
include_once 'funciones/funciones.php';

$nombre = $_POST['nombre_profesor'];
//$apellido = $_POST['apellido_profesor'];
$dni = $_POST['dni_profesor'];

//$id_registro = $_POST['id_registro'];

if($_POST['registro'] == 'nuevo'){
    /*
    $respuesta = array(
        'post' => $_POST,
        'file' => $_FILES
    );
    die(json_encode($respuesta));
    */

    try {
        $stmt = $conn->prepare('INSERT INTO profesores (nombreProfesor, dniProfesor) VALUES (?, ?) ');
        $stmt->bind_param("ss", $nombre, $dni);
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_insertado' => $id_insertado,
                'resultado_imagen' => $imagen_resultado
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
           $stmt = $conn->prepare('UPDATE profesores SET nombreProfesor = ?, dniProfesor = ? WHERE idProfesor = ? ');
           $stmt->bind_param("sss", $nombre, $dni,  $id_registro);
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
        $stmt = $conn->prepare('DELETE FROM profesores WHERE  idProfesor = ? ');
        $stmt->bind_param('s', $id_borrar);
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
