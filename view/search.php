<?php 
   
 
  

   $recentPosts=getRecentPosts(15);

?>
<br>
<br>
<br>
<br><br><br>

 <h2>Từ Khóa Bạn Vừa Tìm Kiếm:"a" </h2>
 <div class="recent_posts1">
                <div class="heading1">
                    <h3>Bài viết gần đây</h3>
                </div>
                <div class="recent_posts_container1">
                    <?php foreach ($recentPosts as $item): ?>
                    <a href="<?php echo $url.'post/'.$item['id']?>">
                        <div class="post_item1">
                            <div class="img1">
                                <img src="<?php echo $url."view/images/".$item['thumbnail']?>" alt="">
                            </div>
                            <div class="heading1">
                                <h4 class="title_post"><?php echo $item['title']?></h4>
                                <br>
                                <p class="des1"><?php echo $item['content']?></p>
                                <br>
                                <div class="like1"> <?php echo $item['likes']?> lượt thích</div>
                                <div class="more1">
                                    <p>xem thêm...</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach;?>
                   
                </div>
                <!-- <div class="btn_see_more1">
                    <a href="blog">Xem thêm</a>
                </div> -->
            </div>
       