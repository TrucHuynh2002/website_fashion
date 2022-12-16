<div class="list-group border">
  <a href="#" class="list-group-item list-group-item-success animation"><h4><b class="text-animation">Top 10 sản phẩm yêu thích</b></h4></a>
  <?php
    include_once 'dao/liet-ke.php';
    $hh_array = hang_hoa_select_top10();
    foreach($hh_array as $hh){
  ?>
  <a href="?action=chi-tiet&ma_hh=<?php echo $hh['ma_hh'] ?>&ma_loai=<?php echo $hh['ma_loai'] ?>" class="list-group-item animation"><b class="text-animation"><img src="content/images/product/<?php echo $hh['hinh'] ?>"><?php echo $hh['ten_hh'] ?></b></a>
<?php } ?>
</div>