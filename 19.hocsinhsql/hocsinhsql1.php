<?php
    echo "Ho ten : " . $_POST["ho_ten"] . "<br>";
    echo "mssv : " . $_POST["mssv"] . "<br>";
    echo "address : " . $_POST["diachi"] . "<br>";
    echo "lop : " . $_POST["lop"] . "<br>";
    // 
    $ho_ten = $_POST["ho_ten"];
    $mssv = $_POST["mssv"];
    $diachi = $_POST["diachi"];
    $lop = $_POST["lop"];
    // 
    require 'hocsinhsqlconect.php';
    $sql = "INSERT INTO sinh_vien_1 ( ho_ten , mssv , diachi , lop)
            VALUES ( '$ho_ten' , '$mssv' ,'$diachi' ,'$lop')";   
    if ($conn->query($sql) === TRUE){
        echo "Da them hoc sinh thanh cong";
    }
    else {
        echo "Loi" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>