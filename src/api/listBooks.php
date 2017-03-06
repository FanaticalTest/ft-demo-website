<?php
include_once include $_SERVER['DOCUMENT_ROOT']."/api/class/dataLayer.php";
//include $_SERVER['DOCUMENT_ROOT']."/inc/debug.php";

// display content
$sql = new dataLayer();
echo $sql->getBookList();
?>