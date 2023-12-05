<?php
include_once('connectDb.php');
function addCategory($name){
    $conn = connectDb();
    $sql = "INSERT INTO categories (name) VALUES (:name)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => $name]);
}


?>

