    
<?php 
$id = 0;
$categories = getCategories();
if(isset($_GET['id']) && !is_bool($_GET['id'])){
    $id = $_GET['id'];
    $post = getPost($id);
}else{
    header('Location: ./categories');
}
$categories = getCategories();
if(isset($_POST['addPosts'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $id_category = $_POST['id_category'];
    // $thumbnail = $_POST['thumbnail'];

    $targetDirectory = "../view/images/"; // Thư mục lưu trữ file đã tải lên
    // $targetFile = $targetDirectory . basename($_FILES["myFile"]["name"]); // Đường dẫn đến file đã tải lên
    $targetFile = $targetDirectory . basename($_FILES["thumbnail"]["name"]);

    // if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetFile)) {
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $targetFile)) {
        echo "File đã được tải lên thành công.";
    } else {
        echo "Đã xảy ra lỗi khi tải lên file.";
    }
    $thumbnail = $_FILES["thumbnail"]["name"];  
    editPost($id,$title, $content, $id_category,$thumbnail);
    header('Location: '.$url.'./admin/posts');
    // echo $kq;
}

if(isset($_POST['deletePost'])){
    deletePost($id);
    header('Location: '.$url.'./admin/posts');
}
?>
<!-- Content -->
<div class="flex-1 p-10 text-2xl font-bold">
    
    <!-- <div id="formAddNewPost" class="w-screen h-screen bg-transparent fixed top-0 left-0 right-0 backdrop-filter backdrop-blur-sm z-10 overflow-auto">
        
    </div> -->
    <div class="flex-1 p-10">
        <div class="flex gap-5 items-center relative">
            <h2 class="text-4xl font-bold mb-4">Sửa bài viết</h2>
            <div class="cursor-pointer bg-gray-700 flex flex-wrap content-center justify-center absolute px-2 py-2 right-0 rounded-md">
                <a class="text-sm text-white flex text-center" href="./posts">Quay lại</a>
            </div>
        </div>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
        <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="title">Nhập tiêu đề mới...</label>
                    <input name="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="title" type="text" value="<?php echo $post['title'] ?>" placeholder="Tiêu đề">
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="categories">Chọn danh mục</label>
                    <select name="id_category" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="categories">
                        <?php foreach($categories as $category): ?>
                        <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                        <?php endforeach; ?>
                    <!-- Add more categories as needed -->
                    </select>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="image-upload">Thêm một ảnh bìa cho bài viết</label>
                    <div class="flex justify-center items-center w-full">
                    <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-32 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer hover:bg-gray-100">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-3 w-10 h-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M12 5v6m-4 4h8m-8 4h8m-8 4h.01" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500">Kéo và cắt hoặc <span class="text-blue-600 hover:underline">duyệt</span></p>
                        </div>
                        <input name="thumbnail" id="dropzone-file" type="file" class="hidden" />
                    </label>
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="content">Nội dung</label>
                    <textarea name="content" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="content" rows="4" placeholder="Nhập đoạn giới thiệu tổng quan của bài đề anh em hiểu được nội dung bài viết..."><?php echo $post['content'] ?></textarea>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="author">Tên tác giả</label>
                    <input name="id_user" value="Phạm Văn Hoàng" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="author" type="text" placeholder="Tên tác giả">
                </div>
                <div class="flex gap-4 mb-6">
                    <button name="deletePost" id="formAddNewPost_Close" type="submit" class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Xóa</button>
                    <button name="addPosts" type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Đăng</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>