<html>
<head>
    <title>Studio Balkandji</title>
{{'Welcome'}}
{{Auth::user()->name}}
</head>
<a class="btn btn-info" href="{{URL::to('/create')  }}">Нова Сделка</a>
<a class="btn btn-info" href="{{ URL::to('/deal')  }}">Всички Сделки</a>
<a class="btn btn-info" href="{{ URL::to('/filter')  }}">Длъжници</a>
<a class="btn btn-Success" href="{{URL::to('/income')   }}">Приходи</a>
<a class="btn btn-danger" href="{{URL::to('/expense')  }}">Разходи</a>
<a class="btn btn-info" href="{{URL::to('logout')   }}">Изход</a>
<p>Current time: {{ date('j M, Y, g:i A') }}  </p>

<body>
</body>
</html>
<meta charset="utf-8">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap
/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
           .form { max-width: 60px; min-width: 30px;}
           .formdescr { max-width: 480px; min-width: 130px;}
           .formclient { max-width: 120px; min-width: 30px;}
           .pagination ul{margin: 0;padding: 0;text-align: left;}
           .pagination li{list-style-type: none;display: inline;padding-left: 1pc;padding-bottom: 1px;font-size: 16px;}
        </style>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script> 
<script type="text/javascript"> 
$(document).ready(function() { $("#table1").tablesorter(); }); 
</script>
    </head>
    <body>
        <div class="container">
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif
            
            @yield('content')
        </div>
    </body>
</html>