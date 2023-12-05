
<?php
include_once('connectDb.php');
function getCategories() {
    $conn = connectDb();
    $sql = "SELECT * FROM categories";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function addPost($title, $content, $id_category, $thumbnail, $id_user){
    $conn = connectDb();
    $sql = "INSERT INTO posts (title, content, id_category, thumbnail, id_author) VALUES (:title, :content, :id_category, :thumbnail, :id_author)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['title' => $title, 'content' => $content, 'id_category' => $id_category, 'thumbnail' => $thumbnail, 'id_author' => $id_user]);
}


?>

