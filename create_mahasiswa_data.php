<!DOCTYPE html>
<html>

<head>
    <title>tambah data</title>
    <link rel="stylesheet" href="src/assets/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <section class="mt-5 glass container p-5">
        <section class="mb-5  text-dark rounded">Tambah Data Mahasiswa</section>
        <form method="post" action="store_mahasiswa_data.php">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">name</label>
                <div class="col-sm-10">
                    <input required type="text" placeholder="name" name="name" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">kelas</label>
                <div class="col-sm-10">
                    <input required type="text" placeholder="kelas" name="kelas" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">umur</label>
                <div class="col-sm-10">
                    <input required type="text" placeholder="umur" name="umur" class="form-control" id="inputPassword">
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2" style="width: 100%;">
                <a href="mahasiswa.php" class="btn btn-danger float-end">Cancel</a>
                <button class="btn btn-primary float-end" type="submit">Submit</button>
            </div>

        </form>
    </section>

</body>

</html>