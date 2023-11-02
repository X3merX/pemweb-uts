<!DOCTYPE html>
<html>

<head>
    <title>Edit data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section class="mt-5 container p-5">
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from mahasiswa where id_mahasiswa=$id");
        $d = mysqli_fetch_array($data)
        ?>
        <section class="mb-5 text-dark rounded">Edit Data Mahasiswa</section>
        <form method="post" action="update_mahasiswa_data.php">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input value="<?= $d['id_mahasiswa']; ?>" class="d-none" required type="text" placeholder="name " name="id_mahasiswa" class="form-control">
                    <input value="<?= $d['name']; ?>" required type="text" placeholder="name" name="name" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input value="<?= $d['kelas']; ?>" required type="text" name="kelas" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">umur</label>
                <div class="col-sm-10">
                    <input value="<?= $d['umur']; ?>" required type="text" name="umur" class="form-control">
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2" style="width: 100%;">
                <a href="mahasiswaS_index.php" class="btn btn-danger float-end">Cancel</a>
                <button class="btn btn-primary float-end" type="submit">Submit</button>
            </div>
        </form>
    </section>
</body>

</html>