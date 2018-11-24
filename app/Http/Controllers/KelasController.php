<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function add()
	{
		$data['kelas'] = \App\Kelas::all();
		$data['jurusan'] = \App\Jurusan::all();

		return view('kelas.add')->with($data);

	}	
	public function save(Request $r)
	{
		$siswa = new \App\Kelas;
		$siswa->jurusan_id = -0;
		$siswa->nama = $r->input('name');
		$siswa->save();

		return redirect(url('kelas/all'));
	}
	public function index()
	{
		$data['kelas'] = \App\Kelas::all();

		return view('kelas.all')->with($data);

	}
	public function edit($id)
	{
		$data['kelas'] = \App\Kelas::find($id);
		$data['jurusan'] = \App\Jurusan::all();

		return view('kelas.edit')->with($data);
	}
	public function update(Request $r)
	{
		$siswa = \App\Kelas::find($r->input('id'));
		$siswa->jurusan_id = -0;
		$siswa->nama = $r->input('name');
		$siswa->save();

		return redirect(url('kelas/all'));
	}
	public function delete($id)
	{
		\App\Kelas::find($id)->delete();
		return redirect(url('kelas/all'));
	}
}
