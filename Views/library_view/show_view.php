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
<h1><?= $book["name"] ?></h1>
    <h3>author:<?= htmlspecialchars($book["author"]) ?></h3>
    <h3>release date:<?= htmlspecialchars($book["release_date"]) ?></h3>
    <h3>available:<?= htmlspecialchars($book["availability"]) ?></h3>

    <?php if(isset($_SESSION["user"])){ ?>
        <?php if($book["availability"]>0){ ?>
            <a class="a-show" href="/borrow?id=<?= $book["id"] ?>">Borrow book</a>
        <?php } else {?>
            <h3>No books left to borrow</h3>
            <?php }?>
        <?php } else { ?>
            <p> login to borrow book </p>
            <?php } ?>

<?php if(isset($_SESSION["Admin"])) { ?>
 <a href="/update?id=<?= $book["id"] ?>">Edit</a>
<?php } ?>

</body>
</html> 