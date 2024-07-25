<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopie - Your Online Shop</title>
    <link rel="stylesheet" href="layout/style.css">
</head>
<body>
    <header style="background-color: #ffffff;">
        <div class="container">
            <div class="logo">
                <span>Shopie</span>
            </div>
            <hr />
            <br>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="wishtlist.php">Wishlist</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="Contact Us.html">Contact Us</a></li>
                </ul>
            </nav>
            <div class="search">
                <img src="search_icon.png" alt="Search Icon">
                <input type="text" placeholder="Search...">
            </div>
            <br>
            <hr />
        </div>
    </header>

    <section class="our-products">
        <div class="container">
            <div class="product">
                <div class="product-item">
                    <img src="product1.jpg" alt="Product 1">
                    <h4>Product Name 1</h4>
                    <p>Description of Product 1</p>
                    <button class="btn-remove">Remove</button>
                </div>
                <div class="product-item">
                    <img src="product2.jpg" alt="Product 2">
                    <h4>Product Name 2</h4>
                    <p>Description of Product 2</p>
                    <button class="btn-remove">Remove</button>
                </div>
                <!-- Add more products as needed -->
            </div>
        </div>
    </section>

</body>
</html>
