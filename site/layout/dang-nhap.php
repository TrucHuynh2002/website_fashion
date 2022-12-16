<?php 
    if(isset($_SESSION['user'])){
        require_once 'dang-nhap-info.php';
    }
    else{
        require_once 'dang-nhap-form.php';
    }
?>