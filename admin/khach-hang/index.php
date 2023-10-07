<?php
require_once "../../global.php";
require_once "../../dao/khach-hang.php";
//--------------------------------//

check_login();

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 

if(exist_param("btn_insert")){
    $hinh = save_file("hinh", "$IMAGE_DIR/products/");
    try {
        khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        unset($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        $MESSAGE = "Thêm mới thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "khach-hang/new.php";
}
else if(exist_param("btn_update")){
    $hinh = save_file("hinh", "$IMAGE_DIR/products/");
    try {
       khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        $MESSAGE = "Cập nhật thành công khách hàng!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật khách hàng thất bại!";
    }
    $VIEW_NAME = "khach-hang/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        khach_hang_delete($ma_kh);
        $items = khach_hang_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "khach-hang/list.php";
}
else if(exist_param("btn_edit")){
    $item = khach_hang_select_by_id($ma_kh); 
    extract($item); 
    $VIEW_NAME = "khach-hang/edit.php";
}
else if(exist_param("btn_list")){
    $items = khach_hang_select_all();
    $VIEW_NAME = "khach-hang/list.php";
}
else{
    $VIEW_NAME = "khach-hang/new.php";
}

require_once "../layout.php";