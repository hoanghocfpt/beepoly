<?php
    if (isset($_GET['id'])){
        $id=$_GET['id'];
    }
    $showPostDetail=getPostDetail($id);
    
    print_r($showPostDetail);
    $showRecentPosts=getRecentPosts(3);
    print_r($showRecentPosts);
  
?>