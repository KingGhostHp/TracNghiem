<?php
include ( 'connect.php' );
try {
    $id = $_POST[ 'id' ];
    $sql = "DELETE FROM ds_cau_hoi WHERE id='".$id."'";
    if ( $conn-> query( $sql ) == true ) {
        echo 'Xoá thành công!';
    } else {
        echo 'Xoá thất bại!';
    }
} catch( Exception $e ) {
    echo 'Lỗi xoá câu hỏi: '.$e;
}