<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="14.calculator.css">
</head>
<body>
<div class="container">
    <form action="" method = "get">
        <p>First Number</p>
        <input type="number" name="first_Number">
        <p>Second Number</p>
        <input type="number" name="second_Number"><br>
        <input type="submit" name="add" value ="+">
        <input type="submit" name="minus" value="-">
        <input type="submit" name="core" value="*">
        <input type="submit" name="divide" value="/">
    </form>
</div>
    <?php   
        if ( isset($_GET['add']) ){
            $result = $_GET["first_Number"] + $_GET["second_Number"];
            echo $result;
        } 
        elseif ( isset($_GET['minus']) ){
            $result = $_GET["first_Number"] - $_GET["second_Number"];
            echo $result;
        }
        elseif ( isset($_GET['core']) ){
            $result = $_GET["first_Number"] * $_GET["second_Number"];
            echo $result;
        }
        elseif ( isset($_GET['divide']) ){
            $result = $_GET["first_Number"] / $_GET["second_Number"];
            echo $result;
        }
        else {
            echo "Vui lòng nhập vào số !";
        }
    ?>
</body>
</html>