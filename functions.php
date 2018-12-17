<?php
function priceFormat($price) {
	ceil($price);
	if  ($price < 1000) {
		return $price;
	} else {
		return number_format($price, 0, '', ' ') . ' <b class="rub">р</b>';
	}
}

function renderTemplate($path, $param=null) {
	if (isset($path)) {
		ob_start();
		require_once __DIR__ . $path;
		$output =  ob_get_clean();
		return $output;
	}
	return require_once '';
}

function esc($str) {
	return htmlspecialchars($str);
}

function timer() {
	$ts  = time();
	$ndts = strtotime('tomorrow');
	$delta_h = floor(($ndts - $ts)/3600);
	$delta = (($ndts - $ts)/3600) - $delta_h;
	$delta_m = ($delta * 60)/100 + 0.01;
	return $delta_h . ':' . substr($delta_m, 2, 2);
}