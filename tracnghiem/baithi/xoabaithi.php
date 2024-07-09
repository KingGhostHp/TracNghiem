<?php
try {
    $mysqli = new mysqli( 'localhost', 'root', '', 'mydatabase' );

    if ( $mysqli->connect_error ) {
        throw new Exception( 'Kết nối thất bại: ' . $mysqli->connect_error );
    }

    $id = $_GET[ 'sid' ];

    $mysqli->begin_transaction();

    $deleteQuestions = $mysqli->prepare( 'DELETE FROM exam_questions WHERE exam_id = ?' );
    $deleteQuestions->bind_param( 'i', $id );
    $deleteQuestions->execute();

    $deleteExam = $mysqli->prepare( 'DELETE FROM baithi WHERE id = ?' );
    $deleteExam->bind_param( 'i', $id );
    $deleteExam->execute();

    $mysqli->commit();

    $deleteQuestions->close();
    $deleteExam->close();
    $mysqli->close();
    header( 'location: baithi.php' );
} catch ( Exception $e ) {
    $mysqli->rollback();
    echo 'Lỗi: ' . $e->getMessage();
}