<?php

/*
 * Funções Auxiliares do sistema
 */

function pre($expression, bool $json = true, bool $stop = true)
{
	echo '<pre>';
	if($json)
		echo print_r($expression); 
	else
		var_dump($expression);
	if($stop)
		die();
}

function assets($file = null)
{
	return url('/') . "/resources/assets/{$file}";
}

function assetsfront($file = null)
{
	return url('/') . "/resources/{$file}";
}

function dateBdToApp($date){
  $old = new Datetime($date);
  return $old->format('d/m/Y');
}

function dateToApp($date){
  if( $date ){
    $old = new Datetime($date);
    return $old->format('Y-m-d');
  }else{
    return null;
  }
}

function dateTimeBdToApp($date){
  $old = new Datetime($date);
  return $old->format('d/m/Y H:i:s');
}

function currencyToBd($str){
  $s =  preg_replace('/[^0-9,]/','',$str);
  return preg_replace('/[,]/','.',$s);
}

function currencyToApp($curr){
  return 'R$ '.number_format($curr, 2, ',','.');
}

function currencyToAppOnlyNumbers($curr){
  return number_format($curr, 2, ',','.');
}

function makeStatusFront($status){
  switch ($status){
    case '0':
      return 'Indisponível';
      break;
    case '1':
      return 'Disponível';
      break;
    case '2': 
      return 'Reservada';
      break;
  }
}

function break_text($text, $limit) {
  if (strlen($text) > $limit) {
      $pos = strpos($text, ' ', $limit);
      return substr($text, 0, $pos) . '...';
  } else {
      return $text;
  }
}

function limpaNumeros($n){
  return preg_replace("/[^0-9]/", "",$n);
}

function retornaMesTexto($mes){
  switch($mes){
    case '1' : return "Janeiro"; break;
    case '2' : return "Fevereiro"; break;
    case '3' : return "Março"; break;
    case '4' : return "Abril"; break;
    case '5' : return "Maio"; break;
    case '6' : return "Junho"; break;
    case '7' : return "Julho"; break;
    case '8' : return "Agosto"; break;
    case '9' : return "Setembro"; break;
    case '10' : return "Outubro"; break;
    case '11' : return "Novembro"; break;
    case '12' : return "Dezembro"; break;
  }
}

function retornaMesAbrev($mes){
  switch($mes){
    case '1' : return "Jan"; break;
    case '2' : return "Fev"; break;
    case '3' : return "Mar"; break;
    case '4' : return "Abr"; break;
    case '5' : return "Mai"; break;
    case '6' : return "Jun"; break;
    case '7' : return "Jul"; break;
    case '8' : return "Ago"; break;
    case '9' : return "Set"; break;
    case '10' : return "Out"; break;
    case '11' : return "Nov"; break;
    case '12' : return "Dez"; break;
  }
}

function calculaDiasPorAno($ano, $mes){
  $qtd_dias = $ano * 365;
  $qtd_dias = $qtd_dias + ($mes * 30);
  return $qtd_dias;

}