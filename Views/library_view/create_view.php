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
    <div class="parent-div">
    <form method="POST">
        <label>
            <div class="child-div">
            <p class="create-p">NAME</p>
            <input name="name">
            <p class="create-p">AUTHOR</p>
            <input name="author">
            <p class="create-p">RELEASE DATE</p>
            <input name="release_date">
            <p class="create-p">STOCK</p>
            <input name="availability">
        </label>
        
        <br>
        <button class="create">Create</button>
    </form>
    </div>
    </div>
</body>
</html>