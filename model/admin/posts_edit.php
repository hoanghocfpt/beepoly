<?php
include_once('connectDb.php');
function editPost($id, $title, $content, $id_category, $thumbnail){
    $conn = connectDb();
    $sql = "UPDATE posts SET title = :title, content = :content, id_category = :id_category, thumbnail = :thumbnail WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['title' => $title, 'content' => $content, 'id_category' => $id_category, 'thumbnail' => $thumbnail , 'id' => $id]);
    
}
function getPost($id){
    $conn = connectDb();
    $sql = "SELECT * FROM posts WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);
    $result = $stmt->fetch();
    return $result;
}

function getCategories() {
    $conn = connectDb();
    $sql = "SELECT * FROM categories";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function deletePost($id){
    $conn = connectDb();
    $sql = "DELETE FROM posts WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);
}
?>
