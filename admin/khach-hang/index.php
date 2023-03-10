<?php
include_once '../dao/khach-hang.php';
$data = [];
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'new':
                if(isset($_POST['btn-add'])){
                    $ma_kh = $_POST['ma_kh'];
                    $ma_kh_check = get_ma_khach_hang($_POST['ma_kh']);
                    if($ma_kh != $ma_kh_check['ma_kh']){
                        if($_POST['mat_khau'] == $_POST['mat_khau1'] && $_POST['mat_khau'] > 8 && $_POST['mat_khau'] < 20){
                            $ma_kh = $_POST['ma_kh'];
                            $mat_khau = $_POST['mat_khau'];
                            $ho_ten = $_POST['ho_ten'];
                            $kich_hoat = $_POST['kich_hoat'];
                            // Lưu hình
                            $target_dir = "../content/images/user/";
                            $hinh = $_FILES['hinh']['name'];
                            save_file('hinh', $target_dir);
                            //
                            $vai_tro = $_POST['vai_tro'];
                            $email = $_POST['email'];
                            $conn = set_khach_hang($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $vai_tro, $email);
                            if($conn){
                                $data['thong_bao'] = "Thêm thành công";
                            }
                            else{
                                $data['thong_bao'] = "Thêm thất bại";
                            }
                        }
                        else{
                            $data['thong_bao'] = "Mật khẩu phải lớn hơn 8 và bé hơn 20 ký tự!";
                        } 
                    }
                    else{
                        $data['thong_bao'] = "Tên đăng nhập này đã được dùng!";
                    }
                    
                }
                include 'new.php';
                break;
                ////
            case 'list':
                $data['list_kh'] = get_khach_hang();
                include 'list.php';
                break; 
                ////
            case 'edit':
                if(isset($_POST['btn-update'])){
                    $ma_kh = $_POST['ma_kh'];
                    $mat_khau = $_POST['mat_khau'];
                    $ho_ten = $_POST['ho_ten'];
                    $kich_hoat = $_POST['kich_hoat'];
                    // Lưu hình
                    $target_dir = "../content/images/user/";
                    $hinh = $_FILES['hinh']['name'];
                    save_file('hinh', $target_dir);
                    //
                    $vai_tro = $_POST['vai_tro'];
                    $email = $_POST['email'];

                    $conn = update_khach_hang($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $vai_tro, $email);
                    if(!$conn){
                        $data['thong_bao'] = "Sửa thành công";
                    }
                    else{
                        $data['thong_bao'] = "Sửa thất bại";
                    }
                    $data['khach_list'] = get_ma_khach_hang($ma_kh);
                    include 'edit.php';
                }
                else if(isset($_POST['btn-delete'])){
                    $ma_kh = $_POST['ma_kh'];
                    $conn = delete_khach_hang($ma_kh);
                    if(!$conn){
                        $data['thong_bao'] = "Xóa thành công: ".$_POST['ho_ten'];
                    }
                    else{
                        $data['thong_bao'] = "Xóa thất bại: ".$_POST['ho_ten'];
                    }
                    $data['khach_list'] = get_ma_khach_hang($ma_kh);
                    include 'edit.php';
                }
                else if(isset($_GET['btn-deleta'])){
                    $ma_kh = $_GET['ma_kh'];
                    $conn = delete_khach_hang($ma_kh);
                    if(!$conn){
                        $data['thong_bao'] = "Xóa thành công: ".$_GET['ho_ten'];
                    }
                    else{
                        $data['thong_bao'] = "Xóa thất bại: ".$_GET['ho_ten'];
                    }
                    $data['list_kh'] = get_khach_hang();
                    include 'list.php';;
                }
                else{
                    $ma_kh = $_GET['ma_kh'];
                    $data['khach_list'] = get_ma_khach_hang($ma_kh);
                    include 'edit.php';
                }
                break; 
            default:
                include 'new.php';
                break;
        }
    }
    else{
        include 'new.php';
    }
?>