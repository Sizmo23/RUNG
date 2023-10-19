<?php
session_start();
echo "<script> alert('CHAL JA BC') </script>";

if (isset($_POST['artwork']))
{
    
    echo "<script> alert('CHAL GAYAAAA') </script>";
    $artwork = $_POST['artwork'];
    $price = $_POST['price'];

    
    if (!isset($_SESSION['cart'])) 
    {
        $_SESSION['cart'] = array();
    }

    if (!isset($_SESSION['cart'][$artwork])) 
    {
        $_SESSION['cart'][$artwork] = array('price' => $price, 'quantity' => 1);
    } else 
    {

        $_SESSION['cart'][$artwork]['quantity']++;
    }

    
    $cart_count = array_sum(array_column($_SESSION['cart'], 'quantity'));
} 
else 
{
    $cart_count = 0;
}
?>
