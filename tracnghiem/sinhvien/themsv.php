<?php
$user_id = $_POST[ 'user_id' ];
$full_name = $_POST[ 'full_name' ];
$email = $_POST[ 'email' ];
$phone = $_POST[ 'phone' ];
$address = $_POST[ 'address' ];
$gender = $_POST[ 'gender' ];

require_once 'ketnoi.php';

//cau lenh sql de them du lieu
$themsql = "INSERT INTO students (user_id, full_name, email, phone, address, gender) VALUES ('$user_id', '$full_name', '$email', '$phone', '$address', '$gender')";

//kiểm tra rỗng
if ( $user_id == '' || $full_name == '' || $email == '' || $phone == '' || $address == '' || $gender == '' ) {
    echo "<script>alert('Không được điền giá trị rỗng');history.back();</script>";
    return;
}
//Kiểm tra trùng khóa chính
$sql1 = "SELECT * FROM students WHERE user_id='$user_id' AND full_name='$full_name' AND email='$email' AND phone='$phone' AND address='$address' AND gender='$gender'";
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
    header( 'Location: sinhvien.php' );
}