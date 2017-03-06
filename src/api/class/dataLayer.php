<?php
require_once "mySqlLib.php";
require_once "jsonLib.php";
require_once "validationLib.php";

class dataLayer extends mySqlLib
{
    // Insert function
    public function createTable()
    {
        $json = new jsonLib();
        $data = array();
        
        // Drop table if exists
        $sql = "DROP TABLE IF EXISTS `books`; ";
        $newdata = array ("is_table_dropped"=>parent::sQuery($sql));
        array_push( $data, $newdata);

        // Create table
        $sql = "CREATE TABLE IF NOT EXISTS `books` ( ";
        $sql .= "`book_id` int(11) NOT NULL AUTO_INCREMENT, ";
        $sql .= "`title` varchar(255) NOT NULL, ";
        $sql .= "`author` varchar(255) NOT NULL, ";
        $sql .= "`edition` varchar(255) NOT NULL, ";
        $sql .= "PRIMARY KEY (`book_id`) ";
        $sql .=  ") ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8; ";
        $newdata = array ("is_table_created"=>parent::sQuery($sql));
        array_push( $data, $newdata);

        // Insert test date
        $sql = "INSERT INTO `books` (`book_id`, `title`, `author`, `edition`) VALUES";
        $sql .= "(1, 'JavaScript and JSON Essentials', 'Sai Srinivas Sriparasa', 'Packt'),";
        $sql .= "(2, 'RESTful Web APIs', 'Leonard Richardson', 'Oreilly'); ";
        $newdata = array ("is_test_data_inserted"=>parent::sQuery($sql));
        array_push( $data, $newdata);

        return $json->jsonEncodeArray($data);
    }

    // Insert function
    public function insertBook($title, $author, $edition)
    {
        $json = new jsonLib();
        $validation = new validationLib();

        // check for injection pattern in query string and validate 
        $title = parent::escape($validation->truncateStringLength($title,255));
        $author = parent::escape($validation->truncateStringLength($author,255));
        $edition = parent::escape($validation->truncateStringLength($edition,255));

        // Insert data
        $sql = "INSERT INTO `books` (`title`, `author`, `edition`) VALUES ('".$title."','".$author."','".$edition."');";
        return $json->jsonEncodeSqlReturnedMessage("is_insertion_success", parent::sQuery($sql));
    }

    //function to get the data from db
    public function getBookList()
    {
        $sql = "SELECT * FROM `books` ;";
        $result = parent::sQuery($sql);
        $jsonEncode = new jsonLib();
        echo $jsonEncode->jsonEncodeSqlResult($result);
    }
}
?>