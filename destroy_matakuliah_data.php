<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
if (mysqli_query($koneksi, "delete from matakuliah where id_matakuliah='$id'")) {
    header("location: matakuliah.php");
}

// mengalihkan halaman kembali ke index.php
