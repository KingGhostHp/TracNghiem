<?php
include( 'connect.php' );
$search = $_GET[ 'search' ];
$page = $_GET[ 'page' ];
$sql = $conn->prepare( "SELECT * FROM ds_cau_hoi WHERE question like '%".$search."%' limit 10 offset ".( $page-1 ) *10 );
$sql->execute();
$index = 1;
$data = '';
while( $result = $sql->fetch( PDO::FETCH_ASSOC ) ) {
    $data .= '<tr class="table-warning" id='.$result[ 'id' ].'>';
    $data .= '<th scope="row">'.( $index++ ).'</th>';
    $data .= '<td>'.$result[ 'question' ].'</td>';
    $data .= '<td>';
    $data .= '</td>';
    $data .= '<td style="text-align:center;">';
    $data .= '<input type = "button" class = "btn btn-xs btn-info" style = "font-size:15px;" value = "Xem" name = "view">&nbsp;&nbsp;';
    $data .= '<input type = "button" class = "btn btn-xs btn-warning" style = "font-size:15px;" value = "Sửa" name = "update">&nbsp;&nbsp;';
    $data .= '<input type = "button" class = "btn btn-xs btn-danger" style = "font-size:15px;" value = "Xoá" name = "delete">&nbsp;&nbsp;';
    $data .= '</td>';
    $data .= '</tr>';
}
echo $data;
