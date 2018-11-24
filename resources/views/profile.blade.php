Hello Views

Nama 	: {{$nama}}
Kelas 	: {{$kelas}}

<br>

@foreach($matpel as $row)

	{{$row}}<br>
@endforeach

<br>

@forelse($tugas as $row)
	{{$row}}
@empty
	No Data
@endforelse

<br>

@for($i=0;$i<sizeof($matpel);$i++)
	{{$matpel[$i]}}<br>
@endfor

<br>