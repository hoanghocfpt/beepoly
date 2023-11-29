<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $showPostDetail=getPostDetail($id);
        if($showPostDetail == null){
            include_once '404.php';
        }
        
    }else{
        header('location: '.$url.'/?page=home');
    }
    
    
    $postItem=getRecentPosts(3);
 
 
?>
     <div class="banner-user">
        <img src="../view/images/banner-post.jpg" alt="">
        
    </div>
    </div>
</div>

<div class="avater">
    <img src="../view/images/banner-user.jpg" alt="">
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
                    
                   