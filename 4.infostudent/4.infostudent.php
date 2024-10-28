<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            align-items: center;
            justify-content: center;
            background: linear-gradient(to right, #2980b9, #6dd5fa, #ffffff);
            display : grid;
            place-items:center;
        }
        table , tr , td , th{
            border : 2px solid black;
            border-collapse:collapse;
        }
        table {
            width: 100%;
            max-width:1000px ;
            height : 120px;
            margin-top : 200px;
            background-color: #ffffff;
            backdrop-filter: blur(20px);
            box-shadow:-10px 20px 50px rgb(34, 57, 119);
        }
        tr , td, th {
            padding : 5px;
        }
        button {
            padding : 5px 10px 5px 10px;
            background-color:#ffffff;
            color:black;
            border-radius:5px;
        }
        button:hover {
            background-color:black;
            color:white;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>STT</th>
            <th>Họ Và Tên</th>
            <th>Ngày Sinh</th>
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Nơi Ở</th>
            <th>Giới Tính</th>
        </tr>
        <tr>
            <td>
                <h3><?php echo $_POST["numberlist"]; ?></h3>
            </td>
            <td>
                <h3><?php echo $_POST["name"]; ?></h3>
            </td>
            <td>
                <h3><?php echo $_POST["date"]; ?></h3>
            </td>
            <td>
                <h3><?php echo $_POST["phonenumber"]; ?></h3>
            </td>
            <td>
                <h3><?php echo $_POST["email"]; ?></h3>
            </td>
            <td>
                <h3><?php echo $_POST["address"]; ?></h3>
            </td>
            <td>
                <h3><?php echo $_POST["gender"]; ?></h3>
            </td>
        </tr>
    </table>
    <?php
        require '4.connect.php';
        $sql = "INSERT INTO sinh_vien ( ma_sinh_vien , ho_ten , gioi_tinh , email )
                VALUES ('$numberlist','$name','$date','$phonenumber','$email')";
       if ( $conn->query($sql) ===TRUE){
            echo "Da them sinh vien thanh cong";
       }
       else {
            echo "Error" . $sql . "<br>" . $conn->error;
       }
        $conn->close();
    ?>
    <br><button onclick="history.back();">BACK</button>
</body>
</html>