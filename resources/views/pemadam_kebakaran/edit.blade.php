@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('pemadam_kebakaran')}}"><i class="fa text-default fa-chevron-left"></i></a> Perbarui Data pemadam_kebakaran</strong>
	</div>
	{!! Form::model($pemadam_kebakaran,['url'=>'pemadam_kebakaran/edit/'.$pemadam_kebakaran->id,'class'=>'form-horizontal']) !!}
		@include('pemadam_kebakaran.form')
		<div style="width: 100%;text-align: right; ">
		<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>	
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
		</div>
	{!! Form::close() !!}	
</div>
@stop