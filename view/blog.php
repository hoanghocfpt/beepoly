<main>

<div class="menu-body" style="margin-top:100px; "> 
        <a href="<?php echo $url ?>blog">Tất Cả</a>
        <a href="<?php echo $url ?>blog/1">Website</a>
        <a href="<?php echo $url ?>blog/2">SEO</a>
        <a href="<?php echo $url ?>blog/4">Học Tập</a>
        <a href="<?php echo $url ?>blog/3">Lập Trình</a>
        <a href="<?php echo $url ?>blog/5">BlockChain</a>
</div>
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
        $showPosts = getRecentPosts(6);
        
        include_once 'category.php';

    }
    
  
    
?>
 
 

 </main>