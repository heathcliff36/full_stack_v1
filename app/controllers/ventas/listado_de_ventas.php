<?php

$sql_ventas = "SELECT *, DATE_FORMAT(v.fyh_creacion, '%d/%m/%Y') as fecha, u.nombres as n_user, c.nombre_cliente as cliente
                FROM tb_ventas v 
                INNER JOIN tb_usuarios u ON v.id_usuario = u.id_usuario
                INNER JOIN tb_clientes c ON v.id_cliente = c.id_cliente";
$query_ventas = $pdo->prepare($sql_ventas);
$query_ventas->execute();
$ventas_datos = $query_ventas->fetchAll(PDO::FETCH_ASSOC);
