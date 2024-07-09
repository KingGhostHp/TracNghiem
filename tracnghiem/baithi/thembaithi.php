<?php
$ten = $_POST[ 'ten' ];
$mota = $_POST[ 'mota' ];

$conn = mysqli_connect( 'localhost', 'root', '', 'mydatabase' );

//cau lenh sql de them du lieu
$themsql = "INSERT INTO baithi (ten, mota) VALUES ('$ten', '$mota')";

//kiểm tra rỗng
if ( $ten == '' || $mota == '' ) {
    echo "<script>alert('Không được điền giá trị rỗng');history.back();</script>";
    return;
}
//Kiểm tra trùng khóa chính
$sql1 = "SELECT * FROM baithi WHERE ten='$ten' AND mota='$mota'";
$malop = mysqli_query( $conn, $sql1 );
if ( mysqli_num_rows( $malop )>0 ) {
    echo "<script>alert('Trùng lặp thông tin!');history.back();</script>";
    return;
}
//thuc thi cau lenh
if ( mysqli_query( $conn, $themsql ) ) {
    //in thong bao thanh cong
    echo "<script>alert('Thêm mới thành công!')</script>";
    // trả về trang liệt kê
    header( 'Location: baithi.php' );
}