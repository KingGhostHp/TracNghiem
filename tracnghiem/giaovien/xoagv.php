<?php
//lấy dữ liệu id cần xoá
$id = $_GET[ 'sid' ];
// echo $id;
//kết nối
require_once 'ketnoi.php';
//câu lệnh sql
$xoa_sql = "DELETE FROM teachers WHERE id=$id";

mysqli_query( $conn, $xoa_sql );
//echo '<h1>Xoá thành công</h1>';
// trả về trang giáo viên
header( 'Location: giaovien.php' );