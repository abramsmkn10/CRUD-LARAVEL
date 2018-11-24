<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function add()
	{
		$data['kelas'] = \App\Kelas::all();
		$data['jurusan'] = \App\Jurusan::all();

		return view('jurusan.add')->with($data);

	}	
	public function save(Request $r)
	{
		$siswa = new \App\Jurusan;
		$siswa->kajur = 0;
		$siswa->jumlah_siswa = 0;
		$siswa->nama = $r->input('name');
		$siswa->save();

		return redirect(url('jurusan/all'));
	}
	public function index()
	{
		$data['jurusan'] = \App\Jurusan::all();

		return view('jurusan.all')->with($data);

	}
	public function edit($id)
	{
		$data['jurusan'] = \App\Jurusan::find($id);
		$data['siswa'] = \App\Siswa::all();
		$data['kelas'] = \App\Kelas::all();

		return view('jurusan.edit')->with($data);
	}
	public function update(Request $r)
	{
		$siswa = \App\Jurusan::find($r->input('id'));
		$siswa->kajur = 0;
		$siswa->jumlah_siswa = 0;
		$siswa->nama = $r->input('name');
		$siswa->save();

		return redirect(url('jurusan/all'));
	}
	public function delete($id)
	{
		\App\Jurusan::find($id)->delete();
		return redirect(url('jurusan/all'));
	}
}
