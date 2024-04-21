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
        <img class="card-image" src="images/3.1.webp">
        <div class="card-detail">
            <h4>Special Paneer Meal<span>₹120</span></h4>
            <p>3 Paranthas,Paneer Curry,Rice,Salad</p>
            <p class="card-time"><span class="fas fa-clock"></span> 20-25 minutes</p>
        </div>
    </div>
    <div class="dashboard-card">
        <img class="card-image" src="images/3.2.jpg">
        <div class="card-detail">
            <h4>Rajma Chawal<span>₹80</span></h4>
            <p>along with curd</p>
            <p class="card-time"><span class="fas fa-clock"></span> 25-30 minutes</p>

        </div>
    </div>
    <div class="dashboard-card">
        <img class="card-image" src="images/3.3.jpg">
        <div class="card-detail">
            <h4>Veg Biryani<span>₹100</span></h4>
            <p>along with Curd and Raita</p>
            <p class="card-time"><span class="fas fa-clock"></span> 25-30minutes</p>

        </div>
    </div>
    <div class="dashboard-card">
        <img class="card-image" src="images/3.4.jpg">
        <div class="card-detail">
            <h4>South Indian meal<span>₹140</span></h4>
            <p>Lemon Rice,Rasam,Vada,Chutney,Curd</p>
            <p class="card-time"><span class="fas fa-clock"></span> 30-35 minutes</p>

        </div>
    </div>
    <div class="dashboard-card">
        <img class="card-image" src="images/3.5.jpg">
        <div class="card-detail">
            <h4>Dal Makhni Rice Bowl<span>₹140</span></h4>
            <p>Rice,Dal Makhni,Salad,Pickle </p>
            <p class="card-time"><span class="fas fa-clock"></span> 30-35 minutes</p>

        </div>
    </div>
    <div class="dashboard-card">
        <img class="card-image" src="images/3.6.avif">
        <div class="card-detail">
            <h4>Veg Platter Meal<span>₹180</span></h4>
            <p>Paneer Tikka,Malai Chaap,Rice,3 Rumali Roti</p>
            <p class="card-time"><span class="fas fa-clock"></span> 40-45 minutes</p>

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
    <img class="order-image" src="images/3.2.jpg">
    <div class="order-detail">
    <p>Rajma chawal</p>
    <i class="fas fa-time"></i><input type="text" value="1">
    </div>
    <h4 class="order-price">₹80</h4>
    </div>
    <div class="order-card">
    <img class="order-image" src="images/3.3.jpg">
    <div class="order-detail">
    <p>Veg Biryani</p>
    <i class="fas fa-time"></i><input type="text" value="2">
    </div>
    <h4 class="order-price">₹100</h4>
    </div>
    <div class="order-card">
    
   
    </div>
</div>
    <!--                    Sid end-->

<hr class="divider">
<div class="order-total">
    <p>Subtotal <span>₹180
    </span></p>
    <p>Tax (10%) <span>₹18</span></p>
    <p>Delivery Fee <span>₹30</span></p>
    <div class="order-promo">
        <input class="input-promo" type="text" placeholder="Apply Voucher">
        <button class="button-promo">Find Promo</button>
    </div>
    <hr class=""divider">
    <p>Total <span>₹228</span></p>
</div>
<button class="checkout">
    Payment
</button>

</div>
</body>
</html>