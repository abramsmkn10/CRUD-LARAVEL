<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function profile($nama)
    {
    	echo "profile".$nama;
    }
    public function profileview()
    {
    	$data['nama'] = "Abdurrahman";
    	$data['kelas'] = "XI-RPL";
    	$data['matpel'] = [
    		'Bahasa Indonesia',
    		'Matematika',
    		'Ipa',
    		'Bahasa INdonesia'
    	];
    	$data['tugas'] = [];
    	return view['profile']->with($data);

    }
    public function create_function($nama)
    {
    	$jurusan = new Jurusan;
    	$jurusan->nama = $nama;
    	$jurusan->jumlah_siswa = rand (0, 30);
    	$jurusan->kajur = uniqid();
    	$jurusan->save();

    	return redirect(url('view_jurusan'));
    }
    public function create_function($nama, $id)
    {
    	$jurusan = new Jurusan;
    	$jurusan->nama = $nama;
    	$jurusan->jumlah_siswa = rand (0, 30);
    	$jurusan->kajur = uniqid();
    	$jurusan->save();

    	return redirect(url('view_jurusan'));
    }
    public function delete_jurusan($id)
    {
    	Jurusan::find($id)->delete;

    	return redirect(url('view_jurusan'));
    }
    public function view_jurusan()
    {
    	$jurusan = Jurusan::get();
    	foreach ($jurusan as $key ){
    		
    		echo $key->id. " ".$key->nama. "<br>";
    	}
    }


}
