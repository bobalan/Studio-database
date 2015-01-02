@extends('layout')


@section('content')
    
    <p>{{ $deal->id }}    {{ $deal->description }} {{ $deal->price }}</p>

@stop