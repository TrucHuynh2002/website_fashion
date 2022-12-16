<h3 class="alert alert-danger">QUÊN MẬT KHẨU</h3>
<form action="?action=tai-khoan&page=quen-mk" method="post">

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Tên đăng nhập</b>
      <input type="text" name="ten_dn" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for=""></label>
      <b id="helpId" class="text-muted">Địa chỉ email</b>
      <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <button type="submit" class="btn btn-primary" name="btn-check">Tìm lại mật khẩu</button>
    
</form>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 