@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('pemadam_kebakaran')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data pemadam_kebakaran</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $pemadam_kebakaran->nama }}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>{{ $pemadam_kebakaran->alamat }}</td>
			</tr>
			<tr>
				<td>Nomor</td>
				<td>:</td>
				<td>{{ $pemadam_kebakaran->nomor }}</td>
			</tr>
			<!-- <tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $pemadam_kebakaran->created_at }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat Update</td>
				<td class="col-xs-1">:</td>
				<td>{{ $pemadam_kebakaran->updated_at }}</td>
			</tr> -->
	</table>
</div>
@stop