<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight</title>
    <style>
        table {
            border : 1px solid black;
            border-collapse : collapse;
            margin-left : 300px;
        }
        tr , th , td {
            border : 1px solid black;
            padding : 10px 25px;
            text-align : center;
           
        }
        th {
            background-color : gray;
        }
        tr:hover {
            background: #F0F2F0;
        }
    </style>
</head>
<body>
    <?php
    require 'flights_conect.php';

    mysqli_set_charset($conn , 'UTF8');

    $sql = "SELECT * FROM flights ORDER BY id DESC";

    $result = $conn->query($sql);

    if ($result->num_rows > 0 ) {
        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Origin</th>
                <th>Des</th>
                <th>Duration</th>
                </tr>";
        for($i=0; $i<$result->num_rows; $i++)
        // in ra tat ca du lieu trong CSDL
        {
            $row = $result->fetch_assoc();
            echo "<tr>";
             echo       "<td>" . $row["id"] . "</td>";
               echo     "<td>" . $row["namef"] . "</td>";
                   echo "<td>" . $row["origin"] . "</td>";
                  echo  "<td>" . $row["destination"] . "</td>";
                 echo   "<td>" . $row["duration"] . "</td>";
 
            // doc tung hang du lieu roi luu vao bien $row
            // echo "<td>" . $row["id"]. "</td>"
            //     "Flight Name :" . $row["namef"].
            //     "flight Origin : " . $row["origin"].
            //     "flight Destination : " . $row["destination"].
            //     "flight Duration : " . $row["duration"]. "<br>";
            echo "</tr>";
        }
    }
    else {
        echo "No Flight in Database";
    }
    $conn->close();
    echo "</table>";
?>
</body>
</html>
