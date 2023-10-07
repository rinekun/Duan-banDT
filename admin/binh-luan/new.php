<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
    </head>
    <body>
        <h3 class="alert alert-success">Chi Tiết BÌNH LUẬN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <table class="table">
                <thead class="alert-success">
                    <tr>
                        <th>Nội dung</th>
                        <th>Ngày BL</th>
                        <th>Người BL</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item); 
                ?>
                    <tr>
                        <th><?=$noi_dung?></th>
                        <td><?=$ngay_bl?></td>
                        <td><?=$ma_kh?></td>
                        <td></td>
                        <td>
                            <a href="index.php?btn_delete&ma_bl=<?=$ma_bl?>" class="btn btn-default btn-sm">Xóa</a>
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
