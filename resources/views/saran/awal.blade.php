@extends('master')
@section('container')
<div class="panel panel-default">
		<div class="panel-heading">
				<strong>Seluruh Data Saran</strong>
				
				<div class="clearfix"></div>
		</div>
		<table class="table">
						<thead>
								<tr>
										<th>No.</th>
										<th>ID Pengguna</th>
										<th>Isi</th>
										<th>Aksi</th>
								</tr>
						</thead>
						<tbody>
								
								@foreach ($data as $saran)
										<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $saran->pengguna_id }} </td>
										<td>{{ $saran->isi }} </td>
										<td>
											<div class="btn-group" role="group">
												<!-- <a href="{{ url('saran/edit/'.$saran->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a> -->
												<!-- <a href="{{ url('saran/'.$saran->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a> -->
												<a href="{{ url('saran/hapus/'.$saran->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
											</td>
										</tr>
										@endforeach
						</tbody>
					</table>
					</div>
					@stop
