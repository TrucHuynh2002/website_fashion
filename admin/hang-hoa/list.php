
<h3 class="alert alert-success">Danh SÁCH HÀNG HÓA</h3>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 
<form action="#" method="post">
<table class="table">
        <thead>
            <tr class="table-success">
                <th>Mã hàng</th>
                <th>Tên hàng hóa</th>
                <th>Hình ảnh</th>
                <th>Đơn giá</th>
                <th>Giảm giá</th>
                <th>Lượt xem</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($data['list-hang'] as $key){
                    echo'
                        <tr>
                            <td scope="row">'.$key['ma_hh'].'</td>
                            <td>'.$key['ten_hh'].'</td>
                            <td><img src="../content/images/product/'.$key['hinh'].'" style="width:50px;height:50px"></td>
                            <td>'.$key['don_gia'].'</td>
                            <td>'.$key['giam_gia'].'</td>
                            <td>'.$key['so_luot_xem'].'</td>
                            <td><a href="./index.php?action=hang-hoa&page=edit&ma_hh='.$key['ma_hh'].'"  class="btn btn-primary">Sửa</a></td>
                            <td><a href="./index.php?action=hang-hoa&page=edit&btn-deleta&ma_hh='.$key['ma_hh'].'&ten_hh='.$key['ten_hh'].'" class="btn btn-primary">Xóa</a></td>
                        </tr>';
                }
            ?>
        </tbody>
    </table>    
        <a href="index.php?action=hang-hoa" class="btn btn-primary">Nhập thêm</a>
</form>
