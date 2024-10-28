<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo " Họ và Tên : " . $_POST["name"] . "<br>";
        echo " Lớp : " . $_POST["class"] . "<br>";
        echo " Mã số sinh viên : " . $_POST["cardid"] . "<br>";
        echo "<br>Điểm các môn học bạn đã nhập vào là : ";
    ?>
    <ul>
        <li><?php echo " <br> Điểm môn Toán : " . $_POST["math-points"] . " điểm ";?></li>
        <li><?php echo " <br> Điểm môn Vật Lý : " . $_POST["physic-points"] . " điểm ";?></li>
        <li><?php echo " <br> Điểm môn Hóa : " . $_POST["chemistry-points"] . " điểm ";?></li>
        <li><?php echo " <br> Điểm môn Văn : " . $_POST["literature-points"] . " điểm ";?></li>
        <li><?php echo " <br> Điểm môn Tiếng Anh : " . $_POST["english-points"] . " điểm ";?></li>
        <li><?php echo " <br> Điểm môn Lịch Sử : " . $_POST["history-points"] . " điểm ";?></li>        
    </ul>     
    <?php
        // tinh chat lam mau , khong co cung duoc  
    ?> 
    <?php  
        $diemtrungbinh = round((( $_POST["math-points"] + $_POST["physic-points"] + $_POST["chemistry-points"] + $_POST["english-points"] + $_POST["literature-points"] + $_POST["history-points"] ) / 6),2) ;
        echo "<br> Điểm trung bình của bạn là : " . $diemtrungbinh ;
        if ( ($_POST["math-points"] < 4 || $_POST["physic-points"] < 4 || $_POST["chemistry-points"] < 4 || $_POST["english-points"] < 4 || $_POST["literature-points"] < 4 || $_POST["history-points"] < 4)){
            echo " <br>--- Bạn xếp loại học sinh / Yếu / ---";
        }
            elseif ( $diemtrungbinh < 5 ){
            echo " <br>--- Bạn xếp loại học sinh / Yếu / ---";
            }
            elseif ( $diemtrungbinh > 5 && $diemtrungbinh <= 6.4 ) {
            echo " <br>--- Bạn xếp loại học sinh / Trung Bình / ---";
            }
            elseif ( $diemtrungbinh > 6.5 && $diemtrungbinh <= 7.9 ){
            echo " <br>--- Bạn xếp loại học sinh / Khá / ---";
            }
            elseif ( $diemtrungbinh >= 8 && $diemtrungbinh <= 10  ){
            echo " <br>--- Bạn xếp loại học sinh / Giỏi / ---";
            }
        else {
                echo "<br> - Mời bạn nhập lại điểm số của mình - ";
        }
        if ( $_POST["math-points"] < 4  ){
            echo " <br> Bởi vì bạn có môn học - Toán " . " được : ". $_POST["math-points"] . " điểm ";
        }
            // elseif ( $_POST["physic-points"] < 4 ){
            //     echo " <br>  Boi vi ban co mon hoc - Vat Ly " . "duoc : ". $_POST["physic-points"] . " diem ";
            // }
            // elseif ( $_POST["chemistry-points"] < 4 ){
            //     echo " <br>  Boi vi ban co mon hoc - Hoa " . "duoc : ". $_POST["chemistry-points"] . " diem ";
            // }
            // elseif ( $_POST["english-points"] < 4 ){
            //     echo " <br>  Boi vi ban co mon hoc - Tieng Anh " . "duoc : ". $_POST["english-points"] . " diem ";
            // }
            // elseif ( $_POST["literature-points"] < 4 ){
            //     echo " <br>  Boi vi ban co mon hoc - Van " . "duoc : ". $_POST["literature-points"] . " diem ";
            // }
            // elseif ( $_POST["history-points"] < 4 ){
            //     echo " <br>  Boi vi ban co mon hoc - Lich Su " . "duoc : ". $_POST["history-points"] . " diem ";
            // }
        if ( $_POST["physic-points"] < 4  ){
                echo " <br> Bởi vì bạn có môn học - Vật Lý " . " : ". $_POST["physic-points"] . " điểm ";
        }  
        if ( $_POST["chemistry-points"] < 4 ){
            echo " <br>  Bởi vì bạn có môn học - Hóa " . " : ". $_POST["chemistry-points"] . " điểm ";
        }
        if ( $_POST["english-points"] < 4 ){
            echo " <br>  Bởi vì bạn có môn học - Văn " . " : ". $_POST["literature-points"] . " điểm ";
        }
        if ( $_POST["literature-points"] < 4 ){
            echo " <br>  Bởi vì bạn có môn học - Tiếng Anh " . " : ". $_POST["english-points"] . " điểm ";
        }
        if ( $_POST["history-points"] < 4 ){
            echo " <br>  Bởi vì bạn có môn học - Lịch Sử " . " : ". $_POST["history-points"] . " điểm ";
        }  
        echo "<br> Trân Trọng ! ";
    ?>
    <br><button onclick="history.back();">BACK</button>
    <style>
        button {
            margin-top: 10px;
        }
        ul li {
            line-height: 15px;
            list-style-type: none;
        }
    </style>
</body>
</html>