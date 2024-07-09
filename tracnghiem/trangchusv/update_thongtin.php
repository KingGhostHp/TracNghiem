<?php
session_start();

if ( $_SESSION[ 'role' ] != 'student' ) {
    header( 'Location: ../trangchu/login.php' );
    exit();
}

$conn = new mysqli( 'localhost', 'root', '', 'mydatabase' );
if ( $conn->connect_error ) {
    die( 'Kết nối thất bại: ' . $conn->connect_error );
}
$full_name = $_POST[ 'full_name' ];
$email = $_POST[ 'email' ];
$phone = $_POST[ 'phone' ];
$address = $_POST[ 'address' ];
$gender = $_POST[ 'gender' ];

$user_id = $_SESSION[ 'user_id' ];

$sql = "SELECT * FROM students WHERE user_id='$user_id'";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {
    $row = $result->fetch_assoc();
} else {
    $row = [
        'full_name' => '',
        'email' => '',
        'phone' => '',
        'address' => '',
        'gender' => ''
    ];
}

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

$user_id = $_SESSION[ 'user_id' ];
$full_name = $_POST[ 'full_name' ];
$email = $_POST[ 'email' ];
$phone = $_POST[ 'phone' ];
$address = $_POST[ 'address' ];
$gender = $_POST[ 'gender' ];

$sql = "REPLACE INTO students (user_id, full_name, email, phone, address, gender) VALUES ('$user_id', '$full_name', '$email', '$phone', '$address', '$gender')";

if ( $conn->query( $sql ) === TRUE ) {
    echo "<script>alert('Cập nhật thành công');history.back();</script>";
    return;
} else {
    echo "<script>alert('Cập nhật không thành công');history.back();</script>";
    return;
}