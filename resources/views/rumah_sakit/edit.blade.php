@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('rumah_sakit')}}"><i class="fa text-default fa-chevron-left"></i></a> Perbarui Data Rumah Sakit</strong>
	</div>
	{!! Form::model($rumah_sakit,['url'=>'rumah_sakit/edit/'.$rumah_sakit->id,'class'=>'form-horizontal']) !!}
		@include('rumah_sakit.form')
		<div style="width: 100%;text-align: right; ">
		<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>	
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
		</div>
	{!! Form::close() !!}	
</div>
@stop