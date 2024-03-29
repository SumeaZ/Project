<?php
    session_start();              
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styling/stocklist.css">
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
            <p>STOCKIST</p>
            <p class="texti">Selected Hush products are available at the following stockists listed below. Do note that the products carried 
              <br> by each individual stockist may differ, and will also be subjected to stock availability. We recommend getting 
              <br> in touch with us or with the specific stockist directly to check on product and stock availability.
            </p>

            <div class="text2">
                <h4>Commune</h4>
                <p>Millenia Walk</p>
                <p>9 Raffles Blvd | #02-52</p>
                <p>Singapore 039596</p>
                <br>
                <p>Tan Boon Liat Building</p>
                <p>315 Outram Rd | #11-09 Tan</p>
                <p>Singapore 169074</p>
            </div>

            <div class="text2">
                <h4>Grab Mart</h4>
                <p>Via Grab Mart App (Islandwide)</p>
                <p>Monday - Sunday 10:30am - 5pm</p>
            </div>

            <div class="text2">
                <h4>Panda Mart</h4>
                <p>Via Food Panda App</p>
                <p>AMK</p>
                <p>Bedok</p> 
                <p>Boon Lay</p>
                <p>Jurong</p>    
                <p>Mandai</p>
                <p>Punggol</p>    
                <p>Red Hill</p>    
                <p>Serangoon</p>    
                <p>Tampines</p>    
                <p>Yishun</p>

                <h4>Paper Market</h4>
                <p>Great World City</p>
                <p>1 Kim Seng Promenade | #01-120 </p>
                <p>Singapore 237994</p>

                <h4>SOJAO</h4>
                <p>251 Joo Chiat Road</p>
                <p>Singapore 427505</p>

                <h4>Sephora ION</h4>
                <p>2 Orchard Turn | #B2-09</p>
                <p> Singapore 238801</p>

                <h4>Sephora Raffles City</h4>
                <p>252 North Bridge Road | #01-20/21</p>
                <p>Singapore 179103</p>

                <h4>The Editor's Market</h4>
                <p>Takashimaya Shopping Centre</p>
                <p>391 Orchard Rd | #B1-16</p>
                <p>Singapore 238872</p>

                <h4>Therapy Market</h4>
                <p>Wheelock Place</p>
                <p>501 Orchard Rd, #B1-06 Singapore 238880</p>

                <h4>The Summerhouse</h4>
                <p>(within Wildseed Cafe)</p>
                <p>3 Park Lane</p>
                <p>Singapore 798387</p>

                <h4>Watsons @ Ngee Ann City</h4>
                <p>391 Orchard Road</p>
                <p>Singapore 238872</p>

                <h4>WHSmith</h4>
                <p>Changi Airport</p>
                <p>Terminal 2 Transit</p>
                <p> Level 2, Departure Lounge (Near E Gates)</p>


 
            </div>
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