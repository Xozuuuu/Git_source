<!DOCTYPE html>
<html lang="en" dir ="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'connect.php';
        $sql = "INSERT INTO sinh_vien ( ma_sinh_vien , ho_ten , gioi_tinh , email )
                VALUES ( 2221385173, 'Nguyen Van A ','Nam','nguyenvana@example.com'),
                       ( 1324567894 , 'Nguyen Dac Huy','Nu','nguyendachuy@gmail.com'),
                       ( 1513234455 , 'Ha manh dung ','bede','hamanhdungancut@gmail.sex')
                       ";
       if ( $conn->query($sql) ===TRUE){
            echo "Da them sinh vien thanh cong";
       }
       else {
            echo "Error" . $sql . "<br>" . $conn->error;
       }
        $conn->close();
    ?>
</body>
</html>