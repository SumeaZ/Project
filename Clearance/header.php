<?php
  
  include_once 'connection.php';
  session_start();

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styling/header.css">

</head>
<body>
    <div class="below">
        
        <div id="main_tabs">
           <?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin']): ?>
                <a href="upload.php" class="title">Upload</a>
            <?php endif; ?>
            <a href="clearance.php" class="title">Products</a>
        </div>
        <a href="cart.php" class="title">Cart <span id="badge"><?php echo mysqli_num_rows($all_cart);  ?></span></a>
    </div>
</body>
</html>