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
            <li><a href="<?php echo $url?>admin/dashboard" class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 hover:text-gray-700 p-2 rounded-lg"><span>Dashboard</span></a></li>
            <li><a href="<?php echo $url?>admin/categories" class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 hover:text-gray-700 p-2 rounded-lg"><span>Categories</span></a></li>
            <li><a href="<?php echo $url?>admin/posts" class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 hover:text-gray-700 p-2 rounded-lg"><span>Posts</span></a></li>
            <li><a href="<?php echo $url?>admin/users" class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 hover:text-gray-700 p-2 rounded-lg"><span>Users</span></a></li>

        </ul>
    </div>