$(function() { 
    'use strict';
 
    /*
 
 oooo     oooo                                   
  8888o   888   ooooooo  ooooooooo     ooooooo   
  88 888o8 88   ooooo888  888    888   ooooo888  
  88  888  88 888    888  888    888 888    888  
 o88o  8  o88o 88ooo88 8o 888ooo88    88ooo88 8o 
                         o888                    
 
*/
    var map = L.map('mapa').setView([20.653175, -103.391476], 17);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([20.653175, -103.391476]).addTo(map)
        .bindPopup('Boletos ya disponibles.<br> Expo Guadalajara.')
        .openPopup()
        .bindTooltip('Resplandece 2019')
        .openTooltip();
 
});


(function() {
    "use strict";
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function() {


 
/*
 
 ooooooooo               o8                              ooooo  oooo                                             o88                          
  888    88o   ooooooo o888oo ooooooo    oooooooo8        888    88  oooooooo8 oooo  oooo   ooooooo   oo oooooo  oooo   ooooooo    oooooooo8  
  888    888   ooooo888 888 888     888 888ooooooo        888    88 888ooooooo  888   888   ooooo888   888    888 888 888     888 888ooooooo  
  888    888 888    888 888 888     888         888       888    88         888 888   888 888    888   888        888 888     888         888 
 o888ooo88    88ooo88 8o 888o 88ooo88   88oooooo88         888oo88  88oooooo88   888o88 8o 88ooo88 8o o888o      o888o  88ooo88   88oooooo88  
                                                                                                                                              
 
*/
        let nombre   = document.getElementById('nombre');
        let apellido = document.getElementById('apellido');
        let email    = document.getElementById('email');
  /*
 
 oooooooooo                                                       oooooooo8                                                              
  888    888 ooooooo    oooooooo8   ooooooooo8  oooooooo8       o888     88   ooooooo   oo ooo oooo  ooooooooo     ooooooo    oooooooo8  
  888oooo88  ooooo888  888ooooooo  888oooooo8  888ooooooo       888           ooooo888   888 888 888  888    888 888     888 888ooooooo  
  888      888    888          888 888                 888      888o     oo 888    888   888 888 888  888    888 888     888         888 
 o888o      88ooo88 8o 88oooooo88    88oooo888 88oooooo88        888oooo88   88ooo88 8o o888o888o888o 888ooo88     88ooo88   88oooooo88  
                                                                                                     o888                                
 
*/
        let pase_dia      = document.getElementById('pase_dia');
        let pase_completo = document.getElementById('pase_completo');
        let pase_dosdias  = document.getElementById('pase_dosdias');

/*
 
 oooooooooo               o8                                                                            oooo o88                   
  888    888   ooooooo  o888oo ooooooo  oo oooooo   ooooooooo8  oooooooo8       oooo   oooo        ooooo888  oooo oooo   oooo      
  888oooo88  888     888 888 888     888 888   888 888oooooo8  888ooooooo        888   888       888    888   888  888   888       
  888    888 888     888 888 888     888 888   888 888                 888        888 888        888    888   888   888 888        
 o888ooo888    88ooo88    888o 88ooo88  o888o o888o  88oooo888 88oooooo88           8888           88ooo888o o888o    888          
                                                                                 o8o888                                            
 
*/      
 
        let calcular = document.getElementById('calcular');
        let errorDiv = document.getElementById('error');
        let botonRegistro = document.getElementById('btnRegistro');
        let lista_productos = document.getElementById('lista-productos');
        let suma_total = document.getElementById('suma-total');
/*
 
 ooooooooooo               o8                                     
  888    88  oooo   oooo o888oo oo oooooo   ooooooo    oooooooo8  
  888ooo8      888o888    888    888    888 ooooo888  888ooooooo  
  888    oo    o88 88o    888    888      888    888          888 
 o888ooo8888 o88o   o88o   888o o888o      88ooo88 8o 88oooooo88  
                                                                  
 */

        let playeras = document.getElementById('playera_evento');
        let tazas    = document.getElementById('tazas');

/*
 
   oooooooo8             o888                        o888                         
 o888     88   ooooooo    888   ooooooo  oooo  oooo   888   ooooooo   oo oooooo   
 888           ooooo888   888 888     888 888   888   888   ooooo888   888    888 
 888o     oo 888    888   888 888         888   888   888 888    888   888        
  888oooo88   88ooo88 8o o888o  88ooo888   888o88 8o o888o 88ooo88 8o o888o       
                                                                                  
 
*/
        calcular.addEventListener('click', calcularMontos);         

        pase_dia.addEventListener('change', mostrarDias);
        pase_dosdias.addEventListener('change',mostrarDias);
        pase_completo.addEventListener('change', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);

        function validarCampos() {
            if (this.value == '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Este campo es obligatorio";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            } else {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            }
        }

        function validarMail() {
            if (this.value.indexOf("@") > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccccc';
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Este campo debe tener una @";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }
        }

        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value === '') {
                alert('Debes elegir un regalo');
                regalo.focus;
            } else {
                var boletosDia      = parseInt(pase_dia.value, 10)|| 0,
                    boletos2Dias    = parseInt(pase_dosdias.value, 10)|| 0,
                    boletosCompleto = parseInt(pase_completo.value, 10)|| 0,
                    cantPlayeras    = parseInt(playeras.value, 10)|| 0,
                    cantTazas       = parseInt(tazas.value, 10)|| 0;
                
                var totalPagar      = (boletosDia * 250) + (boletos2Dias * 400) + (boletosCompleto * 500) + 
                                      ((cantPlayeras * 150) * .9) + (cantTazas * 65);
                
                var listadoProductos = [];
                    
                if (boletosDia >= 1) {
                    listadoProductos.push(`${boletosDia} Pases por día`);
                }    
                if (boletos2Dias >= 1) {
                    listadoProductos.push(`${boletos2Dias} Pases por 2 días`);
                }
                if (boletosCompleto >= 1) {
                    listadoProductos.push(`${boletosCompleto} Pases Completos`);
                }
                if (cantPlayeras >= 1) {
                    listadoProductos.push(`${cantPlayeras} Playeras`);
                }
                if (cantTazas >= 1) {
                    listadoProductos.push(`${cantTazas} Tazas`);
                }
                //Muestra el fondo Gris para desplegar los productos
                lista_productos.style.display = "block";
                lista_productos.innerHTML = '';
                for (let i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + '<br>';                    
                }

                suma_total.innerHTML = `\$ ${totalPagar.toFixed(2)}`;
            }
        }

        function mostrarDias(){
            var boletosDia      = parseInt(pase_dia.value, 10)|| 0,
                boletos2Dias    = parseInt(pase_dosdias.value, 10)|| 0,
                boletosCompleto = parseInt(pase_completo.value, 10)|| 0;
            
            var diasElegidos = [];
            
            if (boletosDia > 0) {
                diasElegidos.push('viernes');
            } else {
                document.getElementById('viernes').style.display = 'none';
            }
            if (boletos2Dias > 0) {
                diasElegidos.push('viernes','sabado');
            } else {
                document.getElementById('sabado').style.display = 'none';
            }   
            if (boletosCompleto > 0) {
                diasElegidos.push('viernes','sabado','domingo');
            } else {
                document.getElementById('domingo').style.display = 'none';
            }

            for (let i = 0; i < diasElegidos.length; i++) {
                console.log(diasElegidos[i]);
                document.getElementById(diasElegidos[i]).style.display = 'block';
                
            }
            
        }

    }); //DOM CONTENT LOADED
})();

$(function() { 
    'use strict';
/*
 
 ooooo                     o8     o8                         o88                           
  888         ooooooooo8 o888oo o888oo ooooooooo8 oo oooooo  oooo  oo oooooo     oooooooo8 
  888        888oooooo8   888    888  888oooooo8   888    888 888   888   888  888    88o  
  888      o 888          888    888  888          888        888   888   888   888oo888o  
 o888ooooo88   88oooo888   888o   888o  88oooo888 o888o      o888o o888o o888o 888     888 
                                                                                888ooo888  
 
*/
    $('.nombre-sitio').lettering();

/*
 
   oooooooo8                          o888o                                                         o88                          
 o888     88   ooooooo  oo oooooo   o888oo ooooooooo8 oo oooooo    ooooooooo8 oo oooooo    ooooooo  oooo   ooooooo    oooooooo8  
 888         888     888 888   888   888  888oooooo8   888    888 888oooooo8   888   888 888     888 888   ooooo888  888ooooooo  
 888o     oo 888     888 888   888   888  888          888        888          888   888 888         888 888    888          888 
  888oooo88    88ooo88  o888o o888o o888o   88oooo888 o888o         88oooo888 o888o o888o  88ooo888 o888o 88ooo88 8o 88oooooo88  
                                                                                                                                 
 
*/
    $('.programa-evento .info-predica:first').show();
    
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);

        return false;
    });

/*
 
      o                  o88                                      o88                              oooo   oooo                                                                         
     888     oo oooooo   oooo  oo ooo oooo    ooooooo    ooooooo  oooo   ooooooo  oo oooooo         8888o  88 oooo  oooo  oo ooo oooo   ooooooooo8 oo oooooo     ooooooo    oooooooo8  
    8  88     888   888   888   888 888 888   ooooo888 888     888 888 888     888 888   888        88 888o88  888   888   888 888 888 888oooooo8   888    888 888     888 888ooooooo  
   8oooo88    888   888   888   888 888 888 888    888 888         888 888     888 888   888        88   8888  888   888   888 888 888 888          888        888     888         888 
 o88o  o888o o888o o888o o888o o888o888o888o 88ooo88 8o  88ooo888 o888o  88ooo88  o888o o888o      o88o    88   888o88 8o o888o888o888o  88oooo888 o888o         88ooo88   88oooooo88  
                                                                                                                                                                                       
 
*/
    $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 800);
    $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1600);
    $('.resumen-evento li:nth-child(4) p').animateNumber({number: 2}, 1600);
      
/*
 
        oooooooo8                                    o8                   oooooooooo                                                            o88                        
      o888     88 oooo  oooo  ooooooooo8 oo oooooo o888oo  ooooooo         888    888 ooooooooo8   oooooooo8 oo oooooo    ooooooooo8  oooooooo8 oooo oooo   oooo ooooooo   
      888          888   888 888oooooo8   888   888 888    ooooo888        888oooo88 888oooooo8  888    88o   888    888 888oooooo8  888ooooooo  888  888   888  ooooo888  
      888o     oo  888   888 888          888   888 888  888    888        888  88o  888          888oo888o   888        888                 888 888   888 888 888    888  
       888oooo88    888o88 8o  88oooo888 o888o o888o 888o 88ooo88 8o      o888o  88o8  88oooo888 888     888 o888o         88oooo888 88oooooo88 o888o    888    88ooo88 8o 
                                                                                                  888ooo888                                                                
 
*/   
 
    $('.cuenta-regresiva').countdown('2019/08/01 10:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });
});