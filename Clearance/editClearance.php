
<?php
$clearanceId = $_GET['id'];
include_once 'clearanceR.php';
$clearanceRepository = new ClearanceR();
$clearance = $clearanceRepository->getClearanceById($clearanceId);

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
    <h3>Edit Clearance</h3>
    <form action="" method="post">
        <input type="text" name="id"  value="<?=$clearance['id']?>" readonly> <br> <br>
        <input type="text" name="title"  value="<?=$clearance['title']?>"> <br> <br>
        <input type="text" name="price"  value="<?=$clearance['price']?>"> <br> <br>

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 
session_start();

if(isset($_POST['editBtn'])){
    $id = $clearance['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $createdBy = $_SESSION['email'];

    $clearanceRepository->updateClearance($id, $title, $price, $createdBy);
    header("location:clearances.php");
}


?>