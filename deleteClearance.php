<?php
$clearanceId = $_GET['id'];
include_once 'clearanceR.php';

$clearanceRepository = new ClearanceR();
$clearanceRepository->deleteClearance($clearanceId);

header("location:clearances.php");
?>