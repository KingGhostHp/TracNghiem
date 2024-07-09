<a></a>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sinh viên</title>
    <link rel="stylesheet" href="../css/dinhdang2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- cdn v4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- cdn v3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid" style="background-color:beige">
        <div class="header">
            <img src="https://utt.edu.vn/uploads/images/site/1684312014banner-2023.png" class="brand_logo" alt="Logo"
                alt="">
        </div>
        <?php 
        session_start();
        ?>
        <div class="menu1" style="height:70px;">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../trangchu/trangchu.php" style="color: white;text-align:center;" class="nav-link"><i
                                class="fa-brands fa-elementor" style="font-size:25px;text-align:center;"></i>
                            X<?php echo 'Xin chào Amin: ' . $_SESSION[ 'username' ] ?></a>
                    </li>
                    <li class="nav-item" style="padding-right:0px;">
                        <a onclick="return confirm('Bạn có muốn thoát không?');" style="color: white;" class="nav-link"
                            href="../trangchu/login.php">Đăng xuất <i class="fa-solid fa-door-open"
                                style="font-size:25px;"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="menu_left1">
                <div class="list-group">
                    <a style="background:blanchedalmond;font-weight:bold;text-align:left;color:tomato" href="#"
                        class="list-group-item btn btn-link" data-toggle="collapse" data-target="#target1"><i
                            style="font-size:25px;" class="fa-solid fa-house"></i> Trang chủ</a>
                    <div class="collapse" id="target1">
                        <a href="../trangchu/quanlychung.php" style="background:bisque;color:crimson"
                            class="list-group-item"><i style="font-size:25px;" class="fa-solid fa-layer-group"></i> Quản
                            lý chung</a>
                        <a href="../trangchu/trogiup.php" style="background:bisque;color:crimson"
                            class="list-group-item"><i style="font-size:25px;" class="fa-solid fa-handshake-angle"></i>
                            Trợ giúp</a>
                    </div>
                    <a style="background:blanchedalmond; font-weight:bold;text-align:left;color:tomato" href="#"
                        class="list-group-item btn btn-link" data-toggle="collapse" data-target="#target2"><i
                            style="font-size:25px;" class="fa-solid fa-bars"></i> Menu</a>
                    <div class="collapse" id="target2">
                        <a href="../giaovien/giaovien.php" style="background:bisque;color:crimson"
                            class="list-group-item"><i style="font-size:25px;" class="fa-solid fa-user-tie"></i> Quản lý
                            giáo viên</a>
                        <a href="../sinhvien/sinhvien.php" style="background:bisque;color:crimson"
                            class="list-group-item"><i style="font-size:25px;" class="fa-solid fa-user"></i> Quản lý
                            sinh viên</a>
                        <a href="../cauhoi/index.php" style="background:bisque;color:crimson" class="list-group-item"><i
                                style="font-size:25px;" class="fa-solid fa-file-circle-question"></i> Quản lý câu
                            hỏi</a>
                        <a href="../baithi/baithi.php" style="background:bisque;color:crimson"
                            class="list-group-item"><i style="font-size:25px;" class="fa-solid fa-window-restore"></i>
                            Quản lý bài thi</a>
                    </div>
                    <a style="background:blanchedalmond;font-weight:bold;text-align:left;color:tomato" href="#"
                        class="list-group-item btn btn-link" data-toggle="collapse" data-target="#target3"><i
                            style="font-size:25px;" class="fa-solid fa-bell"></i> Thông báo</a>
                    <div class="collapse" id="target3">
                        <a href="#" style="background:bisque;color:crimson" class="list-group-item"><i
                                style="font-size:25px;" class="fa-solid fa-bell-concierge"></i> Thông báo lịch thi</a>
                        <a href="#" style="background:bisque;color:crimson" class="list-group-item"><i
                                style="font-size:25px;" class="fa-solid fa-bell-concierge"></i> Thông báo kết quả</a>
                    </div>
                    <a style="background:blanchedalmond;font-weight:bold;text-align:left;color:tomato" href="#"
                        class="list-group-item btn btn-link" data-toggle="collapse" data-target="#target4"><i
                            style="font-size:25px;" class="fa-brands fa-telegram"></i> Liên hệ</a>
                    <div class="collapse" id="target4">
                        <a href="#" style="background:bisque;color:crimson" class="list-group-item"><i
                                style="font-size:25px;" class="fa-solid fa-not-equal"></i> Khác</a>
                    </div>
                </div>
            </div>
            <div class="content2" style="padding-left:40px;padding-right:10px;width:920px">
                <form method="get" action="timkiemsv.php">
                    <br>
                    <h1 style="color:chocolate; text-align: center;width:px;font-weight: bold;">Danh sách sinh viên</h1>
                    <br>
                    <div class="col-sm-12 text-right">
                        <input style="background-color:greenyellow;" class="btn btn-success" type="submit"
                            value="Tìm Kiếm">
                    </div>
                </form>
                <br>
                <br>
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr style="color:chocolate">
                            <th>User id</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Địa chỉ</th>
                            <th>Gender</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" class="col-sm-14 text-right">
                                <!-- Button to Open the Modal -->
                                <button style="background-color:darkblue;border:1px ridge darkblue;" type="button"
                                    class="btn btn-primary" data-toggle="modal" data-target="#myModal"></button>
                            </td>
                        </tr>
                        <?php
//ket noi
include_once "ketnoi.php";
//cau lenh
$lietke_sql = "SELECT * FROM students order by user_id, full_name, email, phone, address, gender";
//thuc thi cau lenh
$result = mysqli_query( $conn, $lietke_sql );
//duyệt qua result và in ra
while ( $r = mysqli_fetch_assoc( $result ) ) {
    ?>
                        <tr>
                            <td><?php echo $r[ "user_id" ];?></td>
                            <td><?php echo $r[ "full_name" ];?></td>
                            <td><?php echo $r[ "email" ];?></td>
                            <td><?php echo $r[ "phone" ];?></td>
                            <td><?php echo $r[ "address" ];?></td>
                            <td><?php echo $r[ "gender" ];?></td>
                            <td><a href="editsv.php?sid=<?php echo $r['id'];?>" class="btn btn-info">Sửa</a>&nbsp;
                                <a onclick="return confirm('Bạn có muốn xoá không?');"
                                    href="xoasv.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xoá</a>
                            </td>
                        </tr>
                        <?php
}
?>
                    </tbody>
                </table>
            </div>
            <!-- The Modal -->
            <div class='modal' id='myModal'>
                <div class='modal-dialog'>
                    <div class='modal-content'>

                        <!-- Modal Header -->
                        <div class='modal-header'>
                            <h4 class='modal-title' style="font-weight:bold">Thêm sinh viên</h4>
                            <button type='button' class='close' data-dismiss='modal'>&times;
                            </button>
                        </div>

                        <!-- Modal body -->
                        <div class='modal-body' style='background-color:aqua'>
                            <div class='conteiner' style='background-color:aqua'>
                                <h3 style='color:blue' , style='text-align: center'>Nhập thông tin sinh viên</h3>
                                <form action='themsv.php' method='post'>
                                    <div class='form-group'>
                                        <label for='user_id'>User id:</label>
                                        <input type='text' id='user_id' name='user_id' class='form-control'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='name'>Họ và tên:</label>
                                        <input type='text' id='full_name' name='full_name' class='form-control'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='email'>Email:</label>
                                        <input type='text' id='email' name='email' class='form-control'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='subject'>Phone:</label>
                                        <input type='text' id='phone' name='phone' class='form-control'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='phone'>Địa chỉ:</label>
                                        <input type='text' id='address' name='address' class='form-control'>
                                    </div>
                                    <div class='form-group'>
                                        <select name="gender" required>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>
                                    <button class="'btn btn-success" style="background-color:cyan">Lưu</button>
                                </form>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class='footer1'>

        </div>
    </div>
</body>

</html>