<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 


 function truncate($string,$width){
 	$string= html_entity_decode($string);
	if(strlen($string) > $width) {
    //$string = wordwrap($string, 20);
    $string = substr($string, 0, $width);
    $string= $string. "...";
  }

  return $string;
}

function get_meses(){
	$array =array(
		"01" => "ENERO",
		"02" => "FEBRERO",
		"03" => "MARZO",
		"04" => "ABRIL",
		"05" => "MAYO",
		"06" => "JUNIO",
		"07" => "JULIO",
		"08" => "AGOSTO",
		"09" => "SEPTIEMBRE",
		"10" => "OCTUBRE",
		"11" => "NOVIEMBRE",
		"12" => "DICIEMBRE"
		);
	return $array;
}

?>
