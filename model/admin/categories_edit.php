<?php
include_once('connectDb.php');
function editCategory($id, $name){
    $conn = connectDb();
    $sql = "UPDATE categories SET name = :name WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => $name, 'id' => $id]);
}
function getCategory($id){
    $conn = connectDb();
    $sql = "SELECT * FROM categories WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);
    $category = $stmt->fetch();
    return $category;
}

function deleteCategory($id){
    $conn = connectDb();
    $sql = "DELETE FROM categories WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);
}
?>
