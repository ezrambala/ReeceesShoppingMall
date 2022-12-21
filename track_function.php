<?php
    require ('db_conn.php');
    $itemid = $_POST['itemid'];   
    $sql = "SELECT `quantity`FROM `inventory` WHERE `item_id`='$itemid' ";
    $sql_run = $conn->query($sql);
?>