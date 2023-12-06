<main>

<div class="menu-body" style="margin-top:100px; "> 
        <a menu-link active href="<?php echo $url ?>blog">Tất Cả</a>
        <a href="<?php echo $url ?>blog/1">Website</a>
        <a href="<?php echo $url ?>blog/2">SEO</a>
        <a href="<?php echo $url ?>blog/4">Học Tập</a>
        <a href="<?php echo $url ?>blog/3">Lập Trình</a>
        <a href="<?php echo $url ?>blog/5">BlockChain</a>
</div>
<?php 
    $showPosts = getRecentPosts(6);
    if(isset($_GET['category'])){
<<<<<<< HEAD
        
=======
        echo 'co category';
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
        $category = $_GET['category'];
        $showPosts = getPostsByCategory($category);
        include_once 'category.php';
        
    }else{
<<<<<<< HEAD
        
=======
        echo "khong co category";
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
        $showCategories = getCategory();
        $showPosts = getRecentPosts(6);
        
        include_once 'category.php';

    }
    
  
    
?>
 
 

 </main>

 