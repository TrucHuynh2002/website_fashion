<h3 class="alert alert-success">THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h3>
<form action="#" method="post">
    <table class="table">
        <thead>
            <tr class="alert alert-success">
                <th>Loại hàng</th>
                <th>Số lượng</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhất</th>
                <th>Giá trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($list as $key){
                    echo'
                    <tr>
                        <td scope="row">'.$key['ten_loai'].'</td>
                        <td>'.$key['so_luong'].'</td>
                        <td>'.$key['gia_max'].'</td>
                        <td>'.$key['gia_min'].'</td>
                        <td>'.$key['gia_avg'].'</td>
                    </tr>
                    ';
                }
            ?>
            
        </tbody>
    </table>
    <td><a href="index.php?action=thong-ke&page=chart" class="btn btn-primary">Xem biểu đồ</a></td>
</form>