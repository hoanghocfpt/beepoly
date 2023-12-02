
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

    function getPostByCategory($category){
        $conn = connectDb();
        $sql = "SELECT * FROM posts ORDER BY id_category = ".$category."";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getRecentPosts($quantity){
        $conn = connectDb();
        $sql = "SELECT posts.*, categories.name AS category_name
        FROM posts
        LEFT JOIN categories ON posts.id_category = categories.id
        ORDER BY posts.id DESC
        ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
