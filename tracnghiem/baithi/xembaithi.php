<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Trang chủ Admin</title>
    <link rel='stylesheet' href='../css/dinhdang2.css'>
    <link rel='stylesheet' href='../css/dinhdang3.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'
        integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />
    <!-- cdn v4 -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js'></script>

    <!-- jquery cdn-->
    <script src='https://code.jquery.com/jquery-3.7.1.js'
        integrity='sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=' crossorigin='anonymous'></script>

    <!-- cdn v3 -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css'
        integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css'
        integrity='sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js'
        integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'>
    </script>
</head>

<body>
    <div class='container-fluid' style='background-color:beige'>
        <div class='header'>
            <img src='https://utt.edu.vn/uploads/images/site/1684312014banner-2023.png' class='brand_logo' alt='Logo'
                alt=''>
        </div>
        <?php
session_start();
?>
        <div class='menu1' style='height:70px;'>
            <nav class='navbar navbar-expand-sm navbar-dark'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a href='../trangchu/trangchu.php' style='color: white;text-align:center;' class='nav-link'><i
                                class="fa-solid fa-user-gear" style='font-size:25px;text-align:center;padding-top:0px;'>
                            </i>
                            <?php echo 'Xin chào Amin: ' . $_SESSION[ 'username' ] ?></a>
                    </li>
                    <li class='nav-item' style='padding-right:0px;'>
                        <a onclick="return confirm('Bạn có muốn thoát không?');" style='color: white;' class='nav-link'
                            href='../trangchu/login.php'>Đăng xuất <i class='fa-solid fa-door-open'
                                style='font-size:25px;'></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class='row'>
            <div class='menu_left1'>
                <div class='list-group'>
                    <a style='background:blanchedalmond;font-weight:bold;text-align:left;color:tomato' href='#'
                        class='list-group-item btn btn-link' data-toggle='collapse' data-target='#target1'><i
                            style='font-size:25px;' class='fa-solid fa-house'></i> Trang chủ</a>
                    <div class='collapse' id='target1'>
                        <a href='../trangchu/quanlychung.php' style='background:bisque;color:crimson'
                            class='list-group-item'><i style='font-size:25px;' class='fa-solid fa-layer-group'></i> Quản
                            lý chung</a>
                        <a href='../trangchu/trogiup.php' style='background:bisque;color:crimson'
                            class='list-group-item'><i style='font-size:25px;' class='fa-solid fa-handshake-angle'></i>
                            Trợ giúp</a>
                    </div>
                    <a style='background:blanchedalmond; font-weight:bold;text-align:left;color:tomato' href='#'
                        class='list-group-item btn btn-link' data-toggle='collapse' data-target='#target2'><i
                            style='font-size:25px;' class='fa-solid fa-bars'></i> Menu</a>
                    <div class='collapse' id='target2'>
                        <a href='../giaovien/giaovien.php' style='background:bisque;color:crimson'
                            class='list-group-item'><i style='font-size:25px;' class='fa-solid fa-user-tie'></i> Quản lý
                            giáo viên</a>
                        <a href='../sinhvien/sinhvien.php' style='background:bisque;color:crimson'
                            class='list-group-item'><i style='font-size:25px;' class='fa-solid fa-user'></i> Quản lý
                            sinh viên</a>
                        <a href='../cauhoi/index.php' style='background:bisque;color:crimson' class='list-group-item'><i
                                style='font-size:25px;' class='fa-solid fa-file-circle-question'></i> Quản lý câu
                            hỏi</a>
                        <a href='../baithi/baithi.php' style='background:bisque;color:crimson'
                            class='list-group-item'><i style='font-size:25px;' class='fa-solid fa-window-restore'></i>
                            Quản lý bài thi</a>
                    </div>
                    <a style='background:blanchedalmond;font-weight:bold;text-align:left;color:tomato' href='#'
                        class='list-group-item btn btn-link' data-toggle='collapse' data-target='#target3'><i
                            style='font-size:25px;' class='fa-solid fa-bell'></i> Thông báo</a>
                    <div class='collapse' id='target3'>
                        <a href='#' style='background:bisque;color:crimson' class='list-group-item'><i
                                style='font-size:25px;' class='fa-solid fa-bell-concierge'></i> Thông báo lịch thi</a>
                        <a href='#' style='background:bisque;color:crimson' class='list-group-item'><i
                                style='font-size:25px;' class='fa-solid fa-rectangle-list'></i> Thông báo kết quả</a>
                    </div>
                    <a style='background:blanchedalmond;font-weight:bold;text-align:left;color:tomato' href='#'
                        class='list-group-item btn btn-link' data-toggle='collapse' data-target='#target4'><i
                            style='font-size:25px;' class='fa-brands fa-telegram'></i> Liên hệ</a>
                    <div class='collapse' id='target4'>
                        <a href='#' style='background:bisque;color:crimson' class='list-group-item'><i
                                style='font-size:25px;' class='fa-solid fa-not-equal'></i> Khác</a>
                    </div>
                </div>
            </div>
            <div class='angel2'>
                <div class="angel3" style="font-size:30px;font-weight:bold;color:red;text-align:center;margin-left:0px">
                    <p>Danh sách câu hỏi của bài thi </p>
                </div>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Id bài thi</th>
                            <th>Câu hỏi</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
// Kết nối đến MySQL server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
}

// ID của người dùng bạn muốn lấy bài đăng
$id = $_GET['sid'];

// Truy vấn SQL với INNER JOIN và điều kiện WHERE
$sql = "SELECT ds_cau_hoi.question ,exam_questions.exam_id, ds_cau_hoi.id, exam_questions.question_id
        FROM ds_cau_hoi
        INNER JOIN exam_questions ON ds_cau_hoi.id=exam_questions.question_id
        WHERE exam_questions.exam_id = $id";

$result = $conn->query($sql);

// Kiểm tra và hiển thị dữ liệu
if ($result->num_rows > 0) {
    // Lặp qua từng dòng dữ liệu
    while($row = $result->fetch_assoc()) {
        ?>
                        <tr>
                            <td><?php echo $row[ "exam_id" ];?></td>
                            <td><?php echo $row[ "question" ];?></td>
                            <td>
                                <a onclick="return confirm('Bạn có muốn xoá không?');"
                                    href="xoach.php?sid=<?php echo $row['id'];?>" class="btn btn-danger">Xoá</a>
                            </td>
                        </tr>
                        <?php
}
}
?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- The Mod-->
        <div class='modal' id='myModal'>
            <div class='modal-dialog'>
                <div class='modal-content'>

                    <!-- Modal Header -->
                    <div class='modal-header'>
                        <h3 class='modal-title' style="font-weight:bold">Thêm bài thi</h3>
                        <button type='button' class='close' data-dismiss='modal'>&times;
                        </button>
                    </div>

                    <!-- Modal body -->
                    <div class='modal-body'>
                        <div class='conteiner'>
                            <h3 style='color:red;text-align: center'>Chọn câu hỏi</h3><br>
                            <form action='editch.php' method='post'>
                                <div class='form-group' style="text-align:center">
                                    <label></label>
                                    <select style="height:250px;width:450px" name="question_id" id="question" multiple
                                        required>
                                        <?php
        include 'connect.php';
        // Lấy danh sách câu hỏi từ cơ sở dữ liệu
        $sql = "SELECT id, question FROM ds_cau_hoi";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["id"] . "'>" . $row["question"] . "</option>";
            }
        }
        ?>
                                    </select><br>
                                </div>
                                <button class="btn btn-success" style="border:0px">Lưu</button>
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
        <div class='footer1'>

        </div>
    </div>
</body>

</html>