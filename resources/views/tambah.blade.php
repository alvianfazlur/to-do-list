<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoList</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <form action="/blog/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="NRP">NRP : </label>
            <input type="text" class="form-control" name="nrp">
        </div>
        <div class="form-group">
            <label for="Nama">Nama Mahasiswa : </label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="Kelas">Kelas Mahasiswa: </label>
            <input type="text" class="form-control" name="kelas">
        </div>
        <div class="form-group">
            <label for="Angkatan">Angkatan : </label>
            <input type="text" class="form-control" name="angkatan">
        </div>
        <div class="form-group">
            <label for="Angkatan">Nomor Telepon Mahasiswa : </label>
            <input type="text" class="form-control" name="telp">
        </div>
		<input class="btn btn-dark" type="submit" value="Simpan Data" required>
        <a class="btn btn-dark" href="/blog">Kembali</a>
	</form>
    </div>
</body>
</html>