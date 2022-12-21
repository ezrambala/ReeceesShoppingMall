<?php
    require ('db_conn.php');
    $itemname = $_POST['itemname'];
    $itembrand = $_POST['itembrand'];
    $itemid = $_POST['itemid'];
    $itemtype = $_POST['itemtype'];
    $quantity = $_POST['quantity'];
    $productiondate = $_POST['productiondate'];
    $expirydate = $_POST['expirydate'];
    $price = '$'.$_POST['price'];

    $sql = "UPDATE `inventory` SET `item_name`='$itemname',`item_brand`='$itembrand' ,
    `item_type`='$itemtype',
    `quantity`='$quantity',`production_date`='$productiondate',
    `expiry_date`='$expirydate', `price`='$price' WHERE `item_id`='$itemid' ";
      $stmt = $conn->prepare($sql);

    $stmt->execute();
    header("Location:./edititem.php");
?>