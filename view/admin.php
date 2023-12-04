<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex h-screen">
    <!-- Sidebar -->
    <div class="bg-white w-64 flex flex-col shadow-inner">
        <!-- Logo -->
        <div class="h-16 flex items-center justify-center">
            <span class="text-dark text-2xl">BeePoly</span>
        </div>
        <!-- Navigation -->
        <ul class="flex-1 px-4 py-2 space-y-2 overflow-y-auto ">
            <li><a href="#" class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 hover:text-gray-700 p-2 rounded-lg"><span>Dashboard</span></a></li>
            <li><a href="#" class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 hover:text-gray-700 p-2 rounded-lg"><span>Categories</span></a></li>
            <li><a href="#" class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 hover:text-gray-700 p-2 rounded-lg"><span>Posts</span></a></li>
            <li><a href="#" class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 hover:text-gray-700 p-2 rounded-lg"><span>Users</span></a></li>

        </ul>
    </div>
    <!-- Content -->
    <div class="flex-1 p-10 text-2xl font-bold">
        <div class="flex-1 p-10">
            <div class="flex gap-5 items-center relative">
                <h2 class="text-4xl font-bold mb-4">Categories</h2>
                <div class="cursor-pointer bg-gray-700 flex flex-wrap content-center justify-center absolute px-2 py-2 right-0 rounded-md">
                    <span class="text-sm text-white flex text-center">Thêm danh mục</span>
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
                        <tr>
                            
                            <td class="px-6 py-4 text-sm whitespace-nowrap underline cursor-pointer">Category 1</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">1</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">10</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">10</td>
                            
                        </tr>
                        <tr>
                            
                            <td class="px-6 py-4 text-sm whitespace-nowrap underline cursor-pointer">Category 1</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">1</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">10</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">10</td>
                            
                        </tr>
                        <tr>
                            
                            <td class="px-6 py-4 text-sm whitespace-nowrap underline cursor-pointer">Category 1</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">1</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">10</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">10</td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>