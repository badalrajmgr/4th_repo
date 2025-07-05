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
    <title>CiaoLaguno</title>
    <link rel="stylesheet" href="../css/index.css">
   <link rel="stylesheet" href="../css/bag.css">
   <style>
      .action_container{
        padding: 0px 10px;
      }
    </style>
    
</head>
<body>
    <header>
        <div class="logo_container">
            <a href="#"><img class="CiaoLaguno_home" src="../images/ciaoLaguno_logo.png" alt="CiaoLaguno Home"></a>
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
        <div class="action_bar" >
            <div class="action_container" >
                <span class="material-symbols-outlined action_icon">person</span>
				<span onclick="showProfile()" class="action_name" id="profile">
				<?php echo htmlspecialchars($username); ?>
			</span>
 
            </div>

            <div class="action_container">
                <span class="material-symbols-outlined action_icon">favorite</span>
                <span class="action_name" id="wishlist" >Wishlist</span>
            </div>

            <div class="action_container">
                <span class="material-symbols-outlined action_icon">shopping_bag</span>
                <span class="action_name" id="bag"><a href="./bag.php">Bag</a></span>
                <span class="bag-item-count">0</span>
            </div>
            <div class="action_container">
                <span><img style="height:20px;padding-top:2px;" src="../images/logout.jpeg"></span>
                <span class="action_name" id="bag"><a href="../index.html">Logout</a></span>
                
            </div>
        </div>
    </header>
    <main>
      <div class="items-container">
        <div class="item-container">
          <img class="item-image" src="../images/1.webp" alt="item image">
          <div class="rating">
            4.5 ⭐ | 1.4k
          </div>
          <div class="company-name">
            Carlton London 
          </div>
          <div class="item-name">
            Rhodium-plated CZ Floral Studs
          </div>
          <div class="price">
            <span class="current-ptice">Rs 606</span>
            <span class="original-price">Rs 1045</span>
            <span class="discount">(42% OFF)</span>
          </div>
          <button class="btn-add-bag" onclick="add_to_bag()">Add to Bag</button>
        </div>
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
            © 2023 www.ciaolaguno.com. All rights reserved.
        </div>
    </footer>
    <script src="./bag.js"></script>
    <script src="../index.js"></script>
    <script>
        let noOfobjInBag = 0;
        function add_to_bag(){
            noOfobjInBag++;
            alert(`added to bag ${noOfobjInBag}`);
            document.querySelector('.bag-item-count').innerText = `${noOfobjInBag}`;
        }
        function showProfile(){
        alert(`Welcome <?php echo htmlspecialchars($username); ?>`);
        }
    </script>

</body>
</html>