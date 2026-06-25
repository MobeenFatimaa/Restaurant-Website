<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Spice Bites Restaurant</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header id="navbar">
  <nav>
    <div class="logo-container">
  <img src="logo.png" alt="Spice Bites Logo" class="logo-img">
  <span class="logo-text">Spice Bites</span>
</div>

    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#menu">Menu</a></li>
      <li><a href="#gallery">Gallery</a></li>
      <li><a href="#order">Order</a></li>
      <li><a href="#booking">Booking</a></li>
      <li><a href="#reviews">Reviews</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#" id="loginBtn">Login</a></li>
    </ul>
  </nav>
</header>

<section id="home" class="hero">
  <video autoplay muted loop playsinline class="bg-video">
    <source src="food.mp4" type="video/mp4">
  </video>

  <div class="hero-content reveal">
    <h1>Welcome to Spice Bites</h1>
    <p>Fresh • Tasty • Premium Food</p>
    <a href="#menu" class="btn">Explore Menu</a>
  </div>
</section>

<section id="menu" class="menu reveal">
  <h2>Our Menu</h2>
  <div class="filters">
  <button onclick="filterMenu('all')">All</button>
  <button onclick="filterMenu('fast')">Fast Food</button>
  <button onclick="filterMenu('italian')">Italian</button>
  <button onclick="filterMenu('healthy')">Healthy</button>
  <button onclick="filterMenu('drinks')">Drinks</button>
  <button onclick="filterMenu('dessert')">Desserts</button>
</div>


  <div class="menu-items">

   <div class="item fast">
  <img src="https://images.unsplash.com/photo-1761315413256-e149b40f577b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8RG91YmxlJTIwQmVlZiUyMEJ1cmdlcnxlbnwwfHwwfHx8MA%3D%3D" alt="Double Beef Burger">
  <h3>Double Beef Burger</h3>
  <span>$8</span>
</div>

<div class="item fast">
  <img src="https://images.unsplash.com/photo-1671572579845-52270341950f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Q2hpY2tlbiUyMFdyYXB8ZW58MHx8MHx8fDA%3D" alt="Crispy Chicken Wrap">
  <h3>Crispy Chicken Wrap</h3>
  <span>$6</span>
</div>
<div class="item fast">
  <img src="https://images.unsplash.com/photo-1550547660-d9450f859349" alt="Cheese Burger">
  <h3>Cheese Burger</h3>
 <span>$5</span>
</div>
<div class="item fast">
  <img src="https://images.unsplash.com/photo-1598679253544-2c97992403ea?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8ZnJlbmNoJTIwZnJpZXN8ZW58MHx8MHx8fDA%3D" alt="French Fries">
  <h3>French Fries</h3>
  <span>$5</span>
</div>
<div class="item fast">
  <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8WmluZ2VyJTIwQnVyZ2VyfGVufDB8fDB8fHww" alt="Zinger Burger">
  <h3>Zinger Burger</h3>
  <span>$7</span>
</div>
<div class="item italian">
  <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8TWFyZ2hlcml0YSUyMFBpenphfGVufDB8fDB8fHww" alt="Margherita Pizza">
  <h3>Margherita Pizza</h3>
  <span>$7</span>
</div>

<div class="item italian">
  <img src="https://images.unsplash.com/photo-1620041631703-45ddcef3dae0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8V2hpdGUlMjBTYXVjZSUyMFBhc3RhfGVufDB8fDB8fHww" alt="Creamy Pasta">
  <h3>Creamy White Sauce Pasta</h3>
  <span>$8</span>
</div>

<div class="item italian">
  <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8UGVwcGVyb25pJTIwUGl6emF8ZW58MHx8MHx8fDA%3D" alt="Pepperoni Pizza">
  <h3>Pepperoni Pizza</h3>
  <span>$9</span>
</div>

<div class="item italian">
  <img src="https://images.unsplash.com/photo-1574894709920-11b28e7367e3?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8TGFzYWduYXxlbnwwfHwwfHx8MA%3D%3D" alt="Lasagna">
  <h3>Lasagna</h3>
  <span>$10</span>
</div>

<div class="item healthy">
  <img src="https://images.unsplash.com/photo-1623691752472-a6d33855e5de?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fEF2b2NhZG8lMjBUb2FzdHxlbnwwfHwwfHx8MA%3D%3D" alt="Avocado Toast">
  <h3>Avocado Toast</h3>
  <span>$5</span>
</div>

<div class="item healthy">
  <img src="https://plus.unsplash.com/premium_photo-1664648005435-44a37115e765?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8VmVnZ2llJTIwUG93ZXIlMjBCb3dsfGVufDB8fDB8fHww" alt="Veggie Bowl">
  <h3>Veggie Power Bowl</h3>
  <span>$6</span>
</div>

<div class="item healthy">
  <img src="https://images.unsplash.com/photo-1743779665792-3026b7487756?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fEF2b2NhZG8lMjBTYWxhZHxlbnwwfHwwfHx8MA%3D%3D" alt="Avocado Salad">
  <h3>Avocado Salad</h3>
  <span>$9</span>
</div>

<div class="item healthy">
  <img src="https://images.unsplash.com/photo-1762631383520-df106b252f6a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8R3JpbGxlZCUyMENoaWNrZW4lMjBCb3dsfGVufDB8fDB8fHww" alt="Grilled Chicken Bowl">
  <h3>Grilled Chicken Bowl</h3>
  <span>$8</span>
</div>

<div class="item dessert">
  <img src="https://images.unsplash.com/photo-1511911063855-2bf39afa5b2e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Q2hvY29sYXRlJTIwTGF2YSUyMENha2V8ZW58MHx8MHx8fDA%3D" alt="Chocolate Cake">
  <h3>Chocolate Lava Cake</h3>
  <span>$5</span>
</div>

<div class="item dessert">
  <img src="https://images.unsplash.com/photo-1564919126030-8dbf63751ec2?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHZhbmlsYSUyMGljZSUyMGNyZWFtfGVufDB8fDB8fHww" alt="Ice Cream">
  <h3>Vanilla Ice Cream</h3>
  <span>$3</span>
</div>
<div class="item dessert">
  <img src="https://images.unsplash.com/photo-1612078960206-1709f1f0c969?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Y2hvY2xhdGUlMjBicm93bmllfGVufDB8fDB8fHww" alt="Brownie">
  <h3>Chocolate Brownie</h3>
 <span>$4</span>
</div>

<div class="item dessert">
  <img src="https://images.unsplash.com/photo-1519869325930-281384150729?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8VmFuaWxsYSUyMEN1cGNha2V8ZW58MHx8MHx8fDA%3D" alt="Cupcakes">
  <h3>Vanilla Cupcake</h3>
  <span>$4</span>
</div>

<div class="item dessert">
  <img src="https://images.unsplash.com/photo-1639710743625-c1a254dc79fe?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Q2hvY29sYXRlJTIwRG9udXRzfGVufDB8fDB8fHww" alt="Donuts">
  <h3>Chocolate Donuts</h3>
  <span>$5</span>
</div>

<div class="item dessert">
  <img src="https://plus.unsplash.com/premium_photo-1672192166851-71d218e64544?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8U3RyYXdiZXJyeSUyMENoZWVzZWNha2V8ZW58MHx8MHx8fDA%3D" alt="Cheesecake">
  <h3>Strawberry Cheesecake</h3>
  <span>$6</span>
</div>

<div class="item dessert">
  <img src="https://images.unsplash.com/photo-1702034519504-b7cf62c36413?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8RnJlbmNoJTIwTWFjYXJvbnN8ZW58MHx8MHx8fDA%3D" alt="Macarons">
  <h3>French Macarons</h3>
  <span>$5</span>
</div>

<div class="item dessert">
  <img src="https://plus.unsplash.com/premium_photo-1725888889354-2a38880f703f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Q2hvY29sYXRlJTIwV2FmZmxlc3xlbnwwfHwwfHx8MA%3D%3D" alt="Waffles">
  <h3>Chocolate Waffles</h3>
  <span>$6</span>
</div>

<div class="item drinks">
  <img src="https://plus.unsplash.com/premium_photo-1675667390417-d9d23160f4a6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8RnJlc2glMjBPcmFuZ2UlMjBKdWljZXxlbnwwfHwwfHx8MA%3D%3D" alt="Fresh Juice">
  <h3>Fresh Orange Juice</h3>
  <span>$3</span>
</div>

<div class="item drinks">
  <img src="https://images.unsplash.com/photo-1572490122747-3968b75cc699?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Q2hvY29sYXRlJTIwTWlsa3NoYWtlfGVufDB8fDB8fHww" alt="Milkshake">
  <h3>Chocolate Milkshake</h3>
  <span>$4</span>
</div>
<div class="item drinks">
  <img src="https://images.unsplash.com/photo-1584286595398-a59f21d313f5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Q29sZCUyMENvZmZlZXxlbnwwfHwwfHx8MA%3D%3D" alt="Cold Coffee">
  <h3>Cold Coffee</h3>
  <span>$5</span>
</div>

<div class="item drinks">
  <img src="https://images.unsplash.com/photo-1651993737201-6a93d0b5c6a4?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fEZyZXNoJTIwTGVtb25hZGV8ZW58MHx8MHx8fDA%3D" alt="Fresh Lemonade">
  <h3>Fresh Lemonade</h3>
  <span>$4</span>
</div>

  </div>
</section>

<section id="gallery" class="gallery reveal">
  <h2>Food Gallery</h2>
  <div class="images">
    <div class="images gallery-track">
  <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800&q=80">
  <img src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?auto=format&fit=crop&w=800&q=80">
  <img src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?auto=format&fit=crop&w=800&q=80">
  <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?auto=format&fit=crop&w=800&q=80">
  <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=800&q=80">
  <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=800&q=80">
</div>
</div>
</section>

<section id="order" class="order reveal">
  <h2>Order Online</h2>
  <form class="form">
    <input type="text" placeholder="Your Name" required>
    <input type="text" placeholder="Food Item" required>
    <input type="number" placeholder="Quantity" required>
    <button type="submit">Place Order</button>
  </form>
</section>

<section id="booking" class="booking reveal">
  <h2>Book a Table</h2>
  <form class="form">
    <input type="text" placeholder="Your Name" required>
    <input type="date" required>
    <input type="time" required>
    <input type="number" placeholder="Guests" required>
    <button type="submit">Reserve</button>
  </form>
</section>

<section id="reviews" class="reviews reveal">
  <h2>What Our Customers Say</h2>
  <div class="review-slider">
    <div class="review active">“Best food in town!” ⭐⭐⭐⭐⭐</div>
    <div class="review">“Amazing service and taste.” ⭐⭐⭐⭐⭐</div>
    <div class="review">“Perfect place for dinner.” ⭐⭐⭐⭐</div>
  </div>
</section>

<section id="contact" class="contact reveal">
  <h2>Contact Us</h2>
  <p>📞 +123 456 789</p>
  <p>📍 Main Street, Your City</p>
</section>

<button id="topBtn">⬆</button>

<!-- LOGIN MODAL -->
<div class="login-modal" id="loginModal">
  
  <div class="login-box">
    
    <span class="close-btn" id="closeLogin">&times;</span>

    <h2>User Login</h2>

    <form id="loginForm">

      <input type="text" placeholder="Enter Username" required>

      <input type="password" placeholder="Enter Password" required>

      <button type="submit">Login</button>

    </form>

  </div>

</div>
<footer>
  <p>© 2026 Spice Bites Restaurant</p>
</footer>

<script src="script.js"></script>
</body>
</html>
