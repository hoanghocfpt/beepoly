<?php 
    echo "Welcome to the homepage!";
    // Gọi dữ liệu ở đây
    $popular = getPopular();
     print_r($popular);

    $recentPosts=getRecentPosts(9);
    print_r($recentPosts);
    
?>