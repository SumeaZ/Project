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
    <title>Clearances</title>
</head>
<body>   

    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>Title</th>
                 <th>Price</th>
                 <th>Created By</th>                 
             </tr>

             <?php 
             include_once '../Project/clearanceR.php';

             $clearanceRepository = new ClearanceR();

             $clearances = $clearanceRepository->getAllClearances();

             foreach($clearances as $clearance){
                echo 
                "
                <tr>
                     <td>$clearance[id]</td>
                     <td>$clearance[title]</td>
                     <td>$clearance[price]</td>
                     <td>$clearance[createdBy] </td>
                     <td><a href='editClearance.php?id=$clearance[id]'>Edit</a> </td>
                     <td><a href='deleteClearance.php?id=$clearance[id]'>Delete</a></td>                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
</body>
</html>