
<h3 class="alert alert-success">SỬA LOẠI HÀNG</h3>
<form action="?action=loai-hang&page=edit" method="POST">
      <div class="form-group">
        <label for=""></label>
        <b id="helpId" class="form-text text-muted">Mã loại</b>
        <input type="text" class="form-control" name="ma_loai" id="" value="<?php echo $data['sl_list']['ma_loai'] ?>" aria-describedby="helpId" placeholder="" readonly>      
      </div>
      <div class="form-group">
        <label for=""></label>
        <b id="helpId" class="form-text text-muted">Tên loại</b>
        <input type="text" class="form-control" name="ten_loai" id="" value="<?php echo $data['sl_list']['ten_loai'] ?>" aria-describedby="helpId" placeholder="">   
      </div>
      <button type="submit" class="btn btn-primary" name="btn-update">Sửa</button>
      <button type="submit" class="btn btn-primary" name="btn-delete">Xóa</button>
      <button type="reset" class="btn btn-primary">Nhập lại</button>
      <a href="./index.php?action=loai-hang&page=list" class="btn btn-primary">Danh Sách</a>    
</form>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?>  


