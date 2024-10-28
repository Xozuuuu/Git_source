<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown List Năm</title>
</head>
<body>
    <form method="post" action="">
        Ngày: <select name="day">
            <?php 
            $selectedDay = isset($_POST['day']) ? $_POST['day'] : '';
            for ($day = 1; $day <= 31; $day++): ?>
                <option value="<?= $day; ?>" <?= ($day == $selectedDay) ? 'selected' : ''; ?>><?= $day; ?></option>
            <?php endfor; ?>
        </select>
        
        Tháng: <select name="month">
            <?php 
            $selectedMonth = isset($_POST['month']) ? $_POST['month'] : '';
            for ($month = 1; $month <= 12; $month++): ?>
                <option value="<?= $month; ?>" <?= ($month == $selectedMonth) ? 'selected' : ''; ?>><?= $month; ?></option>
            <?php endfor; ?>
        </select>
        
        Năm: <select name="year">
            <?php
            $today = getdate();
            $curYear = $today["year"];
            $selectedYear = isset($_POST['year']) ? $_POST['year'] : '';
            for ($year = 1900; $year <= $curYear; $year++): ?>
                <option value="<?= $year; ?>" <?= ($year == $selectedYear) ? 'selected' : ''; ?>><?= $year; ?></option>
            <?php endfor; ?>
        </select>
        
        <input type="submit" value="Gửi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            echo "Bạn đã chọn: Ngày $day, Tháng $month, Năm $year";
        } else {
            echo "Vui lòng chọn đầy đủ thông tin.";
        }
    }
    ?>
</body>
</html>
