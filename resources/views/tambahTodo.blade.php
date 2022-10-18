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
        <h3>Daftar Mahasiswa</h3>
    <table class="table table-stripped table-borderless table-bordered">
		<tr>
			<th class="table-info">Id</th>
			<th class="table-info">NRP</th>
			<th class="table-info">Nama</th>
			<th class="table-info">Kelas</th>
			<th class="table-info">Angkatan</th>
            <th class="table-info">Nomor Telepon</th>
		</tr>
		@foreach($mhs as $m)
		<tr>
			<td>{{ $m->id }}</td>
			<td>{{ $m->nrp}}</td>
			<td>{{ $m->nama}}</td>
			<td>{{ $m->kelas}}</td>
            <td>{{ $m->angkatan}}</td>
            <td>{{ $m->no_tlp}}</td>
        </tr>
		@endforeach
	</table>
    <h3>Form Todolist Mahasiswa</h3>
    <form action="/blog/store1" method="post">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="idM">Id Mahasiswa : </label>
            <input type="text" class="form-control" name="idM" required>
        </div>
        <div class="form-group">
            <label for="todo">Todo : </label>
            <input type="text" class="form-control" name="todo" required>
        </div>
        <div class="form-group">
            <label for="Keterangan">Keterangan: </label>
            <input type="text" class="form-control" name="keterangan" required>
        </div>
        <div class="form-group">
            <label for="Aktif">Aktif : </label>
            <input type="text" class="form-control" name="aktif" required>
        </div>
        <div class="form-group">
            <label for="Selesai">Selesai : </label>
            <input type="text" class="form-control" name="selesai" required>
        </div>
		<input class="btn btn-dark" type="submit" value="Simpan Data" required>
        <a class="btn btn-dark" href="/blog">Kembali</a>
	</form>
    </div>
</body>
</html>