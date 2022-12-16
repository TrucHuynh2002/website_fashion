<div class="slide">
    <div class="w3-container">
        <div class="w3-content w3-display-container" style="max-width:900px">
            <div class="slider-wrap">
                <div class="slider-main">
                    <?php
                        $dac_biet = get_hang_hoa_dac_biet();
                        foreach($dac_biet as $key){
                            echo '
                            <div class="slider-item" style="width:800px;height:300px;">
                                <a class="product" href="?action=chi-tiet&ma_hh='.$key['ma_hh'].'&ma_loai='.$key['ma_loai'].'">
                                    <div class="slider-item__img">
                                        <img src="content/images/product/'.$key['hinh'].'" class="" style="max-width:300px" alt="">
                                            '.$key['ten_hh'].'
                                            '.$key['don_gia'].'
                                    </div>
                                </a>
                            </div>
                            ';
                        }
                    ?>
                </div>

                <div class="btn btn-slider btn-prev">
                    <i class=""><ion-icon name="arrow-dropleft"></ion-icon></i>
                </div>
                <div class="btn btn-slider btn-next">
                    <i class=""><ion-icon name="arrow-dropright"></ion-icon></i>
                </div>
                <div class="dot-slider">
                    <ul class="dot-list">
                        <li data-index="0" class="dot-item active" style="opacity:0;"></li>
                        <?php
                        $dac_biet = get_hang_hoa_dac_biet();
                        $data_index = 0;
                        foreach($dac_biet as $key){
                            
                            echo '
                            <li data-index="'.$data_index.'" class="dot-item "></li>
                            ';
                            $data_index = $data_index + 1;
                        }
                    ?>
                    </ul>
                </div>
            </div>                 
        </div>  
    </div>
</div>
<div>
    <h1><b>Sản Phẩm</b></h1>
</div>
<div class="main-product">
    <div class="container-c">
        <?php
        $top9 = hang_hoa_select_top9();
            foreach($top9 as $key){
                echo'
                <div class="box">
                    <h3 class="name"><b>'.$key['ten_hh'].'</b></h3>
                    <a href="?action=chi-tiet&ma_hh='.$key['ma_hh'].'&ma_loai='.$key['ma_loai'].'" class="buy">Mua Ngay</a>
                    <a href="?action=chi-tiet&ma_hh='.$key['ma_hh'].'&ma_loai='.$key['ma_loai'].'" class="buy1">'.$key['don_gia'].'</a>
                    <div class="circle"></div>
                        <img src="content/images/product/'.$key['hinh'].'" class="product">
                </div>
                ';
            }
        ?>
        
    </div>
</div>
<script src="content/js/vanilla-tilt.min.js"></script>
        <script>
             VanillaTilt.init(document.querySelectorAll(".box"),{
                 max: 25,
                 speed: 400
             });
        </script>
                    

