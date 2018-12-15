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