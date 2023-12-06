<?php 
  
   
 
    if(isset($_GET['page'])) {
        switch($_GET['page']) {
            case 'home':
                $page = 'home';
                break;
            case 'blog':
                $page = 'blog';
                break;
            case 'admin':
                $page = 'admin';
                break;
            case 'user':
                $page = 'user';
                break;
            case 'post':
                $page='post';
                break;
            case 'signin':
                $page = 'signin';
                break;
            case 'signup':
                $page = 'signup';
                break;
            case 'saved':
                $page = 'saved';
                break;
            case 'about':
                $page='about';
                break;
            case 'search':
                $page='search';
                break;
            default:
                $page = 'home';
                break;
        }
    } else {
        $page = 'home';
    }
    // $_SESSION['user']['role'] = 'admin';
    if($page === 'admin'){
        // if(isset($_SESSION['user'])){
        //     if($_SESSION['user']['role'] === 'admin'){
        //         $page = 'admin';
        //     }else{
        //         header("Location: ./home");
        //     }
        // }else{
        //     header("Location: ./home");
        // }
        if(isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act) {
                case 'dashboard':
                    $page = 'dashboard';
                    break;
                case 'categories':
                    $page = 'categories';
                    break;
<<<<<<< HEAD
                case 'posts':
                    $page = 'posts';
                    break;
=======
                case 'categories_add':
                    $page = 'categories_add';
                    break;
                case 'categories_edit':
                    $page = 'categories_edit';
                    break;
                case 'posts':
                    $page = 'posts';
                    break;
                case 'posts_add':
                    $page = 'posts_add';
                    break;
                case 'posts_edit':
                    $page = 'posts_edit';
                    break;
>>>>>>> ed35eaea4b18854329e0834acefa4d0b0c90ecd6
                case 'users':
                    $page = 'users';
                    break;
                
                default:
                    $page = 'dashboard';
                    break;
            }
        }else{
            $page = 'dashboard';
        }
        include_once '../config.php';
        include_once("../model/admin/".$page.".php");
        include_once '../view/admin/layout.php';
        include_once("../view/admin/".$page.".php");
    }else{
        include_once '../config.php';
        include_once '../view/header.php';
        
        include_once("../model/".$page.".php");
    
        include_once("../view/".$page.".php");
       
        include_once '../view/footer.php';
    }
    
?>
