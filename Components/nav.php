<header>
<nav>
    <input class="check" type="checkbox">
    <ul class="nav-items">

            <?php if($_SESSION["Admin"]==true) { ?>
                <li class="nav-li"><a href="/create">create</a></li>
            <?php } ?>
    <li class="nav-li"> <a class=main-page href="/">Back to main page</a></a> </li>
    <?php if(!isset($_SESSION["flash"])) { ?>
    <li class="nav-li"> <a class=loginregister href="/register">register</a></li>
    <li class="nav-li"> <a class=loginregister href="/login">login</a> </li>
    <?php } ?>

            <?php if (isset($_SESSION['flash'])) { ?>
                <form action="/logout" method="post"> 
                    <li class="nav-li"><input class="nav-button" type="submit" name="logout" value="Logout"></li>
                 </form>
            <?php } ?>


    <div class="float-right">
        <?php if(isset($_SESSION['flash'])) { ?>
            <form action="/profile" > 
                    <button class="nav-button">Profile</button>
                 </form>
        <?php } ?>
    </div>

</ul>

<div class = "burger"><img src = "IMGS/menu.svg" alt="Menu"></div>

</nav>
</header>