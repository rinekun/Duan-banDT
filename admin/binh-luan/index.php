<?php
require_once "../../global.php";
require_once "../../dao/binh-luan.php";
require_once "../../dao/thong-ke.php";

//--------------------------------//

check_login();

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 
    $ma_hh = isset($_GET['ma_hh']) ? $_GET['ma_hh'] : '';
    
    if (exist_param("btn_delete")) {
        try {
            
            binh_luan_delete($ma_bl);
            $items = binh_luan_select_all();
            $MESSAGE = "Xóa thành công";
        } catch (Exception $ecx) {
            $MESSAGE = "Xóa Thất bại";
        }   
        $items = binh_luan_select_by_hang_hoa($ma_hh);
        
        if(count($items) == 0){
            $items = thong_ke_binh_luan();
            $VIEW_NAME = "list.php";
        }else{
            $VIEW_NAME = "new.php";
        }
        
    }  
    elseif(exist_param("btn_chi_tiet")){
        $items = binh_luan_select_by_hang_hoa($ma_hh);
        if (count($items) == 0) {
            $items = thong_ke_binh_luan();
            extract($item);
            $VIEW_NAME = "list.php";
        } else {
            
            $VIEW_NAME = "new.php";
        }
    } else {
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
}


require_once "../layout.php";