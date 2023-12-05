    
<?php 
$id = 0;
if(isset($_GET['id']) && !is_bool($_GET['id'])){
    $id = $_GET['id'];
    $category = getCategory($id);
}else{
    header('Location: ./categories');
}
if(isset($_POST['editCategory'])){
    $name = $_POST['name'];
    editCategory($id,$name);
    header('Location: '.$url.'./admin/categories');
}
if(isset($_POST['deleteCategory'])){
    deleteCategory($id);
    header('Location: '.$url.'./admin/categories');
}
?>
<!-- Content -->
<div class="flex-1 p-10 text-2xl font-bold">
    
    <!-- <div id="formAddNewPost" class="w-screen h-screen bg-transparent fixed top-0 left-0 right-0 backdrop-filter backdrop-blur-sm z-10 overflow-auto">
        
    </div> -->
    <div class="flex-1 p-10">
        <div class="flex gap-5 items-center relative">
            <h2 class="text-4xl font-bold mb-4">Sửa danh mục</h2>
            <div class="cursor-pointer bg-gray-700 flex flex-wrap content-center justify-center absolute px-2 py-2 right-0 rounded-md">
                <a class="text-sm text-white flex text-center" href="./categories">Quay lại</a>
            </div>
        </div>
        <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
        <form action="" method="post">
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="title">Tên danh mục mới</label>
                    <input name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value='<?php echo $category['name'] ?>' id="title" type="text" placeholder="Tên danh mục" />
                </div>
                
                <div class="flex gap-4 mb-6">
                    <button name="deleteCategory" type="submit" class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Xóa</button>
                    <button name="editCategory" type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>