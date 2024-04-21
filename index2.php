<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--style-->
    <link rel="stylesheet" href="stylenew.css">
    <!--font: Notosans -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP& display=swap" rel="stylesheet">
    <!-- icons: font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Responsive Food Delivery Dashboard</title>
</head>
<body>
    <!-- header -->
    <input type="checkbox" id="cart">
    <label for="cart" class="label-cart"><span class="fas fa-shopping-cart"></span></label>

    <h3 class="logo">Food Delivery Services</h3>

    <!-- sidebar -->
    <div class="sidebar">
        <div class="sidebar-menu">
            <span class="fas fa-search"></span>
            <a href="#">Search</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-home"></span>
            <a href="main.php">Home</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-heart"></span>
            <a href="#">Favs</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-user"></span>
            <a href="#">Profile</a>
        </div>
        <div class="sidebar-menu">
            <span class="fas fa-sliders-h"></span>
            <a href="#">Setting</a>
        </div>
    </div>                          <!--                Sanya End-->
    
<!--main dashboard-->
    <div class="dashboard">
        <div class="dashboard-banner">
            <img src="images/India’s kitchen.png">
        </div>
    
        <h3 class="dashboard-title">Recommend Food For You</h3>
<div class="dashboard-menu">
    <a ref="#">Favorites</a>
    <a ref="#">best Seller</a>
    <a ref="#">Near me</a>
    <a ref="#">promotion</a>
    <a ref="#">Top Rated</a>
    <a ref="#">All</a>
</div>
    

<!--order dashboard-->
<!--                    bhavya End-->

<div class="dashboard-content">
    <div class="dashboard-card">
        <img class="card-image" src="images/2.1.jpeg">
        <div class="card-detail">
            <h4>Budget Veg Tiffin<span>₹70</span></h4>
            <p>3 Roti,Sabzi,Salad</p>
            <p class="card-time"><span class="fas fa-clock"></span> 20-25 minutes</p>
        </div>
    </div>
    <div class="dashboard-card">
        <img class="card-image" src="images/2.2.webp">
        <div class="card-detail">
            <h4>Budget Non-Veg Tiffin<span>₹80</span></h4>
            <p>3 Roti,NonVeg curry,Salad</p>
            <p class="card-time"><span class="fas fa-clock"></span> 25-30 minutes</p>

        </div>
    </div>
    <div class="dashboard-card">
        <img class="card-image" src="images/2.3.webp">
        <div class="card-detail">
            <h4>Deluxe Veg Tiffin<span>₹90</span></h4>
            <p>3 Roti,Sabzi,Rice,Dal,Salad</p>
            <p class="card-time"><span class="fas fa-clock"></span> 25-30minutes</p>

        </div>
    </div>
    <div class="dashboard-card">
        <img class="card-image" src="images/2.4.jpg">
        <div class="card-detail">
            <h4>Deluxe Non Veg Tiffin<span>₹100</span></h4>
            <p>3 Roti,Non-Veg curry,Rice,Dal,Salad</p>
            <p class="card-time"><span class="fas fa-clock"></span> 30-35 minutes</p>

        </div>
    </div>
    <div class="dashboard-card">
        <img class="card-image" src="images/2.5.cms">
        <div class="card-detail">
            <h4>Premium Veg Tiffin<span>₹120</span></h4>
            <p>3 Roti,Sabzi,Rice,Dal,Salad,Pulao,Biryani</p>
            <p class="card-time"><span class="fas fa-clock"></span> 30-35 minutes</p>

        </div>
    </div>
    <div class="dashboard-card">
        <img class="card-image" src="images/2.6.jpg">
        <div class="card-detail">
            <h4>Premium Non Veg Tiffin<span>₹140</span></h4>
            <p>3 Roti,Non-Veg curry,Rice,Dal,Chicken Biryani,Salad</p>
            <p class="card-time"><span class="fas fa-clock"></span> 35-40 minutes</p>

        </div>
    </div>
    
   

</div>

</div>

<div class="dashboard-order">
    <h3>Order Menu</h3>
    <div class="order-address">
        <p>Address Delivery</p>
        <h4>Sector 62, Noida</h4>
    </div>
    <div class="order-time">
        <span class="fas fa-clock"></span> 30 mins <span class="fas fa-map-marker-alt"> 2 km</span>
    </div>

<!--                            Manan End-->


<div class="order-wrapper">
    <div class="order-card">
    <img class="order-image" src="images/2.4.jpg">
    <div class="order-detail">
    <p>Deluxe Non Veg Tiffin</p>
    <i class="fas fa-time"></i><input type="text" value="1">
    </div>
    <h4 class="order-price">₹100</h4>
    </div>
    <div class="order-card">
    <img class="order-image" src="images/2.5.cms">
    <div class="order-detail">
    <p>Premium Veg Tiffin</p>
    <i class="fas fa-time"></i><input type="text" value="2">
    </div>
    <h4 class="order-price">₹120</h4>
    </div>
    <div class="order-card">
    
   
    </div>
</div>
    <!--                    Sid end-->

<hr class="divider">
<div class="order-total">
    <p>Subtotal <span>₹220
    </span></p>
    <p>Tax (10%) <span>₹22</span></p>
    <p>Delivery Fee <span>₹30</span></p>
    <div class="order-promo">
        <input class="input-promo" type="text" placeholder="Apply Voucher">
        <button class="button-promo">Find Promo</button>
    </div>
    <hr class=""divider">
    <p>Total <span>₹272</span></p>
</div>
<button class="checkout">
    Payment
</button>
</div>
</body>
</html>