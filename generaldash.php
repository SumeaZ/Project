<?php 
    session_start();
    if (!($_SESSION['isAdmin'])) {
        header("Location: home.php");
        exit();
    }
   
    include_once '../Project/userR.php';
    $userRepository = new UserR();
    $users = $userRepository->getAllUsers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styling/general.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="box">
        <div class="left">
            <img src="Photo general/admin.jpg" alt="">
            <h1>Hello, Admin</h1>
            
        </div>
        <div class="right">
            <table class="tabela">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>LASTNAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th class="text">Edit</th>
                    <th class="text">Delete</th>
                </tr>
                <?php
                foreach ($users as $user) {
                    echo "
                        <tr>
                            <td>{$user['Id']}</td>
                            <td>{$user['name']}</td>
                            <td>{$user['lastname']}</td>
                            <td>{$user['email']}</td>
                            <td>{$user['password']}</td>
                            <td><a href='edit.php?id={$user['Id']}'>Edit</a></td>
                            <td><a href='delete.php?id={$user['Id']}'>Delete</a></td>
                        </tr>
                    ";
                }
                ?>
            </table>
            <a href="registerform.php" class="btn">Add User</a>
        </div>
    </div>
</body>
</html>
