<!DOCTYPE html>

<head>
    <title>tampil data</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="src/assets/app.css">
    <!-- <link rel="stylesheet" href="src/assets/app.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section class="mt-5 glass container p-5">
        <td>
        <td>
            <a href="mahasiswa.php" class="btn btn-success">Tabel Mahasiswa</a>
            <a href="matakuliah.php" class="btn btn-success">Tabel Matakuliah</a>
        </td>
        <td>
            <br>
            <a href="create_matakuliah_data.php" class="btn btn-primary">Tambah</a>
            <br>
        </td>
        <table class="table table-striped">
            <tr>
                <th>no</th>
                <th>matakuliah</th>
                <th>hari</th>
                <th>jam</th>
                <th>ruang</th>
                <th>Action</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from matakuliah");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?= $d['matakuliah']; ?></td>
                    <td><?php echo $d['hari']; ?></td>
                    <td><?php echo $d['jam']; ?></td>
                    <td><?php echo $d['ruang']; ?></td>
                    <td>
                        <a href="destroy_matakuliah_data.php?id=<?php echo $d['id_matakuliah'] ?>" class="btn btn-danger">HAPUS</a>
                        <a role="button" class="btn btn-primary" href="edit_matakuliah_data.php?id=<?php echo $d['id_matakuliah']; ?>">UBAH</a> </button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </section>
</body>

</html>