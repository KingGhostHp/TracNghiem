<?php
$name = $_POST[ 'name' ];
$email = $_POST[ 'email' ];
$subject = $_POST[ 'subject' ];
$phone = $_POST[ 'phone' ];
$id = $_POST[ 'sid' ];

include_once 'ketnoi.php';

//cau lenh sql de them du lieu
$updatesql = "UPDATE teachers SET name='$name', email='$email', subject='$subject', phone='$phone' WHERE id=$id";
//echo $updatesql;

//Kiểm tra trùng khóa chính
$sql1 = "SELECT * FROM teachers WHERE name='$name' AND email='$email' AND subject='$subject' AND phone='$phone'";
$malop = mysqli_query( $conn, $sql1 );
if ( mysqli_num_rows( $malop )>0 ) {
    echo "<script>alert('Trùng lặp thông tin!');history.back();</script>";
    return;
}
//kiểm tra rỗng
if ( $name == '' || $email == '' || $subject == '' || $phone == '' ) {
    echo "<script>alert('Không được điền giá trị rỗng');history.back();</script>";
    return;
}

//thuc thi cau lenh
if ( mysqli_query( $conn, $updatesql ) ) {
    //in thong bao thanh cong
    echo "<script>alert('Cập nhật thành công!');history.back();</script>";
    // trả về trang liệt kê
    header( 'Location: giaovien.php' );
}