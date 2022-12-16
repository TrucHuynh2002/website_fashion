<h3 class="alert alert-success">TỔNG HỢP BÌNH LUẬN</h3>
<form action="#" method="post">
<table class="table">
        <thead>
            <tr class="table-success">
                <th>Hàng hóa</th>
                <th>Số BL</th>
                <th>Mới nhất</th>
                <th>Cũ nhất</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach( $data['bl_list'] as $key){
                    echo'
                    <tr>
                        <td scope="row">'.$key['ten_hh'].'</td>
                        <td>'.$key['so_luong'].'</td>
                        <td>'.$key['moi_nhat'].'</td>
                        <td>'.$key['cu_nhat'].'</td>
                        <td><a href="./index.php?action=binh-luan&page=detail&ma_hh='.$key['ma_hh'].'" class="btn btn-primary">Chi tiết</a></td>
                    </tr>
                    ';
                }
            ?>
            

        </tbody>
    </table>
        
</form>