<?php
function listBooks()
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'http://'.getenv('API_SERVER').':'.getenv('API_PORT').'/api/listBooks.php');
    $result = curl_exec($ch);
    curl_close($ch);

    $books = json_decode($result);

    echo "<table><tr><th>Id</th><th>Title</th><th>Author</th><th>Edition</th></tr>";
    foreach ($books as $book){
        echo "<tr>";
        foreach ( $book as $key => $value ) {
            echo "<td>$value</td>";
        }
        echo "</tr><tr>";
    }
    echo "</tr></table>";
}

listBooks();
?>
<br><br>
<ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="insertBook.php">Add book</a></li>
</ul>