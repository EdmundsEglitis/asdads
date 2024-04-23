<?php
require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM catalog WHERE id = :id";

$params = [":id" => $_GET["id"] ];

$book = $db->execute($query, $params)->fetch();

require "views/library_view/show_view.php";