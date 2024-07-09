<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydatabase';

$conn = new mysqli( $servername, $username, $password, $dbname );

if ( $conn->connect_error ) {
    die( 'Kết nối thất bại: ' . $conn->connect_error );
}

$limit = 5;
$page = isset( $_GET[ 'page' ] ) ? $_GET[ 'page' ] : 1;
$start = ( $page - 1 ) * $limit;

$sql = "SELECT * FROM baithi LIMIT $start, $limit";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {
    while ( $row = $result->fetch_assoc() ) {
        echo 'ID: ' . $row[ 'id' ]. ' - Name: ' . $row[ 'ten' ]. ' - Email: ' . $row[ 'mota' ]. '<br>';
    }
} else {
    echo 'Không có dữ liệu.';
}

$sql = 'SELECT COUNT(id) FROM users';
$result = $conn->query( $sql );
$row = $result->fetch_row();
$total_records = $row[ 0 ];
$total_pages = ceil( $total_records / $limit );

for ( $i = 1; $i <= $total_pages; $i++ ) {
    echo "<a href='index.php?page=" . $i . "'>" . $i . '</a> ';
}

$conn->close();