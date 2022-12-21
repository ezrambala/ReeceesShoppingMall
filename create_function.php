<?php
    require ('db_conn.php');
    $itemname = $_POST['itemname'];
    $itembrand = $_POST['itembrand'];

    $kaipha_id = rand(0, 9); 
    $kaipha_id = $kaipha_id . rand(0, 9); 
    $kaipha_id = $kaipha_id . rand(0, 9); 
    $kaipha_id = $kaipha_id . rand(0, 9); 
    $kaipha_id = $kaipha_id . rand(0, 9); 
    $kaipha_id = $kaipha_id . rand(0, 9); 
    $kaipha_id = $kaipha_id . rand(0, 9); 
    $kaipha_id = $kaipha_id . rand(0, 9); 
    $kaipha_id = $kaipha_id . rand(0, 9); 
    $kaipha_id = $kaipha_id . rand(0, 9); 
    $itemid = $kaipha_id;
    
    $itemtype = $_POST['itemtype'];
    $quantity = $_POST['quantity'];
    $productiondate = $_POST['productiondate'];
    $expirydate = $_POST['expirydate'];
    $price = '$'.$_POST['price'];

    $query = "INSERT INTO inventory (`item_name`, `item_brand`, 
    `item_id`, `item_type`, `quantity`, `production_date`, `expiry_date`, `price`) 
    VALUES ('$itemname', '$itembrand', '$itemid', '$itemtype', '$quantity', '$productiondate', '$expirydate','$price')";
    $conn->exec($query);
    header("Location:./createitem.php");
    
?>