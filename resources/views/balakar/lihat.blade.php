@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('balakar')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Balakar</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $balakar->nama }}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ $balakar->alamat }}</td>
			</tr>
			<tr>
				<td>Nomor</td>
				<td>:</td>
				<td>{{ $balakar->nomor }}</td>
			</tr>
			<!-- <tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $balakar->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat Update</td>
				<td class="col-xs-1">:</td>
				<td>{{ $balakar->updated_at }}</td>
			</tr> -->
	</table>
</div>
@stop