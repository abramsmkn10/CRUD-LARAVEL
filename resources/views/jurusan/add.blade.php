@extends('layouts.app')

@section('content')
<div class="container">
	<form method="POST" action="{{url('jurusan/save')}}">
		{{csrf_field()}}
		<table style="width: 100%;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Jumlah Siswa</td>
				<td><input type="text" name="jumlah_siswa1"></td>
			</tr>
			<tr>
				<td>Kajur</td>
				<td><input type="text" name="kajur1"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>
			</tr>
		</table>
	</form>
</div>
@endsection