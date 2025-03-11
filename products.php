<!DOCTYPE html>
<html lang="en">

    <?php require_once "header.php"; ?>

<body>
    <!-- 1. Homepage -->
    <!-- Header -->
    <div>Timothy Shekwogaza</div>
    <div>Timothy Shekwogaza</div>

     <header>
        <div class="container header-container">
        <a href="index.php"><img src="images/Logo.png" alt="Home Logo" style="height: 60px; width: 70px;"></a>
        <nav class="nav-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php" class="active">Shop</a></li>
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
    
    <!-- Product Listings -->
    <section class="product-listings">
        <div class="container">
            <h2 style="color: #f9f9f9;">Our Products</h2>
            
            <div class="filter-search">
                <div class="search-bar">
                    <input type="text" placeholder="Search products...">
                </div>

                <div class="filter-options">
                    <select>
                        <option value="all">All Categories</option>
                        <option value="snacks">Snacks</option>
                        <option value="hygeine">Hygeine</option>
                        <option value="dairy">Dairy</option>
                        <option value="food">Food Items</option>
                        <option value="beaverages">Beaverages</option>
                    </select>
                </div>
            </div>

            <div class="products-grid">
                <div class="product-item">
                    <img src="images/dettol.jpeg" alt="Softdrinks">
                    <h3>Dettol</h3>
                    <p>Dettol Antiseptic Soap.</p>
                    <div class="price">₦800.99</div>
                </div>
                <div class="product-item">
                    <img src="images/softdrinks.jpeg" alt="Softdrinks">
                    <h3>Soft drinks</h3>
                    <p>Coke Sprite Pepsi Fanta.</p>
                    <div class="price">₦700.99</div>
                </div>
                <div class="product-item">
                    <img src="images/seasoning.jpeg" alt="Seasoning">
                    <h3>Seasoning</h3>
                    <p>Tata Salt Sakthi Bean.</p>
                    <div class="price">₦5,500.20</div>
                </div>
                <div class="product-item">
                    <img src="images/cancoke.jpeg" alt="Cocacola">
                    <h3>Cocacola</h3>
                    <p>Can Coke 6pcs.</p>
                    <div class="price">₦3,600.90</div>
                </div>
                <div class="product-item">
                    <img src="images/milk.jpeg" alt="Beaverages">
                    <h3>Beaverages</h3>
                    <p>Dano milk Golden morn Milo.</p>
                    <div class="price">₦5,900.00</div>
                </div>
                <div class="product-item">
                    <img src="images/spaghetti.jpeg" alt="Beaverages">
                    <h3>Spaghetti</h3>
                    <p>Golden Penny Noodles.</p>
                    <div class="price">₦5,900.00</div>
                </div>
                <div class="product-item">
                    <img src="images/iages.jpeg" alt="Milo">
                    <h3>Tata Tea</h3>
                    <p>5kg Premium Tea.</p>
                    <div class="price">₦2,900.99</div>
                </div>
                <div class="product-item">
                    <img src="images/knorr.jpeg" alt="Milo">
                    <h3>Knorr Maggi</h3>
                    <p>Knorr Maggi Cubes.</p>
                    <div class="price">₦1,900.99</div>
                </div>
                <div class="product-item">
                    <img src="images/milosingle.jpeg" alt="Milo">
                    <h3>Milo</h3>
                    <p>35kg Milo Sachet.</p>
                    <div class="price">₦2,900.99</div>
                </div>
                <div class="product-item">
                    <img src="images/breakfastpack.jpeg" alt="Breakfast">
                    <h3>Breakfast pack</h3>
                    <p>Cocopops Frosties Nunu.</p>
                    <div class="price">₦19,900.99</div>
                </div>
                <div class="product-item">
                    <img src="images/dettolcool.jpeg" alt="Dettol">
                    <h3>Dettol</h3>
                    <p>Dettol Antiseptic Soap.</p>
                    <div class="price">₦900.99</div>
                </div>
                <div class="product-item">
                    <img src="images/cratecoke.jpeg" alt="Cocacola">
                    <h3>Cocacola</h3>
                    <p>Crate Cocacola Drink.</p>
                    <div class="price">₦9,900.99</div>
                </div>
                <div class="product-item">
                    <img src="images/indomie.jpeg" alt="Indomie">
                    <h3>Indomie</h3>
                    <p>Hungryman Size 35kg.</p>
                    <div class="price">₦600.99</div>
                </div>
                <div class="product-item">
                    <img src="images/aes.jpeg" alt="Flavor">
                    <h3>Flavor</h3>
                    <p>Premium Tata Flavour.</p>
                    <div class="price">₦1,800.99</div>
                </div>
                <div class="product-item">
                    <img src="images/digestive.jpeg" alt="Digestive">
                    <h3>Digestive</h3>
                    <p>McVities Digestive biscuit.</p>
                    <div class="price">₦500.99</div>
                </div>
                <div class="product-item">
                    <img src="images/imagke.jpeg" alt="Biscuit">
                    <h3>Biscuit</h3>
                    <p>Marie Plus Dream LTE.</p>
                    <div class="price">₦990.19</div>
                </div>
                <div class="product-item">
                    <img src="images/gingin.jpg" alt="Gin gin">
                    <h3>Gin gin</h3>
                    <p>Ginger Flavour Biscuit.</p>
                    <div class="price">₦200.99</div>
                </div>
                <div class="product-item">
                    <img src="images/bourbon.jpeg" alt="Bourbon">
                    <h3>Bourbon</h3>
                    <p>Boni Sweet Biscuit.</p>
                    <div class="price">₦200.00</div>
                </div>
                <div class="product-item">
                    <img src="images/moo.jpeg" alt="Breakfast">
                    <h3>Breakfast</h3>
                    <p>Cornflakes BournVita Lipton.</p>
                    <div class="price">₦9,000.99</div>
                </div>
                <div class="product-item">
                    <img src="images/kkk.jpg" alt="Biscuit">
                    <h3>Biscuit</h3>
                    <p>Blues Label Biscuit.</p>
                    <div class="price">₦2,000.90</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details -->
    <section class="product-details">
            <div class="container details-container">
                <img src="images/semovita.jpeg" alt="Product Details">
                <div class="product-info">
                    <h2>Golden Penny</h2>
                    <p>Semovita including size, ingredients, and other relevant details.</p>
                    <div class="price">₦9,500.50</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <img src="images/mamagoldrice.jpeg" alt="Product Details">
                <div class="product-info">
                    <h2>Mama Gold Rice</h2>
                    <p>About the product, size, and other details.</p>
                    <div class="price">₦90,400.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <img src="images/wine.jpg" alt="Product Details">
                <div class="product-info">
                    <h2>Rubust Wine</h2>
                    <p>About the premium wine, mixture, taste, size, and other details.</p>
                    <div class="price">₦49,900.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <img src="images/tomatorice.jpeg" alt="Product Details">
                <div class="product-info">
                    <h2>Tomato Rice</h2>
                    <p>About the parboiled rice, including size, and other relevant details.</p>
                    <div class="price">₦75,900.00</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <img src="images/Agnitee.jpeg" alt="Product Details">
                <div class="product-info">
                    <h2>Tata Agni</h2>
                    <p>Premium Tee! About product, size, ingredients, and other relevant details.</p>
                    <div class="price">₦3,500.50</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <img src="images/maggi.jpg" alt="Product Details">
                <div class="product-info">
                    <h2>Maggi Cubes</h2>
                    <p>Star maggi cubes including size, ingredients, and other relevant details.</p>
                    <div class="price">₦1,500.99</div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
    </section>

     <!-- Customer Reviews/Testimonies -->
     <section class="customer-reviews">
        <div class="container">
            <h2>Review a product. We love your feedbacks!</h2>
            <div id="review-form">
                <input type="text" placeholder="Your Name">
                <textarea placeholder="Your Review"></textarea>
                <button type="submit">Submit Review</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once "footer.php"; ?>

    <script src="javascripts/functions.js"></script>

</body>
</html>
