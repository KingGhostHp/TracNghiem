<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thêm câu hỏi vào bài thi</title>
</head>

<body>
    <h2>Thêm câu hỏi vào bài thi</h2>
    <form action="k.php" method="post">
        <label for="exam">Chọn bài thi:</label>
        <select name="exam_id" id="exam">
            <?php
                // Kết nối cơ sở dữ liệu
                $conn = new mysqli('localhost', 'root', '', 'mydatabase');
                
                // Kiểm tra kết nối
                if ($conn->connect_error) {
                    die("Kết nối thất bại: " . $conn->connect_error);
                }
                
                // Lấy danh sách bài thi
                $result = $conn->query("SELECT id, ten FROM baithi");
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['ten'] . "</option>";
                    }
                }
                
                $conn->close();
            ?>
        </select>
        <br><br>
        <label for="question">Chọn câu hỏi:</label>
        <select name="question_id" id="question">
            <?php
                // Kết nối cơ sở dữ liệu
                $conn = new mysqli('localhost', 'root', '', 'mydatabase');
                
                // Kiểm tra kết nối
                if ($conn->connect_error) {
                    die("Kết nối thất bại: " . $conn->connect_error);
                }
                
                // Lấy danh sách câu hỏi
                $result = $conn->query("SELECT id, question FROM ds_cau_hoi");
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . substr($row['question'], 0, 50) . "...</option>";
                    }
                }
                
                $conn->close();
            ?>
        </select>
        <br><br>
        <input type="submit" value="Thêm câu hỏi vào bài thi">
    </form>
</body>

</html>