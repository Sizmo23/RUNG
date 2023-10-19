<?php
    include "conn.php";
    $sql = "SELECT Fname FROM artist WHERE ID = '{$_SESSION['AID']}'";;
    $result1 = mysqli_query($conn, $sql);

    $Name1 = mysqli_fetch_array($result1)[0];
?>