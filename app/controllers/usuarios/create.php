<?php

include('../../config.php');

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

$image = $_POST['image'];

if (!empty($_FILES['image']['name'])) {
    $nombreDelArchivo = date("Y-m-d-H-i-s");
    $filename = $nombreDelArchivo . "__" . $_FILES['image']['name'];
    $location = "../../../usuarios/user_perfil/" . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'], $location);
} else {
    // Si no hay imagen, usar la predeterminada
    $filename = "user-predeterminado.png";
}

// =========================
// VALIDAR CONTRASEÑAS
// =========================
if ($password_user !== $password_repeat) {
    session_start();
    $_SESSION['mensaje'] = "Error: las contraseñas no coinciden";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/usuarios/create.php');
    exit();
}

// =========================
// HASH DE CONTRASEÑA
// =========================
$password_hash = password_hash($password_user, PASSWORD_DEFAULT);

// =========================
// INSERTAR USUARIO
// =========================
$sentencia = $pdo->prepare("INSERT INTO tb_usuarios
       (nombres, user, email, id_rol, password_user, imagen, fyh_creacion) 
VALUES (:nombres, :user, :email, :id_rol, :password_user, :imagen, :fyh_creacion)");

$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':user', $user);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':id_rol', $rol);
$sentencia->bindParam(':password_user', $password_hash);
$sentencia->bindParam(':imagen', $filename);
$sentencia->bindParam(':fyh_creacion', $fechaHora);

$sentencia->execute();

session_start();
$_SESSION['mensaje'] = "Usuario registrado correctamente";
$_SESSION['icono'] = "success";
header('Location: ' . $URL . '/usuarios/');
exit();
