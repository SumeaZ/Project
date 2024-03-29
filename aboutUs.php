<?php
    session_start();              
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styling/aboutUs.css">
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
        <div class="maini">
            <div class="photofirst">
                <img class="photo" src="Photo general/photohead2.jpg" alt="candle">
            </div>

            <h3 class="h1">About Us</h3>
            <div class="text1">
                <p>Hello there!</p>
                <p>At Candle Pure, we believe in the power of candlelight
                     to transform moments into memories. Our journey began with a 
                     simple passion:  to create candles that not only illuminate 
                     spaces but also add a touch of warmth and magic to every corner of your life.</p>
            </div>
            <h3 class="h1">Our Passion</h3>
            <p class="text1">Candles are more than products to us; they're a form of self-expression 
                and a means to enhance the ambiance of your surroundings. We pour our
                 hearts into every candle, carefully selecting sustainable materials 
                 and crafting unique scents that evoke emotions and memories.
                 Our passion lies in curating collections that cater to diverse tastes, 
                 from cozy evenings at home to celebratory occasions
            </p>

            <h3 class="h1">Join the Pure</h3>
            <p class="text1">Whether you're a candle enthusiast or exploring the world of candles for the first time,
                 we invite you to join us on this Pure journey. 
                Browse our collections, discover your signature scent, 
                and let Pure Creations be part of your story.
            </p>

           
           
         <hr>   
          <div class="pjesa2">
              <div class="end">
                   <h2>Products You'll Need</h2>
                
                   <img class="photoend" src="Photo general/kit1.webp" alt="kit1">
                  <p>If you want to try making candle by yourself with love  </p>
               </div>
          </div>
          

          <p class="end">Ready to experience the magic of candlelight?</p>
           <a href="Clearance/clearance.php">Shop Now</a>
          


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
            <a href="home.html">© Candles PURE. </a> <br> <br>
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