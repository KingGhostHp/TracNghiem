<?php
include( 'connect.php' );
$id = $_GET[ 'id' ];
$sql = "SELECT * FROM ds_cau_hoi WHERE id ='".$id."'";
$rs = $conn->prepare( $sql );
$rs->execute();
$result = $rs->fetch();

echo json_encode( $result, JSON_UNESCAPED_UNICODE );