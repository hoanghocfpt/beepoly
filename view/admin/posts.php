    <!-- Content -->
    <div class="flex-1 p-10 text-2xl font-bold">
        <div id="formAddNewPost" class="w-screen h-screen bg-transparent fixed top-0 left-0 right-0 backdrop-filter backdrop-blur-sm z-10 hidden">
            <div class="w-full max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md ">
                <form>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="title">Nhập tiêu đề bài viết...</label>
                        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="title" type="text" placeholder="Tiêu đề">
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="categories">Chọn danh mục</label>
                        <select class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="categories">
                        <option value="ai">AI</option>
                        <option value="blockchain">Blockchain</option>
                        <option value="study">Study</option>
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
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="content">Nội dung</label>
                        <textarea class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="content" rows="4" placeholder="Nhập đoạn giới thiệu tổng quan của bài đề anh em hiểu được nội dung bài viết..."></textarea>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="author">Tên tác giả</label>
                        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="author" type="text" placeholder="Tên tác giả">
                    </div>
                    <div class="flex gap-4 mb-6">
                        <button id="formAddNewPost_Close" type="button" class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Đóng</button>
                        <button type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Đăng</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex-1 p-10">
            <div class="flex gap-5 items-center relative">
                <h2 class="text-4xl font-bold mb-4">Posts</h2>
                <div class="cursor-pointer bg-gray-700 flex flex-wrap content-center justify-center absolute px-2 py-2 right-0 rounded-md">
                    <span class="text-sm text-white flex text-center">Thêm bài viết</span>
                </div>
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 divide-y divide-gray-200">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-6 py-3">ID</th>
                            <th class="px-6 py-3">Title</th>
                            <th class="px-6 py-3">Content</th>
                            <th class="px-6 py-3">Thumbnail</th>
                            <th class="px-6 py-3">Likes</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Repeat this row for each post -->
                        <tr>
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4 underline cusor-pointer">Post Title</td>
                            <td class="px-6 py-4">Post Content</td>
                            <td class="px-6 py-4"><img class="h-10 w-10 rounded-full" src="thumbnail.jpg" alt="Thumbnail"></td>
                            <td class="px-6 py-4">10</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4 underline cusor-pointer">Post Title</td>
                            <td class="px-6 py-4">Post Content</td>
                            <td class="px-6 py-4"><img class="h-10 w-10 rounded-full" src="thumbnail.jpg" alt="Thumbnail"></td>
                            <td class="px-6 py-4">10</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4 underline cusor-pointer">Post Title</td>
                            <td class="px-6 py-4">Post Content</td>
                            <td class="px-6 py-4"><img class="h-10 w-10 rounded-full" src="thumbnail.jpg" alt="Thumbnail"></td>
                            <td class="px-6 py-4">10</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>