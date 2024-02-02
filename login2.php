<?php
    include_once 'db.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styling/login2.css">
    <link rel="stylesheet" href="login.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>

</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Login</h2>
        </div>
        <form class="form" id="form" action="index.php" method="post">
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form-control ">
                <label>Email:</label>
                <input type="text" placeholder="Email" id="email" name="email">
                <i class="fa fa-check-circle"></i>
                <i class='fa fa-exclamation-circle'></i>
                <small>Error message</small>
            </div>

            <div class="form-control ">
                <label>Password:</label>
                <input type="password" placeholder="Password" id="password" name="password">
                <i class="fa fa-check-circle"></i>
                <i class='fa fa-exclamation-circle'></i>
                <small>Error message</small>
            </div>
            <div class="end">
                <p>Don't have an account? <a href="registerform.php">Sign Up</a></p>
            </div>
            <div class="end">
                <p class="para">Back to <a href="home.php">Home</a></p>
            </div>
            <input type="submit" class="btn" value="LogIn" name="submit">
        </form>
    </div>
    
</body>
    
</html>