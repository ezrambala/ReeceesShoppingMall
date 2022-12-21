<?php
    
    require ('db_conn.php');
 
    $itemid = $_POST['itemid'];
    $sql = "DELETE FROM `inventory` WHERE `item_id` = '$itemid' ";
    $conn->exec($sql);
    header("Location:./deleteitem.php");

    
    
?>