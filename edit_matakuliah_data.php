<!DOCTYPE html>
<html>

<head>
    <title>Edit data</title>
    <link rel="stylesheet" href="src/assets/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section class="mt-5 glass container p-5">
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from matakuliah where id_matakuliah=$id");
        $d = mysqli_fetch_array($data)
        ?>
        <section class="mb-5 text-dark rounded">Edit Data Matakuliah</section>
        <form method="post" action="update_matakuliah_data.php">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">matakuliah</label>
                <div class="col-sm-10">
                    <input value="<?= $d['id_matakuliah']; ?>" class="d-none" required type="text" placeholder="matakuliah" name="id_matakuliah" class="form-control">
                    <input value="<?= $d['matakuliah']; ?>" required type="text" placeholder="ubah nama matakuliah" name="matakuliah" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">hari</label>
                <div class="col-sm-10">
                    <input value="<?= $d['hari']; ?>" required type="text" name="hari" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">jam</label>
                <div class="col-sm-10">
                    <input value="<?= $d['hari']; ?>" required type="text" name="jam" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">ruang</label>
                <div class="col-sm-10">
                    <input value="<?= $d['ruang']; ?>" required type="text" name="ruang" class="form-control">
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2" style="width: 100%;">
                <a href="matakuliah.php" class="btn btn-danger float-end">Cancel</a>
                <button class="btn btn-primary float-end" type="submit">Submit</button>
            </div>
        </form>
    </section>
</body>

</html>