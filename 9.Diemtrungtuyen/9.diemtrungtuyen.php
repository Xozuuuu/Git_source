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
            color : white;
        }
        h1{
            
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
            $tongdiem = ($_POST["diemA"]) + ($_POST ["diemB"]) + ($_POST["diemC"]);
            if ($tongdiem < 15 ){
                echo "<br>Điểm của bạn đéo đủ điều kiện để trúng tuyển bất kỳ một nghành nào cả !!  ";
                echo "<br>Xin vui lòng nhập lại điểm !! ";
            }
            // 
            if ($tongdiem >= 15 && $tongdiem <= 16) {
                if ( $_POST["luachon"] == 'Môi Trường'  && $tongdiem <= 16){
                    echo "Tổng điểm của bạn :  " . $tongdiem . " điểm ";
                    echo "<br>Điểm của bạn đủ điều kiện trúng tuyển nghành :";
                    echo " / " . $_POST["luachon"] . " / ";
                } elseif ( ($_POST["luachon"] == 'Khoa Học Dữ Liệu' && $_POST["luachon"] == 'Chất Lượng Cao' && $_POST["luachon"] == 'Công Nghệ Thông Tin' && $_POST["luachon"] == 'Địa Chất') && $tongdiem <= 16){
            
                }
                else {
                    echo "Tổng điểm của bạn :  " . $tongdiem . " điểm ";
                    echo "<br>Điểm của bạn không đủ điều kiện trúng tuyển nghành : " . " / " . $_POST["luachon"] . " / ";
                    echo "<br> Thay vào đó bạn đã trúng tuyển nghành / Môi Trường / ";
                }
            }
            // 
            if ($tongdiem >= 17 && $tongdiem < 18 && ($_POST["luachon"] =='Môi Trường' || $_POST["luachon"] =='Địa Chất')) {
                echo "Tổng điểm của bạn :  " . $tongdiem . " điểm ";
                echo "<br>Điểm của bạn đủ điều kiện trúng tuyển nghành :";
                echo " / " . $_POST["luachon"] . " / ";
            }
            elseif (($_POST["luachon"] =='Khoa Học Dữ Liệu' || $_POST["luachon"] =='Chất Lượng Cao' || $_POST["luachon"] =='Công Nghệ Thông Tin') && ($tongdiem >= 17 && $tongdiem < 18)){
                echo "Tổng điểm của bạn :  " . $tongdiem . " điểm ";
                echo "<br>Bạn đéo thể trúng tuyển nghành :" . " / " .$_POST["luachon"] . " / "; 
                echo "<br>Điểm của bạn đủ điều kiện trúng tuyển nghành : / Môi Trường / và / Địa Chất / " ;
            }
            //
            if (($tongdiem >= 18 && $tongdiem <= 21) && ($_POST["luachon"] =='Công Nghệ Thông Tin' || $_POST["luachon"] =='Khoa Học Dữ Liệu' || $_POST["luachon"] =='Môi Trường' || $_POST["luachon"] =='Địa Chất')) {
                echo "Tổng điểm của bạn :  " . $tongdiem . " điểm ";
                echo "<br>Điểm của bạn đủ điều kiện trúng tuyển nghành :";
                echo " / " . $_POST["luachon"] . " / ";
            }
            elseif (( $_POST["luachon"] =='Chất Lượng Cao' && ($tongdiem >= 18 && $tongdiem <= 21))){
                echo "Tổng điểm của bạn :  " . $tongdiem . " điểm ";
                echo "<br>Bạn đéo thể trúng tuyển nghành :" . " / " .$_POST["luachon"] . " / ";  
                echo "<br>Điểm của bạn đủ điều kiện trúng tuyển nghành : / Khoa Học Dữ Liệu / và / Công Nghệ Thông Tin / và / Môi Trường / và / Địa Chất / " ;
            }
            //
            if (($tongdiem > 21) && ($_POST["luachon"] =='Chất Lượng Cao' || $_POST["luachon"] =='Công Nghệ Thông Tin' || $_POST["luachon"] =='Khoa Học Dữ Liệu' || $_POST["luachon"] =='Môi Trường' || $_POST["luachon"] =='Địa Chất')) {
                echo "Tổng điểm của bạn :  " . $tongdiem . " điểm ";
                echo "<br>Điểm của bạn đủ điều kiện trúng tuyển nghành :";
                echo " / " . $_POST["luachon"] . " / ";
                echo "<br>Và đủ điều kiện vào các nghành còn lại !!";
            }
        ?>
    </h1>
    <br><button onclick="history.back();">BACK</button>
</body>
</html>