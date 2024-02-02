<?php 

session_start(); 

include_once 'db.php';

if (isset($_POST['submit'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: login2.php?error=Email is required");
        exit();

    }else if(empty($pass)){
        header("Location: login2.php?error=Password is required");
        exit();

    }else{
        $servername = "localhost";
        $dbname = "project";  // Emri i bazës së të dhënave
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn){
            die("Connection Failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) !=0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['isAdmin'] = $row['isAdmin'];
                if($row['isAdmin']){
                    header("Location: home.php");
                }
                else{
                    header("Location: home.php");
                }
                exit();
            }else{
                header("Location: login2.php?error=Incorect email or password");
                exit();
            }
        }else{
            header("Location: login2.php?error=Incorect email or password");
            exit();
        }
    }
}else{
    header("Location: login2.php");
    exit();
} 
?>