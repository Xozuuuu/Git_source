<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "The Game";
        if ($_GET["response"]=="YES"){
            echo "Has been quited";
        } 
        if ($_GET["response"]=="NO"){
            echo "Will be continued in 3s";
        }
        echo "<br>After it statement";
    ?>
</body>
</html>