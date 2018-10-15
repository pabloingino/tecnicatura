<?php
if(isset($_POST['login-admin'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    try {
        include_once 'funciones/funciones.php';
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nickUsuario = ?;");
	$stmt->bind_param('s', $usuario);
	$stmt->execute();
        //$stmt->bind_result($id_admin, $usuario_admin, $nombre_admin, $password_admin, $nivel, $editado);
        $stmt->bind_result($idUsuario, $nickUsuario, $nombreUsuario, $hashPass, $nivel, $actualizado);
        if($stmt->affected_rows) {
            $existe = $stmt->fetch();
            if($existe) {
                if(password_verify($password, $hashPass)) {
                    session_start();
                    $_SESSION['usuario'] = $nickUsuario;
                    $_SESSION['nombre'] = $nombreUsuario;
                    $_SESSION['nivel'] = $nivel;
                    $_SESSION['id'] = $idUsuario;
                    $respuesta = array(
                        'respuesta' => 'exitoso',
                        'usuario' => $nombreUsuario
                    );
                } else {
                    $respuesta = array(
			    'respuesta' => 'error'
                    );
                }
            } else {
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    die(json_encode($respuesta));
}
