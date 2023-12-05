<?php
include_once('connectDb.php');
function getCategories() {
    $conn = connectDb();
    $sql = "SELECT categories.id, categories.name, COUNT(posts.id) as post_count
            FROM categories
            LEFT JOIN posts ON categories.id = posts.id_category
            GROUP BY categories.id, categories.name";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
