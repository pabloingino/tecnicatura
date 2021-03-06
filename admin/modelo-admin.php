<?php


include_once 'funciones/funciones.php';
    $usuario = $_POST['usuario'];
    $nombre  = $_POST['nombre'];
    $password = $_POST['password'];
    $superadmin = $_POST['superadmin'];
    $fecha = date('Y-m-d H:i:s');

if($_POST['registro'] == 'nuevo'){
    $opciones = array(
        'cost' => 12
    );
    $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);

    try {
        $stmt = $conn->prepare("INSERT INTO usuarios (nickUsuario, nombreUsuario, hashPass, nivel, actualizado) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $usuario, $nombre, $password_hashed, $superadmin, $fecha);
        $stmt->execute();
        $id_registro = $stmt->insert_id;
        if($id_registro > 0) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_admin' => $id_registro
            );

        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));
}

if($_POST['registro'] == 'actualizar'){
   $id_registro = $_POST['id_registro'];
    try {
        if(empty($_POST['password']) ) {
            $stmt = $conn->prepare("UPDATE usuarios SET nickUsuario = ?, nombreUsuario = ?, nivel = ?,actualizado = ? WHERE idUsuario = ? ");
            $stmt->bind_param("sssss", $usuario, $nombre, $superadmin, $fecha ,$id_registro );
        } else {
            $opciones = array(
                'cost' => 12
            );

            $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
            $stmt = $conn->prepare('UPDATE usuarios SET nickUsuario = ?, nombreUsuario = ?, hashPass = ?, nivel = ?,actualizado = ? WHERE idUsuario = ? ');
            $stmt->bind_param("ssssss", $usuario, $nombre, $hash_password, $superadmin, $fecha , $id_registro);
        }



        $stmt->execute();
        if($stmt->affected_rows) {
            $respuesta = array(
                'respuesta' => 'exito',
                'id_actualizado' => $stmt->insert_id
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
        $stmt = $conn->prepare('DELETE FROM usuarios WHERE idUsuario = ? ');
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
