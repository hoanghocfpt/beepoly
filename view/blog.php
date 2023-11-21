<?php 

    $showCategories=getCategory();
    print_r($showCategories);
    $showPosts=getRecentPosts(6);
    print_r($showPosts);
?>