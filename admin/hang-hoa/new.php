<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3 class="alert alert-success">QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label>Mã hàng hóa</label>
                    <input name="ma_hh" value="auto number" class="form-control" readonly>
                </div>
            
                <div class="form-group col-sm-4">
                    <label>Tên hàng hóa</label>
                    <input name="ten_hh" class="form-control">
                </div>

                 <div class="form-group col-sm-4">
                    <label>Đơn giá</label>
                    <input type="number" name="don_gia" class="form-control">
                </div>
          </div>

          <div class="row">
                <div class="form-group col-sm-4">
                    <label>Giảm giá</label>
                    <input name="giam_gia"  class="form-control">
                </div>
            
                <div class="form-group col-sm-4">
                    <label>Hình ảnh</label>
                    <input name="hinh" type="file" class="form-control">
                </div>

                 <div class="form-group col-sm-4">
                    <label>Loại hàng</label>
                    <select name="ma_loai" class="form-control">
                        <?php
                        $dsloai=loai_select_all();
                        foreach($dsloai as $loai)
                        {
                            echo"<option value='{$loai['ma_loai']}'>{$loai['ten_loai']}</option>";
                        }
                        ?>
                    </select>
                </div>
          </div>

          <div class="row">
                <div class="form-group col-sm-4">
                    <label>Hàng đặc biệt</label><br>
                    <input name="dac_biet" type="radio" value="1">Đặc biệt
                    <input name="dac_biet" type="radio" value="0" checked >Bình Thường
                </div>


                 <div class="form-group col-sm-4">
                    <label>Số lượt xem</label>
                    <input name="so_luot_xem" class="form-control" type="number">
                </div>
            
                <div class="form-group col-sm-4">
                    <label>Ngày nhập</label>
                    <input name="ngay_nhap" type="date" class="form-control">
                </div>
          </div>
          <div class="form-group">
                    <label>Mô tả</label>
                    <input name="mo_ta" class="form-control">
         </div>
            <div class="form-group">
                <button name="btn_insert" class="btn btn-default">Thêm mới</button>
                <button type="reset" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
            </div>
        </form>
        
    </body>
</html>
