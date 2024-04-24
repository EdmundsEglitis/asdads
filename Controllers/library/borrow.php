<?php

require "Database.php";
$config = require "config.php";

    $date = new DateTime('now', new DateTimeZone("Europe/Riga"));
    date_modify($date, '+1 day');


    $query = "SELECT * FROM users WHERE id = :id"; 
    $params = [":id" => $_SESSION["id"]];
    $db = new DataBase($config);
    $user = $db->execute($query, $params)->fetch();




    $query = "SELECT * FROM catalog WHERE id = :id"; 
    $params = [":id" => $_GET["id"]];
    $book = $db->execute($query, $params)->fetch();




    $query = "SELECT * FROM borrowedBooks WHERE user_id = :user_id AND name = :name"; 
    $params = [":user_id" => $user["id"], ":name" => $book["name"]];
    $borrowed_books = $db->execute($query, $params)->fetch();




        $query = "INSERT INTO 
        borrowedBooks (name, return_date, book_id, user_id) 
        VALUE 
        (:name, :return_date, :book_id , :user_id);"; 
        $params = [":name" => $book["name"], ":return_date" => $date->format("Y-m-d H:i:s"), ":book_id" => $book["id"], ":user_id" => $user["id"]];
        $db = new DataBase($config);
        $db->execute($query, $params)->fetch();




        $query = "UPDATE catalog SET availability = availability - 1 WHERE id = :id"; 
        $params = [":id" => $_GET["id"]];
        $db->execute($query, $params);
        header("Location: /");

    $page_title = "borrowing";