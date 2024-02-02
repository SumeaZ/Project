<?php include_once 'registerController.php';?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styling/login2.css">
    <link rel="stylesheet" href="login.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Sign Up</h2>
        </div>
        <form class="form" id="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-control">
                <label>First Name:</label>
                <input type="text" placeholder="First Name" id="firstname" name="name">
                <i class="fa fa-check-circle"></i>
                <i class='fa fa-exclamation-circle'></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label>Last Name:</label>
                <input type="text" placeholder="Last Name" id="lastname" name="lastname">
                <i class="fa fa-check-circle"></i>
                <i class='fa fa-exclamation-circle'></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label>Email:</label>
                <input type="text" placeholder="Email" id="email" name="email">
                <i class="fa fa-check-circle"></i>
                <i class='fa fa-exclamation-circle'></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label>Password:</label>
                <input type="password" placeholder="Password" id="password" name="password">
                <i class="fa fa-check-circle"></i>
                <i class='fa fa-exclamation-circle'></i>
                <small>Error message</small>
            </div>
            <div class="end">
                <p class="new-acc">Already have an account?<a href="login2.php"> Log In</a></p>
            </div>
            <input type="submit" name="registerBtn" value="Sign Up" class="btn"><br><br>
        </form>
    </div>


    
    
</body>
</html>



