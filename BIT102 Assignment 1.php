<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
    exit();
}
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles_searchbar.css">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>DoPaMine One Stop Fashion Shop</title>
</head>
<body>
    <div class="header__bar">Free Shipping Within Malaysia On All Orders RM150 & above</div>
    <nav class="section__container nav__container">
        <a href="BIT102 Assignment 1.php"><img src="pic.store/dopamine-logo.png" alt="logo" class="logo-edit"></a>
        <ul class="nav__links">
            <li>
                <section>
                    <div class="search_bar">
                    <form action="search_result.html" method="GET">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="ri-search-line"></i></button>
                    </form>
                    </div>
                </section>
            </li>
            <li class="link"><a href="userprofile.php" id="user-profile"><?php echo htmlspecialchars($username); ?></a><span><i class="ri-user-line"></i></span>
                <ul class="dropdown">
                    <li id="login-link" class="login-link"><a href="#">Login</a></li>
                    <li id="register-link" class="register-link"><a href="#">Register</a></li>
                    <li id="logout-link" class="logout-link"><a href="logout.php">Logout</a></li>
                </ul>
            </li>
            <div class="wrapper">
                <span class="icon-close"><i class="ri-close-line" aria-label="Close"></i></span>
                <div class="form-wrapper sign-in">
                    <form method="post" action="login.php">
                        <h2>Login</h2>
                        <div class="input-group">
                            <input type="text" name="username" required>
                            <label for="">Username</label>
                        </div>
                        <div class="input-group">
                            <input type="password" name="password" required>
                            <label for="">Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">Remember me</label>
                            <a href="#">Forgot Password?</a>
                        </div>
                        <button type="submit" name="login" class="btn">Login</button>
                        <br>
                        <p class="or">----------or----------</p>
                        <div class="sign-link">
                            <p>Don't have an account? <a href="process_registration.php" class="signUp-link">Register</a></p>
                        </div>
                    </form>
                </div>
                <div class="form-wrapper sign-up">
                    <form method="post" action="process_registration.php">
                        <h2>Register</h2>
                        <div class="input-group">
                            <input type="text" name="username" required>
                            <label for="">Username</label>
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" required>
                            <label for="">Email</label>
                        </div>
                        <div class="input-group">
                            <input type="password" name="password" required>
                            <label for="">Password</label>
                        </div>
                        <button type="submit" name="submit_register" class="btn">Register</button>
                        <br>
                        <p class="or">----------or----------</p>
                        <div class="sign-link">
                            <p>Already have an account? <a href="login.php" class="signIn-link">Login</a></p>
                        </div>
                    </form>
                </div>
                <script src="auth.js" defer></script>
            </div>

            <li class="open-cart-btn" onclick="toggleCart()"><a href="#">SHOPPING CART</a><span><i class="ri-shopping-cart-line"></i></span></li>

            <section class="cart" id="cart">
                <div class="cart-content">
                    <button class="close-cart-btn" onclick="toggleCart()">CLOSE</button>
                 <br><br>
                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                         </tr>
                        </thead>
                     <tbody id="cart-items">
                         <!-- Items will be automatically injected here -->
                        </tbody>
                    </table>
                    <div class="cart-total">
                        <h2>Total: <span id="cart-total">RM0.00</span></h2>
                 </div>
                </div>
                <div class="button">
                 <button class="payment-btn" onclick="checkout()"><a href="payment.html">PAYMENT</a></button>
                </div>
            </section>

            <script type="module" src="cart1.js"></script>
            <script type="module" src="addToCart.js"></script>

        </ul>
    </nav>

    <header>
        <div class="section__container header__container">
            <div class="header__content">
                <p>New Arrivals</p>
                <h1>Discover & Shop<br>The Latest Released</h1>
                <button class="btn"><a href="#musthave">SHOP NOW</a></button>
            </div>
            <div class="header__image">
                <img src="pic.store/dopaminepic2.jpg" alt="header" width="100" height="500">
            </div>
        </div>
    </header>

    <section id="musthave" class="section__container musthave__container">
        <h2 class="section__title">Must Have</h2>
        <ul class="musthave__nav">
            <li data-category="ALL" class="active"><a href="javascript:void(0">ALL</a></li>
            <li data-category="MEN"><a href="javascript:void(0">MEN</a></li>
            <li data-category="WOMEN"><a href="javascript:void(0">WOMEN</a></li>
            <li data-category="KID"><a href="javascript:void(0">KID</a></li>
            <li data-category="ACCESSORIES"><a href="javascript:void(0">ACCESSORIES</a></li>
        </ul>
        <div class="filter-condition">
            <span>Views As </span>
            <select name="sorting" id="sorting">
                <option value="Default">Default</option>
                <option value="LowToHigh">Low to High</option>
                <option value="HighToLow">High to Low</option>
            </select>
            <script src="sort.js" defer></script>
        </div>
        <div class="musthave__grid" data-category="WOMEN">
            <div class="musthave__card" data-category="WOMEN">
                <img src="pic.store/color-shirt.jpg" alt="Colorful Button Shirt" height="280">
                <h4>Colorful Button Shirt</h4>
                <p>RM 59.00</p>
                <button class="add-to-cart-btn" data-id="1">Add to Cart</button>
            </div>
            <div class="musthave__card" data-category="MEN">
                <img src="pic.store/Jacket.avif" alt="Blue 'Actual' Jacket" height="280">
                <h4>Blue "Actual" Jacket</h4>
                <p>RM 79.00</p>
                <button class="add-to-cart-btn" data-id="2">Add to Cart</button>
                
            </div>
            <div class="musthave__card" data-category="WOMEN">
                <img src="pic.store/cartoon.jpeg" alt="Chess Pattern Shirt" height="280">
                <h4>Chess Pattern Shirt</h4>
                <p>RM 49.90</p>
                <button class="add-to-cart-btn" data-id="3">Add to Cart</button>
               
            </div>
            <div class="musthave__card" data-category="MEN">
                <img src="pic.store/pants.jpg" alt="Light Blue Pants" height="280">
                <h4>Light Blue Pants</h4>
                <p>RM 59.00</p>
                <button class="add-to-cart-btn" data-id="4">Add to Cart</button>
               
            </div>
            <div class="musthave__card" data-category="KID">
                <img src="pic.store/kids.webp" alt="Floral Green Dress" height="280">
                <h4>Floral Green Dress</h4>
                <p>RM 39.00</p>
                <button class="add-to-cart-btn" data-id="5">Add to Cart</button>
                
            </div>
            <div class="musthave__card" data-category="KID">
                <img src="pic.store/Cartoon dress.webp" alt="Blue Angle Dress" height="280">
                <h4>Blue Angle Dress</h4>
                <p>RM 39.00</p>
                <button class="add-to-cart-btn" data-id="6">Add to Cart</button>
               
            </div>
            <div class="musthave__card" data-category="KID">
                <img src="pic.store/child.webp" alt="Gradient Green Shirt" height="280">
                <h4>Gradient Green Shirt</h4>
                <p>RM 99.00</p>
                <button class="add-to-cart-btn" data-id="7">Add to Cart</button>
                
            </div>
            <div class="musthave__card" data-category="WOMEN">
                <img src="pic.store/keiko-tshirt.webp" alt="KEIKO Long-sleeved Shirt" height="280">
                <h4>KEIKO Long-sleeved Shirt</h4>
                <p>RM 79.00</p>
                <button class="add-to-cart-btn" data-id="8">Add to Cart</button>
                
            </div>  
            <div class="musthave__card" data-category="MEN">
                <img src="pic.store/nice.jpeg" alt="Graffiti Button Shirt" height="280">
                <h4>Graffiti Button Shirt</h4>
                <p>RM 59.90</p>
                <button class="add-to-cart-btn" data-id="9">Add to Cart</button>
                
            </div> 
            <div class="musthave__card" data-category="MEN">
                <img src="pic.store/tracksuit.avif" alt="Gray Hoodie" height="280">
                <h4>Gray Hoodie</h4>
                <p>RM 129.90</p>
                <button class="add-to-cart-btn" data-id="10">Add to Cart</button>
                
            </div> 
            <div class="musthave__card" data-category="KID">
                <img src="pic.store/color-bear.webp" alt="Colorful Bear Bear" height="280">
                <h4>Colorful Bear Bear</h4>
                <p>RM 59.90</p>
                <button class="add-to-cart-btn" data-id="11">Add to Cart</button>
                
            </div> 
            <div class="musthave__card" data-category="KID">
                <img src="pic.store/green.avif" alt="Cute Fairy Dress" height="280">
                <h4>Cute Fairy Dress</h4>
                <p>RM 79.90</p>
                <button class="add-to-cart-btn" data-id="12">Add to Cart</button>
                
            </div> 
            <div class="musthave__card" data-category="WOMEN">
                <img src="pic.store/elder.webp" alt="SunFlower Dress" height="280">
                <h4>SunFlower Dress</h4>
                <p>RM 69.00</p>
                <button class="add-to-cart-btn" data-id="13">Add to Cart</button>
                
            </div> 
            <div class="musthave__card" data-category="WOMEN">
                <img src="pic.store/older people.webp" alt="Open Front Outerwear & Crew Neck Tank Dress" height="280">
                <h4>Open Front Outerwear & Crew Neck Tank Dress</h4>
                <p>RM 95.00</p>
                <button class="add-to-cart-btn" data-id="14">Add to Cart</button>
               
            </div> 
            <div class="musthave__card" data-category="WOMEN">
                <img src="pic.store/elder1.webp" alt="Black Elegnet Dress" height="280">
                <h4>Black Elegant Dress</h4>
                <p>RM 80.00</p>
                <button class="add-to-cart-btn" data-id="15">Add to Cart</button>
                
            </div> 
        </div>
    </section>
</body>
</html>


    <hr>
    
    <footer class="section__container footer__container">
        <div class="footer__col">
            <h4 class="footer__heading">CONTACT INFO</h4>
            <p><i class="ri-map-pin-line" aria-label="Address"></i> 1 Utama Shopping Centre, S210, 1 Lebuh Bandar Utama, 47800 Petaling Jaya, Selangor</p>
            <p><i class="ri-mail-send-line" aria-label="Email"></i>support@DPM.com</p>
            <p><i class="ri-phone-line" aria-label="Phone"></i>(+60)11-2345 678</p>
            <p><i class="ri-question-line"></i><a href="faq.html">FAQ</a></li>

        </div>

        <div class="contact_container">
            <h4 class="footer__heading">CONTACT US</h4>
            <div class="contact-wrapper">
                <div class="contact-form">
                    <h4>Send us a message</h4>
                    <form id="contact-form" class="contact_us">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
            <script src="contForm.js" defer></script>
        </div>
        
        
        <div class="footer__col">
            <h4 class="footer__heading">ABOUT US</h4>
            <a href="About_Us.html" class="footer__link">Learn more</a>
            <a href="user_review.rating.html" class="footer__link">Customer Reviews</a>
        </div>
        
        <div class="social_media">
            <h4 class="footer__heading">SOCIAL MEDIA LINK</h4>
            <div class="social_cont">
                <div class="social_button">
                    <div class="social_icon">
                     <a href="https://www.instagram.com/DoPaMineFashion/"><i class="ri-instagram-line"></i></a>
                    </div>
                    <a href="https://www.instagram.com/DoPaMineFashion/"><span>Instagram</span></a>
                 </div>
                <div class="social_button">
                   <div class="social_icon">
                    <a href="https://x.com/dopamine?lang=en"><i class="ri-twitter-x-line"></i></a>
                   </div>
                   <a href="https://x.com/dopamine?lang=en"><span>Twitter</span></a>
                </div>
                <div class="social_button">
                    <div class="social_icon">
                     <a href="https://www.facebook.com/DoPaMineFashion/"><i class="ri-facebook-box-fill"></i></a>
                    </div>
                    <a href="https://www.facebook.com/DoPaMineFashion/"><span>Facebook</span></a>
                </div>
                <div class="social_button">
                   <div class="social_icon">
                    <a href="https://www.youtube.com/@Dharansantho"><i class="ri-youtube-fill"></i></a>
                   </div>
                   <a href="https://www.youtube.com/@Dharansantho"><span>YouTube</span></a>
                </div>
             </div>
        </div>

    </footer>

    <script src="search_bar.js"></script>

</body>
</html>
