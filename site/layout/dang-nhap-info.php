<div class="list-group">
    <div class="animation">
        <div class="list-group-item animation">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for=""></label>
                        <h3 id="helpId" class="form-text text-muted text-animations text-center">Xin Chào: <?php echo $_SESSION['user'] ?></h3>   
                    </div>
                    <div class="form-group text-center">
                        <img style="width:40%;height:10%" src="content/images/user/<?php echo $_SESSION['hinh'] ?>">
                    </div>
                    </br></br>  
                    <a href="index.php?action=tai-khoan&page=cap-nhat" class="text-animation">Cập nhật tài khoản<a><br>
                    <a href="index.php?action=tai-khoan&page=doi-mk" class="text-animation">Đổi mât khẩu<a><br>
                    
                    <?php 
                        if($_SESSION['vai_tro'] == '1'){
                            echo '<a href="../Du_An_Mau/admin/" class="text-animation">Trang quản trị web<a><br>';
                        }
                    ?>
                    <a href="index.php?action=tai-khoan&page=dang-xuat" class="text-animation">Đăng xuất<a><br>
                </form>
        </div>
    </div>
</div>