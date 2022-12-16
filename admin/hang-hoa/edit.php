<h3 class="alert alert-success">CHỈNH SỬA HÀNG HÓA</h3>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 
<form action="?action=hang-hoa&page=edit" method="POST" enctype="multipart/form-data">
<div class="card-columns">
    <div class="card">
        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Mã hàng hóa</b>
          <input type="text" name="ma_hh" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $data['hang_list']['ma_hh']?>" readonly>        
        </div>
        
        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Giảm giá</b>
          <input type="text" name="giam_gia" id="" class="form-control" placeholder="" value="<?php echo $data['hang_list']['giam_gia']?>" aria-describedby="helpId">        
        </div>
        
        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Hàng đặc biệt ?</b></br>             
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="dac_biet" value="1" <?php if($data['hang_list']['dac_biet'] == 1){
                                                                                              echo "checked"; } ?>>Đặc biệt
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="dac_biet" value="0" <?php if($data['hang_list']['dac_biet'] == 0){
                                                                                              echo "checked"; } ?>>Bình thường
                </label>
            </div>
        </div>

    </div>

    <div class="card">
        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Tên hàng hóa</b>
          <input type="text" name="ten_hang" id="" class="form-control" placeholder="" value="<?php echo $data['hang_list']['ten_hh']?>" aria-describedby="helpId">        
        </div>

        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Hình ảnh</b>         
          <input type="file" class="form-control-file border" name="hinh">     
        </div>

        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Ngày nhập</b>
          <input type="date" name="ngay_nhap" id="" class="form-control" placeholder="" value="<?php echo $data['hang_list']['ngay_nhap']?>" aria-describedby="helpId">        
        </div>
    </div>

    <div class="card">
        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Đơn giá</b>
          <input type="text" name="don_gia1" id="" class="form-control" placeholder="" value="<?php echo $data['hang_list']['don_gia']?>" aria-describedby="helpId">        
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

        <div class="form-group">
          <label for=""></label>
          <b id="helpId" class="text-muted">Số lượt xem</b>
          <input type="text" name="don_gia" id="" class="form-control" placeholder="" value="<?php echo $data['hang_list']['so_luot_xem']?>" aria-describedby="helpId" readonly>        
        </div>
    </div>

</div>

    <div class="form-group">
        <label for="comment"><b>Mô tả</b></label>
        <textarea class="form-control" rows="5" id="comment" name="mo_ta"><?php echo $data['hang_list']['mo_ta']?></textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="btn-update">Sửa</button>
    <button type="submit" class="btn btn-primary" name="btn-delete">Xóa</button>
    <button type="reset" class="btn btn-primary">Nhập lại</button>
    <a href="index.php?action=hang-hoa&page=list" class="btn btn-primary">Danh Sách</a>

</form>
