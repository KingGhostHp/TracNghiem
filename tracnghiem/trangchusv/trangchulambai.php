<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ sinh viên</title>
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
        <div class="header" style="height:85px">
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
                        <a href="../trangchusv/trangchulambai.php" style="color: white;text-align:center;"
                            class="nav-link"><i class="fa-solid fa-chalkboard-user"
                                style="font-size:25px;text-align:center;padding-top:0px;"></i>
                            <?php echo 'Chào mừng Sinh viên: '. $_SESSION[ 'username' ] ?></a>
                    </li>
                    <li class="nav-item">
                        <a onclick="return confirm('Bạn có muốn thoát không?');" style="color: white;text-align:right"
                            class="nav-link" href="../trangchu/login.php">Đăng xuất <i class="fa-solid fa-door-open"
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
                            style="font-size:25px;" class="fa-solid fa-pen-to-square"></i> Menu</a>
                    <div class="collapse" id="target1">
                        <a href="../lambai/index.php" style="background:bisque;color:crimson" class="list-group-item"><i
                                style="font-size:25px;" class="fa-solid fa-file-pen"></i> Bài thi</a>
                        <a href="../lambai/index.php" style="background:bisque;color:crimson" class="list-group-item"><i
                                style="font-size:25px;" class="fa-solid fa-id-card-clip"></i> Kết quả các lần thi</a>
                        <a href="../trangchusv/thongtin.php" style="background:bisque;color:crimson"
                            class="list-group-item"><i style="font-size:25px;" class="fa-solid fa-circle-user"></i>
                            Thông
                            tin cá nhân</a>
                    </div>
                    <a style="background:blanchedalmond;font-weight:bold;text-align:left;color:tomato" href="#"
                        class="list-group-item btn btn-link" data-toggle="collapse" data-target="#target3"><i
                            style="font-size:25px;" class="fa-solid fa-bell"></i> Nhận thông báo</a>
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
            <div class="content3">
                <div class="form_trangchu">
                    <i class="fa-solid fa-hands-clapping"></i><br>Welcome!
                </div>
            </div>
        </div>

        <div class="footer1">

        </div>
    </div>
</body>

</html>