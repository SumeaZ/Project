<?php
$userId = $_GET['id'];
include_once 'userR.php';

$userRepository = new UserR();
$user = $userRepository->getUserById($userId);

if (isset($_POST['editBtn'])) {
    $id = $user['Id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userRepository->updateUser($id, $name, $lastname, $email, $password);
    header("location: generaldash.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px; 
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding-right: 0;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: rgba(200, 185, 91, 0.3);
            color: black;
            transition: background-color 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Edit User</h3>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?=$user['Id']?>">
            <input type="text" name="name" value="<?=$user['name']?>">
            <input type="text" name="lastname" value="<?=$user['lastname']?>">
            <input type="text" name="email" value="<?=$user['email']?>">
            <input type="password" name="password" value="<?=$user['password']?>">
            <input type="submit" name="editBtn" value="Save">
        </form>
    </div>
</body>
</html>
    