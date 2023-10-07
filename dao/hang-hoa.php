<?php
require_once 'pdo.php';
// thêm mới hàng hóa 
function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem,$ngay_nhap,$mo_ta){
    $sql = "INSERT INTO hang_hoa(ten_hh,don_gia,giam_gia,hinh, ma_loai,dac_biet,so_luot_xem,ngay_nhap,mo_ta) VALUES (?, ?, ?, ?, ?, ?, ?,?,?)";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh,$ma_loai ,$dac_biet==1, $so_luot_xem,$ngay_nhap,$mo_ta);
}
// Cập nhật một hàng hóa
function hang_hoa_update($ma_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$ma_loai,$dac_biet,$so_luot_xem,$ngay_nhap,$mo_ta){
    $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh,$ten_hh,$don_gia,$giam_gia,$hinh,$ma_loai,$dac_biet==1,$so_luot_xem,$ngay_nhap,$mo_ta);
}
// Xóa một hoặc nhiều hàng hóa
function hang_hoa_delete($ma_hh){
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";
    if(is_array($ma_hh)){
        foreach ($ma_hh as $ma) pdo_execute($sql, $ma); 
    } else pdo_execute($sql, $ma_hh);
}
// Truy vấn tất cả 
function hang_hoa_select_all()
{
    $sql="SELECT*FROM hang_hoa";
    return pdo_query($sql);
}
// Truy vấn theo mã
function hang_hoa_select_by_id($ma_hh)
{
    $sql = "SELECT*FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}
// Kiểm tra sự tồn tại hàng hóa
function hang_hoa_exist($ma_hh){
    $sql = "SELECT count(*) FROM khach_hang WHERE $ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}

//Truy vấn theo loại
function hang_hoa_select_by_loai($ma_loai)
{
    $sql ="SELECT*FROM hang_hoa WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}
// Tìm kiếm hàng hóa đặc biệt
function hang_hoa_select_dac_biet()
{
    $sql = "SELECT*FROM hang_hoa WHERE dac_biet=1";
    return pdo_query($sql);
}
//Tăng số lượt xem
function hang_hoa_tang_so_luot_xem($ma_hh)
{
    $sql="UPDATE hang_hoa SET so_luot_xem=so_luot_xem+1 WHERE ma_hh=?";
    pdo_execute($sql,$ma_hh);
}
// Tìm kiếm hàng hóa theo tên
function hang_hoa_select_keyword($keyword)
{
    $sql="SELECT*FROM hang_hoa JOIN loai ON loai.ma_loai=hang_hoa.ma_loai WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql,'%'.$keyword.'%','%'.$keyword.'%');
}
// Top 10
function hang_hoa_select_top10()
{
    $sql="SELECT*FROM hang_hoa WHERE so_luot_xem >0 ORDER BY so_luot_xem DESC LIMIT 0,10";
    return pdo_query($sql);
}
function hang_hoa_phan_trang()
{
    $sql="SELECT*FROM hang_hoa ORDER BY ma_hh LIMIT 0,10";
    pdo_execute($sql);
}
?>