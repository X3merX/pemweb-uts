<?php
include "koneksi.php";

$id = $_POST['id_mahasiswa'];
$name = $_POST['name'];
$kelas =  $_POST['kelas'];
$umur = $_POST['umur'];

$sql = "UPDATE mahasiswa
SET name = '$name', kelas = '$kelas', umur = $umur
WHERE id_mahasiswa = $id";


if (mysqli_query($koneksi, $sql)) {
    header("Location: mahasiswa_index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
