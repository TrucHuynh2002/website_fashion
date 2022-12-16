<?php
  include_once 'dao/loai.php';
  $list = [];
  $list['list'] = get_loai();
?>
<div class="list-group border">
  <a href="#" class="list-group-item list-group-item-success animation"><h4><b class="text-animation">Danh mục</b></h4></a>
  <?php
    foreach($list['list'] as $key){
      echo'
      <a href="?action=hang-hoa&select_loai='.$key['ma_loai'].'" class="list-group-item animation"><b class="text-animation">'.$key['ten_loai'].'</b></a>
      ';
    }
  ?>
  <a href="?action=hang-hoa" class="list-group-item animation"><b class="text-animation">Tất cả</b></a>
  <div class="form-group list-group-item list-group-item-success animation">
    <form action="?action=hang-hoa&keyword" method="POST">
        <input type="text" class="form-control" name="keyword" id="" aria-describedby="helpId" placeholder="Nhập từ khóa tìm kiếm"> 
    </form>
      </div>
</div>