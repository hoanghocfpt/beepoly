<main>


<?php 
    $showPosts = getRecentPosts(6);
    if(isset($_GET['category'])){
        echo 'co category';
        $category = $_GET['category'];
        $showPosts = getPostsByCategory($category);
        include_once 'category.php';
        
    }else{
        echo "khong co category";
        $showCategories = getCategory();
        

    }
    
  
    
?>
 
 

 </main>