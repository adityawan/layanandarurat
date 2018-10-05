@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('rumah_sakit')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Rumah Sakit</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $rumah_sakit->nama }}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ $rumah_sakit->alamat }}</td>
			</tr>
			<tr>
				<td>Nomor</td>
				<td>:</td>
				<td>{{ $rumah_sakit->nomor }}</td>
			</tr>
			<!-- <tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $rumah_sakit->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat Update</td>
				<td class="col-xs-1">:</td>
				<td>{{ $rumah_sakit->updated_at }}</td>
			</tr> -->
	</table>
</div>
@stop