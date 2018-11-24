@extends('layouts.app')

@section('content')
<div class="container">
	<form method="POST" action="{{url('siswa/save')}}">
		{{csrf_field()}}
		<table style="width: 100%;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><select>
					@foreach($jurusan as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><select>
					@foreach($kelas as $row)
					<option value="{{$row->id}}">{{$row->name}}</option>
					@endforeach
				</select></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>
			</tr>
		</table>
	</form>
</div>
@endsection