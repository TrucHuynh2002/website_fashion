<h3 class="alert alert-success">CHI TIẾT BÌNH LUẬN</h3>
<form action="#" method="post">
<table class="table">
        <thead>
            <tr class="table-success">
                <th>Nội dung</th>
                <th>Ngày BL</th>
                <th>Người BL</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['bl_list_chi_tiet'] as $key){
                echo '
                <tr>
                    <td scope="row">'.$key['noi_dung'].'</td>
                    <td>'.$key['ngay_bl'].'-20</td>
                    <td>'.$key['ma_kh'].'</td>
                    <td><a href="./index.php?action=binh-luan&page=delete&&ma_bl='.$key['ma_bl'].'&ma_hh='.$key['ma_hh'].'" class="btn btn-primary">Xóa</a></td>
                </tr>
                ';
            }
            ?>
        </tbody>
    </table>
        <a href="index.php?action=binh-luan" class="btn btn-primary">Quay lại</a>
</form>