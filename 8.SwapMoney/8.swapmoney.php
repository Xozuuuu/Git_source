<!DOCTYPE html>
<html lang="en" dir = "ltr ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
            margin:0;
            padding:0;
            background: linear-gradient(to right, #77A1D3,#79CBCA,#E684AE);
        }
        h1{
            width:100%;
            max-width: 800px;
            text-align:center;
            margin-top:200px;
            margin-left:350px;
            margin-bottom: 10px;
            color:black;
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
        if ($_POST["select"] =='USD')
        {
            echo "Bạn đã chọn đồng USD";
        }
        elseif ($_POST["select"] =='EUR')
            echo "Bạn đã chọn đồng EUR";
        elseif ($_POST["select"] =='JPY')
            echo "Bạn đã chọn đồng JPY";
        elseif ($_POST["select"] =='AUD')
            echo "Bạn đã chọn đồng AUD";
        echo "<br>Bạn đã đổi : ";
        echo $_POST["swapmoney"];
        echo $_POST["select"];
        if ($_POST["select"]=='USD'){
                $bill = $_POST["swapmoney"] * 24610;
                echo " = " .$bill. 'USD';
        }
        if ($_POST["select"]=='AUD'){
            $bill = $_POST["swapmoney"] * 17000;
            echo " = " .$bill. 'AUD';
        }
        if ($_POST["select"]=='JPY'){
            $bill = $_POST["swapmoney"] * 200;
            echo " = " .$bill. 'JPY';
        }
        if ($_POST["select"]=='EUR'){
            $bill = $_POST["swapmoney"] * 27000;
            echo " = " .$bill. 'EUR';
        }
        echo "<br>Cảm ơn vì đã sử dụng dịch vụ ! ";
    ?>
</body>
</html>