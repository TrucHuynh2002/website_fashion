<h3 class="alert alert-success">QUẢN LÝ KHÁCH HÀNG</h3>
<form action="#" method="post">
<table class="table">
        <thead>
            <tr class="table-success">
                <th>Mã khách hàng</th>
                <th>Họ và tên</th>
                <th>Địa chỉ Email</th>
                <th>Hình ảnh</th>
                <th>Vai trò ?</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($data['list_kh'] as $key){
                    if($key['vai_tro'] == '0'){
                        $key['vai_tro_1'] = "Khách hàng";
                    }
                    else{
                        $key['vai_tro_1'] = "Nhân viên";
                    }
                    echo'
                    <tr>
                        <td scope="row">'.$key['ma_kh'].'</td>
                        <td>'.$key['ho_ten'].'</td>
                        <td>'.$key['email'].'</td>
                        <td><img src="../content/images/user/'.$key['hinh'].'" style="width:50px;height:50px"></td>
                        <td>'.$key['vai_tro_1'].'</td>
                        
                        <td><a href="./index.php?action=khach-hang&page=edit&ma_kh='.$key['ma_kh'].'" type="submit" class="btn btn-primary">Sửa</a></td>
                        <td><a href="./index.php?action=khach-hang&page=edit&btn-deleta&ma_kh='.$key['ma_kh'].'&ho_ten='.$key['ho_ten'].'" class="btn btn-primary">Xóa</button></td>
                    </tr>
                    ';
                }
            ?>
            
        </tbody>
    </table>
        <a href="index.php?action=khach-hang" class="btn btn-primary">Nhập thêm</a>
</form>
<?php
  if(isset($data['thong_bao'])){
    echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
  }
?> 