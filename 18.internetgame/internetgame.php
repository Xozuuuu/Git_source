<?php 
     echo "ID : " . $_POST["user_id"] . "<br>";
     echo "User name : " . $_POST["user_name"] . "<br>";
     echo "Password : " . $_POST["pass_word"] . "<br>";
     echo "Register account date : " . $_POST["register_account_date"] . "<br>";
     echo "Tel Number : " . $_POST["tel_number"] . "<br>";
?>
<?php
    $user_id = $_POST["user_id"];
    $user_name = $_POST["user_name"];
    $pass_word = $_POST["pass_word"];
    $register_account_date = $_POST["register_account_date"];
    $tel_number = $_POST["tel_number"];
    // 
    require 'internetconect.php';
    try {
          $sql = "INSERT INTO users ( user_id , user_name , pass_word , register_account_date , tel_number)
                    VALUES ( '$user_id' , '$user_name' ,'$pass_word' ,'$register_account_date' , '$tel_number')";   
          if ($conn->query($sql) === TRUE){
               echo "<br> Đã thêm thành công !!";
          }
          else {
               if ($conn->error == 1062){
                    echo "<br> Lỗi !! Đã có ID này rồi , Vui lòng tạo ID khác !! ";
               } else {
                    echo "<br> Lỗi !! Đã có ID này rồi , Vui lòng tạo ID khác !! ";
               } 
          }
     } catch (Exception $e) {
          echo "Lỗi !!" . " Tại " . $e->getMessage() . " Đã có người dùng ";
     }
    $conn->close();
?>
<br><button onclick="history.back();">BACK</button>