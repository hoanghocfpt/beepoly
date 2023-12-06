<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $showPostDetail=getPostDetail($id);
<<<<<<< HEAD
        
    //     if($showPostDetail == null){
    //         include_once '404.php';
    //     }
        
    // }else{
    //     header('location: '.$url.'/?page=home');
=======
        if($showPostDetail == null){
            include_once '404.php';
        }
        
    }else{
        header('location: '.$url.'/?page=home');
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
    }
    
    
    $postItem=getRecentPosts(3);
 
 
?>
<<<<<<< HEAD
<br>
<br>
<br>
<br>
   <main>
      <section class="blog">
      <?php foreach($showPostDetail as $item): ?>
        <div class="blog__top"></div>
    
        <div class="contain">
          <figure class="blog__thumbnail">
            <img src="<?php echo  $url."view/images/".$item['thumbnail']?>" alt="" class="blog__img" />
          </figure>
          <div class="blog__content">
            <p class="blog__title"><?php echo $item['category_name']?></p>
            <h2 class="blog__heading">
            <?php echo $item['title']?>
            </h2>
            <div class="blog__info">
             
          
              <time class="blog__date"><?php echo $item['date']?></time>
            </div>
            <div class="blog__description">
              <p class="blog__text">
              <?php echo $item['content']?>
              </p>
              <p class="blog__text">
              <?php echo $item['content']?>
              </p>
            </div>
          </div>

     


          <div class="blog__social">
            <div class="blog__item">
              <a href="">
                <i class="fa fa-brands fa-facebook"></i>
                <span>Chia sẻ trên Facebook</span>
              </a>
            </div>
            <div class="blog__item">
              <a href="">
                <i class="fa fa-brands fa-twitter"></i>
                <span>Chia sẻ trên Twitter</span>
              </a>
            </div>
          </div>
          <div class="blog__wishlist">
            <div class="blog__wishlist-item">
              <i class="fa-regular fa-heart"></i>
              <span class="blog__wishlist-number"><?php echo $item['likes']?></span>
            </div>
            <div class="blog__wishlist-item">
              <i class="fa-regular fa-bookmark"></i>
              <span class="blog__wishlist-number">0</span>
            </div>
          </div>
          <?php endforeach;?>
        </div>

        <div class="recent_posts1">
                <div class="heading1">
                    <h3>Bài viết gần đây</h3>
                </div>
                <div class="recent_posts_container1">
                    <?php foreach ($postItem as $item): ?>
                    <a href="<?php echo $url.'post/'.$item['id']?>">
                        <div class="post_item1">
                            <div class="img1">
                                <img src="<?php echo $url."view/images/".$item['thumbnail']?>" alt="">
                            </div>
                            <p class="dm"><?php echo $item['category_name']?></p>
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
      </section>
    </main>
=======
     <div class="banner-user">
        <img src="<?php echo $url?>/view/images/banner-post.jpg" alt="">
        
    </div>
    </div>
</div>

<div class="avater">
    <img src="<?php echo $url?>/view/images/banner-user.jpg" alt="">
    <div class="name"><h3>Lê Tấn Vũ</h3></div>
</div>
    <div class="content">
        <div class="icon1">
            <p><i class="fa-regular fa-heart"></i> 9 </p>
            <p><i class="fa-regular fa-bookmark"></i> 0</p>
        </div>
    <p  class="WordPress">WordPress</p>
    <h1 class="maincontent">Cách tạo XML Sitemap và gửi lên Google Search Console</h1>
        <div class="user-product">
            <img src="images/user-product.jpg" alt="">
            <h6>Lê Tấn Vũ</h6>
            <h6>21/11/2023</h6>
        </div>
        <div class="content-p">
            <p>Hypic là một ứng dụng chỉnh sửa hình ảnh kết hợp các tính năng chỉnh sửa ảnh với công nghệ AI. Bạn có thể biến những bức ảnh của mình thành các phong cách nghệ thuật khác nhau. Hãy tải ứng dụng Hypic ngay để trải nghiệm!</p>
            <p>Bạn có thể tải xuống ứng dụng Hypic cho Android từ Cửa hàng Google Play chính thức của Hypic. Trên trang này, bạn có thể tìm thấy thông tin chi tiết, các tính năng của ứng dụng. Nhấp vào nút "Tải Hypic" bên dưới để tải xuống và cài đặt ứng dụng trên thiết bị Android của bạn.</p>
        </div>  
    </div>
    <div class="icon">
        <p><i class="fa-brands fa-facebook-f"></i>  Chia sẻ trên Facebook</p>
        <p><i class="fa-brands fa-twitter"></i> Chia sẻ trên Twitter</p>
    </div>
    <div class="text">
        <h2>Bài viết gần đây</h2>
    </div>
         <div class="product">

         <?php foreach($postItem as $postItem):?>
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
                    
                   
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
