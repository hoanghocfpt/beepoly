<?php

    include_once 'connectDb.php';

    function getPopular(){
        $conn = connectDb();
        $sql = "SELECT * FROM posts ORDER BY likes DESC
        LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getRecentPosts($quantity){
        $conn = connectDb();
        $sql = "SELECT * FROM posts ORDER BY id DESC
        LIMIT 9";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
   
?>