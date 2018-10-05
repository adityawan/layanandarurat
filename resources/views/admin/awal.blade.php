@extends('master')
@section('container')
<div class="panel panel-default">
		<div class="panel-heading">
				<strong>Seluruh Data admin</strong>
				
				<div class="clearfix"></div>
		</div>
		<table class="table">
						<thead>
								<tr>
										<th>No.</th>
										<th>Username</th>
										<th>Password</th>
										<th>Email</th>
										<th>Aksi</th>
								</tr>
						</thead>
						<tbody>
								<?php $x=1;?>
								@foreach ($data as $admin)
										<tr>
										<td>{{ $x++ }}</td>
										<td>{{ $admin->username or 'username kosong' }} </td>
										<td>{{ $admin->password or 'password kosong' }} </td>
										<td>{{ $admin->email or 'email kosong' }} </td>
										<td>
											<div class="btn-group" role="group">
												<a href="{{ url('admin/edit/'.$admin->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
												<a href="{{ url('admin/hapus/'.$admin->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
											</td>
										</tr>
										@endforeach
						</tbody>
					</table>
					</div>
					@stop
