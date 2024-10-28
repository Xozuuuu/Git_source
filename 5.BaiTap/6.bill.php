<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ban da lua chon :
        <?php echo $_POST["select"]; ?>
    </h1>
    <h1>Cung voi so luong :
        <?php echo $_POST["number"]. 'Coc'; ?>
    </h1>
    <h1>Gia 1000 VND / Coc</h1>
    <h1>
        <?php $select = 1000;
              $number = $_POST["number"];
              $bill = $select * $number ;
              echo "Tong cong :" . $bill . 'VND';
         ?>
    </h1>
</body>
</html>