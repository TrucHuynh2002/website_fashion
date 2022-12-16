<div class="main-product">
    <div class="container-c">
    <?php
        foreach ($items['list_hang'] as $key){
            echo '
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