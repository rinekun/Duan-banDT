<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h3 class="alert alert-success">QUẢN LÝ KHÁCH HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-sm-6">
                <label>MÃ KHÁCH HÀNG</label>
                <input value="<?=$ma_kh?>" name="ma_kh" class="form-control" readonly>
            </div>

            <div class="form-group col-sm-6 ">
                <label>HỌ VÀ TÊN</label>
                <input value="<?=$ho_ten?>" name="ho_ten" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>MẬT KHẨU</label>
                <input value="<?=$mat_khau?>"  name="mat_khau" class="form-control">
            </div>

            <div class="form-group col-sm-6 ">
                <label>XÁC NHẬN MẬT KHẨU</label>
                <input  name="mat_khau2" value="<?=$mat_khau?>" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>ĐỊA CHỈ EMAIL</label>
                <input value="<?=$email?>" name="email" class="form-control">
            </div>

            <div class="form-group col-sm-6 ">
                <label>IMAGES</label>
                <input name="hinh" type="file" class="form-control">
                (<?=$hinh?>)
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>KÍCH HOẠT</label>
                <div class="form-control">
                <input type="radio" name="kich_hoat" value="1" <?=$kich_hoat == 1 ? "checked" : "" ?>>Kích hoạt
                <input type="radio" name="kich_hoat" value="0" <?=$kich_hoat == 0 ? "checked" : "" ?>>Chưa kích hoạt
                </div>
            </div>

            <div class="form-group col-sm-6 ">
                <label>VAI TRÒ</label>
                <div class="form-control">
                <input type="radio" name="vai_tro" value="1" <?=$vai_tro == 1 ? "checked" : "" ?>>Nhân viên
                <input type="radio" name="vai_tro" value="0" <?=$vai_tro == 0 ? "checked" : "" ?>>Khách hàng
                </div>
            </div>
        </div>
        <div>
            <button name="btn_update" class="btn btn-default">Cập nhật</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <a href="index.php" class="btn btn-default">Thêm mới</a>
            <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
        </div>
    </form>
</body>
</html>
