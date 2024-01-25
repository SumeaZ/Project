<?php include_once 'registerController.php';?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register Form</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: left;
            /* min-height: 90hv; */
            margin-left: 100px;
            background-image: url("Photo general/background2.jpg");
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        .container{
           background-color: rgba(204, 192, 158, 0.3);
           border-radius: 5px;
           box-shadow: 0 2px 5px rgb(0, 0, 0, 0.3);
           width: 400px;
           overflow: hidden;
           max-width: 100%;
           border: 1px solid rgb(0, 0, 0, 0.3);
           margin-top: 50px;
        }
        .header{
           background-color: rgb(200, 185, 91, 0.3);
           padding: 15px 40px;
           border-bottom: 1px solid #f0f0f0;
        }
        .header h2{
           margin: 0;
           text-align: center;
        }
        .form{
          padding: 30px 40px;
        }
        .form-control{
           margin-bottom: 10px;
           padding-bottom:15px ;
           position: relative;
        }

        .form-control label{
           display: inline-block;
           margin-bottom: 5px;
        }

        .form-control input{
           border: 2px solid #f0f0f0;
           border-radius: 4px;
           display: block;
           width: 100% ;
           padding: 10px;
           font-size: 14px;
           font-family: inherit;
        }
       .form-control.success input{
          border-color: rgb(89, 192, 89);
        }
       .form-control.error input{
          border-color: rgb(253, 6, 6, 0.3);
        }
       .form-control i {
          visibility: hidden;
          position: absolute;
          top: 40px;
          right: 10px;
        }
       .form-control.success i.fa-check-circle{
          visibility: visible;
          color: rgb(89, 192, 89);
        }
       .form-control.error i.fa-exclamation-circle{
          visibility: visible;
          color: red;
        }
       .form-control small{
          visibility: hidden;
          position: absolute;
          bottom: 0;
          left: 0;
        }
        .form-control.error small{
          visibility: visible;
          color: red;
        }
        .btn{
           width: 100%;
           background-color: black;
           color: white;
           border: 1px solid black;
           display: block;
           padding: 10px;
           font-size: 16px;
           border-radius: 4px;
        }
        .end{
           padding-bottom: 15px;
           display:flex;
           justify-content: center;
        }
        .end p a{
           color: black;
           text-decoration: none;
        }
        .end p a:hover{
           color: rgb(200, 185, 91);
        }
        .btn:hover{
            background-color: rgba(200, 185, 91, 0.3);
            color: black;
            transition: background-color 0.3s ease-in-out;
        }
    </style>
   
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
            <!-- <button class="btn" onclick="valideForm()"> Sign Up</button> -->
        </form>
    </div>


    
    
</body>
<script>
    // let form = document.getElementById('form');
    // let firstname = document.getElementById('firstname');
    // let lastname = document.getElementById('lastname');
    // let email = document.getElementById('email');
    // let password = document.getElementById('password');

    // form.addEventListener('submit', e => {
    //     e.preventDefault();

    //     valideForm();
    // });

    // function valideForm(){
    //     let firstnameValue = firstname.value.trim();
    //     let lastnameValue = lastname.value.trim();
    //     let emailValue = email.value.trim();
    //     let passwordValue = password.value.trim();

    //     if(firstnameValue === ''){
    //         setErrorFor(firstname, 'This field is required');
    //     }else{
    //         setSuccessFor(firstname);
    //     }

    //     if(lastnameValue === ''){
    //         setErrorFor(lastname, 'This field is required');
    //     }else{
    //         setSuccessFor(lastname);
    //     }

    //     if(emailValue === ''){
    //         setErrorFor(email, 'This field is required');
    //     }else if(!isEmail(emailValue)){
    //         setErrorFor(email, 'Not a valid email!')
    //     }else{
    //         setSuccessFor(email);
    //     }

    //     if(passwordValue === '') {
	// 	  setErrorFor(password, 'This field is required');
	//     }else {
	// 	   setSuccessFor(password);
	//     }
    // }

    // function setErrorFor(input, message) {
	//    const formControl = input.parentElement;
	//    const small = formControl.querySelector('small');
	//    formControl.className = 'form-control error';
	//    small.innerText = message;
    // }

    // function setSuccessFor(input) {
	//    const formControl = input.parentElement;
	//    formControl.className = 'form-control success';
    // }

    // function isFirstName(){
    //     return /^[A-Za-z]$/.test(firstname);
    // }
    // function isLastName(){
    //     return /^[A-Za-z]$/.test(lastname);
    // }
    // function isEmail(email) {
	//    return /^[A-Za-z.-_]+@+[a-z]+\.[a-z]{2,3}$/.test(email);
    // }
    // function isPassword(password){
    //     return /[A-Za-z]+[0-9]{3}$/.test(password);
    // }
</script>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="name" placeholder="name..."> <br><br>
        <input type="text" name="lastname" placeholder="lastname..."> <br><br>
        <input type="text" name="email" placeholder="email..."> <br><br>
        <input type="text" name="password" placeholder="password..."><br><br>

        <input type="submit" name="registerBtn" value="register"><br><br>
    </form>

   <?php include_once '../Project/registerController.php';?> 
</body>
</html> -->