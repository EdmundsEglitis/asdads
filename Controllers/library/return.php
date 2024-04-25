<?php

require "Database.php";
$config = require "config.php";

    $query = "SELECT * FROM users WHERE id = :id"; 
    $params = [":id" => $_SESSION["id"]];
    $db = new DataBase($config);
    $user = $db->execute($query, $params)->fetch();

    $query = "SELECT * FROM catalog WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $book = $db->execute($query, $params)->fetch();
    
    $query = "DELETE FROM borrowedBooks WHERE book_id = :id";
    $params = [":id" => $_GET["id"]];
    $db->execute($query, $params);

    

    $query = "UPDATE catalog SET availability = availability + 1 WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $db->execute($query, $params);

    header("Location: /profile");