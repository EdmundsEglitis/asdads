<?php

require "Database.php";
$config = require "config.php";


$book = $_GET["id"];
$query = "DELETE FROM catalog WHERE id = :id";
$params = [":id" => $book];
$db = new DataBase($config);
$books = $db->execute($query, $params)->fetchALL();
header("Location: /");