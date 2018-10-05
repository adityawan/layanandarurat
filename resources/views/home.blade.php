<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('page_title','Emergency Number')</title>
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
            color:  #66CDAA;
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
                <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{'home'}}">Layanan Darurat</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <ul class="dropdown-menu" aria-labelledby="dlabel">
                            <li class="divider"></li>                           
                        </ul>
                    </li>
                            <li>
                                <a href="{{url('/polisi')}}"><span class="fa fa-car"></span> Polisi</a>
                            </li>
                            <li class="dropdown">
                                 <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ambulance" aria-hidden="true"></i> Rumah Sakit<span class="caret"></span></a>
                                 <ul class="dropdown-menu" aria-labelledby="dlabel">
                                    <li>
                                        <a href="{{url('/rumah_sakit')}}"><i class="fa fa-ambulance" aria-hidden="true"></i> Rumah Sakit</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{url('/puskesmas')}}"><i class="fa fa-hospital-o" aria-hidden="true"></i> Puskesmas</a>
                                    </li>
                            </li>
                            
                        </ul>
                    </li>
                            <li class="dropdown">
                                 <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fire-extinguisher" aria-hidden="true"></i> Damkar<span class="caret"></span></a>
                                 <ul class="dropdown-menu" aria-labelledby="dlabel">
                                    <li>
                                        <a href="{{url('/pemadam_kebakaran')}}"><i class="fa fa-fire-extinguisher" aria-hidden="true"></i> Damkar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{url('/balakar')}}"><i class="fa fa-fire" aria-hidden="true"></i> Balakar</a>
                                    </li>
                            </li>
                        </ul>
                    </li>
                            <li>
                                <a href="{{url('/saran')}}"><i class="fa fa-folder" aria-hidden="true"></i> Saran</a>
                            </li>
                            <li>
                                <a href="{{url('/pengguna')}}"><i class="fa fa-user" aria-hidden="true"></i> Pengguna</a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"><span class="fa fa-child"></span> Logout</a>
                            </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        @if (Session::has('informasi'))
            <div class="alert alert-info">
                <strong>Informasi :</strong> {{Session::get('informasi')}}
            </div>  
        @endif
        @if (!is_null(Session::get('errors')) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach (Session::get('errors')->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        

        <!-- @if (Session::has('errors'))
        <div class="alert alert-danger">
            <ul>
                @foreach (Session::get('errors')->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->
        @yield('container')
        
    </div>
    <nav class="navbar navbar-default navbar-fixed-bottom">
<footer class="container">
        <!-- please dont delete this -->
        <i class="fa fa-copyright" aria-hidden="true"></i> Windy Septa Adityawan
</footer>
</nav>
    <body>
        <center>
            <h2>SELAMAT DATANG DI WEBSITE</h2>
            <h2>PELAYANAN DARURAT</h2>
        </center>
    </body>
    <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tootlip()"]');
        });
        </script>
</body>
</html>