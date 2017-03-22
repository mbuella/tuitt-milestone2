<?php

/*** DEBUG ***/
$debug = 1;

ob_start();
if (!$debug)
	include_once('../src/styling/assets_prod.html');
else
	include_once('../src/styling/assets_dev.html');
$vendor = ob_get_clean();	



?>