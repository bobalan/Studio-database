@extends('layout')
@section('content')
<h1>Сделки</h1>
@if ($deals->count())
<style>
 table { table-layout: fixed; }
 table th, table td { overflow: hidden; }
</style>
@if (!isset($sum)) <?php $sum=0; ?> @endif

{{$deals->links()}}

<table width="100%" id="table1" class="table table-striped table-bordered table-hover">
        <thead>
            
            <tr>
                
        <th style="width: 6%">Номер</th>
        <th style="width: 10%">Клиент</th>
        <th style="width: 28%">Описание</th>
        <th style="width: 10%">Цена</th>
        <th style="width: 10%">Каса </br> {{money($sum[0])}}</th>
        <th style="width: 10%">Банка </br> {{money($sum[1])}}</th>
        <th style="width: 10%">Баланс </br> {{money($sum[2])}}</th>
        <th style="width: 10%">Посл. редакция</th>
        <th style="width: 6%">Butt1</th>
        <th style="width: 6%">Butt2</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($deals as $deal)
                <tr>
          <td> {{ $deal->id }}</td>
          <td>{{ $deal->client }}</td>
          <td>{{ $deal->description }}</td>
          <td>{{ money($deal->price) }}</td>
          <td>{{ money($deal->cash) }}</td>
          <td>{{ money($deal->bank) }}</td>
          <td>{{ money($deal->balance) }}</td>
          <td>{{ $deal->updated_at->format('j-M,G:i') }}</td>
          
<td>  <a class="btn btn-info" href="{{ URL::to('/deal/'.$deal->id) }}">Edit</a> </td>
<td>  <a class="btn btn-danger" href="{{ URL::to('/destroy/'.$deal->id) }}">Del</a> </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
@else
    There are no deals
@endif

@stop 
    
