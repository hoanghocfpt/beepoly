
<?php 
  $showCategories = getCategory();
    
  $showPosts = getRecentPosts(6);
    if(isset($_GET['category']) && $_GET['category'] == !null){
        $category_id = $_GET['category'];
        $result = getPostByCategory($category_id);
        include_once 'category.php';
    }else{
        echo "lqfwqefwqefqewfqwefqwefqwefqwefqwecfqeowfweqqfooeqwjfcoiwefqwehicfqwefhwqfcqwecqfwqefc";
    }
    
  
    
?>
 


 
    <div class="menu-body" style="margin-top:100px; "> 
        <a href="">Tất Cả</a>
        <a href="">Website</a>
        <a href="">SEO</a>
        <a href="Controller.php?page=AI">Học Tập</a>
        <a href="">Lập Trình</a>
        <a href="">BlockChain</a>
       </div>
<br><br><br><br>
     <div class="product">
        <?php foreach($showPosts as $postItem):?>
        <div class="product1">
        <img src="<?php echo $url.'/view/images/'.$postItem['thumbnail']?>" alt="">
        <p><?php echo $postItem['category_name']?></p>
        <h4><?php echo $postItem['title']?></h4>
       <div class="user-product">
       <img src="<?php echo $url.'/view/images/'.$postItem['thumbnail']?>" alt="">
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
