<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/styles/style.css">
    <link rel="stylesheet" href="../view/styles/home.css">
    <link rel="stylesheet" href="../view/styles/blog.css">
    <link rel="stylesheet" href="../view/styles/post.css">

</head>
<body>
    <div class="container">
        <div class="search_popup">
            <div class="search_popup_container">
                <div class="search_popup_content">
                    <form action="">
                        <input type="text" name="textSearch" id="search" placeholder="Tìm bất cứ điều gì...">
                        <div class="btn_search">
                            <input type="submit" name="search" value="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                    </form>
                                          
                </div>
            </div>
            <div class="blur_bg"></div>
        </div>
        <nav class="navmain">
            <div class="navmain_container">
                <div class="logo">
                    <a href="#">
                        <img src="../view/images/logo.jpg" alt="">
                    </a>
                </div>
                <div class="nav_link">
                    <ul>
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="<?php echo $url?>/Controller.php?page=blog">Bài viết</a></li>
                        <li>
                            <span>
                                Các chủ đề 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                                  
                            </span>
                            <ul>
                                <li><a href="#">Chủ đề 1</a></li>
                                <li><a href="#">Chủ đề 2</a></li>
                                <li><a href="#">Chủ đề 3</a></li>
                                <li><a href="#">Chủ đề 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Về chúng tôi</a></li>
                    </ul>
                </div>
                <div class="right">
                    <div class="search_icon" id="search-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                          
                    </div>
                    <div class="login">
                        <a href="#">Đăng nhập</a>
                    </div>
                    <div class="bar_icon" id="bar-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                        </svg>
                          
                    </div>
                </div>
            </div>
        </nav>
        