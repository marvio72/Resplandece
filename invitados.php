<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>

    <?php
    try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT evento_id,nombre_evento,fecha_evento,hora_evento,cat_evento,icono,nombre_invitado,apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " ORDER BY evento_id ";

        $resultado = $conn->query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
    ?>
    <div class="calendario">
        <?php
        $calendario = array();
        while ($eventos = $resultado->fetch_assoc()) {

            //Obtiene la fecha del evento          
            $fecha = $eventos['fecha_evento'];

            $evento = array(
                'titulo' => $eventos['nombre_evento'],
                'fecha' => $eventos['fecha_evento'],
                'hora' => $eventos['hora_evento'],
                'categoria' => $eventos['cat_evento'],
                'icono' => "fa " . $eventos['icono'],
                'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado'],
            );

            $calendario[$fecha][] = $evento;
        }; //While de fetch_assoc()
        ?>

        <?php
        /***************   *** Comentario *** ***************/
        /* @Descripcion: Imprimir todos los eventos
        /* @Acción     : Rutina que imprime todos los eventos
        /* separandolos por fecha_evento de la tabla eventos.
        /***************   *** ********** *** ***************/
        foreach ($calendario as $dia => $lista_eventos) { ?>

        <h3>
            <i class="fa fa-calendar"></i>
            <?php
            //Unix
            setlocale(LC_TIME, 'es_ES.UTF-8');
            //Windows    
            setlocale(LC_TIME, 'spanish');

            echo strftime("%A, %d de %B del %Y", strtotime($dia));
            ?>

        </h3>

        <?php 
        /***************   *** Comentario *** ***************/
        /* @Descripcion: Segundo Foreach
        /***************   *** ********** *** ***************/
        foreach ($lista_eventos as $info_evento) { ?>
        <div class="dia">
            <p class="titulo"><?php echo $info_evento['titulo']; ?></p>
            <p class="hora">
                <i class="fa fa-clock" aria-hidden="true"></i>
                <?php echo $info_evento['fecha'] . " " . $info_evento['hora']; ?>
            </p>
            <p>
                <i class="<?php echo $info_evento['icono']; ?>"></i>
                <?php echo $info_evento['categoria']; ?></p>
            <p>
                <i class="fa fa-user" aria-hidden="true"></i>
                <?php echo $info_evento['invitado']; ?></p>
        </div>

        <?php 
    } ?>

        <?php 
    } ?>



    </div> <!-- Fin Calendario -->
</section> <!-- Fin seccion contenedor -->



<?php
$conn->close();
?>



<?php include_once 'includes/templates/footer.php' ?> 