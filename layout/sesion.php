<?php

session_start();
if (isset($_SESSION['sesion_user'])) {

    $user_sesion = $_SESSION['sesion_user'];

    // 🔹 ACTIVAR IDIOMA ESPAÑOL PARA FECHAS
    $pdo->exec("SET lc_time_names = 'es_PY'");

    $sql = "SELECT 
                us.id_usuario as id_usuario, 
                us.nombres as nombres, 
                us.user as user, 
                us.email as email, 
                rol.id_rol as id_rol, 
                rol.rol as rol, 
                us.perfil as perfil,
                us.fyh_creacion, 
                /* FORMATEA LA VARIABLE 'fyh_creacion' para que la fecha salga de la sigte manera Ej:'Ene 2023' */
                CONCAT( /* SE INICIALIZA LA VARIABLE */
                    UPPER(LEFT(DATE_FORMAT(us.fyh_creacion, '%b'),1)), /* 'UPPER' CONVIERTE EN MAYUSCULAS, MIENTRAR QUE 'LEFT' INDICA DE DONDE INICIA, Y EL '1' INDICA LA POSICION ES DECIR SOLO LA PRIMERA LETRA */
                    LOWER(SUBSTRING(DATE_FORMAT(us.fyh_creacion, '%b'),2)), /* LUEGO 'SUBSTRING MAS EL 2' INDICA QUE DESDE LA SEGUNDA LETRA TODOS SERAN UNO LO CUAL QUEDAN EN MAYUSCULAS, LUEGO 'LOWER' LOS MINIMIZA */
                    ' ', /* INDICA UN ESPACIO ENTRE EL PALABRAS */
                    DATE_FORMAT(us.fyh_creacion, '%Y') /* Y ESTO DEVUELVE EL AÑO SIN MODIFICACIONES */
                ) as fecha /* Y LUEGO SE INDICA QUE TODO LO ANTERIOR SE ALMACENARA EL LA VARIABLE 'fecha' */
            FROM tb_usuarios as us 
            INNER JOIN tb_roles as rol ON us.id_rol = rol.id_rol 
            WHERE us.user = :user";

    $query = $pdo->prepare($sql);
    $query->bindParam(':user', $user_sesion);
    $query->execute();

    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($usuarios as $usuario) {
        $id_usuario_sesion = $usuario['id_usuario'];
        $perfil = $usuario['perfil'];
        $nombre_sesion = $usuario['nombres'];
        $ingreso = $usuario['fecha'];
        $id_rol_sesion = $usuario['id_rol'];
        $rol_sesion = $usuario['rol'];
    }
} else {
    header('Location: ' . $URL . '/login');
    exit();
}
