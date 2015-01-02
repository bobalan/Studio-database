@extends('layout')

@section('content')
<h1>Сделки</h1>

@if ($deals->count())
    <table id="table1" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
        <th>Номер</th>
        <th>Клиент</th>
        <th>Описание</th>
        <th>Цена {{money(sum($deals))}}</th>
        <th>Каса {{money(sumcash($deals))}}</th>
        <th>Банка {{money(sumbank($deals))}}</th>
        <th>Модифицирана на</th>
        <th>Butt1</th>
        <th>Butt2</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($deals as $deal)
          <tr>
          <td>{{ $deal->id }}</td>
          <td>{{ $deal->client }}</td>
          <td>{{ $deal->description }}</td>
          <td>{{ money($deal->price) }}</td>
          <td>{{ money($deal->cash) }}</td>
          <td>{{ money($deal->bank) }}</td>
          <td>{{ $deal->updated_at->format('j-M-y, g:i') }}</td>
          
 <td>
     <a class="btn btn-info" href="{{ URL::to('/deal/'.$deal->id) }}">Edit</a>
     
  <td>
     <a class="btn btn-danger" href="{{ URL::to('/destroy/'.$deal->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    There are no users
@endif

@stop 
    
