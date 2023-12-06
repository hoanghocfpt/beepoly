<?php 
  $recentPosts=getRecentPosts(3);
    // Nơi xử lý form tìm kiếm
    // if(isset($_GET['search'])){
    //     if(isset($_GET['textSearch'])){
    //         $slug = $_GET['textSearch'];
    //         $ketquatimkiem = searchPosts($slug);
    //     } else {
    //         $result = 'no result';
    //     }
    // } else {
    //     $result = 'no result';
    // }
    if(isset($_GET['slug'])&& $_GET['slug'] != null){
        $slug = $_GET['slug'];
        
        
        $resultPosts = searchPosts($slug);
    }
       
?>
<br>
<br>
<br>
<br><br><br>

<<<<<<< HEAD
 <h5>Từ Khóa Bạn Vừa Tìm Kiếm:"<?= $_GET['slug']?>" </h5>
 <br>
 <br>
<div class="resultPosts1">
=======
 <h2>Từ Khóa Bạn Vừa Tìm Kiếm:"<?= $_GET['slug']?>" </h2>
<div class="resultPosts">
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
    <div class="recent_posts_container1">
        <?php foreach ($resultPosts as $postItem): ?>
        <a href="<?php echo $url.'post/'.$postItem['id']?>">
            <div class="post_item1">
                <div class="img1">
                    <img src="<?php echo $url."view/images/".$postItem['thumbnail']?>" alt="">
                </div>
                <div class="heading1">
                    <h4 class="title_post"><?php echo $postItem['title']?></h4>
                    <br>
                    <p class="des1"><?php echo $postItem['content']?></p>
                    <br>
                    <div class="like1"> <?php echo $postItem['likes']?> lượt thích</div>
                    <div class="more1">
                        <p>xem thêm...</p>
                    </div>
                </div>
            </div>
        </a>
        <?php endforeach;?>
        
    </div>
</div> 
 <div class="recent_posts1">
                <div class="heading1">
<<<<<<< HEAD
                    <h3>Bài Viết Tương Tự</h3>
=======
                    <h3>Bài viết gần đây</h3>
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
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
       