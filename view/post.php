<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $showPostDetail=getPostDetail($id);
        if($showPostDetail == null){
            include_once '404.php';
        }
        print_r($showPostDetail);
    }else{
        header('location: '.$url.'/?page=home');
    }
    
    
    
    // $showRecentPosts=getRecentPosts(3);
    // print_r($showRecentPosts);
  
?>