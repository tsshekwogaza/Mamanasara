<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php require_once "header.php"; ?>

    <style>
        /* Main Banner */
        .main-banner {
            background: url('images/Cover.jpg') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 80px; /* To offset fixed header */
            position: relative;
        }
    </style>
</head>
<body>

    <header>
        <div class="container header-container">
            <img src="images/Logo.png" alt="Home Logo" style="height: 60px; width: 70px;">
            <nav class="nav-menu">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="products.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="dropdown">
                        <a href="contact.php" class="dropbtn">Contact</a>
                        <div class="dropdown-content">
                            <a href="#">Abuja store</a>
                            <a href="#">Lagos store</a>
                            <a href="#">UK store</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Banner -->
    <section class="main-banner">
        <div class="banner-content">
            <h1 style="color: #ffffff;">Welcome to Mamanasara Store</h1>
            <marquee behavior="" direction="">
                <p style="color: #ffffff; font-size: 20px;"> Your trusted neighborhood provision store for everyday essentials and groceries. <<< We are actively involved in our local community, supporting local farmers, and participating in neighborhood events.</p>
            </marquee>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
        <div class="container">
            <h2 style="color: #f9f9f9;">Featured Products</h2>
            <div class="products-grid">
                <div class="product-item" data-category="Snacks">
                    <img src="images/Coffee.jpeg" alt="Product 1">
                    <h3>Coffee</h3>
                    <p>Nestle Tata Gold Coffee. </p>
                    <div class="price">₦17,950.33</div>
                </div>                
                <div class="product-item" data-category="Snacks">
                    <img src="images/mages.jpeg" alt="Product 3">
                    <h3>Oats</h3>
                    <p>Kelloggs Rolled Oat pick. </p>
                    <div class="price">₦12,500.19</div>
                </div>
                <div class="product-item" data-category="Snacks">
                    <img src="images/imas.jpeg" alt="Product 2">
                    <h3>Tea</h3>
                    <p>Premium Tata Gold Tee.</p>
                    <div class="price">₦15,900.50</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers/Discounts -->
    <section class="special-offers">
        <div class="container">
            <h2 style="color: #f9f9f9;">Special Offers</h2>
            <div class="offers-grid">
                <div class="offer-item">
                    <a target="_blank" href="images/plasticcoke.jpeg">
                        <img src="images/plasticcoke.jpeg" alt="Cocacola">
                    </a>
                    <div class="discount">25% OFF</div>
                    <h3>Cocacola</h3>
                    <p>12pcs Plastic Drink.</p>
                </div>
                <div class="offer-item">
                    <a target="_blank" href="images/noreos.jpg">
                        <img src="images/noreos.jpg" alt="Noreos">
                    </a>
                    <div class="discount">Buy 5 Get 1 FREE</div>
                    <h3>Noreos</h3>
                    <p>Hansbro Noreos Biscuit.</p>
                </div>
                <div class="offer-item">
                    <a target="_blank" href="images/spaghetti.jpeg">
                        <img src="images/spaghetti.jpeg" alt="Spaghetti">
                    </a>
                    <div class="discount">Black Friday</div>
                    <h3>Spaghetti</h3>
                    <p>Golden Penny Spaghetti.</p>
                </div>
                <div class="offer-item">
                    <a target="_blank" href="images/semovita.jpeg">
                        <img src="images/semovita.jpeg" alt="semovita">
                    </a>
                    <div class="discount">5% OFF</div>
                    <h3>Semovita</h3>
                    <p>Golden Penny Semovita.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once "footer.php"; ?>

    <script src="javascripts/functions.js"></script>

</body>
</html>
