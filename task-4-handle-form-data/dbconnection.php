<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'fullstack20';

    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error) {
        echo "<h2 style=\"color: #ce0e51\">ERR: DATABASE_SELECTION_ERROR \n Please Check Your Database</h2>";
        die($conn->connect_errno);
    }

?>