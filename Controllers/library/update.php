<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);


if(isset($_SESSION["Admin"])) {
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];



    if(empty($errors)){

        $query = "UPDATE catalog 
                SET name = :name, author = :author, release_date = :release_date, availability = :availability
                WHERE id = :id";

        $params = [
            ":name" => $_POST["name"],
            ":author" => $_POST["author"],
            ":release_date" => $_POST["release_date"],
            ":availability" => $_POST["availability"],
            ":id" => $_POST["id"]
        ];

    $db->execute($query, $params)->fetch(); 
    header("location: /");
}
}


$query = "SELECT * FROM catalog WHERE id = :id ";

$params = [
    ":id" => $_GET["id"]      
];

$book = $db->execute($query, $params)->fetch();

}

require "views/library_view/update_view.php";