<?php
require_once 'global.php';
include_once 'dao/liet-ke.php';
   if(isset($_GET['action'])){
        $act = $_GET['action'];
        switch ($act) {
            case 'gioi-thieu':
                include 'gioi-thieu.php';
                break;
            case 'lien-he':
                include 'lien-he.php';
                break;
            case 'hoi-dap':
                include 'hoi-dap.php';
                break;
            case 'gop-y':
                include 'gop-y.php';
                break;
            case 'tai-khoan':
                include 'site/tai-khoan/index.php';
                break;
            case 'chi-tiet':
                include 'site/hang-hoa/chi-tiet.php';
                break;
            case 'hang-hoa':
                include 'site/hang-hoa/liet-ke.php';
                break;
            default:
                include_once 'site/trang-chinh/trang-chu.php';
                break;
        }
    }
    else{
        
        include_once 'site/trang-chinh/trang-chu.php';
    }
?>