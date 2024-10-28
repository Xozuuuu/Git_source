<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        margin: 0;
        width: 100vw;
        height: 100vh;
        background: #ecf0f3;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        place-items: center;
        overflow: hidden;
        }

        .container {
        margin-bottom: 50px;
        position: relative;
        width: 350px;
        height: 570px;
        border-radius: 20px;
        padding: 40px;
        box-sizing: border-box;
        background: #ecf0f3;
        box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
        }
        .brand-title {
        margin-top: 5px;
        font-weight: 900;
        font-size: 1.4rem;
        color: #1DA1F2;
        letter-spacing: 1px;
        }

    .inputs {
    text-align: left;
    margin-top: 30px;
    }
    label, h3, button {
    display: block;
    width: 100%;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
    }
    label {
    margin-bottom: 4px;
    }
    label:nth-of-type(2) {
    margin-top: 12px;
    }
    h3::placeholder {
    color: gray;
    }
    h3{
    margin-top: 5px;
    background: #ecf0f3;
    padding: 10px;
    padding-left: 20px;
    height: 50px;
    font-size: 18px;
    border-radius: 50px;
    box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
    }
    button {
    color: white;
    margin-top: 20px;
    background: #1DA1F2;
    height: 40px;
    border-radius: 20px;
    cursor: pointer;
    font-weight: 900;
    box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
    transition: 0.5s;
    }
    button:hover {
    box-shadow: none;
    }
    a {
    position: absolute;
    font-size: 8px;
    bottom: 4px;
    right: 4px;
    text-decoration: none;
    color: black;
    background: yellow;
    border-radius: 10px;
    padding: 2px;
    }
    h1 {    
    position: absolute;
    top: 0;
    left: 0;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="brand-title">THÔNG TIN CỦA BẠN</div>
    <div class="inputs">
        <label>TÊN CỦA BẠN</label>
        <h3><?php echo $_POST["name"] ?></h3>
        <label>CÂN NẶNG </label>
        <h3><?php echo $_POST["cannang"] ?></h3>
        <label>CHIỀU CAO</label>
        <h3><?php echo $_POST["chieucao"] ?></h3>
        <label>GIỚI TÍNH</label>
        <h3><?php echo $_POST["gender"] ?></h3>
        <label>ĐIỀU KIỆN</label>
        <h3>
            <?php
                if ($_POST["gender"] == 'Male' && ($_POST["cannang"] > 50 && $_POST["chieucao"] > 160)) {
                    echo "Ban da du dieu kien ung tuyen";
                }     
                elseif ($_POST["gender"] == 'Female' && $_POST["cannang"] > 40 && $_POST["cannang"] < 70 && $_POST["chieucao"] > 150) {
                    echo "Ban da du dieu kien ung tuyen";
                } 
                else {
                    echo "Ban deo du dieu kien";
                }        
            ?>
        </h3>
        <br><button onclick="history.back();">BACK</button>
    </div> 
</div>
</body>
</html>