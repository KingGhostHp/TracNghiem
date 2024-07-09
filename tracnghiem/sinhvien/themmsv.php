<?php
try {
    // Kết nối đến MySQL server
    $conn = new mysqli( 'localhost', 'root', '', 'mydatabase' );

    // Kiểm tra kết nối
    if ( $conn->connect_error ) {
        die( 'Kết nối đến MySQL thất bại: ' . $conn->connect_error );
    }

    // Thực hiện transaction
    $conn->begin_transaction();

    // Thêm dữ liệu vào bảng cha ( users )
    $query_users = "INSERT INTO users (username, password) VALUES ('john_doe', 'dat')";
    $result_users = $conn->query( $query_users );

    if ( !$result_users ) {
        throw new Exception( 'Lỗi khi thêm vào bảng users: ' . $conn->error );
    }

    // Lấy ID của bản ghi vừa thêm vào bảng users
    $user_id = $conn->insert_id;

    $full_name = $_POST[ 'full_name' ];
    $email = $_POST[ 'email' ];
    $phone = $_POST[ 'phone' ];
    $address = $_POST[ 'address' ];
    $gender = $_POST[ 'gender' ];

    // Thêm dữ liệu vào bảng con ( students ) với user_id đã lấy được
    $query_students = "INSERT INTO students (user_id, full_name, email, phone, address, gender) VALUES ($user_id, $full_name, $email, $phone, $address, $gender)";
    $result_students = $conn->query( $query_students );

    if ( !$result_students ) {
        throw new Exception( 'Lỗi khi thêm vào bảng students: ' . $conn->error );
    }

    // Commit transaction nếu không có lỗi xảy ra
    $conn->commit();

    echo 'Thêm sinh viên thành công.';
    header( 'location: sinhvien.php' );

} catch ( Exception $e ) {
    // Rollback transaction nếu có lỗi xảy ra
    $conn->rollback();

    // Xử lý ngoại lệ, in thông báo lỗi
    echo 'Đã xảy ra lỗi: ' . $e->getMessage();
}
finally {
    // Đóng kết nối
    $conn->close();
}