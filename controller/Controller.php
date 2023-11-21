<?php 
    echo "MENU!";
    if(isset($_GET['page'])) {
        switch($_GET['page']) {
            case 'home':
                $page = 'home';
                break;
            case 'blog':
                $page = 'blog';
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
            default:
                $page = 'home';
                break;
        }
    } else {
        $page = 'home';
    }

    include_once("../model/".$page.".php");

    include_once("../view/".$page.".php");
    echo "Footer";
?>