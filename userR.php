<?php 
include_once 'db.php';
class UserR{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user){

        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $lastname = $user->getLastname();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO user (id,name,lastname,email,password) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$lastname,$email,$password]);

        
        header('Location: index.php');
        exit();
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id,$name,$lastname,$email,$password){
         $conn = $this->connection;

         $sql = "UPDATE user SET name=?, lastname=?, email=?, password=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$name,$lastname,$email,$password,$id]);

         echo "<script>alert('Update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('Delete was successful'); </script>";
   } 
}
?>