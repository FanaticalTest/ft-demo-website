<?php
//include_once include $_SERVER['DOCUMENT_ROOT']."/class/sql.php";
include $_SERVER['DOCUMENT_ROOT']."/api/inc/debug.php";

$data = array("title" => "Toto title", "author" => "toto author" , "edition" => "toto edition");                                                                    
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init('http://localhost/insertBook.php');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
header('Content-Type: application/json');
echo $result ;
?>