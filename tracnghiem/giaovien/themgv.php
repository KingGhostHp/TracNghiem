<?php
$name = $_POST[ 'name' ];
$email = $_POST[ 'email' ];
$subject = $_POST[ 'subject' ];
$phone = $_POST[ 'phone' ];

require_once 'ketnoi.php';

//cau lenh sql de them du lieu
$themsql = "INSERT INTO teachers (name, email, subject, phone) VALUES ('$name', '$email', '$subject', '$phone')";

//kiểm tra rỗng
if ( $name == '' || $email == '' || $subject == '' || $phone == '' ) {
    echo "<script>alert('Không được điền giá trị rỗng');history.back();</script>";
    return;
}
//Kiểm tra trùng khóa chính
$sql1 = "SELECT * FROM teachers WHERE name='$name' AND email='$email' AND subject='$subject' AND phone='$phone'";
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
    header( 'Location: giaovien.php' );
}
