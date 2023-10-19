<?php 

session_start(); 

include "conn.php";

if (!empty($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $uname = $_POST['email'];

    $pass =$_POST['password'];

    $sql = "SELECT * FROM user WHERE password='$pass' AND email='$uname'" ;
    echo "<script> alert('asdad'); </script>";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if ($row['email'] === $uname && $row['password'] === $pass) {

            echo "Logged in!";

            $_SESSION['UID'] = $row['ID'];

            header("Location: http://localhost/RAANG/userpage.php");

            exit();

        }else{

            header("Location: userlog.php?error=Incorrect User name or password");

            exit();

        }

    }else{

        header("Location: userlog.php?error=Incorrect User name or password");

        exit();

    }

}else{

    header("Location: userlog.php?error=User Name and Password are required");

    exit();

}
?>
