<?php
include "koneksi.php";

$id = $_POST['id_matakuliah'];
$matakuliah = $_POST['matakuliah'];
$hari =  $_POST['hari'];
$jam =  $_POST['jam'];
$ruang = $_POST['ruang'];

$sql = "UPDATE matakuliah
SET matakuliah = '$matakuliah', hari = '$hari', jam = '$jam', ruang = $ruang
WHERE id_matakuliah = $id";


if (mysqli_query($koneksi, $sql)) {
    header("Location: matakuliah.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
