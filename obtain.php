<?php
    include "conn.php";
    $sql = "SELECT fname FROM user WHERE ID = '{$_SESSION['UID']}'";;
    $result1 = mysqli_query($conn, $sql);

    $Name1 = mysqli_fetch_array($result1)[0];
?>