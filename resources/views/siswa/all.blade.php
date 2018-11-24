@extends('layouts.app')
@section('content')

<div class="container">
	<a href="{{url('siswa/add')}}">Tambah</a>
	<table style="width: 100%">
		<thead>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Kelas</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@foreach($siswa as $row)
				<tr>
					<td>{{$row->nama}}</td>
					<td>{{$row->jurusan_id}}</td>
					<td>{{$row->kelas_id}}</td>
					<td><a href="{{url('siswa/edit/'.$row->id)}}">Edit</a></td>
					<td><a onclick="return confirm('Apakah anda yakin ingin menghapus siswa{{$row->nama}}?')" href="{{url('siswa/delete/'.$row->id)}}">Delete</a></td>
				</tr>
			@endforeach
		</tbody>
		
	</table>
</div>
@endsection