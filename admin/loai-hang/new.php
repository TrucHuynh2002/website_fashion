
<h3 class="alert alert-success">THÊM MỚI LOẠI HÀNG</h3>
<form action="?action=loai-hang&page=new" method="POST">
      <div class="form-group">
        <label for=""></label>
        <b id="helpId" class="form-text text-muted">Mã loại</b>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Không thể nhập" readonly>      
      </div>
      <div class="form-group">
        <label for=""></label>
        <b id="helpId" class="form-text text-muted">Tên loại</b>
        <input type="text" class="form-control" name="ten_loai" id="" required="required" aria-describedby="helpId" placeholder="">   
      </div>
      <button type="submit" class="btn btn-primary" name="btn-add">Thêm mới</button>
      <button type="reset" class="btn btn-primary">Nhập lại</button>
      <a href="./index.php?action=loai-hang&page=list" class="btn btn-primary">Danh Sách</a>    
</form>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?>  

