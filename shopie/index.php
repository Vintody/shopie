<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="layout/style.css">
</head>
<body>
<header>
    <div class="navbar">
        <div class="search-icon" onclick="toggleSearchBar()">
            <img src="magnifier-icon.png" alt="Search">
        </div>
        <div class="search-bar" id="searchBar">
            <input type="text" placeholder="Search..">
        </div>
        <a href="#discover" style="color: black;">Discover</a>
        <a href="#saved" style="color: black;">Saved</a>
        <a href="#wishlist" style="color: black;">Wishlist</a>
        <a href="#categories" style="color: black;">Categories</a>
        <div class="dropdown">
            <a href="javascript:void(0)" class="dropbtn" style="color: black;">Resources</a>
            <div class="dropdown-content">
                <a href="#a">Option A</a>
                <a href="#b">Option B</a>
                <a href="#c">Option C</a>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="scrolling-images">
        <img src="image1.jpg" alt="Image 1">
        <img src="image2.jpg" alt="Image 2">
        <img src="image3.jpg" alt="Image 3">
        <img src="image4.jpg" alt="Image 4">
    </div>
    <div>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, eligendi deleniti minus ratione blanditiis dicta praesentium deserunt sed modi mollitia, odit beatae iure ex voluptates! Neque magnam aliquid culpa possimus!</p>
    </div>
</main>
<script src="layout/index.js"></script>
</body>
</html>
