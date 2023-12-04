<?php
include_once 'connectDb.php';
function showProductsByCategory($quantity){
    $conn = connectDb();
    $sql = "SELECT * FROM posts WHERE id_category = ".$quantity."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
?>