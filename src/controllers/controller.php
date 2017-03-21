<?php

function home_action() {
	ob_start();
	if (!$GLOBALS['debug'])
		include_once('../src/styling/assets_prod.html');
	else
		include_once('../src/styling/assets_dev.html');
	$vendor = ob_get_clean();

	require_once('../src/views/home.php');
}

?>