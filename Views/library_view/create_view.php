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
    <h1>ADD BOOKS</h1>
    <form method="POST">
        <label>
            NAME
            <input name="name">
            AUTHOR
            <input name="author">
            RELEASE DATE
            <input name="release_date">
            STOCK
            <input name="availability">
        </label>
        
        <button>Submit</button>
    </form>
</body>
</html>