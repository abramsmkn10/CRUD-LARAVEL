@extends('layouts.app')

@section('content')
<div class="container">
	<form method="POST" action="{{url('kelas/update')}}">
		<input type="hidden" name="id" value="{{$kelas->id or ''}}">
		{{csrf_field()}}
		<table style="width: 100%">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name" value="{{$kelas->nama}}"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>
					<select>
						@foreach($jurusan as $row)
						<option value="{{$row->id}}">{{$row->nama}}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><button type="text">Perbarui</button></td>
			</tr>
		</table>
	</form>
</div>
@endsection