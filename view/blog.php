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
<<<<<<< Updated upstream
    $showPosts = getRecentPosts(6);
    if(isset($_GET['category'])){
        
        $category = $_GET['category'];
        $showPosts = getPostsByCategory($category);
        include_once 'category.php';
        
    }else{
     
        $showCategories = getCategory();
        $showPosts = getRecentPosts(6);
        
        include_once 'category.php';

    }
    
  
    
?>
 
 

 </main>

 
=======
    $showCategories = getCategory();
    
    $showPosts = getRecentPosts(6);

?>
 
 <div class="text-blog">
        <h2 class="blog">Blog</h2>
        <div class="search">
            <input class="input-blog" type="text" placeholder="TÌM KIẾM">
            <button class="submit"><span class="icon_search"><i class="fa-solid fa-magnifying-glass"></i></span></button>
       </div>
    </div>
    <div class="menu-body">
        <a class="khung" herf="">Tất cả</a>
        <a class="khung" herf="">Website</a>
        <a class="khung" herf="">SEO</a>
        <a class="khung" herf="">Học tập</a>
        <a class="khung" herf="">Lập trình</a>
        <a class="khung" herf="">Blockchain</a>
       </div>
<br><br><br><br>
     <div class="product">
        <?php foreach($showPosts as $postItem):?>
        <div class="product1">
        <img class="img" src="<?php echo $postItem['thumbnail']?>" alt="" width="400px">
        <p><?php echo $postItem['category_name']?></p>
        <h4><?php echo $postItem['title']?></h4>
       <div class="user-product">
        <img src="<?php echo $postItem['thumbnail']?>" alt="" width="50px">
        <h6><?php echo $postItem['id_author']?></h6>
        <h6><?php echo $postItem['date']?></h6>
       </div>
        </div>
             <?php endforeach;?>       
     </div>
     <div class="xemthem">
        <a>Xem thêm</a>
     </div>
     <br>
>>>>>>> Stashed changes
