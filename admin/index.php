<?php
require_once '../global.php';
    check_login();
    include 'header.php';
    include 'menu.php';
        if(isset($_GET['action'])){
            $act = $_GET['action'];
            switch ($act) {
                //loai-hang
                case 'loai-hang':
                    include 'loai-hang/index.php';
                    break;
                //hang-hoa
                case 'hang-hoa':
                    include 'hang-hoa/index.php';
                    break;
                //khach-hang
                case 'khach-hang':
                    include 'khach-hang/index.php';
                    break;
                //binh-luan
                case 'binh-luan':
                    include 'binh-luan/index.php';
                    break;
                //thong-ke
                case 'thong-ke':
                    include 'thong-ke/index.php';
                    break;  
                default:
                    include 'trang-chinh/home.php';
                    break;
            }
        }
        else{
            include 'trang-chinh/home.php';
        }
        include 'footter.php';
?>