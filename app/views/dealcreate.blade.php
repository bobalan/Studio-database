@extends('layout')
@section('content')

{{ Form::open(array('url' => 'create')) }}
<h1>Create</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('description') }}
    {{ $errors->first('price') }}
    {{ Session::get('message') }}
</p>

<p>
    {{ Form::label('description', 'description') }}
    {{ Form::text('description', Input::old('description'), array('placeholder' => 'opis')) }}
</p>

<p>
    {{ Form::label('price', 'price') }}
    {{ Form::text('price', Input::old('price'), array('placeholder' => 'cena')) }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}

@stop