<h3 class="alert alert-success">QUẢN LÝ KHÁCH HÀNG</h3>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 
<form action="?action=khach-hang&page=edit" method="POST">
    <div class="card">
        <div class="">
            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Mã khách hàng</b>
                <input type="text" name="ma_kh" id="" class="form-control" placeholder="" value="<?php echo $data['khach_list']['ma_kh'] ?>" aria-describedby="helpId" readonly>        
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Mật khẩu</b>
                <input type="password" name="mat_khau" id="" class="form-control" placeholder="" value="<?php echo $data['khach_list']['mat_khau'] ?>" aria-describedby="helpId">        
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Địa chỉ email</b>
                <input type="email" name="email" id="" class="form-control" placeholder="" value="<?php echo $data['khach_list']['email'] ?>" aria-describedby="helpId">        
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Kích hoạt ?</b><br>             
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="kich_hoat" value="0" <?php if($data['khach_list']['kich_hoat'] == 0){
                                                                                              echo "checked"; } ?>>Chưa kích hoạt
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="kich_hoat" value="1" <?php if($data['khach_list']['kich_hoat'] == 1){
                                                                                              echo "checked"; } ?>>Kích hoạt
                    </label>
                </div>
            </div>

        </div>

        <div class="">
            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Họ và tên</b>
                <input type="text" name="ho_ten" id="" class="form-control" placeholder="" value="<?php echo $data['khach_list']['ho_ten'] ?>" aria-describedby="helpId">        
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Xác nhận mật khẩu</b>
                <input type="text" name="mat_khau" id="" class="form-control" placeholder="" value="<?php echo $data['khach_list']['mat_khau'] ?>" aria-describedby="helpId">        
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Hình ảnh</b>         
                <input type="file" class="form-control-file border" value="<?php echo $data['khach_list']['hinh'] ?>" name="hinh">     
            </div>

            <div class="form-group">
                <label for=""></label>
                <b id="helpId" class="text-muted">Vai trò ?</b><br>             
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="vai_tro" value="0" <?php if($data['khach_list']['vai_tro'] == 0){
                                                                                              echo "checked"; } ?>>Khách hàng
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="vai_tro" value="1" <?php if($data['khach_list']['vai_tro'] == 1){
                                                                                              echo "checked"; } ?>>Nhân viên
                    </label>
                </div>
            </div>

        </div>

    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="btn-update">Sửa</button>
    <button type="submit" class="btn btn-primary" name="btn-delete">Xóa</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    <a href="index.php?action=khach-hang&page=list" class="btn btn-primary">Danh Sách</a>

</form>