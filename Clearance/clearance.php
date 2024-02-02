<?php

  include_once 'connection.php';

  $sql = "SELECT * FROM product";
  $all_product = $conn->query($sql);
  $sql_cart = "SELECT * FROM cart";
  $all_cart = $conn->query($sql_cart);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styling/clearance.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Candles PURE.</title>
</head>
<body>


    <header>
        <div class="heading">
            
            <div class="name">
                <h1><a href="../home.php">Candles PURE.</a></h1>
            </div>
            


            <div class="middle" id="mysidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="clearance.php">CLEARANCE</a>
                <a href="../stocklist.php">STOCKLIST</a>
                <a href="../refill&recycle.php">REFILL & RECYCLE</a>
                <a href="../aboutUs.php">ABOUT US</a>
            </div>

            <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            </div>

            <div class="search">
                <?php 

                    if (isset($_SESSION['email'])) {
                ?>
                <h5>Welcome, <?php echo $_SESSION['name']; ?></h5>
                <a href="../logout.php"><i class="fa fa-user"></i><h3>Logout</h3></a>
   
                <?php 
                    }else{            

                ?>
                <a href="../login2.php"><i class="fa fa-user"></i><h3>Login</h3></a>
                <?php 
                }
                ?> 

                           
            </div>

        </div> 
    </header>


    <?php
    include_once "header.php";
    ?>

    <div class="maini">
        <p>CLEARANCE COLLECTION</p>
        <p class="para">At Candles PURE, we bring you an exquisite collection of candles meticulously crafted to elevate your senses and create an ambiance <br>of tranquility and warmth.
            Our passion for quality and devotion to the art of candle-making result in products that are more than just sources of light; <br>they are reflections of your unique style and mood.<br>
    
            <br><br>
            *Light Up Your Moments, Illuminate Your Soul - Candles PURE: Where Tranquility Meets Elegance.
        </p>
    </div>





    <main>
       <?php
          while($row = mysqli_fetch_assoc($all_product)){
       ?>
       <div class="card">
           <div class="image">
               <img src="<?php echo $row["product_image"]; ?>" alt="">
           </div>
           <div class="caption">
               <p class="product_name"><?php echo $row["product_name"];  ?></p>
               <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
               <p class="discount"><b><del>$<?php echo $row["discount"]; ?></del></b></p>
           </div>
           <button class="add" data-id="<?php echo $row["product_id"];  ?>">Add to cart</button>
       </div>
       <?php

          }
     ?>
   </main>
   <script>
       var product_id = document.getElementsByClassName("add");
       for(var i = 0; i<product_id.length; i++){
           product_id[i].addEventListener("click",function(event){
               var target = event.target;
               var id = target.getAttribute("data-id");
               var xml = new XMLHttpRequest();
               xml.onreadystatechange = function(){
                   if(this.readyState == 4 && this.status == 200){
                       var data = JSON.parse(this.responseText);
                       target.innerHTML = data.in_cart;
                       document.getElementById("badge").innerHTML = data.num_cart + 1;
                   }
               }

               xml.open("GET","connection.php?id="+id,true);
               xml.send();
            
           })
       }

   </script>



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
            <a href="../home.php">© Candles PURE. </a> <br> <br>
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
   
 <script src="../JavaScript/sideNav.js"></script>
    
</body>
</html>