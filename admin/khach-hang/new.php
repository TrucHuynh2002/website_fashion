<h3 class="alert alert-success">QUẢN LÝ KHÁCH HÀNG</h3>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 
<form action="?action=khach-hang&page=new" method="POST" enctype="multipart/form-data">
    <div class="card">
        <div class="">
            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Mã khách hàng</b>
                <input type="text" name="ma_kh" id="" required="required" class="form-control" placeholder="" aria-describedby="helpId">        
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Mật khẩu</b>
                <input type="password" name="mat_khau" id="" required="required" class="form-control" placeholder="" aria-describedby="helpId">        
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Địa chỉ email</b>
                <input type="email" name="email" id="" required="required" class="form-control" placeholder="" aria-describedby="helpId">        
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Kích hoạt ?</b><br>             
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" required="required" name="kich_hoat" value="0">Chưa kích hoạt
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" required="required" name="kich_hoat" value="1">Kích hoạt
                    </label>
                </div>
            </div>

        </div>

        <div class="">
            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Họ và tên</b>
                <input type="text" name="ho_ten" id="" required="required" class="form-control" placeholder="" aria-describedby="helpId">        
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Xác nhận mật khẩu</b>
                <input type="password" name="mat_khau1" id="" required="required" class="form-control" placeholder="" aria-describedby="helpId">        
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Hình ảnh</b>         
                <input type="file" class="form-control-file border" name="hinh">     
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Vai trò ?</b><br>             
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" required="required" name="vai_tro" value="0">Khách hàng</input>
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" required="required" name="vai_tro" value="1">Nhân viên</input>
                    </label>
                </div>
            </div>

        </div>

    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="btn-add">Thêm mới</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    <a href="index.php?action=khach-hang&page=list" class="btn btn-primary">Danh Sách</a>

</form>