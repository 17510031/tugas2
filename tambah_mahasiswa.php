<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Perpustakaan</title>
</head>
<body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="proses_tambah_mhs.php" method="POST">
        Nama :
        <input type="text" name="nama" value="" class="form-control">
        NIM : 
        <input type="text" name="nim" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah mahasiswa" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

