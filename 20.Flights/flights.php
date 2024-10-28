<h2>
    <?php
        echo " Register Successfully...!! " . " With " . "'" . $_POST["namef"] . "'"  . " have " . "ID = " .  $_POST["id"] . "↵";
    ?>
</h2>
<h3>
    <?php
        echo "<br> ⇣ ";
        echo "<br>" . " Your Flight Infomation : " . "↴";
    ?>
</h3>
<h4>
    <ul>
        <Li><?php
                echo "Your ID : " . $_POST["id"] . "<br>";
        ?>
        </Li>
        <Li><?php
                echo "Your FName : "      . $_POST["namef"] . "<br>";
        ?>
        </Li>
        <Li><?php
                echo "Your FOrigin : "  . $_POST["origin"] . "<br>";
        ?>
        </Li>
        <Li><?php
                 echo "Your FDestination : " . $_POST["destination"] . "<br>";
        ?>
        </Li>
        <Li><?php
                echo "Your FDuration : "    . $_POST["duration"] . "<br>";
        ?>
        </Li>
    </ul>
</h4>
<?php   
    $id = $_POST["id"];
    $namef = $_POST["namef"];  
    $origin = $_POST["origin"];
    $destination = $_POST["destination"];
    $duration = $_POST["duration"];

    require 'flights_conect.php';
    try {
        $sql = "INSERT INTO flights ( id , namef , origin , destination , duration )
                  VALUES ( '$id' , '$namef' , '$origin' ,'$destination' ,'$duration')";   
        if ($conn->query($sql) === TRUE){
             echo "<br> Register Successfully ... !!";
        }
        else {
             if ($conn->error == 1062){
                  echo "<br> Error !! Đã có ID này rồi , Vui lòng tạo ID khác !! ";
             } else {
                  echo "<br> Error !! Đã có ID này rồi , Vui lòng tạo ID khác !! ";
             } 
        }
   } catch (Exception $e) {
        echo " Error !!" . " Tại " . $e->getMessage() . " Đã có người dùng ";
   }
  $conn->close();
?>
<br><button onclick="history.back();">BACK</button>
<style>
    h2 {
        position: relative;
        padding-bottom:5px;
    }
    h2::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 200px;
    background :linear-gradient(135deg, #817c7e ,#e9719d );
}
    ul li {
        padding : 5px;
    }
    button {
        margin-top : 10px;
    }
</style>