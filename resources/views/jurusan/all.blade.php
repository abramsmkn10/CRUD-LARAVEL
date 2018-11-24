@extends('layouts.app')
@section('content')

<div class="container">
	<a href="{{url('jurusan/add')}}">Tambah</a>
	<table style="width: 100%">
		<thead>
			<th>Nama</th>
			<th>Jumlah Siswa</th>
			<th>Kajur</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@foreach($jurusan as $row)
				<tr>
					<td>{{$row->nama}}</td>
					<td>{{$row->jumlah_siswa}}</td>
					<td>{{$row->kajur}}</td>
					<td><a href="{{url('jurusan/edit/'.$row->id)}}">Edit</a></td>
					<td><a onclick="return confirm('Apakah anda yakin ingin menghapus jurusan{{$row->nama}}?')" href="{{url('jurusan/delete/'.$row->id)}}">Delete</a></td>
				</tr>
			@endforeach
		</tbody>
		
	</table>
</div>
@endsection