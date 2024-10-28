<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $severname = "localhost";
        $username = "root";
        $password = "";
        $db = "mydb";
        $conn = new mysqli($severname,$username,$password,$db);
        if ($conn->connect_error){
            die("Connection failed :" . $conn->connect_error);
        }
        echo"connect succesully";
    ?>
</body>
</html>