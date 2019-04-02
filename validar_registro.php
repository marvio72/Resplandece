<?php 
include_once 'includes/templates/header.php';
include_once 'includes/funciones/funciones.php';
?>

<section class="seccion contenedor">
    <h2>Resumen Registro</h2>

    <?php if (isset($_POST['sumit'])) :
        $nombre   = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email    = $_POST['email'];
        $regalo   = $_POST['regalo'];
        $total    = $_POST['total_pedido'];
        $fecha    = date('Y-m-d H:i:s');

        // Pedidos
        $boletos  = $_POST['boletos'];
        $playeras = $_POST['pedido_playeras'];
        $tazas    = $_POST['pedido_tazas'];
        $pedido = productos_json($boletos, $playeras, $tazas);
        // var_dump($pedido);

        // Eventos
        $eventos = $_POST['registro'];
        $registro = eventos_json($eventos);

        try {
            require_once('includes/funciones/bd_conexion.php');
            $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?) ");
            $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
            $stmt->execute();
            var_dump($stmt);
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            $error = $e->getMessage();
        }

        ?>
    <?php

    ?>

    <?php endif; ?>


</section>


<?php include_once 'includes/templates/footer.php'; ?>