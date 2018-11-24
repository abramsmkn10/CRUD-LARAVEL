<?php
namespace App\Http\Controllers;

use \App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
	public function add()
	{
		$data['kelas'] = \App\Kelas::all();
		$data['jurusan'] = \App\Jurusan::all();

		return view('siswa.add')->with($data);

	}	
	public function save(Request $r)
	{
		$siswa = new \App\Siswa;
		$siswa->jurusan_id = 0;
		$siswa->kelas_id = -0;
		$siswa->nama = $r->input('name');
		$siswa->save();

		return redirect(url('siswa/all'));
	}
	public function index()
	{
		$data['siswa'] = \App\Siswa::all();

		return view('siswa.all')->with($data);

	}
	public function edit($id)
	{
		$data['siswa'] = \App\Siswa::find($id);
		$data['jurusan'] = \App\Jurusan::all();
		$data['kelas'] = \App\Kelas::all();

		return view('siswa.edit')->with($data);
	}
	public function update(Request $r)
	{
		$siswa = \App\Siswa::find($r->input('id'));
		$siswa->jurusan_id = 0;
		$siswa->kelas_id = 0;
		$siswa->nama = $r->input('name');
		$siswa->save();

		return redirect(url('siswa/all'));
	}
	public function delete($id)
	{
		\App\Siswa::find($id)->delete();
		return redirect(url('siswa/all'));
	}
}