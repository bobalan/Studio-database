<html>
<head>
    <title>Studio Balkandji</title>
{{'Welcome'}}
{{Auth::user()->name}}


</head>

<a href="{{ URL::to('create') }}">New Deal</a>
<a href="{{ URL::to('/') }}">List of the deals</a>
<a href="{{ URL::to('logout') }}">Logout</a>
<p>Current time: {{ date('F j, Y, g:i A') }}  </p>

<body>
    
</body>
</html>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap
/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
            
        </style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script> 
<script type="text/javascript"> 
$(document).ready(function() { 
  $("#table1").tablesorter(); 
}); 
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