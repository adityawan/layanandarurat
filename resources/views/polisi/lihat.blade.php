@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('polisi')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Polisi</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $polisi->nama }}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ $polisi->alamat }}</td>
			</tr>
			<tr>
				<td>Nomor</td>
				<td>:</td>
				<td>{{ $polisi->nomor }}</td>
			</tr>
			<!-- <tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $polisi->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat Update</td>
				<td class="col-xs-1">:</td>
				<td>{{ $polisi->updated_at }}</td>
			</tr> -->
	</table>
</div>
@stop