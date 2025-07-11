<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ./index.php"); // or wherever your login page is
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ciao Laguno</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <header>
        <div class="logo_container">
            <a href=""><img class="ciao_laguno_home" src="../images/ciaoLaguno_logo.png" alt="CiaoLaguno Home"></a>
        </div>
        <nav class="nav_bar">
            <a href="#">Men</a>
            <a href="#">Women</a>
            <a href="#">Kids</a>
            <a href="#">Home & Living</a>
            <a href="#">Beauty</a>
            <a href="#">Studio <sup>New</sup></a>
        </nav>
        <div class="search_bar">
            <span class="material-symbols-outlined search_icon">search</span>
            <input class="search_input" placeholder="Search for products, brands and more">
        </div>
        <div class="action_bar">
            <div class="action_container">
                <span class="material-symbols-outlined action_icon">person</span>
                <span class="action_name"><?php echo htmlspecialchars($username); ?></span>
                
            </div>

            <a class="action_container" href="./bag.php">
                <span class="material-symbols-outlined action_icon">shopping_bag</span>
                <span class="action_name">Bag</span>
                <span class="bag-item-count">0</span>
            </a>
            <div class="action_container">
                <div><img style="height:20px;padding-top:2px;" src="../images/logout.jpeg"></div>
                <span class="action_name" id="bag"><a href="../index.html">Logout</a></span>
            </div>
        </div>
    </header>
    <main>
        <div class="items-container">
        </div>
    </main>
    <footer>
        <div class="footer_container">
            <div class="footer_column">
                <h3>ONLINE SHOPPING</h3>

                <a href="#">Men</a>
                <a href="#">Women</a>
                <a href="#">Kids</a>
                <a href="#">Home & Living</a>
                <a href="#">Beauty</a>
                <a href="#">Gift Card</a>
                <a href="#">CiaoLaguno Insider</a>
            </div>

            <div class="footer_column">
                <h3>ONLINE SHOPPING</h3>

                <a href="#">Men</a>
                <a href="#">Women</a>
                <a href="#">Kids</a>
                <a href="#">Home & Living</a>
                <a href="#">Beauty</a>
                <a href="#">Gift Card</a>
                <a href="#">CiaoLaguno Insider</a>
            </div>

            <div class="footer_column">
                <h3>ONLINE SHOPPING</h3>

                <a href="#">Men</a>
                <a href="#">Women</a>
                <a href="#">Kids</a>
                <a href="#">Home & Living</a>
                <a href="#">Beauty</a>
                <a href="#">Gift Card</a>
                <a href="#">CiaoLaguno Insider</a>
            </div>
        </div>
        <hr>

        <div class="copyright">
            © 2025 www.ciaolaguno.com. All rights reserved.
        </div>
    </footer>
    <script src="../data/items.js"></script>
    <script src="./index_php.js"></script>
</body>
</html>