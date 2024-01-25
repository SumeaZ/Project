<?php
include_once 'userR.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password'])){
        echo "<script> alert('FILL ALL FILEDS'); </script>";
    }else{
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $name.rand(100,999);

        $user  = new User($id,$name,$lastname,$email,$password);
        $userRepository = new UserR();

        $userRepository->insertUser($user);


    }
}



?>