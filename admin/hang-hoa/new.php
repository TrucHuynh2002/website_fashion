<h3 class="alert alert-success">THÊM HÀNG HÓA</h3>
<form action="?action=hang-hoa&page=new" method="POST" enctype="multipart/form-data">
<div class="card-columns">
    <div class="">
        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Mã hàng hóa</b>
          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" readonly>        
        </div>
        
        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Giảm giá</b>
          <input type="text" name="giam_gia" id="" required="required" class="form-control" placeholder="" aria-describedby="helpId">        
        </div>
        
        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Hàng đặc biệt ?</b></br>             
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" required="required" name="dac_biet" value="1">Đặc biệt
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" required="required" name="dac_biet" value="0" checked>Bình thường
                </label>
            </div>
        </div>

    </div>

    <div class="">
        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Tên hàng hóa</b>
          <input type="text" name="ten_hang" id="" required="required" class="form-control" placeholder="" aria-describedby="helpId">        
        </div>

        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Hình ảnh</b>         
          <input type="file" class="form-control-file border" required="required" name="hinh">     
        </div>

        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Ngày nhập</b>
          <input type="date" name="ngay_nhap" id="" required="required" class="form-control" placeholder="" aria-describedby="helpId">        
        </div>
    </div>

    <div class="">
        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Đơn giá</b>
          <input type="text" name="don_gia" id="" required="required" class="form-control" placeholder="" aria-describedby="helpId">        
        </div>

        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Loại hàng</b>
          <select class="form-control" id="sel1" name="loai">
                <?php
                     foreach($data['loai'] as $key){
                       echo'
                        <option value="'.$key['ma_loai'].'">'.$key['ten_loai'].'</option>
                       ';
                     }
                ?>
            </select>                             
        </div>
    </div>

</div>

    <div class="form-group">
        <label for="comment"><b>Mô tả</b></label>
        <textarea class="form-control" rows="5" id="comment" name="mo_ta"></textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="btn-add">Thêm mới</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    <a href="index.php?action=hang-hoa&page=list" class="btn btn-primary">Danh Sách</a>

</form>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 