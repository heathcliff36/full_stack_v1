<?php

include('../../config.php');
include('../../../layout/sesion.php');

$nro_venta = $_GET['nro_venta'];
$id_cliente = $_GET['id_cliente'];
$total_a_pagar = $_GET['total_a_pagar'];
$usuario_id = $id_usuario_sesion; // Asegúrate de que esta variable tenga el ID del usuario que inició sesión
$fechaHora = date('Y-m-d H:i:s'); // Genera la fecha y hora actual para fyh_creacion

try {
    // Iniciar la transacción
    $pdo->beginTransaction();

    // Consulta SQL con id_usuario incluido
    $sentencia = $pdo->prepare("INSERT INTO tb_ventas 
        (nro_venta, id_cliente, total_pagado, fyh_creacion, id_usuario) 
    VALUES (:nro_venta, :id_cliente, :total_pagado, :fyh_creacion, :id_usuario)");

    // Enlace de parámetros
    $sentencia->bindParam(':nro_venta', $nro_venta);
    $sentencia->bindParam(':id_cliente', $id_cliente);
    $sentencia->bindParam(':total_pagado', $total_a_pagar);
    $sentencia->bindParam(':fyh_creacion', $fechaHora);
    $sentencia->bindParam(':id_usuario', $usuario_id);

    // Ejecución de la consulta
    if ($sentencia->execute()) {
        $pdo->commit();

        session_start();
        $_SESSION['mensaje'] = "Se registró la venta de manera correcta";
        $_SESSION['icono'] = "success";
        ?>
        <script>
            location.href = "<?php echo $URL; ?>/ventas/create.php";
        </script>
        <?php
    } else {
        $pdo->rollBack();
        session_start();
        $_SESSION['mensaje'] = "Error: No se pudo registrar en la base de datos";
        $_SESSION['icono'] = "error";
        ?>
        <script>
            location.href = "<?php echo $URL; ?>/ventas/create.php";
        </script>
        <?php
    }
} catch (Exception $e) {
    $pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = "Error: " . $e->getMessage();
    $_SESSION['icono'] = "error";
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/ventas/create.php";
    </script>
    <?php
}
