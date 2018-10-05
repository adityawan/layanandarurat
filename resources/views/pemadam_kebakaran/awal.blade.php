@extends('master')
@section('container')
<div class="panel panel-default">
		<div class="panel-heading">
				<strong>Seluruh Data pemadam_kebakaran</strong>
				<a href="{{url('pemadam_kebakaran/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>pemadam_kebakaran</a>
				<div class="clearfix"></div>
		</div>
		<table class="table">
						<thead>
								<tr>
										<th>No.</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Nomor</th>
										<th>Aksi</th>
								</tr>
						</thead>
						<tbody>
								
								@foreach ($data as $pemadam_kebakaran)
										<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $pemadam_kebakaran->nama }} </td>
										<td>{{ $pemadam_kebakaran->alamat }} </td>
										<td>{{ $pemadam_kebakaran->nomor }} </td>
										<td>
											<div class="btn-group" role="group">
												<a href="{{ url('pemadam_kebakaran/edit/'.$pemadam_kebakaran->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
												<!-- <a href="{{ url('pemadam_kebakaran/'.$pemadam_kebakaran->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a> -->
												<a href="{{ url('pemadam_kebakaran/hapus/'.$pemadam_kebakaran->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
											</td>
										</tr>
										@endforeach
						</tbody>
					</table>
					</div>
					@stop
