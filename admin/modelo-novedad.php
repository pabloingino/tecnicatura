<?php
include_once 'funciones/funciones.php';

//$nombre = $_POST['nombre_profesor'];
//$apellido = $_POST['apellido_profesor'];
//$dni = $_POST['dni_profesor'];

//$id_registro = $_POST['id_registro'];

if($_POST['registro'] == 'nuevo'){
    $titulo = $_POST['tituloNovedad'];
    $texto = $_POST['textoNovedad'];
    $fecha = $_POST['fechaNovedad'];
    $activa = $_POST['activa'];
    /*
    $respuesta = array(
        'post' => $_POST,
        'file' => $_FILES
    );
    die(json_encode($respuesta));
    */

    try {
        $stmt = $conn->prepare('INSERT INTO novedades (tituloNovedad, textNovedad, fechaNovedad, isActive) VALUES (?, ?, ?, ?) ');
        $stmt->bind_param("sssi", $titulo, $texto, $fecha, $activa);
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
  $titulo = $_POST['tituloNovedad'];
  $texto = $_POST['textoNovedad'];
  $fecha = $_POST['fechaNovedad'];
  $activa = $_POST['activa'];
  $id_registro = $_POST['id_registro'];
  try {
           $stmt = $conn->prepare('UPDATE novedades SET tituloNovedad = ?, textNovedad = ?, fechaNovedad = ?, isActive = ? WHERE idNovedad = ? ');
           $stmt->bind_param("sssii", $titulo, $texto, $fecha, $activa,  $id_registro);
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
    $nombre = 0;
    $apellido = 0;
    $dni = 0;

    try {
        $stmt = $conn->prepare('DELETE FROM novedades WHERE  idNovedad = ? ');
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
