<?php
// Kết nối cơ sở dữ liệu
$conn = new mysqli( 'localhost', 'root', '', 'mydatabase' );

// Kiểm tra kết nối
if ( $conn->connect_error ) {
    die( 'Kết nối thất bại: ' . $conn->connect_error );
}

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $exam_id = $_POST[ 'exam_id' ];
    $question_id = $_POST[ 'question_id' ];

    // Thêm câu hỏi vào bảng liên kết
    $stmt = $conn->prepare( 'INSERT INTO exam_questions (exam_id, question_id) VALUES (?, ?)' );
    $stmt->bind_param( 'ii', $exam_id, $question_id );

    if ( $stmt->execute() ) {
        echo 'Đã thêm câu hỏi vào bài thi thành công!';
        header( 'location: kaka.php' );
    } else {
        echo 'Có lỗi xảy ra: ' . $conn->error;
    }

    $stmt->close();
}

$conn->close();