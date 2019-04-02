<?php
// El & indica que la variable debe conservar su valor original. Llamado paso por referencia.   
function productos_json(&$boletos, &$playeras = 0, &$tazas = 0){
    $dias = array(0 => 'un_dia', 1 => 'pase_completo', 2 => 'pase_2dias');
    $total_boletos = array_combine($dias, $boletos);
    $json = array();

    foreach ($total_boletos as $key => $boletos) :
        if((int)$boletos > 0):
            $json[$key] = (int) $boletos;
        endif;
    endforeach;
     
    $playeras = (int) $playeras;
    if ($playeras > 0):
        $json['playeras'] = $playeras;
    endif;
    
    $tazas = (int)$tazas;
    if ($tazas > 0):
        $json['tazas'] = $tazas;
    endif;
    
    //Pasar los datos del foreach a un archivo json:
    return json_encode($json);
}

function eventos_json(&$eventos) {
    $eventos_json = array();
    foreach ($eventos as $evento):
        $evento_json['eventos'][] = $evento;
    endforeach;

    return json_encode($evento_json);
}