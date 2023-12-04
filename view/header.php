<?php
 
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeePoly</title>
    <link rel="stylesheet" href="<?php echo $url?>view/css/style.css">
    <link rel="stylesheet" href="<?php echo $url?>view/css/home.css">
    <link rel="stylesheet" href="<?php echo $url?>view/css/blog.css">
    <link rel="stylesheet" href="<?php echo $url?>view/css/about.css">
    <link rel="stylesheet" href="<?php echo $url?>view/css/search.css">
    <link rel="stylesheet" href="<?php echo $url?>view/css/dangnhap.css">
    <link rel="stylesheet" href="<?php echo $url?>view/js/blog.js">
    
 

</head>
<body>
    <div class="container">
        <div class="search_popup">
            <div class="search_popup_container">
                <div class="search_popup_content">
                    <form id="searchForm">
                        <input type="text" name="slug" id="textSearch" placeholder="Tìm bất cứ điều gì...">
                        <div class="btn_search">
                            <a href="#" id="linkSearch">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </a>
                        </div>
                    </form>
                                          
                </div>
            </div>
            <div class="blur_bg"></div>
        </div>
        <nav class="navmain">
            <div class="navmain_container">
                <div class="logo">
                    <a href="<?php echo $url?>home">
                        <img src="<?php echo $url?>view/images/logo.jpg" alt="">
                    </a>
                </div>
                <div class="nav_link">
                    <ul>
                        <li><a href="<?php echo $url?>home">Trang chủ</a></li>
                        <li><a href="<?php echo $url?>blog">Bài viết</a></li>
                        <li>
                            <span>
                                Các chủ đề 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                                  
                            </span>
                            <ul>
                                <li><a href="<?php echo $url?>blog/1">Website</a></li>
                                <li><a href="<?php echo $url?>blog/2">Seo</a></li>
                                <li><a href="<?php echo $url?>blog/4">Học Tập</a></li>
                                <li><a href="<?php echo $url?>blog/3">Lập Trình</a></li>
                                <li><a href="<?php echo $url?>blog/5">Blockchain</a></li>
                            </ul>
                        </li>
<<<<<<< HEAD
                        <li><a href="<?php echo $url?>about">Về chúng tôi</a></li>
=======
                        <li><a href="about">Về chúng tôi</a></li>
>>>>>>> bad86c1eafb0ff45ec893e8a75c7b071786d9bcc
                    </ul>
                </div>
                <div class="right">
                    <div class="search_icon" id="search-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                          
                    </div>
                    <div class="login">
<<<<<<< HEAD
                    <a href="<?php echo $url?>signin">Đăng kí</a>
                        <a href="<?php echo $url?>signup">Đăng nhập</a>
=======
                        <a href="<?php echo $url?>signin">Đăng nhập</a>
>>>>>>> bad86c1eafb0ff45ec893e8a75c7b071786d9bcc
                    </div>
                    <div class="bar_icon" id="bar-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                        </svg>
                          
                    </div>
                </div>
            </div>
        </nav>
        