<?php
require "Database.php";
$config = require "config.php";

$query = "SELECT * FROM borrowedBooks"; 
$params = [];
$db = new Database($config);
$borrowedBooks = $db->execute($query, $params)->fetchALL();


$query = "SELECT * FROM catalog"; 
$params = [];
$db = new Database($config);
$books = $db->execute($query, $params)->fetchALL();



require "views/user_view/profile_view.php";