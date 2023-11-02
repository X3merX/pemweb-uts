<?php
include "koneksi.php";


$name = $_POST['name'];
$kelas =  $_POST['kelas'];
$umur = $_POST['umur'];

$sql = "INSERT INTO mahasiswa (name, kelas, umur)
 VALUES ('$name', '$kelas', '$umur')";


if (mysqli_query($koneksi, $sql)) {
    header("Location: mahasiswa_index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
