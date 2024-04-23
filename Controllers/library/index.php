<?php
require "Database.php";
$config = require "config.php";




$query = "SELECT * FROM catalog"; 
$params = [];
$db = new Database($config);
$books = $db->execute($query, $params)->fetchALL();




require "views/library_view/index_view.php";


//  var_dump($events);