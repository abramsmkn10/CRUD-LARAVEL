@extends('layouts.app')

@section('content')
<div class="container">
	<form method="POST" action="{{url('jurusan/update')}}">
		<input type="hidden" name="id" value="{{$jurusan->id or ''}}">
		{{csrf_field()}}
		<table style="width: 100%">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name" value="{{$jurusan->nama}}"></td>
			</tr>
			<tr>
				<td>Jumlah Siswa</td>
				<td><input type="text" name="jumlah_siswa1" value="{{$jurusan->jumlah_siswa}}"></td>
			</tr>
			<tr>
				<td>Kajur</td>
				<td><input type="text" name="kajur1" value="{{$jurusan->kajur}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="text">Perbarui</button></td>
			</tr>
		</table>
	</form>
</div>
@endsection