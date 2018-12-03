<?php
include "./checkCookies.php";
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Logo</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Dropdown link
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </li>
        <li class="navbar-nav">
            <a class="nav-link">

                <?php
                echo $_COOKIE['user_info'];
                ?></a>
        </li>
<!--        log out button-->
        <li class="navbar-nav">
            <a href="./logout.php" class="nav-link btn btn-primary">
                Log out
            </a>
        </li>
    </ul>
</nav>