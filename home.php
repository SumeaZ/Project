<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styling/home.css">
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
                <?php
                session_start();
                if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']) {
                ?>
                    <a href="generaldash.php">DASHBOARD</a>
                    <?php 
                    }
                    ?>
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
        
        <div class="photomain">
            <img src="Photo general/photomain.webp" alt="photomain" class="photomain1">
            <div class="text-photo">
                <div class="epara"><p>GET YOUR HOME READY FOR HOLIDAYS</p></div>
                <div class="button1"> <a href="chritmaslist.php">BUY NOW</a></div>
            </div>
        </div>
        

        <div class="main-2">
            <h2>BEST SELLERS</h2>
            <img src="Photo for Slider/photo1.jpg" id="slider">  
            <button class="next" onclick="change()">Next</button>
        </div>
        <hr>

        <div class="main-3">
            <h1>
                Why 
                <span>PURE.</span>
                candles ?
            </h1>

            <div class="row">
                <div class="text">
                    <p>Nature is our key muse and inspiration. When creating our scented candles,
                        we conducted in-depth research to find some of the most captivating fragrances the planet has to offer, 
                        naturally derived aroma candles to exquisitely scent your home.Burning a scented candle is an effortless way to create a cozy, 
                        luxurious, or tranquil mood in any room. We spent 27 hours researching and testing 32 candles under $50,
                        and we found several warm and woodsy, fresh and floral, and sweet and citrusy candles for all of your olfactory endeavors. 
                    </p>
                    
                </div>
                <div class="text">
                    <img src="Photo general/photo1.gif" alt="">
                </div>
                
            </div>

        </div>

        <div class="main-4">
           <div> 
              <h1>Candles Fit For Your Home</h1>
              <p class="teksti">Our candles are cruelty-free, non-toxic and contain no lead, plastics, paraben, 
                 <br>
                  phthalates or synthetic dyes and are made with a natural soy wax blend.
              </p>
           </div> 

           <div class="iconat">
               <div class="icon">
                   <img src="Candles Fit For Your Home/non-toxic.png" alt="">
                   <p>Non-</p>
                   <p>Toxic</p>
               </div>
               <div class="icon">
                   <img src="Candles Fit For Your Home/cotton wick.png" alt="">
                   <p>Cotton</p>
                   <p>Wick</p>
               </div>
               <div class="icon">
                   <img src="Candles Fit For Your Home/costume scents.png" alt="">
                   <p>Costume</p>
                   <p>Scents</p>
               </div>
               <div class="icon">
                   <img src="Candles Fit For Your Home/Reusable.png" alt="">
                   <p>Reusable</p>
                   <p>Class Jars</p>
               </div>
               <div class="icon">
                   <img src="Candles Fit For Your Home/60-80 Hour.png" alt="">
                   <p>60-80 Hour</p>
                   <p>Burn Time</p>
               </div>
           </div>


        </div>

       


        <div class="slider-container">
            <div class="review">
              <p class="main-text">"Absolutely enchanted by the exquisite scents at this candle shop! The quality of their candles is unmatched. Five stars!"</p>
              <p class="author">- John Doe</p>
            </div>
            <div class="review">
              <p class="main-text">"Such a delightful experience shopping for candles here! The staff was incredibly helpful in guiding me through their extensive collection."</p>
              <p class="author">- Kevin Hart</p>
            </div>
            <div class="review">
                <p class="main-text">"The hand-poured candles are not only visually stunning but also have a long-lasting fragrance."</p>
                <p class="author">- Kylie Jenner</p>
            </div>
            <div class="review">
                <p class="main-text">"The variety of scents is impressive, and the natural ingredients make a noticeable difference."</p>
                <p class="author">- Amber Rose</p>
            </div>
            <div class="review">
                <p class="main-text">"The packaging is elegant, and the burn time exceeded my expectations. I've found my go-to spot for gifts and personal indulgence."</p>
                <p class="author">- Tom Hardy</p>
            </div>
          
            <div class="pagination">
                <button class="prev-btn">Previous</button>
                <span class="page-number">1</span>
                <button class="next-btn">Next</button>
            </div>
        </div>
          
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

 <script src="JavaScript/home.js"></script>
    
</body>
</html>