<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php require "components/nav.php" ?>

<h1>BOOKS</h1>
    <div class="div-book-container">
    <ul>
    <?php foreach ($books as $book) { ?>
        <div class="div-books">
        <li class="li-books"> <img class="bookIMG" src="IMGS/bookIMG.svg" alt="1"> <a href="/show?id= <?=$book["id"]?>">  <?= $book["name"] ?> </a> <?= " / ", $book["author"], " / ", $book["release_date"], " / ", $book["availability"] ?> </li>
        </div>
    <?php } ?>
    </ul>
    </div>

</body>
</html> 