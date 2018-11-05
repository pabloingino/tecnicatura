<?php


include_once 'funciones/funciones.php';

// if($_POST['registro'] == 'nuevo'){
//
//     try {
//         $stmt = $conn->prepare("INSERT INTO usuarios (nickUsuario, nombreUsuario, hashPass, nivel, actualizado) VALUES (?, ?, ?, ?, ?)");
//         $stmt->bind_param("sssss", $usuario, $nombre, $password_hashed, $superadmin, $fecha);
//         $stmt->execute();
//         $id_registro = $stmt->insert_id;
//         if($id_registro > 0) {
//             $respuesta = array(
//                 'respuesta' => 'exito',
//                 'id_admin' => $id_registro
//             );
//
//         } else {
//             $respuesta = array(
//                 'respuesta' => 'error'
//             );
//         }
//         $stmt->close();
//         $conn->close();
//     } catch (Exception $e) {
//         echo "Error: " . $e->getMessage();
//     }
//
//     die(json_encode($respuesta));
// }

if($_POST['registro'] == 'actualizar'){
  $direccion = $_POST['direccion'];
  $altura  = $_POST['altura'];
  $postal = $_POST['postal'];
  $localidad = $_POST['localidad'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $id_registro = $_POST['id_registro'];
    try {

            $stmt = $conn->prepare('UPDATE datosinstituto SET direccionInstituto = ?, numeroCasa = ?, codigoPostal = ?, localidadInstituto = ?, telefonoInstituto = ?, emailInstituto = ? WHERE idDatos = ? ');
            $stmt->bind_param("siisisi", $direccion, $altura, $postal, $localidad, $telefono, $email, $id_registro);




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
