<div class="list-group border">
    <a href="#" class="list-group-item list-group-item-success animation"><h4><b class="text-animation">Hàng cùng loại</b></h4></a>
    <?php 
    if($hang != null){
        foreach($hang as $key){
            echo'
                <a href="?action=chi-tiet&ma_hh='.$key['ma_hh'].'&ma_loai='.$key['ma_loai'].'" class="list-group-item animation">'.$key['ten_hh'].'</a>
            ';
        }
    }
    else{
        echo '<a href="" class="list-group-item animation">Sản phẩm này chưa có thêm sản phẩm cùng loại</a>';
    }
        
    ?>
</div>