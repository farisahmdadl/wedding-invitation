<?php
include_once '../dbh.inc.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Atina & Faris</title>
    <link rel="icon" href="../img/Flower-icon.png">
</head>

<body>
    <table id="customers">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Pesan</th>
        </tr>
        <?php
        $sql = "SELECT * FROM data;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        $i = 1;

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>"
                    . "<td>" . $i . "</td>" .
                    "<td>" . $row['nama'] . "</td>" .
                    "<td>" . $row['kehadiran'] . "</td>" .
                    "<td>" . $row['pesan'] . "</td>" .
                    "</tr>";
                $i++;
            }
        }
        ?>
    </table>

</body>

</html>