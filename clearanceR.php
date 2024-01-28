<?php 
include_once 'db.php';
class ClearanceR{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertClearance($clearance){

        $conn = $this->connection;

        $id = $clearance->getId();
        $Emri = $clearance->getEmri();
        $Cmimi = $clearance->getCmimi();

        $sql = "INSERT INTO clearance (id,emri,cmimi) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$Emri,$Cmimi]);

        
        header('Location: index.php');
        exit();
    }

    function getAllClearances(){
        $conn = $this->connection;

        $sql = "SELECT * FROM clearance";

        $statement = $conn->query($sql);
        $clearances = $statement->fetchAll();

        return $clearances;
    }

    function getClearanceById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM clearance WHERE id='$id'";

        $statement = $conn->query($sql);
        $clearance = $statement->fetch();

        return $clearance;
    }

    function updateClearance($id, $title, $price, $createdBy){
         $conn = $this->connection;

         $sql = "UPDATE clearance SET title=?, price=?, createdBy=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$title, $price, $createdBy, $id]);

         echo "<script>alert('Update was successful'); </script>";
    } 

    function deleteClearance($id){
        $conn = $this->connection;

        $sql = "DELETE FROM clearance WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Delete was successful'); </script>";
   } 
}
?>