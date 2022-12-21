<?php
    require ('db_conn.php');
    
    $itemid = $_POST['itemid'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE `inventory` SET  `quantity`='$quantity' WHERE `item_id`='$itemid' ";
      $stmt = $conn->prepare($sql);

    $stmt->execute();
    header("Location:./stockitem.php");
?>