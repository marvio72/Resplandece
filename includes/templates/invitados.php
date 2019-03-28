<?php
try {
    require_once('includes/funciones/bd_conexion.php');
    // $sql = "SELECT * FROM invitados";
    $sql = "SELECT invitado_id, ";
    $sql .= "concat(nombre_invitado,' ',apellido_invitado) as nombres, ";
    $sql .= "descripcion,url_imagen ";
    $sql .= "FROM invitados";
    $resultado = $conn->query($sql);
} catch (\Exception $e) {
    echo $e->getMessage();
}
?>
<section class="invitados contenedor seccion" id="inv_colorbox">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
        <?php while ($invitados = $resultado->fetch_assoc()) { ?>


        <li>
            <div class="invitado">
                <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id']; ?> ">
                    <img src="img/conferencias/<?php echo $invitados['url_imagen']; ?>" alt="Imagen Invitado">
                    <p><?php echo $invitados['nombres']; ?></p>
                </a>
            </div>
        </li>

        <div style="display:none;">
            <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id']; ?>">
                <h2><?php echo $invitados['nombres']; ?></h2>
                <img src="img/conferencias/<?php echo $invitados['url_imagen']; ?>" alt="Imagen Invitado">
                <p><?php echo $invitados['descripcion']; ?></p>
            </div>
        </div>
        <? php ?>

        <!--FIN SECCION INVITADOS-->
        <?php 
    } ?>

    </ul>
</section>
<!--Fin Seccion Invitados -->




<?php
$conn->close();
?> 