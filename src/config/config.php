<?php

/*** ROOT DIR ***/
//update accordingly when in a different directory
$index = '/';
#$index = '/tuitt/kwntu/';

/*** DEBUG ***/
$debug = 1;

/*** DATABASE ***/
//$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$url = parse_url("mysql://ad35esusrdjbehvt:v1ili19gt1aey39t@gk90usy5ik2otcvi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/nlntliqj5htrw5ge");

/*** CONFIG START HERE ***/

ob_start();
if (!$debug)
	include_once('../src/styling/assets_prod.html');
else
	include_once('../src/styling/assets_dev.html');
$vendor = ob_get_clean();	

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = mysqli_connect($server, $username, $password, $db);

if ($conn) {
	//echo "Connection successful";
	//set database vars that can be accessed across the system
}

?>