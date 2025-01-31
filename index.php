<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakes-Me</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="/stylesheets/style1.css">
    <script>
        function checkLoginAndAddToCart() {
            <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                // User is logged in, proceed to add to cart
                alert("Item added to cart!");
                // You can add your add to cart logic here
            <?php else: ?>
                // User is not logged in, redirect to login page
                window.location.href = "login.php";
            <?php endif; ?>
        }
    </script>
</head>

<body>
    <div class="container">
        <header>

            <nav>
                <div class="logo" id="logo">
                    <img src="logo5.jpg" style="background-size: cover; height:80px;">
                </div>
                <div class="nav-content">
                    <a href="#logo">Home</a>
                    <a href="#cakesList">PopularOne's</a>
                    <a href="#item">Items</a>
                    <a href="#about1">About</a>
                    <a href="#contact">Contact</a>
                </div>
                <div class="btn-grp">
                    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                        <form action="logout.php" method="post">
                            <button class="logout" type="submit" name="logout">Logout</button>
                        </form>
                    <?php else: ?>
                        <a href="login.php">
                            <button class="login" type="button">Login</button>
                        </a>
                    <?php endif; ?>
                </div>
            </nav>

            <div class="info">
                <div class="info1">
                    <pre>Crafted with love, Savored with joy..</pre>
                    <h2>Delicious Cake </h2>
                    <h2>For Everyone</h2>
                    <pre>
                   Each cake is a masterpiece,
                   crafted with care and adorned with creativity,
                   waiting to become part of someone’s special moment.  </pre>
                </div>

                <div class="info2">
                    <input type="text" placeholder="Search Dishes">
                    <button type="button">Search</button>
                </div>
            </div>
        </header>

        <div class="main-content">
            <div class="items">
                <h2 id="cakesList">Our Top Rated or Special-One</h2>
            </div>

            <div class="main">
                <div class="cake cake1">
                    <img src="R.jpg" alt="Cake">
                    <h3>Choco Cherry</h3>
                    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                        <form action="checkout.php" method="post">
                            <input type="hidden" name="cake_name" value="Choco Cherry">
                            <input type="hidden" name="cake_price" value="449">
                            <button type="submit">Add to Cart</button>
                        </form>
                    <?php else: ?>
                        <a href="login.php">
                            <button type="button">Add to cart</button>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="cake cake1">
                    <img src="mango.jpeg" alt="Cake">
                    <h3>Mango Cake</h3>
                    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                        <form action="checkout.php" method="post">
                            <input type="hidden" name="cake_name" value="Mango Cake">
                            <input type="hidden" name="cake_price" value="699">
                            <button type="submit">Add to Cart</button>
                        </form>
                    <?php else: ?>
                        <a href="login.php">
                            <button type="button">Add to cart</button>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="cake cake1">
                    <img src="red cake.jpg" alt="Cake">
                    <h3>Red Berry</h3>
                    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                        <form action="checkout.php" method="post">
                            <input type="hidden" name="cake_name" value="Red Berry">
                            <input type="hidden" name="cake_price" value="399">
                            <button type="submit">Add to Cart</button>
                        </form>
                    <?php else: ?>
                        <a href="login.php">
                            <button type="button">Add to cart</button>
                        </a>
                    <?php endif; ?>
                </div>

                <h2 id="item">Our Products..</h2>

                <div class="cake1">
                    <img src="chocolatecake.jpg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:599</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="Chocolate Cake">
                                <input type="hidden" name="cake_price" value="599">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Chocolate Cake</h3>
                </div>

                <div class="cake1">
                    <img src="R.jpg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:449</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="Choco Cherry Cake">
                                <input type="hidden" name="cake_price" value="449">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Choco Cherry Cake</h3>
                </div>

                <div class="cake1">
                    <img src="redvelvetbundt.webp" alt="Cake">
                    <div class="buy">
                        <h2>Rs:199</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="Red Velvet Cake">
                                <input type="hidden" name="cake_price" value="199">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Red Velvet Bundt</h3>
                </div>

                <div class="cake1">
                    <img src="cheese.jpeg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:199</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="Cheese Cake">
                                <input type="hidden" name="cake_price" value="719">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Cheese Cake</h3>
                </div>

                <div class="cake1">
                    <img src="cakes.jpg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:639</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="White Forest Cake">
                                <input type="hidden" name="cake_price" value="639">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>White Forest</h3>
                </div>

                <div class="cake1">
                    <img src="berry.jpg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:849</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="Black Berry Cake">
                                <input type="hidden" name="cake_price" value="849">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Black Berry Cake</h3>
                </div>

                <div class="cake1">
                    <img src="red cake.jpg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:399</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="Red Berry">
                                <input type="hidden" name="cake_price" value="399">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Red Berry Cake</h3>
                </div>

                <div class="cake1">
                    <img src="pastry.jpg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:89</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="choco pastry">
                                <input type="hidden" name="cake_price" value="89">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Choco Pastry</h3>
                </div>

                <div class="cake1">
                    <img src="bday.jpeg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:699</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="Birthday Cake">
                                <input type="hidden" name="cake_price" value="89">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Birthday Cake</h3>
                </div>

                <div class="cake1">
                    <img src="cherry.jpg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:999</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="Strawberry">
                                <input type="hidden" name="cake_price" value="999">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Strawberry</h3>
                </div>

                <div class="cake1">
                    <img src="almond.jpg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:799</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="Nuts and Vanilla">
                                <input type="hidden" name="cake_price" value="799">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Nuts and Vanilla</h3>
                </div>

                <div class="cake1">
                    <img src="mango.jpeg" alt="Cake">
                    <div class="buy">
                        <h2>Rs:699</h2>
                        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']): ?>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="cake_name" value="Mango Cake">
                                <input type="hidden" name="cake_price" value="699">
                                <button type="submit">Add to Cart</button>
                            </form>
                        <?php else: ?>
                            <a href="login.php">
                                <button type="button">Login to Add</button>
                            </a>
                        <?php endif; ?>
                    </div>
                    <h3>Mango Cake</h3>
                </div>
            </div>

            <div class="about" id="about1">
                <h1>About</h1>

                <div class="images">
                    <img src="cake.jpg" alt="">
                    <img src="OIP (1).jpg" alt="">
                    <img src="cherry.jpg" alt="">
                    <img src="OIP (2).jpg" alt="">
                </div>

                <p>
                    Welcome to <b>Bakes-Me</b>, where every bite is a piece of heaven! We are a family-owned bakery that
                    has been serving up delectable treats.
                    Our journey began with a simple mission: to bring joy through the art of baking.
                    <br>
                    <br>
                    We’re more than just a bakery; we’re a cozy nook where memories are made. Whether you’re celebrating
                    a special occasion or simply indulging in life’s little pleasures,
                    we’re here to add a touch of sweetness to your day.
                    <br>
                    <br>
                    Come visit us and become part of our story. We can’t wait to meet you and share the delights that
                    we’ve poured our hearts into.
                    Because here at <b>Bakes-Me</b>, it’s not just about the food—it’s about the experience.
                </p>
            </div>
        </div>
    </div>

    <footer>
        <div class="newsletter" id="contact">
            <div data-aos="fade-up" data-aos-offset="200">
                <h2>Add Feedback</h2>
                <p>We’re a team of non-cynics who truly care for our work.</p>
            </div>
            <div class="n-text">
                <label>
                    <input type="text" name="" placeholder="Enter your email">
                    <button>Feedback</button>
                </label>
            </div>
        </div>
        <div class="information">
            <h1>Information</h1>
            <p>Lorem ipsum dolor sit amet, consectetur elit. Nihil sit dicta.</p>
            <i class="fa fa-whatsapp"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-telegram"></i>
            <i class="fa fa-twitter"></i>
        </div>
        <div class="footpanel1" id="contact">
            <img src="logo5.jpg" style="height: 100px; width: 100px; filter: none;">
            <ul>
                <li><a href="#">OUR STORY</a></li>
                <li><a href="#">OUR PRODUCTS</a></li>
                <li><a href="#">CUSTOM ORDERS</a></li>
            </ul>
            <ul>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">REFUND POLICY</a></li>
                <li><a href="#">TERMS OF SERVICE</a></li>
            </ul>
            <i class="fa fa-phone" aria-hidden="true">
                <a href="#">+91 90279-37210</a>
            </i>
            <i class="fa fa-envelope" aria-hidden="true">
                <a href="#">@bakesme.in</a>
            </i>
        </div>
    </footer>
</body>

</html>