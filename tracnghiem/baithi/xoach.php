<?php
// Kết nối đến MySQL server
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydatabase';

$conn = new mysqli( $servername, $username, $password, $dbname );

// Kiểm tra kết nối
if ( $conn->connect_error ) {
    die( 'Kết nối đến MySQL thất bại: ' . $conn->connect_error );
}

// ID của người dùng bạn muốn xoá bài đăng
$id = $_GET[ 'sid' ];

// Truy vấn SQL DELETE với điều kiện INNER JOIN
$sql = "DELETE exam_questions
        FROM ds_cau_hoi
        INNER JOIN exam_questions ON ds_cau_hoi.id=exam_questions.question_id
        WHERE exam_questions.question_id = $id";

if ( $conn->query( $sql ) === TRUE ) {
    echo 'Xoá dữ liệu thành công';
} else {
    echo 'Lỗi khi xoá dữ liệu: ' . $conn->error;
}

$conn->close();