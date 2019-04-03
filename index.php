<?php include_once 'includes/templates/header.php'; ?>

<!--
.########..########..######...######..########..####.########...######..####..#######..##....##....########.##.....##.########.##....##.########..#######.
.##.....##.##.......##....##.##....##.##.....##..##..##.....##.##....##..##..##.....##.###...##....##.......##.....##.##.......###...##....##....##.....##
.##.....##.##.......##.......##.......##.....##..##..##.....##.##........##..##.....##.####..##....##.......##.....##.##.......####..##....##....##.....##
.##.....##.######....######..##.......########...##..########..##........##..##.....##.##.##.##....######...##.....##.######...##.##.##....##....##.....##
.##.....##.##.............##.##.......##...##....##..##........##........##..##.....##.##..####....##........##...##..##.......##..####....##....##.....##
.##.....##.##.......##....##.##....##.##....##...##..##........##....##..##..##.....##.##...###....##.........##.##...##.......##...###....##....##.....##
.########..########..######...######..##.....##.####.##.........######..####..#######..##....##....########....###....########.##....##....##.....#######.
-->
<section class="seccion contenedor">
    <h2>El evento más esperado del año</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque fuga, obcaecati temporibus a accusantium, sit quae quia laudantium placeat deserunt neque non aspernatur est, consequatur eos mollitia libero voluptatibus error.</p>
</section>
<!--Fin de DESCRIPCION DEL EVENTO-->

<!--
.########..########...#######...######...########.....###....##.....##....###...
.##.....##.##.....##.##.....##.##....##..##.....##...##.##...###...###...##.##..
.##.....##.##.....##.##.....##.##........##.....##..##...##..####.####..##...##.
.########..########..##.....##.##...####.########..##.....##.##.###.##.##.....##
.##........##...##...##.....##.##....##..##...##...#########.##.....##.#########
.##........##....##..##.....##.##....##..##....##..##.....##.##.....##.##.....##
.##........##.....##..#######...######...##.....##.##.....##.##.....##.##.....##
-->
<section class="programa">
    <div class="contenedor-video">
        <video autoplay="autoplay" loop poster="img/conferencias/bg-talleres.jpg" muted>
            <source src="video/video.mp4" type="video/mp4">
            <source src="video/video.webm" type="video/webm">
            <source src="video/video.ogv" type="video/ogg">
        </video>
    </div>
    <!--.contenedor-video-->

    <div class="contenido-programa">
        <div class="contenedor">
            <div class="programa-evento">
                <h2>Programa del Congreso</h2>
                <?php
                try {
                    require_once('includes/funciones/bd_conexion.php');
                    $sql = "SELECT * FROM categoria_evento";
                    $resultado = $conn->query($sql);
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }
                ?>
                <nav class="menu-programa">
                    <?php  ?>
                    <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                    <?php $categoria = strtolower($cat['cat_evento']); ?>
                    <?php $icono = $cat['icono']; ?>
                    <a href="#<?php echo $categoria; ?>"><i class="fas <?php echo $icono; ?>" aria-hidden="true"></i><?php echo $cat['cat_evento']; ?></a>
                    <?php 
                } ?>
                </nav>

                <?php
                try {
                    require_once('includes/funciones/bd_conexion.php');
                    $sql = "SELECT evento_id,nombre_evento,fecha_evento,hora_evento,cat_evento,icono,concat(nombre_invitado,' ',apellido_invitado) AS nombre ";
                    $sql .= " FROM eventos ";
                    $sql .= " INNER JOIN categoria_evento ";
                    $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                    $sql .= " INNER JOIN invitados ";
                    $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                    $sql .= " AND eventos.id_cat_evento = 1 ";
                    $sql .= " ORDER BY evento_id LIMIT 2; ";
                    $sql .= "SELECT evento_id,nombre_evento,fecha_evento,hora_evento,cat_evento,icono,concat(nombre_invitado,' ',apellido_invitado) AS nombre ";
                    $sql .= " FROM eventos ";
                    $sql .= " INNER JOIN categoria_evento ";
                    $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                    $sql .= " INNER JOIN invitados ";
                    $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                    $sql .= " AND eventos.id_cat_evento = 2 ";
                    $sql .= " ORDER BY evento_id LIMIT 2; ";
                    $sql .= "SELECT evento_id,nombre_evento,fecha_evento,hora_evento,cat_evento,icono,concat(nombre_invitado,' ',apellido_invitado) AS nombre ";
                    $sql .= " FROM eventos ";
                    $sql .= " INNER JOIN categoria_evento ";
                    $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                    $sql .= " INNER JOIN invitados ";
                    $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                    $sql .= " AND eventos.id_cat_evento = 3 ";
                    $sql .= " ORDER BY evento_id LIMIT 2; ";
                    // $resultado = $conn->query($sql);
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }
                ?>

                <?php $conn->multi_query($sql); ?>
                <?php
                do {
                    $resultado = $conn->store_result();
                    $row = $resultado->fetch_all(MYSQLI_ASSOC);  ?>
                <?php $i = 0; ?>
                <?php foreach ($row as $evento) : ?>
                <?php if ($i % 2 == 0) { ?>
                <div id="<?php echo strtolower($evento['cat_evento']);  ?>" class="info-predica ocultar clearfix">
                    <?php 
                } ?>
                    <div class="detalle-evento">
                        <h3><?php echo ($evento['nombre_evento']); ?></h3>
                        <p><i class="far fa-clock"></i><?php echo $evento['hora_evento']; ?></p>
                        <p><i class="far fa-calendar-alt"></i><?php echo $evento['fecha_evento']; ?></p>
                        <p><i class="far fa-user"></i> <?php echo $evento['nombre']; ?></p>
                    </div>


                    <?php if ($i % 2 == 1) : ?>
                    <a href="calendario.php" class="button float-right">Ver todos</a>
                </div> <!-- predicaciones -->
                <?php endif; ?>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php $resultado->free(); ?>

                <?php 
            } while ($conn->more_results() && $conn->next_result()); ?>


            </div>
            <!--.contenido-programa-->
        </div>
        <!--.contenedor-->
    </div>
    <!---.programa-evento-->
</section>
<!--FIN SECCION PROGRAMA-->

<!--
.####.##....##.##.....##.####.########....###....########...#######...######.
..##..###...##.##.....##..##.....##......##.##...##.....##.##.....##.##....##
..##..####..##.##.....##..##.....##.....##...##..##.....##.##.....##.##......
..##..##.##.##.##.....##..##.....##....##.....##.##.....##.##.....##..######.
..##..##..####..##...##...##.....##....#########.##.....##.##.....##.......##
..##..##...###...##.##....##.....##....##.....##.##.....##.##.....##.##....##
.####.##....##....###....####....##....##.....##.########...#######...######.
-->

<?php include_once 'includes/templates/invitados.php'; ?>

<!--
..######...#######..##....##.########....###....########...#######..########.
.##....##.##.....##.###...##....##......##.##...##.....##.##.....##.##.....##
.##.......##.....##.####..##....##.....##...##..##.....##.##.....##.##.....##
.##.......##.....##.##.##.##....##....##.....##.##.....##.##.....##.########.
.##.......##.....##.##..####....##....#########.##.....##.##.....##.##...##..
.##....##.##.....##.##...###....##....##.....##.##.....##.##.....##.##....##.
..######...#######..##....##....##....##.....##.########...#######..##.....##
-->
<section class="contador parallax">
    <div class="contenedor">
        <ul class="resumen-evento clearfix">
            <li>
                <p class="numero">0</p>Invitados
            </li>
            <li>
                <p class="numero">0</p>Predicaciones
            </li>
            <li>
                <p class="numero">0</p>Días
            </li>
            <li>
                <p class="numero">0</p>ConciertoS
            </li>
        </ul>
    </div>
</section>
<!-- FIN DE CONTADOR -->

<!--
.########..########..########..######..####..#######...######.
.##.....##.##.....##.##.......##....##..##..##.....##.##....##
.##.....##.##.....##.##.......##........##..##.....##.##......
.########..########..######...##........##..##.....##..######.
.##........##...##...##.......##........##..##.....##.......##
.##........##....##..##.......##....##..##..##.....##.##....##
.##........##.....##.########..######..####..#######...######.
-->
<section class="precios seccion">
    <h2>precios</h2>
    <div class="contenedor">
        <ul class="lista-precios clearfix">
            <li>
                <div class="tabla-precio">
                    <h3>Pase por día</h3>
                    <p class="numero">$250</p>
                    <ul>
                        <li> Todos las Predicas</li>
                        <li> Concierto</li>
                        <li> Bocadillos</li>
                    </ul>
                    <a href="#" class="button hollow">Comprar</a>
                </div>
            </li>
            <li>
                <div class="tabla-precio">
                    <h3>Todos los días</h3>
                    <p class="numero">$500</p>
                    <ul>
                        <li> Todos las Predicas</li>
                        <li> Concierto</li>
                        <li> Bocadillos</li>
                    </ul>
                    <a href="#" class="button">Comprar</a>
                </div>
            </li>
            <li>
                <div class="tabla-precio">
                    <h3>Pase de 2 días</h3>
                    <p class="numero">$400</p>
                    <ul>
                        <li>Todos las Predicas</li>
                        <li>Concierto</li>
                        <li>Bocadillos</li>
                    </ul>
                    <a href="#" class="button hollow">Comprar</a>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- FIN DE PRECIOS -->

<!--
.##.....##....###....########.....###...
.###...###...##.##...##.....##...##.##..
.####.####..##...##..##.....##..##...##.
.##.###.##.##.....##.########..##.....##
.##.....##.#########.##........#########
.##.....##.##.....##.##........##.....##
.##.....##.##.....##.##........##.....##
-->
<div id="mapa" class="mapa"></div>
<!-- FIN MAPA -->

<!--
.########.########..######..########.####.##.....##..#######..##....##.####....###....##.......########..######.
....##....##.......##....##....##.....##..###...###.##.....##.###...##..##....##.##...##.......##.......##....##
....##....##.......##..........##.....##..####.####.##.....##.####..##..##...##...##..##.......##.......##......
....##....######....######.....##.....##..##.###.##.##.....##.##.##.##..##..##.....##.##.......######....######.
....##....##.............##....##.....##..##.....##.##.....##.##..####..##..#########.##.......##.............##
....##....##.......##....##....##.....##..##.....##.##.....##.##...###..##..##.....##.##.......##.......##....##
....##....########..######.....##....####.##.....##..#######..##....##.####.##.....##.########.########..######.
-->
<sectiion class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
        <div class="testimonial">
            <blockquote>
                <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
                <footer class="info-testimonial clearfix">
                    <img src="img/conferencias/testimonial.jpg" alt="imagen testimonial">
                    <cite>Zuriel Ruvalcaba González <span>Predicador de Fe y Gracia</span></cite>
                </footer>
            </blockquote>
        </div>
        <div class="testimonial">
            <blockquote>
                <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
                <footer class="info-testimonial clearfix">
                    <img src="img/conferencias/testimonial.jpg" alt="imagen testimonial">
                    <cite>Zuriel Ruvalcaba González <span>Predicador de Fe y Gracia</span></cite>
                </footer>
            </blockquote>
        </div>
        <div class="testimonial">
            <blockquote>
                <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.</p>
                <footer class="info-testimonial clearfix">
                    <img src="img/conferencias/testimonial.jpg" alt="imagen testimonial">
                    <cite>Zuriel Ruvalcaba González <span>Predicador de Fe y Gracia</span></cite>
                </footer>
            </blockquote>
        </div>
    </div>
</sectiion>

<!-- FIN TESTIMONIALES -->

<!--
.##....##.########.##......##..######..##.......########.########.########.########.########.
.###...##.##.......##..##..##.##....##.##.......##..........##.......##....##.......##.....##
.####..##.##.......##..##..##.##.......##.......##..........##.......##....##.......##.....##
.##.##.##.######...##..##..##..######..##.......######......##.......##....######...########.
.##..####.##.......##..##..##.......##.##.......##..........##.......##....##.......##...##..
.##...###.##.......##..##..##.##....##.##.......##..........##.......##....##.......##....##.
.##....##.########..###..###...######..########.########....##.......##....########.##.....##
-->
<div class="newsletter parallax">
    <div class="contenido contenedor">
        <p>regístrate al newsletter:</p>
        <h3>Resplandece</h3>
        <a href="#mc_embed_signup" class="boton_newsletter button transparente">registro</a>
    </div>
</div>
<!-- FIN NEWSLETTER -->

<!--
..######..##.....##.########.##....##.########....###.......########..########..######...########..########..######..####.##.....##....###...
.##....##.##.....##.##.......###...##....##......##.##......##.....##.##.......##....##..##.....##.##.......##....##..##..##.....##...##.##..
.##.......##.....##.##.......####..##....##.....##...##.....##.....##.##.......##........##.....##.##.......##........##..##.....##..##...##.
.##.......##.....##.######...##.##.##....##....##.....##....########..######...##...####.########..######....######...##..##.....##.##.....##
.##.......##.....##.##.......##..####....##....#########....##...##...##.......##....##..##...##...##.............##..##...##...##..#########
.##....##.##.....##.##.......##...###....##....##.....##....##....##..##.......##....##..##....##..##.......##....##..##....##.##...##.....##
..######...#######..########.##....##....##....##.....##....##.....##.########..######...##.....##.########..######..####....###....##.....##
-->
<section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
            <li>
                <p id="dias" class="numero"></p> días
            </li>
            <li>
                <p id="horas" class="numero"></p> horas
            </li>
            <li>
                <p id="minutos" class="numero"></p> minutos
            </li>
            <li>
                <p id="segundos" class="numero"></p> segundos
            </li>

        </ul>
    </div>
</section>
<!-- FIN CUENTA REGRESIVA -->

<?php include_once 'includes/templates/footer.php'; ?> 