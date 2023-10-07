<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <h3 class="alert alert-success">Tổng HỢP BÌNH LUẬN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <table class="table">
                <thead class="alert-success">
                    <tr>
                        <th>Hàng hóa</th>
                        <th>Số BL</th>
                        <th>Mới nhất </th>
                        <th>Cũ nhất</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item); 
                ?>
                    <tr>
                        <th><?=$ten_hh?></th>
                        <td><?=$so_luong?></td>
                        <td><?=$moi_nhat?></td>
                        <td><?=$cu_nhat?></td>
                        <td>
                            <a href="index.php?btn_chi_tiet&ma_hh=<?=$ma_hh?>" class="btn btn-default btn-sm">Xem chi tiết</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </form>
    </body>
</html>
