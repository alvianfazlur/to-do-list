<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Todo;
use \App\Models\Mahasiswa;

class BlogController extends Controller
{
    public function home(){
        $todo = Todo::all();
        return view('home',['todo' => $todo]);
    }
    public function hapus($id){
	    // menghapus data todolist berdasarkan id yang dipilih
	    DB::table('todos')->where('id',$id)->delete();
		
	    // alihkan halaman ke halaman todolist
	    return redirect('/blog');
    }
    public function edit($id){
	    $todo = Todo::where('id',$id)->get();
		
	    // alihkan halaman ke halaman todolist
	    return view('edit',['todo' => $todo]);
    }
    public function tambah(){
	    // memanggil view tambah
	    return view('tambah');
    }
    public function tambahTodo(){
        $mhs = Mahasiswa::all();
        return view('tambahTodo',['mhs' => $mhs]);
    }
    public function store(Request $request){
        // insert data ke table todolist
        DB::table('Mahasiswas')->insert([
            'nrp' => $request->nrp,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'angkatan' => $request->angkatan,
            'no_tlp' => $request->telp
        ]);
	// alihkan halaman ke halaman todolist
	return redirect('/blog');
    }
    public function store1(Request $request){
        // insert data ke table todolist
        DB::table('Todos')->insert([
            'mahasiswa_id' => $request->idM,
            'todo' => $request->todo,
            'ket' => $request->keterangan,
            'is_aktif' => $request->aktif,
            'is_done' => $request->selesai
        ]);
	// alihkan halaman ke halaman todolist
	return redirect('/blog');
    }
    public function update(Request $request){
        // insert data ke table todolist
        Todo::where('id',$request->id)->update([
            'todo' => $request->todo,
            'ket' => $request->keterangan,
            'is_done' => $request->status
        ]);
	// alihkan halaman ke halaman todolist
	return redirect('/blog');
    }
}
