<?php

include('../../config.php');

$id_usuario = $_POST['id_usuario'];
$nombres = $_POST['nombres'];
$user = $_POST['user'];
$email = $_POST['email'];
$rol = $_POST['rol'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];

$fechaHora = date("Y-m-d H:i:s");

// =========================
// MANEJO DE IMAGEN
// =========================

$image_text = $_POST['image_text']; // imagen actual guardada en BD

if ($_FILES['image']['name'] != null) {
    $nombreDelArchivo = date("Y-m-d-h-i-s");
    $image_text = $nombreDelArchivo . "__" . $_FILES['image']['name'];
    $location = "../../../usuarios/user_perfil/" . $image_text;
    move_uploaded_file($_FILES['image']['tmp_name'], $location);
} else {
    // echo "no hay imagen";
}

// =========================
// VALIDAR CONTRASEÑAS
// =========================
if (!empty($password_user)) {
    if ($password_user !== $password_repeat) {
        session_start();
        $_SESSION['mensaje'] = "Error: las contraseñas no coinciden";
        $_SESSION['icono'] = "error";
        header('Location: ' . $URL . '/usuarios/update.php?id=' . $id_usuario);
        exit();
    }
    $password_hash = password_hash($password_user, PASSWORD_DEFAULT);
}

// =========================
// UPDATE USUARIO
// =========================
if (!empty($password_user)) {
    // Actualiza con nueva contraseña
    $sql = "UPDATE tb_usuarios
            SET nombres = :nombres,
                user = :user,
                email = :email,
                id_rol = :id_rol,
                password_user = :password_user,
                imagen = :imagen,
                fyh_actualizacion = :fyh_actualizacion
            WHERE id_usuario = :id_usuario";
} else {
    // Sin cambiar contraseña
    $sql = "UPDATE tb_usuarios
            SET nombres = :nombres,
                user = :user,
                email = :email,
                id_rol = :id_rol,
                imagen = :imagen,
                fyh_actualizacion = :fyh_actualizacion
            WHERE id_usuario = :id_usuario";
}

$sentencia = $pdo->prepare($sql);
$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':user', $user);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':id_rol', $rol);
$sentencia->bindParam(':imagen', $image_text);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora);
$sentencia->bindParam(':id_usuario', $id_usuario);

if (!empty($password_user)) {
    $sentencia->bindParam(':password_user', $password_hash);
}

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Usuario actualizado correctamente";
    $_SESSION['icono'] = "success";
    header('Location: ' . $URL . '/usuarios/');
} else {
    session_start();
    $_SESSION['mensaje'] = "Error al actualizar el usuario";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/usuarios/update?id=' . $id_usuario);
}
