<link rel="stylesheet" href="style.css">
<?php require "components/nav.php" ?>
<?php if ($_SESSION["Admin"]==true) { ?>

<h1>update a post </h1>


<form method="POST">
    <input name="id" value="<?= $book["id"] ?>" type="hidden"/>

<label> Name:
        <input name="name" value="<?= $_POST["name"] ?? $book["name"] ?>"/>

</label>

<label>author:
    <input name="author" value="<?= $_POST["author"] ?? $book["author"] ?>"/>

</label>
<label>release date:
    <input name="release_date" value="<?= $_POST["release_date"] ?? $book["release_date"] ?>"/>

</label>
<label>availability:
    <input name="availability" value="<?= $_POST["availability"] ?? $book["availability"] ?>"/>

</label>


<button>Save</button>


</form>
<?php } else { ?>
<h2>tu neesi admin</h2>
<?php } ?>