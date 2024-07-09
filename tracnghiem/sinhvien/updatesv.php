<?php
$full_name = $_POST[ 'full_name' ];
$email = $_POST[ 'email' ];
$phone = $_POST[ 'phone' ];
$address = $_POST[ 'address' ];
$gender = $_POST[ 'gender' ];
$id = $_POST[ 'sid' ];

include_once 'ketnoi.php';

//cau lenh sql de them du lieu
$updatesql = "UPDATE students SET full_name='$full_name', email='$email', phone='$phone', address='$address', gender='$gender' WHERE id=$id";
//echo $updatesql;

//Kiểm tra trùng khóa chính
$sql1 = "SELECT * FROM students WHERE full_name='$full_name' AND email='$email' AND phone='$phone' AND address='$address' AND gender='$gender'";
$malop = mysqli_query( $conn, $sql1 );
if ( mysqli_num_rows( $malop )>0 ) {
    echo "<script>alert('Trùng lặp thông tin!');history.back();</script>";
    return;
}
//kiểm tra rỗng
if ( $full_name == '' || $email == '' || $phone == '' || $address == '' || $gender == '' ) {
    echo "<script>alert('Không được điền giá trị rỗng');history.back();</script>";
    return;
}

//thuc thi cau lenh
if ( mysqli_query( $conn, $updatesql ) ) {
    //in thong bao thanh cong
    echo "<script>alert('Cập nhật thành công!');history.back();</script>";
    // trả về trang liệt kê
    header( 'Location: sinhvien.php' );
}