<?php 
    include_once 'connectDb.php';
    function getPostDetail($id){
        $conn = connectDb();
        $sql = "SELECT posts.*, categories.name as category_name
        FROM posts
        JOIN categories ON posts.id_category = categories.id
        WHERE posts.id = :post_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':post_id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function getRecentPosts($quantity){
        $conn = connectDb();
        $sql = "SELECT * FROM posts ORDER BY id DESC
        LIMIT 3";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
?>