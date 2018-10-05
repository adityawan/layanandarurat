<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title','Layanan Darurat')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/css.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/main.css')}}">
	<style type="text/css">
		body{
			background-color:whitesmoke;
			padding-top: 70px;
			padding-bottom: 70px;
		}
		.colorFo{
			color: whitesmoke;
			font-weight: 400px;
			cursor: pointer;
		}
		.colorFo:hover{
			color:	#66CDAA;
		}
		.starter-template{
			padding: 40px 15px;
			text-align: center;
		}
		.form-horizontal{
			padding: 15px 10px;
		}
		.footer{
			padding-top: 15px;
			text-align: right;
		}
	</style>
</head>
<body>
<div class="navbar navbar-info navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{url('/')}}">Layanan Darurat</a>
		</div>
	</div>
</div>
<div class="clearfix"></div>
	<div class="col-md-4 col-md-offset-4">
		
		@if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif

		<div class="panel panel-default">
			<div class="panel-heading">
				<strong>Silahkan Login</strong>
			</div>
			{!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
				<div class="form-group">
					<label class="col-sm-4 control-label">Email</label>
					<div class="col-sm-8">
						{!! Form::text('email',null,['class'=>'form-control','placeholder'=>"Email"]) !!}
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-4 control-label">Password</label>
					<div class="col-sm-8">
						{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
					</div>
				</div>
				
				<div style="width: 100%;text-align: right;">
					<button class="btn btn-primary"><i class="fa fa-lock"></i> Masuk </button>
					<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi </button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>

<nav class="navbar navbar-default navbar-fixed-bottom">

</nav>
<script type="text/javascript" src="{{ asset('component/jquery/dist/jquery.min.js') }}"></script>	
<script type="text/javascript" src="{{ asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>	
<script type="text/javascript" src="{{ asset('component/jquery/dist/jquery.min.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>	
	<script type="text/javascript">
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});
	</script>
</body>
</html>