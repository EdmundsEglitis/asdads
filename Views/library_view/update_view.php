<link rel="stylesheet" href="style.css">
<?php require "components/nav.php" ?>
<?php if ($_SESSION["Admin"]==true) { ?>

<h1>update a post </h1>


<div class="parent-div">
    <form method="POST">
    <input name="id" value="<?= $book["id"] ?>" type="hidden"/>
        <label>
            <div class="child-div">
            <p class="create-p">NAME </p>
            <input name="name" value="<?= $_POST["name"] ?? $book["name"] ?>" >
            <p class="create-p">AUTHOR</p>
            <input name="author" value="<?= $_POST["author"] ?? $book["author"] ?>">
            <p class="create-p">RELEASE DATE</p>
            <input name="release_date" value="<?= $_POST["release_date"] ?? $book["release_date"] ?>">
            <p class="create-p">STOCK</p>
            <input name="availability" value="<?= $_POST["availability"] ?? $book["availability"] ?>">
        </label>
        
        <br>
        <button class="create">Create</button>
    </form>
    </div>
    </div>


<?php } else { ?>
<h2>tu neesi admin</h2>
<?php } ?>