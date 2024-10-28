<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            border : 1px solid black;
            border-radius : 5px;
            min-width: 1;
            text-align: center;
            margin :10px 100px 0 100px;
        }
        button {
            margin-bottom : 10px;
            width: 100px;
            height: 50px;
            color : black;
            font-size : 15px;
            font-weight : bold;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .footer {
            position: relative;
        }
        .footer::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 50%;
            margin-left: 330px;
            background :linear-gradient(135deg, #d6c5cc ,#1f5b94);
        }
    </style>
</head>
<body>
    <h1>Môn học mà bạn nhập vào là :
        <?php echo $_POST["tenmonhoc"]; ?>
    </h1>
    <div class="footer">

    </div>
    <br><button onclick="history.back();">BACK</button>


</body>
</html>