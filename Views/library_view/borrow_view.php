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
<?php if($books[0] != []){ ?>
        <h1>Ur books!</h1>
            <ul>
                <?php foreach ($books[0] as $book) { ?>
                    <li><?= "'" . $book["name"] . "' return date of this book is: " . $book["return_date"] ?> <a href="/return?id=<?= $book["book_id"] ?>" class="blue_but">Return!</a></li>            <hr>
                <?php } ?>
            </ul>
    <?php }else { ?>
    <h1>No books borrowed</h1>
    <?php }; ?>
</body>
</html>