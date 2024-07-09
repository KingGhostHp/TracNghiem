<?php

$ten = $_POST[ 'ten' ];
$mota = $_POST[ 'mota' ];
$id = $_POST[ 'id' ];

$conn = mysqli_connect( 'localhost', 'root', '', 'mydatabase' );

//cau lenh sql de them du lieu
$updatesql = "UPDATE baithi SET ten='$ten', mota='$mota' WHERE id=$id";
//echo $updatesql;

//Kiểm tra trùng khóa chính
$sql1 = "SELECT * FROM baithi WHERE ten='$ten' AND mota='$mota'";
$malop = mysqli_query( $conn, $sql1 );
if ( mysqli_num_rows( $malop )>0 ) {
    echo "<script>alert('Trùng lặp thông tin!');history.back();</script>";
    return;
}
//kiểm tra rỗng
if ( $ten == '' || $mota == '' ) {
    echo "<script>alert('Không được điền giá trị rỗng');history.back();</script>";
    return;
}
//thuc thi cau lenh
if ( mysqli_query( $conn, $updatesql ) ) {
    //in thong bao thanh cong
    echo "<script>alert('Cập nhật thành công!');history.back();</script>";
    // trả về trang liệt kê
    header( 'Location: baithi.php' );
} else {
    echo "<script>alert('Cập nhật không thành công!');history.back();</script>";
    header( 'location: editbaithi.php' );
}