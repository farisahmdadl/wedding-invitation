<?php
include_once 'dbh.inc.php';

$nama = $_POST['nama'];
$kehadiran = $_POST['kehadiran'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO data (nama, kehadiran, pesan)
VALUES ('$nama', '$kehadiran', '$pesan')";

mysqli_query($conn, $sql);

header("Location: submit-page.php");
