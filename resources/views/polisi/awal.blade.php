@extends('master')
@section('container')
<div class="panel panel-default">
		<div class="panel-heading">
				<strong>Seluruh Data polisi</strong>
				<a href="{{url('polisi/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>polisi</a>
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
								
								@foreach ($data as $polisi)
										<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $polisi->nama }} </td>
										<td>{{ $polisi->alamat }} </td>
										<td>{{ $polisi->nomor }} </td>
										
										<td>
											<div class="btn-group" role="group">
												<a href="{{ url('polisi/edit/'.$polisi->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
												<a href="{{ url('polisi/'.$polisi->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
												<a href="{{ url('polisi/hapus/'.$polisi->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
											</td>
										</tr>
										@endforeach
						</tbody>
					</table>
					</div>
					@stop
