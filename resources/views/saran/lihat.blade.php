@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('saran')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data Saran</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $saran->pengguna_id }}</td>
			</tr>
			<tr>
				<td>Isi</td>
				<td>:</td>
				<td>{{ $saran->isi }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $saran->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat Update</td>
				<td class="col-xs-1">:</td>
				<td>{{ $saran->updated_at }}</td>
			</tr>
	</table>
</div>
@stop