<a></a>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý chung</title>
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
        <div class="menu1" style="height:70px;">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="trangchu.php" style="color: white;text-align:center;" class="nav-link"><i
                                class="fa-brands fa-elementor" style="font-size:25px;text-align:center;"></i> Xin chào
                            admin</a>
                    </li>
                    <li class="nav-item" style="padding-right:0px;">
                        <a onclick="return confirm('Bạn có muốn thoát không?');" style="color: white;" class="nav-link"
                            href="login.php">Đăng xuất <i class="fa-solid fa-door-open" style="font-size:25px;"></i></a>
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
                        <a href="quanlychung.php" style="background:bisque;color:crimson" class="list-group-item"><i
                                style="font-size:25px;" class="fa-solid fa-layer-group"></i> Quản lý chung</a>
                        <a href="../trogiup.php" style="background:bisque;color:crimson" class="list-group-item"><i
                                style="font-size:25px;" class="fa-solid fa-handshake-angle"></i> Trợ giúp</a>
                    </div>
                    <a style="background:blanchedalmond; font-weight:bold;text-align:left;color:tomato"
                        href="student.php" class="list-group-item btn btn-link" data-toggle="collapse"
                        data-target="#target2"><i style="font-size:25px;" class="fa-solid fa-bars"></i> Menu</a>
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
                                style="font-size:25px;" class="fa-solid fa-rectangle-list"></i> Thông báo kết quả</a>
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
            <div class="content1">
                <div class="form-inline">
                    <a href="../giaovien/giaovien.php" style="padding:0px 0px 0px 0px"><button
                            style="font-size:30px;text-align:center;background-color:brown;color:aliceblue;border:10px inset red;"><i
                                class="fa-solid fa-user-tie"
                                style="color:aliceblue;font-size:50px;"></i><br>Teacher</button></a>
                </div>
                <br>
                <hr>
                <br><br>
            </div>
            <div class="content1">
                <div class="form-inline">
                    <a href="../sinhvien/sinhvien.php" style="padding:0px 0px 0px 0px"><button
                            style="font-size:30px;text-align:center;background-color:brown;color:aliceblue;border:10px inset red;"><i
                                class="fa-solid fa-user-tie" style="color:aliceblue;font-size:50px;"></i><br>Sinh
                            viên</button></a>
                </div>
                <br>
                <hr>
                <br><br>
                <a href="../baithi/baithi.php" style="padding:0px 40px 0px 80px;"><button
                        style="font-size:38px;text-align:center;background-color:brown;color:aliceblue;border:10px inset red;"><i
                            class="fa-solid fa-user-tie" style="color:aliceblue;font-size:50px;"></i><br>Bài
                        thi</button></a>
            </div>
            <div class="content1">
                <div class="form-inline">
                    <a href="../cauhoi/index.php" style="padding:0px 0px 0px 0px"><button
                            style="font-size:30px;text-align:center;background-color:brown;color:aliceblue;border:10px inset red;"><i
                                class="fa-solid fa-user-tie" style="color:aliceblue;font-size:50px;"></i><br>Câu
                            hỏi</button></a>
                </div>
                <br>
                <hr>
            </div>
        </div>
        <div class="footer1">
        </div>
    </div>
</body>

</html>