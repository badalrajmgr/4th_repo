<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ./register.php"); 
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CiaoLaguno Clone</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/bag.css">
    <style>
      .action_container{
        padding: 0px 10px;
      }
      #logout-img{
        height:20px;
        padding-top:2px;
      }
    </style>

</head>
<body>
    <header>
        <div class="logo_container">
            <a href="./index.php"><img class="CiaoLaguno_home" src="../images/ciaoLaguno_logo.png" alt="CiaoLaguno Home"></a>
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
                <span class="action_name" onclick="showProfile()">				
                  <?php echo htmlspecialchars($username); ?>
                </span>
            </div>

            <div class="action_container">
                <span class="material-symbols-outlined action_icon">favorite</span>
                <span class="action_name">Wishlist</span>
            </div>

            <div class="action_container">
                <span class="material-symbols-outlined action_icon">shopping_bag</span>
                <span class="action_name">Bag</span>
                <span class="bag-items">1</span>
            </div>
            <div class="action_container">
                <span><img id="logout-img"  src="../images/logout.jpeg"></span>
                <span class="action_name" id="bag"><a href="../index.html">Logout</a></span>
                
            </div>
        </div>
    </header>
    <main>
      <div class="bag-page">
        <div class="bag-items-container">
          <div class="bag-item-container">
            <div class="item-left-part">
              <img class="bag-item-img" src="../images/4.webp">
            </div>
            <div class="item-right-part">
              <div class="company">ADIDAS</div>
              <div class="item-name">Men Printed Polo Collar Indian Cricket ODI Jersey</div>
              <div class="price-container">
                <span class="current-price">Rs 999</span>
                <span class="original-price">Rs 999</span>
                <span class="discount-percentage">(0% OFF)</span>
              </div>
              <div class="return-period">
                <span class="return-period-days">14 days</span> return available
              </div>
              <div class="delivery-details">
                Delivery by
                <span class="delivery-details-days">10 july 2025</span>
              </div>
            </div>

            <button class="remove-from-cart" onclick="cross_button()">x
            </button>
          </div>
        </div>
        <div class="bag-summary">
          <div class="bag-details-container">
            <div class="price-header">PRICE DETAILS (2 Items) </div>
            <div class="price-item">
              <span class="price-item-tag">Total MRP</span>
              <span class="price-item-value">Rs1284</span>
            </div>
            <div class="price-item">
              <span class="price-item-tag">Discount on MRP</span>
              <span class="price-item-value priceDetail-base-discount">-Rs143</span>
            </div>
            <div class="price-item">
              <span class="price-item-tag">Convenience Fee</span>
              <span class="price-item-value">Rs 99</span>
            </div>
            <hr>
            <div class="price-footer">
              <span class="price-item-tag">Total Amount</span>
              <span class="price-item-value">Rs 1240</span>
            </div>
          </div>
          <button onclick="placeOrder()" class="btn-place-order">
            <div class="css-xjhrni">PLACE ORDER</div>
          </button>
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
    <script src="../index.js"></script>
    <script src="../data/items.js"></script>
    <script src="../scripts/index.js"></script>
    <script>
      function placeOrder(){
        alert('Donot place any order through this website\nThis is not secure website');
      }
      function showProfile(){
        alert(`Welcome <?php echo htmlspecialchars($username); ?>`);
      }
      
    </script>
</body>
</html>