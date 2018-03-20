<!DOCTYPE html>
<html>
<head>
    <title>Reciplease | Bookmarks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/png" href="../images/favicon.png" />
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../styles/default.css" />
    <link rel="stylesheet" type="text/css" href="../styles/medium.css" media="only screen and (max-width: 1100px)" />
    <link rel="stylesheet" type="text/css" href="../styles/small.css" media="only screen and (max-width: 750px)" />
    <script type="text/javascript" src="../js/kotlin.js"></script>
    <script type="text/javascript" src="../js/kotlinx-html-js.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script src="../js/infinite-scroll.pkgd.js"></script>
    <!-- see here for infinite scroll implementation - https://infinite-scroll.com/-->
    
</head>  
<body id="homePage">
    <div id="home">
        <?php
        include "../templates/logo.php";
        ?>
    </div>
    <form action="" method="get" id="searchForm" class="form">
            <input type="textSearch" id="search" name="search" placeholder="search" /><br />
    </form>
<?php
    include "../templates/profilepic.php";
    include "../templates/recipecard.php";
?>
       
<!--<h1>Reciplease</h1>-->
</body>
</html>