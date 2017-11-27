<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $data = array("title" => $_POST["title"], "author" => $_POST["author"] , "edition" => $_POST["edition"]);                                                                    
    $data_string = json_encode($data);                                                                                   
                                                                                                                        
    // using docker
    // $ch = curl_init('http://'.getenv('API_SERVER').':'.getenv('API_PORT').'/api/insertBook.php');     
    // using normal
    $ch = curl_init('http://demo-website.fanaticaltest.com/api/insertBook.php');                                                                
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($data_string))                                                                       
    );                                                                                                                   
                                                                                                                        
    $result = curl_exec($ch);
    header('Location:listBooks.php');
    exit;
}
?>

<html>
<head>
    <title>Insert book</title>
</head>
<body>
<form method="post">
  title: <input type="text" name="title" maxlength="255"><br>
  author: <input type="text" name="author" maxlength="255"><br>
  edition: <input type="text" name="edition" maxlength="255"><br>
  <input type="submit" value="Submit">
</form>    
</body>
</html>