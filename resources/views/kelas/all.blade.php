@extends('layouts.app')
@section('content')

<div class="container">
	<a href="{{url('kelas/add')}}">Tambah</a>
	<table style="width: 100%">
		<thead>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@foreach($kelas as $row)
				<tr>
					<td>{{$row->nama}}</td>
					<td>{{$row->jurusan_id}}</td>
					<td><a href="{{url('kelas/edit/'.$row->id)}}">Edit</a></td>
					<td><a onclick="return confirm('Apakah anda yakin ingin menghapus kelas{{$row->nama}}?')" href="{{url('kelas/delete/'.$row->id)}}">Delete</a></td>
				</tr>
			@endforeach
		</tbody>
		
	</table>
</div>
@endsection