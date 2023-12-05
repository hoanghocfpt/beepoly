    <?php 
    
        $resultCategories = getCategories();
        
    ?>
    <!-- Content -->
    <div class="flex-1 p-10 text-2xl font-bold">
        <div class="flex-1 p-10">
            <div class="flex gap-5 items-center relative">
                <h2 class="text-4xl font-bold mb-4">Categories</h2>
                <div class="cursor-pointer bg-gray-700 flex flex-wrap content-center justify-center absolute px-2 py-2 right-0 rounded-md">
                    <a href="./categories_add" class="text-sm text-white flex text-center">Thêm danh mục</a>
                </div>
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Posts</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edit</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php foreach($resultCategories as $category): ?>
                        <tr>
                            
                            <td class="px-6 py-4 text-sm whitespace-nowrap underline cursor-pointer">
                                <a href="<?php echo $url.'admin/categories_edit/'.$category['id'] ?>"><?php echo $category['name'] ?></a>
                            </td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">
                                <?php echo $category['id'] ?>
                            </td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">
                                <?php echo $category['post_count'] ?>
                            </td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">Good</td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>