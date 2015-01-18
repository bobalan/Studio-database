<html>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap
/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
<style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 20; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
            form {padding:35px; float:inside}
</style>
    <head>
<title>LOGIN</title>
    </head>
<body>
{{ Form::open(array('url' => 'login','class'=>'form',)) }}
<h1>Login</h1>
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
    {{ Session::get('message') }}
</p>
<p>
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'e-mail')) }}
</p>
<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>
<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}