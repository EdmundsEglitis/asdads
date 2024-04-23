<?php

require "Database.php";
$config = require "config.php";
$db = new Database($config);
if($_SERVER["REQUEST_METHOD"] == "POST"){
$errors = [];
/*
if(trim($_GET["name"]) == "") {
    $errors["name"] = "da name is empty blud";
}

if(strlen($_GET["author"]) > 255) {
    $errors["event"] = "da author is too long you twat";
} */
if(empty($errors)){
    $query = "INSERT INTO catalog (name, author, release_date, availability)
    VALUES (:name, :author, :release_date, :availability);";
    $params = [
        ":name" => $_POST["name"],
        ":author" => $_POST["author"],
        ":release_date" => $_POST["release_date"],
        ":availability" => $_POST["availability"]
    ];
    var_dump($params);
    $db->execute($query, $params);
    header('Location: '. "/");
    die();

}

}

require "views/library_view/create_view.php";