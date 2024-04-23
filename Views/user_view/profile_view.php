
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
<?php require "components/nav.php" ?>


<?php if (!isset($_SESSION['flash'])) { ?>
                <p>you must login to view your profile</p>
                <form action="/login"> 
                    <li class="nav-li"><input class="nav-button" type="submit" name="login" value="Login"></li>
                 </form>
                 <p>dont have and account?</p>
                 <form action="/register"> 
                    <li class="nav-li"><input class="nav-button" type="submit" name="register" value="register"></li>
                 </form>
            <?php } ?>

<?php if($_SESSION["Admin"] == true) { ?>

<section class="admin-section">

    <h2 class="h2-admin">hi Admin <?php echo $_SESSION["email"] ?> </h2>
    <br>
    <p> here are all the books that have been borrowed</p>

    <table>
<thead>
    <tr>
        <th>Book name</th>
        <th>Return date</th>
        <th>Book_id</th>
        <th>User_id</th>

    </tr>
</thead>
<tbody>
    
    <?php foreach ($borrowedBooks as $borrowedBook): ?>
        <tr>
            <td><img class="bookIMG" src="IMGS/bookIMG.svg" alt="1"> <a href="/show?id= <?=$borrowedBook["book_id"]?>">  <?= $borrowedBook["name"] ?> </a> </td>
            <td><?php echo $borrowedBook["return_date"]; ?></td>
            <td><?php echo $borrowedBook["book_id"]; ?></td>
            <td><?php echo $borrowedBook["user_id"]; ?></td>
        </tr>
    <?php endforeach; ?>

</tbody>
</table>

<p>here all the books that out library curently offers</p>

<table>
<thead>
    <tr>
        <th>Book name</th>
        <th>Author</th>
        <th>Release_date</th>
        <th>availability</th>

    </tr>
</thead>
<tbody>
    
    <?php foreach ($books as $book): ?>
        <tr>
            <td><img class="bookIMG" src="IMGS/bookIMG.svg" alt="1"> <a href="/show?id= <?=$book["id"]?>">  <?= $book["name"] ?> </a> </td>
            <td><?php echo $book["author"]; ?></td>
            <td><?php echo $book["release_date"]; ?></td>
            <td><?php echo $book["availability"]; ?></td>
        </tr>
    <?php endforeach; ?>

</tbody>
</table>
</section>  




<?php } else{ ?>



    <section class="user-section">
    
    <h2>Welcome <?php echo $_SESSION["email"] ?> </h2>



</section>
<?php } ?>
</body>
</html>