<div class="recent_posts1">
                <div class="heading1">
<<<<<<< HEAD


                    <h3>Bài viết gần đây</h3>

=======
                    <h3>Bài viết gần đây</h3>
>>>>>>> e140ed292690bbb6ebafa358c91d6ea50a7f4169
                </div>
                <div class="recent_posts_container1">
                    <?php foreach ($showPosts as $item): ?>
                    <a href="<?php echo $url.'post/'.$item['id']?>">
                        <div class="post_item1">
                            <div class="img1">
                                <img src="<?php echo $url."view/images/".$item['thumbnail']?>" alt="">
                            </div>
<<<<<<< HEAD

                            <p class="dm"><?php echo $item['category_name']?></p>

=======
                            <p class="dm"><?php echo $item['category_name']?></p>
>>>>>>> e140ed292690bbb6ebafa358c91d6ea50a7f4169
                            <div class="heading1">
                                <h4 class="title_post"><?php echo $item['title']?></h4>
                                <br>
                                <p class="des1"><?php echo $item['content']?></p>
                                <br>
                                <div class="like1"> <?php echo $item['likes']?> lượt thích</div>
                                <p class="date"><?php echo $item['date']?></p>
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
     
