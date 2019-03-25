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
  </section> <!--Fin de DESCRIPCION DEL EVENTO-->

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
    </div><!--.contenedor-video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
            <h2>Programa del Congreso</h2>
            <nav class="menu-programa">
              <a href="#predicaciones"><i class="fas fa-bible"></i> Predicaciones</a>
              <a href="#alabanza"><i class="fas fa-praying-hands"></i> Alabanza y Adoración</a>
              <a href="#concierto"><i class="fas fa-music"></i> Concierto</a>  
            </nav>

            <div id="predicaciones" class="info-predica ocultar clearfix">
              <div class="detalle-evento">
                <h3>La misión del Cristiano</h3>
                <p><i class="far fa-clock"></i> 9:30 hrs</p>
                <p><i class="far fa-calendar-alt"></i> 1 de Ago</p>
                <p><i class="far fa-user"></i> Cash Luna</p>
              </div><!--detalle-evento-->
              <div class="detalle-evento">
                <h3>Como hacer crecer tu fe</h3>
                <p><i class="far fa-clock"></i> 10:30 hrs</p>
                <p><i class="far fa-calendar-alt"></i> 1 de Ago</p>
                <p><i class="far fa-user"></i> Robert Morris</p>
              </div><!--detalle-evento-->
              <a href="#" class="button float-right">Ver todos</a>
            </div><!--#predicacion-->
            <div id="alabanza" class="info-predica ocultar clearfix">
              <div class="detalle-evento">
                <h3>Alabanza y adoración</h3>
                <p><i class="far fa-clock"></i> 9:00 hrs</p>
                <p><i class="far fa-calendar-alt"></i> 1 de Ago</p>
                <p><i class="far fa-user"></i> Fe y Gracia</p>
              </div>
              <!--detalle-evento-->
              <div class="detalle-evento">
                <h3>Alabanza y adoración</h3>
                <p><i class="far fa-clock"></i> 16:00 hrs</p>
                <p><i class="far fa-calendar-alt"></i> 1 de Ago</p>
                <p><i class="far fa-user"></i> Conquista</p>
              </div>
              <!--detalle-evento-->
              <a href="#" class="button float-right">Ver todos</a>
            </div>
            <!--#alabanza-->
            <div id="concierto" class="info-predica ocultar clearfix">
              <div class="detalle-evento">
                <h3>Alabar al Supremo</h3>
                <p><i class="far fa-clock"></i> 20:00 hrs</p>
                <p><i class="far fa-calendar-alt"></i> 1 de Ago</p>
                <p><i class="far fa-user"></i> Fe y Gracia</p>
              </div>
              <!--detalle-evento-->
              <div class="detalle-evento">
                <h3>Tu eres suficiente</h3>
                <p><i class="far fa-clock"></i> 21:00 hrs</p>
                <p><i class="far fa-calendar-alt"></i> 1 de Ago</p>
                <p><i class="far fa-user"></i> Grupo Marco Espinoza</p>
              </div>
              <!--detalle-evento-->
              <a href="#" class="button float-right">Ver todos</a>
            </div>
            <!--#concierto-->
        </div><!--.contenido-programa-->
      </div><!--.contenedor-->     
    </div><!---.programa-evento-->
  </section><!--FIN SECCION PROGRAMA-->

<!--
.####.##....##.##.....##.####.########....###....########...#######...######.
..##..###...##.##.....##..##.....##......##.##...##.....##.##.....##.##....##
..##..####..##.##.....##..##.....##.....##...##..##.....##.##.....##.##......
..##..##.##.##.##.....##..##.....##....##.....##.##.....##.##.....##..######.
..##..##..####..##...##...##.....##....#########.##.....##.##.....##.......##
..##..##...###...##.##....##.....##....##.....##.##.....##.##.....##.##....##
.####.##....##....###....####....##....##.....##.########...#######...######.
-->
  <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/conferencias/invitado1.jpg" alt="Imagen Invitado"
          >
          <p>Richard Hays</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/conferencias/invitado2.jpg" alt="Imagen Invitado"
          >
          <p>Honda Hays</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/conferencias/invitado3.jpg" alt="Imagen Invitado"
          >
          <p>Daniel Alvarez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/conferencias/invitado4.jpg" alt="Imagen Invitado"
          >
          <p>Marcela Espinoza</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/conferencias/invitado5.jpg" alt="Imagen Invitado"
          >
          <p>Fabricio Gómez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/conferencias/invitado6.jpg" alt="Imagen Invitado"
          >
          <p>Isabel Ruvalcaba</p>
        </div>
      </li>
    </ul>
  </section><!--FIN SECCION INVITADOS-->

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
        <li><p class="numero">0</p>Invitados</li>
        <li><p class="numero">0</p>Predicaciones</li>
        <li><p class="numero">0</p>Días</li>
        <li><p class="numero">0</p>ConciertoS</li>
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
      <a href="#" class="button transparente">registro</a>
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
        <li><p id="dias" class="numero"></p> días</li>
        <li><p id="horas" class="numero"></p> horas</li>
        <li><p id="minutos" class="numero"></p> minutos</li>
        <li><p id="segundos" class="numero"></p> segundos</li>

      </ul>
    </div> 
  </section>
  <!-- FIN CUENTA REGRESIVA -->

<?php include_once 'includes/templates/footer.php'; ?>