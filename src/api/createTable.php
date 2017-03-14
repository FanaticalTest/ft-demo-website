<?php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/


include_once include $_SERVER['DOCUMENT_ROOT']."/api/class/dataLayer.php";
include $_SERVER['DOCUMENT_ROOT']."/api/inc/debug.php";

$sql = new dataLayer();
header('Content-Type: application/json');
echo $sql->createTable();
?>