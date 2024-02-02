<?php
    session_start();              
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styling/refill&recycle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Candles PURE.</title>
    
</head>
<body>

    <header>
        <div class="heading">
            
            <div class="name">
                <h1><a href="home.php">Candles PURE.</a></h1>
            </div>
            


            <div class="middle" id="mysidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="Clearance/clearance.php">CLEARANCE</a>
                <a href="stocklist.php">STOCKLIST</a>
                <a href="refill&recycle.php">REFILL & RECYCLE</a>
                <a href="aboutUs.php">ABOUT US</a>
            </div>

            <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            </div>

            <div class="search">
                <?php 

                    if (isset($_SESSION['email'])) {
                ?>
                <h5>Welcome, <?php echo $_SESSION['name']; ?></h5>
                <a href="logout.php"><i class="fa fa-user"></i><h3>Logout</h3></a>
   
                <?php 
                    }else{            

                ?>
                <a href="login2.php"><i class="fa fa-user"></i><h3>Login</h3></a>
                <?php 
                }
                ?> 

                           
            </div>

        </div> 
    </header>

    <main>
        <div class="container">
            <h1>REFILL & RECYCLE</h1>
            <p>REDUCE YOUR WASTE</p>
            <h3>Return your cleaned out candle containers to have them refilled with your favorite 1502 fragrances. Refills take about 2 weeks.</h3>
            <h2>If you're local to San Diego you have a few options to drop off your container:</h2>
            <ul>
                <li>At our partner store in Ocean <a href="https://www.botanicahomeandgarden.com/" >Beach Botanica Home and Garden</a></li>
            </ul>
            <ul>
                <li>Directly to us at our HQ, We're usually open Mondays, Wednesday and Fridays 10-2pm</li>
            </ul>
            <h3>You can also ship it back to us at our HQ</h3>
            <h3>Return your 1502 diffuser and mists bottle for $2 off your 1502 purchase.</h3>

        </div>



        <div class="main-box">
            <div class="text-box">
                <h1>HOW TO CLEAN OUT YOUR CONTAINER</h1>
                <p>We like to use the <span>double boil method:</span></p>
                <ol class="list">
                    <li>Fill a pot partway full of water. Keep the water line below the top of the jar.</li>
                    <li>Turn the stove to medium-low heat. Gently, gradually apply heat so that you don’t break the glass.</li>
                    <li>Heat until the wax is completely melted. Let everything get warm - it's easier to clean that way!</li>
                    <li>Pour in the trash, NOT the sink (unless you enjoy unclogging drains, of course).</li>
                    <li>Remove wick tabs. The tip of a butter knife works well to loosen them.</li>
                    <li>Remove labels and recycle.</li>
                    <li>Clean out the jar with hot soapy water.</li>
                </ol>

            </div>
            <div class="photo-box">
                <img src="Photo general/refill&recycle.webp" alt="">
            </div>

        </div>

        <div class="prices">
            <h1>COSTS</h1>
            <h3>Apothecary Jars  $22</h3>
            <h3>Tumblers  $18</h3>
            <h3>Travel Tins  $12</h3>
            <h3>Custom  $5 + $1.75/oz</h3>
        </div>
    </main>

    <footer>
      
        <div class="footeri-1">
          
            <div class="col-1">
              <h3>ABOUT PURE.</h3>
              <br>
              <br>
              <p>
                 Hand-poured and hand-crafted in small batches, using natural 
                 <br>
                 ingredients, therapeutic grade essential oils and a blend of 
                 <br>
                 fine fragrances. Pure is a boutique fragrance studio based in 
                 <br> 
                 Singapore, focused on producing high quality, simple and 
                 <br>
                 fuss-free soy candles, essential oil blends and  home
                 <br>
                 fragrances at accessible prices.
              </p>
              <br>
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-instagram"></a>
            </div>
 
            <div class="col-2">
                <h3>OTHERS</h3>
                <P>FAQ</P>
                <p>Jobs</p>
                <p>Candle care</p>
                <p>Corporate Gifts</p>
                <p>Shipping & Returns</p>
                <p>Terms & Conditions</p>
            </div>
            
            <div class="col-3">
               <h3>COSTUMER SERVICE</h3>
               <br>
               <br>
               <p>Phone number: 00383-49-225-964 </p>
               <br>
               <p>Email: Purehush@gmail.com</p>
               <br>
               <p>Address: Central Valley, NY</p>
 
            </div>
       </div>
 
       <div class="footer-2">
            <div class="left">
             <a href="home.php">© Candles PURE. </a> <br> <br>
             <a href="https://www.shopify.com/" target="_blank">Powered by Shopify</a>
 
            </div>
 
            <div class="right">
             <h3>NEWSLETTER</h3>
             <br>
             <p>Subscribe to our newsletter to get to know more about the 
             <br>Candles PURE. news, events and products.</p>
             <br>
             <form class="form">
                <input type="email" placeholder="Email" class="email" required>
                <br>
               <button type="submit" class="sub">SUBSCRIBE</button>
             </form>
            
             
             
 
            </div>
       </div>
  </footer>

  <script src="JavaScript/sideNav.js"></script>

</body>
</html>
