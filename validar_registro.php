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
        $fecha    = date('Y-m-d H: i: s');

        // Pedidos
        $boletos  = $_POST['boletos'];
        $playeras = $_POST['pedido_playeras'];
        $tazas    = $_POST['pedido_tazas'];
        $pedido = productos_json($boletos, $playeras, $tazas);
        // var_dump($pedido);

        // Eventos
        $evento_existente = false;
        $registro = '';
        if (isset($_POST['registro'])) :
            $eventos = $_POST['registro'];
            $registro = eventos_json($eventos);
            $evento_existente = true;
        endif;


        ?>
    <?php
    echo $pedido;
    echo "<hr>";
    if ($evento_existente == true){
        echo $registro;
    } else {
        echo 'no hay eventos seleccionados';
    }
    ?>

    <?php endif; ?>


</section>


<?php include_once 'includes/templates/footer.php'; ?> 