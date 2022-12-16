<h3 class="alert alert-success">DANH SÁCH LOẠI HÀNG</h3>
    <form action="?action=loai-hang&page=edit" method="POST">
    <table class="table">
        <thead>
            <tr class="table-success">
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach($data['list-loai'] as $key){
                    echo '
                        <tr>
                            <td>
                                <div class="form-check">
                                </div>
                            </td>
                            <td scope="row">'.$key['ma_loai'].'</td>
                            <td>'.$key['ten_loai'].'</td>
                            <td><a href="./index.php?action=loai-hang&page=edit&ma_loai='.$key['ma_loai'].'" class="btn btn-primary">Sửa</a></td>
                            <td><a href="./index.php?action=loai-hang&page=edit&btn-deleta&ma_loai='.$key['ma_loai'].'&ten_loai='.$key['ten_loai'].'" class="btn btn-primary">Xóa</a></td>
                        </tr>
                    ';
                }
            ?>
               
        </tbody>
    </table>
    <?php
        if(isset($data['thong_bao'])){
            echo '<h3 class="alert alert-success">'.$data['thong_bao'].'</h3>';
        }
    ?> 
        <a href="index.php?action=loai-hang&page=new" class="btn btn-primary">Nhập thêm</a>
    </form>