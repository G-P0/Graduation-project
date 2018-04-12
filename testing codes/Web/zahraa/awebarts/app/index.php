<?php
    session_start();
    if (! isset($_SESSION['username'])) 
    {
        include_once 'login.php';
        die();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>awebarts</title>
        <link rel="stylesheet" href="resources/css/bootstrap.css">
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/mystyle.css">
        <script src="resources/js/bootstrap.js"></script>
        <script src="resources/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <header>
            <img src="resources/images/logo.png" alt="logo" />
            <h2>Welcome 
                <?php 
                    if (isset($_SESSION['username'])) 
                        echo $_SESSION['username']." <a href='?page=logout'>Logout</a>";
                ?>
            </h2>
        </header>
        <div class="clear"></div>
        <div class="content">
            <aside>
                <nav>
                    <a href="index.php" class="btn-danger active" >Home page</a>
                    <a href="?page=MainSettings" class="btn-danger active" >Main settings</a>
                    <a href="?page=Sections" class="btn-danger active" >Sections</a>
                    <a href="?page=Pages" class="btn-danger active" >Pages</a>
                    <a href="?page=Comments" class="btn-danger active" >Comments</a>
                    <a href="?page=Library" class="btn-danger active" >Library</a>
                </nav>
            </aside>
            <section id="page">
                <?php 
                    if(@ $_GET['page']) 
                    {
                        $url = $_GET['page'] . ".php";
                        if(is_file($url)) 
                            include($url);
                        else
                            echo "Requested file not found"; 
                    }
                    else
                        include('./MainPage.php');
                ?>
            </section>
        </div>
        <div class="clear"></div>
        <footer>
            <p>Copy Right Reserved &copy; Zahraa Saied 2018</p>
        </footer>
        </div>
    </body>
</html>