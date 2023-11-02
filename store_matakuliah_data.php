<?php
include "koneksi.php";

$matakuliah = $_POST['matakuliah'];
$hari =  $_POST['hari'];
$jam =  $_POST['jam'];
$ruang = $_POST['ruang'];

$sql = "INSERT INTO matakuliah (matakuliah, hari, jam, ruang)
 VALUES ('$matakuliah', '$hari', '$jam','$ruang')";

if (mysqli_query($koneksi, $sql)) {
    header("Location: matakuliah.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
