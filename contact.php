<!DOCTYPE html>
<html lang="en">

    <?php require_once "header.php"; ?>

<body>
    <!-- 1. Homepage -->
    <!-- Header -->
     <div>Shekwogaza</div>
     <div>Shekwogaza</div>
     <div>Shekwogaza</div>
     <div>Shekwogaza</div>

     <header>
        <div class="container header-container">
            <a href="index.php"><img src="images/Logo.png" alt="Home Logo" style="height: 60px; width: 70px;"></a>
            <nav class="nav-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="dropdown">
                        <a href="contact.php" class="active" class="dropbtn">Contact</a>
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

    <!-- 4. Contact Us -->
    <section class="contact-us">
        <div class="container contact-container">
            <div class="contact-info">
                <h3 style="color: #f8ac08;">Contact Information</h3>
                <p>Address: House101 Salvation Close, Abuja, Nigeria</p>
                <p>Phone: +234 800 1146 9871 | 907 3056 2871</p>
                <p>Email: contact@Mamanasarastore.com</p>
                <p>Operating Hours: Mon-Sat, 9am-8pm</p>
                <div class="map">
                    <!-- Google Maps Embed -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.7654186373497!2d7.4235451748325145!3d8.993720391066208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e732f095af9f3%3A0xa2ab1b71a84a8b7a!2sGaladimawa%20village%20junction!5e0!3m2!1sen!2sus!4v1730722222640!5m2!1sen!2sus" width="550" height="130" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="contact-form">
                <h3 style="color: #f9f9f9;">Send Us a Message</h3>
                <form action="#" method="POST">
                    <input type="text" name="name" placeholder="Your name" required>
                    <input type="email" name="email" placeholder="Your email" required>
                    <textarea name="message" rows="5" placeholder="Your message" required></textarea>
                    <button type="submit">Send message</button>
                </form>
            </div>

                            
        </div>
    </section>

        <!-- Customer Reviews/Testimonies -->
        <section class="customer-reviews">
        <div class="container">
            <h2>Customer's Reviews</h2>
            <div class="review-item">
                <p>"Mamanasara! Great store with a wide variety of products" &#128525;</p>
                <h4>John Edward</h4>
            </div>
            <div class="review-item">
                <p>"Friendly staff and convenient location! &#129310; &#129505;"</p>
                <h4>Sarah Williams</h4>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once "footer.php"; ?>

    <script src="javascripts/functions.js"></script>

</body>
</html>
