<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha-Electronics</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/responsive-nav.css">
    <link rel="stylesheet" href="styles/responsive-footer.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="scripts/slider.js"></script>
    <script src="scripts/contact.js"></script>
</head>

<body class="container">
    <div class="navbar-2">
        <nav class="nav-2">
            <ul class="navbar-list-2">
                <li><a class="icons" href="https://instagram.com/amit_sahu_13?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a class="icons" href="https://twitter.com/amit_sahu_726?t=vxvj7_WqUk-1IIPhOEeOHA&s=08" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a class="icons" href="https://www.facebook.com/profile.php?id=100093535947488" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
            </ul>
        </nav>
        <div class="account">
            <span class="profile"><i class="fa-solid fa-user"></i></span>
            <span class="cart"><i class="fa-solid fa-cart-shopping"></i></span>
        </div>
    </div>
    <header class="header navigation-main">
        <span class="logo">A L P H A</span>
        <nav class="navbar">
            <ul class="navbar-list" id="responsive-navlist">
                <li><a class="navbar-link" href="index.html">Home</a></li>
                <li><a class="navbar-link" href="product.html">Products</a></li>
                <li><a class="navbar-link" href="contact.html">Contact</a></li>
                <li><a class="navbar-link" href="faq.html">FAQ</a></li>
            </ul>
        </nav>
        <div class="menu" id="menu1">
            <div class="bx bx-menu" id="menu-icon" onclick="addingItems()"></div>
        </div>
        <div id="close">
            <img src="images/close.png" onclick="removingItems()" alt="Error!">
        </div>
    </header>
    <div class="offer">
        <p class="offer-code">10% off on all orders with code ALPHA10 </p>
    </div>
    <main>
        <?php
        include 'connect.php';
        ?>
        <div class="container">
            <div class="boundary">
                <div class="forms">
                    <form action="contact.php" method="post" onsubmit="validate()" name="forms">
                        <label for="Name">Full Name</label>
                        <div>
                            <input type="text" name="Name" id="Name" placeholder="Enter your Name" required>
                        </div>
                        <label for="Mobile">Mobile Number</label>
                        <div>
                            <input type="number" name="Mobile" id="Mobile" placeholder="Enter your Mobile number" required>
                        </div>
                        <label for="Email">Email</label>
                        <div>
                            <input type="email" name="Email" id="Email" placeholder="Enter your Email Id" required>
                        </div>
                        <label for="Message">Message</label>
                        <div class="textarea">
                            <textarea required name="Message" id="Message" placeholder="Write here..."></textarea>
                        </div>
                        <div class="submit">
                            <button class="submit-btn" type="submit" name="submit" onclick="submitted()">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="row">
            <div class="footer-col footer-col-1">
                <h4>About Us</h4>
                <div class="about-us">We are one of the most trusted online store in India for all kinds of Electronic
                    devices.</div>
            </div>
            <div class="footer-col footer-col-2">
            <h4>Explore</h4>
            <ul class="footer-responsive">
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="">T & C</a></li>
            </ul>
        </div>
        <div class="footer-col footer-col-3">
            <h4>Products</h4>
            <ul class="footer-responsive">
                <li><a href="refrigerator.html">Refrigerators</a></li>
                <li><a href="led.html">LED Smart TV</a></li>
                <li><a href="mobiles.html">Mobile Phones</a></li>
                <li><a href="watch.html">Smart Watch</a></li>
            </ul>
        </div>
            <div class="footer-col footer-col-4">
                <h4>Connect</h4>
                <div class="social-links">
                    <a href="https://twitter.com/amit_sahu_726?t=vxvj7_WqUk-1IIPhOEeOHA&s=08" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://instagram.com/amit_sahu_13?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100093535947488" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                </div>

            </div>
        </div>
    </footer>

    <script src="scripts/responsive-nav.js"></script>
</body>

</html>