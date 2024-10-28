<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding:0;
            background: linear-gradient(to right, #292e49, #536976, #bbd2c5);
        }
        h1{
            width:100%;
            max-width: 800px;
            text-align:center;
            margin-top:200px;
            margin-left:350px;
            margin-bottom: 10px;
            color:white;
            border:1px solid white;
            border-radius:5px;
        }
        button {
            margin-left: 740px;
            padding : 10px ;
        }
    </style>
</head>
<body>
    <h1>
        <?php
             $tongdiem = ($_POST["diemA"]*0.6) + ($_POST ["diemB"]*0.3) + ($_POST["diemC"]*0.1);
             if ($tongdiem <= 10 ){
                echo "Diem Trung Binh he so 10 cua ban la :" . $tongdiem . "<br>";
             }
             else {
                echo "Xin vui Long Nhap Lai ";
             }

            if ($tongdiem < 4) {
                echo "Diem He So 4 cua ban la: 0-F";
            } 
            elseif ($tongdiem >= 4 && $tongdiem < 5) {
                echo "Diem He So 4 cua ban la: 1.0-D";
            } 
            elseif ($tongdiem >= 5 && $tongdiem < 6) {
                echo "Diem He So 4 cua ban la: 2.0-C";
            } 
            elseif ($tongdiem >= 6 && $tongdiem < 7) {
                echo "Diem He So 4 cua ban la: 2.5-C+";
            } 
            elseif ($tongdiem >= 7 && $tongdiem < 8) {
                echo "Diem He So 4 cua ban la: 3.0-B";
            } 
            elseif ($tongdiem >= 8 && $tongdiem < 9) {
                echo "Diem He So 4 cua ban la: 3.5-A";
            } 
            elseif ($tongdiem >= 9 && $tongdiem <= 10) {
                echo "Diem He So 4 cua ban la: 4.0-A+";
            }
         ?>
    </h1>
    <br><button onclick="history.back();">BACK</button>
</body>
</html>