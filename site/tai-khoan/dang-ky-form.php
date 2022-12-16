<h3 class="alert alert-danger">ĐĂNG KÝ THÀNH VIÊN</h3>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 
<form action="?action=tai-khoan&page=dang-ky" method="POST" enctype="multipart/form-data">

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Tên đăng nhập</b>
      <input type="text" name="ma_kh" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Mật khẩu</b>
      <input type="password" name="mat_khau" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Xác nhận mật khẩu</b>
      <input type="password" name="mat_khau1" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Họ và tên</b>
      <input type="text" name="ho_ten" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Địa chỉ email</b>
      <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <input type="hidden" name="vai_tro" id="" value="0">
      <input type="hidden" name="kich_hoat" id="" value="0">
    </div>

    <div class="form-group">
        <label for=""></label>
        <b id="helpId" class="text-muted">Hình</b>         
        <input type="file" class="form-control-file border" name="hinh">     
    </div>  

    <button type="submit" class="btn btn-primary" name="btn-signup">Đăng ký</button>
    <a href="?action=tai-khoan&page=dang-ky&btn-login" class="btn btn-primary" >Đăng nhập</a>
</form>

