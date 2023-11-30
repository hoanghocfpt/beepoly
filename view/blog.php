<?php 
    $showCategories = getCategory();
    print_r($showCategories);
    $showPosts = getRecentPosts(6);
    
?>
 
 <?php 
    $showCategories = getCategory();
    
    $showPosts = getRecentPosts(6);

?>
 
 <div class="text-blog">
        <h2 class="blog">Blog</h2>
        <div class="search">
           
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
