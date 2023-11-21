<?php 
    include_once 'connectDb.php';
    function getCategory(){
        $conn = connectDb();
        $sql = "SELECT * FROM categories ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getRecentPosts($quantity){
        $conn = connectDb();
        $sql = "SELECT * FROM posts ORDER BY id DESC
        LIMIT 6";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
?>