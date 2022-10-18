<!DOCTYPE html>
<html>
<head>
	<title>Todolist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
	<h3></h3>
 
	
	<br/>
	<br/>
 
	@foreach($todo as $t)
	<form action="/blog/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->id }}"> <br/>
		<div class="form-group">
            <label for="NRP">NRP : </label>
            <input type="text" class="form-control" name="nrp"value="{{ $t->mahasiswa->nrp}}" readonly>
        </div>
        <div class="form-group">
            <label for="Nama">Nama Mahasiswa : </label>
            <input type="text" class="form-control" name="nama"value="{{ $t->mahasiswa->nama}}" readonly>
        </div>
        <div class="form-group">
            <label for="angkatan">Angkatan: </label>
            <input type="text" class="form-control" name="angkatan"value="{{ $t->mahasiswa->angkatan}}" readonly>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas: </label>
            <input type="text" class="form-control" name="kelas"value="{{ $t->mahasiswa->kelas}}" readonly>
        </div>
        <div class="form-group">
            <label for="Todo">Todo : </label>
            <input type="text" class="form-control" name="todo"value="{{ $t->todo}}">
        </div>
        <div class="form-group">
            <label for="Keterangan">Keterangan : </label>
            <input type="text" class="form-control" name="keterangan"value="{{ $t->ket}}">
        </div>
        <div class="form-group">
            <label for="status">Status : </label>
            <input type="text" class="form-control" name="status"value="{{ $t->is_done}}">
        </div>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</div>
</body>
</html>