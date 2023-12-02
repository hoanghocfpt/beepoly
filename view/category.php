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
