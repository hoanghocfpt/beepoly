<?php 
   
    // Gọi dữ liệu ở đây
    $popular = getPopular();
   

    $recentPosts=getRecentPosts(15);

?>




        <div class="homepage">
            <div class="popular">
                <?php foreach($popular as $popularItem): ?>
                <div class="popular_container">
                    <img src="<?php echo  $url."view/images/".$popularItem['thumbnail']?>" alt="">
                    <div class="heading">
                        <a href="#">
                            
                            <div class="text">
                                <span class="label">Phổ biến</span>
                                <h2><?php echo $popularItem['title']?></h2>
                                <p><?php echo $popularItem['content']?></p>
                            </div>
                            
                            <div class="icon_link">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                                  
                            </div>
                        </a>
                    </div>

                </div>
                <?php endforeach;?>
            </div>


            <div class="recent_posts">
                <div class="heading">
                    <h3>Bài viết gần đây</h3>
                </div>
                <div class="recent_posts_container">
                    <?php foreach ($recentPosts as $item): ?>
                    <a href="<?php echo $url.'post/'.$item['id']?>">
                        <div class="post_item">
                            <div class="img">
                                <img src="<?php echo $url."view/images/".$item['thumbnail']?>" alt="">
                            </div>
                            <div class="heading">
                                <h4 class="title_post"><?php echo $item['title']?></h4>
                                <br>
                                <p class="des"><?php echo $item['content']?></p>
                                <br>
                                <div class="like"> <?php echo $item['likes']?> lượt thích</div>
                                
                                <div class="more">
                                    <p>xem thêm...</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach;?>
                   
                </div>
                <div class="btn_see_more">
                    <a href="blog">Xem thêm</a>
                </div>
            </div>
        </div>


       
  
