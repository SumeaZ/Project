<?php 
    session_start();
    if (!($_SESSION['isAdmin'])) {
        header("Location: home.php");
        exit();
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   

    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>LASTNAME</th>
                 <th>EMAIL</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '../Project/userR.php';

             $userRepository = new UserR();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[Id]</td>
                     <td>$user[name]</td>
                     <td>$user[lastname] </td>
                     <td>$user[email] </td>
                     <td>$user[password] </td>
                     <td><a href='edit.php?id=$user[Id]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[Id]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
</body>
</html>