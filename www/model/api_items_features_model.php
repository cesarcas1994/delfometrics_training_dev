<?php


/**
 * api_items_features_model
 */

/* Pendiente recibir datos de items

-> Recibe datos tipo get

localhost://5000/api/{item_id}

*/

/* Pendiente empieza a buscar en paralelo todas las características de json de entrada a machine-learning

objetivo: "tiene que trabajar en tiempos de producción menor a dos segundos, y dispararse desde que el usuario introduce item_id sin tocar aún botón de buscar" 

*/

$start_time = microtime(true);

//item_id producto estrella de ibushak
//Motosierra Gasolina Leñera 52 Cc Barra De 20 Hkm5220 Husky
//$item_id_input = "MLM647635498";
//Casco Abatible Caberg Duke Legend Hi Viz 100% Italiano
$item_id_input = "MLM672701687";

$item_features_result = $meli -> get_1_item_features($item_id_input, $features_to_obtain = null, $country_id="MLM", $coin="MLM", $fast_mode = true);

//set booleans as strings for rearrangement in machine learning mode
$item_features_result = analysis::item_features_object_mode_ML($item_features_result);

var_dump($item_features_result);

$end_time = microtime(true);

echo "<br> indirect call - day_weight_model - time rounded: " . round($end_time - $start_time, 6) . " seconds";