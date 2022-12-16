<article class="article">
    <div class="main card-columns">
       <div class="main-left card-body">
        <div class="img-all">
            <div class="image">
                <img class="card-img-top" src="content/images/product/<?php echo $data['hinh']; ?>" width="100%" height="100%">
                </br>
                <h3 class="text-center"><?php echo $data['ten_hh']; ?></h3>
            </div>;
        </div>
       </div>
        <div class="main-right card-body">
            <div class="money text-center">
                <p><b>Giá: <?php echo $data['don_gia'] ?>vnđ</b></p>
            </div>
            <div class="detail">
                <div class="child-right text-center">
                    <p><?php echo $data['ma_loai'] ?></p>
                    <p><?php echo $data['ngay_nhap'] ?></p>
                    <p><?php echo $data['so_luot_xem'] ?></p>
                    <p><?php echo $data['ma_hh'] ?></p>
                </div>
                <div class="child-left">
                    <p><b>Loại hàng:</b></p>
                    <p><b>Ngày nhập:</b></p>
                    <p><b>Số lượt xem:</b></p>
                    <p><b>Mã hàng:</b></p>
                </div>
            </div>
            <div class="child-bottom">
                <div class="money">
                    <p><b>Giảm giá: <?php echo $data['giam_gia'] ?></b></p>
                </div>
                <div>
                <b style="font-size:18px;margin:5px;">Mô tả:</b>    
                <p style="font-size:18px;margin:5px;">
                <?php echo $data['mo_ta'] ?>
                </p>
                </div>
            </div>
        </div>
    </div>
</article>



