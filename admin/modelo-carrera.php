<?php
include_once 'funciones/funciones.php';


if($_POST['registro'] == 'nuevo'){
    /*
    $respuesta = array(
        'post' => $_POST,
        'file' => $_FILES
    );
    die(json_encode($respuesta));
    */
    $nombre = $_POST['nombreCarrera'];
    $descripcion = $_POST['descripCarrera'];
    $directorio = "../img/programa_carrera/";

    if(!is_dir($directorio)){
        mkdir($directorio, 0755, true);
    }

    if(move_uploaded_file($_FILES['programaCarrera']['tmp_name'], $directorio . $_FILES['programaCarrera']['name'])) {
        $imagen_url = $_FILES['programaCarrera']['name'];
        $imagen_resultado = "Se subió correctamente";
    } else {
        $respuesta = array(
            'respuesta' => error_get_last()
        );
    }

    try {
        $stmt = $conn->prepare('INSERT INTO carreras (nombreCarrera, descripCarrera, programaCarrera) VALUES (?, ?, ?) ');
        $stmt->bind_param("sss", $nombre, $descripcion, $imagen_url );
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
  $nombre = $_POST['nombreCarrera'];
  $descripcion = $_POST['descripCarrera'];
  $id_registro = $_POST['id_registro'];
  $directorio = "../img/programa_carrera/";

    if(!is_dir($directorio)){
        mkdir($directorio, 0755, true);
    }

    if(move_uploaded_file($_FILES['programaCarrera']['tmp_name'], $directorio . $_FILES['programaCarrera']['name'])) {
        $imagen_url = $_FILES['programaCarrera']['name'];
        $imagen_resultado = "Se subió correctamente";
    } else {
        $respuesta = array(
            'respuesta' => error_get_last()
        );
    }

    try {
        if($_FILES['programaCarrera']['size'] > 0 ) {

            // con imagen
            $stmt = $conn->prepare('UPDATE carreras SET nombreCarrera = ?, descripCarrera = ?, programaCarrera = ? WHERE idCarreras = ? ');
            $stmt->bind_param("sssi", $nombre, $descripcion, $imagen_url,  $id_registro);

        } else {
            // sin imagen
            $stmt = $conn->prepare('UPDATE carreras SET nombreCarrera = ?, descripCarrera = ? WHERE idCarreras = ? ');
            $stmt->bind_param("ssi", $nombre, $descripcion, $id_registro);
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
        $stmt = $conn->prepare('DELETE FROM carreras WHERE idCarreras = ? ');
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
