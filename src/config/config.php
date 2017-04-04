<?php

/*** DEBUG ***/
$debug = 0;

/*** LOAD JSON CONFIG FILE ***/
if (!$debug) {
	$config = json_decode(
				file_get_contents("../src/config/config_prod.json"),
				true
			);
	$conn_str = getenv($config['database']['mysql_url']);
}
else {
	$config = json_decode(
				file_get_contents("../src/config/config_dev.json"),
				true
			);
	$conn_str = $config['database']['mysql_url'];
}

ob_start();
include_once('../src/styling/' . $config['others']['styling']);
$vendor = ob_get_clean();

/*** PHP BASE DIR ***/
//updates accordingly when in a different directory
$index = $config['directories']['index_php'];

/*** HTML BASE DIR ***/
$index_html = $config['directories']['index_html'];

/*** DATABASE ***/
$url = parse_url($conn_str);

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = mysqli_connect($server, $username, $password, $db);
//SQL charset
mysqli_set_charset($conn,'utf8');

//part of the model
if (!$conn)
	die('Connection failed!<br>' . mysqli_connect_error());	
else {
	/*** MAIN MYSQL TRANS HERE ***/

	//always enable autocommit
	mysqli_autocommit($conn, TRUE);
}

?>