<?php
include_once('connectDb.php');
function getPosts() {
    $conn = connectDb();
    $sql = "SELECT posts.*, categories.name as category_name
    FROM posts
    INNER JOIN categories ON posts.id_category = categories.id ORDER BY posts.id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


?>