<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
 <div class="container">
	<h3>To Do List Sederhana</h3>
 
	<a class="btn btn-success" href="/blog/tambah">✍️Tambah Mahasiswa</a>
	<a class="btn btn-primary" href="/blog/tambahTodo">👀Tambah Todolist</a>
	<br/>
	<br/>
 
	<table class="table table-hover table-striped table-bordered">
		<tr>
			<th  class="table-info">Nama</th>
			<th  class="table-info">NRP</th>
			<th  class="table-info">Todo</th>
			<th  class="table-info">Keterangan</th>
			<th  class="table-info">Aktif</th>
            <th  class="table-info">Done</th>
            <th  class="table-info">Aksi</th>
		</tr>
		@foreach($todo as $l)
		<tr>
			<td hidden>{{ $l->id }}</td>
			<td>{{ $l->mahasiswa->nama}}</td>
			<td>{{ $l->mahasiswa->nrp}}</td>
			<td>{{ $l->todo }}</td>
			<td>{{ $l->ket }}</td>
            <td>
				@if ($l->is_aktif && $l->is_done==0)
					<center>🔔</center>
                @endif
			</td>
            <td>
				@if ($l->is_done)
					<center>🔕</center>
				@endif</td>
			<td>
                <a class="btn btn-warning" href="/blog/edit/{{ $l->id }}">Edit</a>
				<a class="btn btn-danger" href="/blog/hapus/{{ $l->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
</div>
</body>
</html>