<?php
include_once include $_SERVER['DOCUMENT_ROOT']."/api/class/dataLayer.php";

//include $_SERVER['DOCUMENT_ROOT']."/inc/debug.php";

//recieve data 
if(isset($_GET['title']))
{
    // if get method
    $data = array("title" => $_GET['title'], "author" => $_GET['author'] , "edition" => $_GET['edition']); 
}
else
{
    // if post method
    $data = json_decode(file_get_contents('php://input'), true);
}
//insert data in db
$sql = new dataLayer();
echo $sql->insertBook($data[title], $data[author], $data[edition]);
?>