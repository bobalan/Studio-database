@extends('layout')
@section('content')
{{ Form::open(array('url' => '/update/'.$deal->id)) }}
<p>
<td> {{ $errors->first('client') }} </td>
<td> {{ $errors->first('description') }} </td>
<td> {{ $errors->first('price') }} </td>
<td> {{ $errors->first('cash') }} </td>
<td> {{ $errors->first('bank') }} </td>
</p>
<table width="100%" id="table1" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
        <th style="width: 6%">Номер</th>
        <th style="width: 10%">Клиент</th>
        <th style="width: 30%">Описание</th>
        <th style="width: 10%">Цена</th>
        <th style="width: 10%">Каса</th>
        <th style="width: 10%">Банка</th>
        <th style="width: 10%">Баланс</th>
        <th style="width: 10%">Посл. редакция</th>
        <th style="width: 6%">Butt1</th>
            </tr>
        </thead>

        <tbody>
           
          <tr>
          <td>{{$deal->id}} </td>
          <td>{{ Form::text('client', value($deal->client ), array('placeholder' => $deal->client, 'class'=>'formclient')) }}</td>
          <td>{{ Form::textarea('description', value($deal->description ), array('placeholder' => $deal->description, 'size'=>'100x4')) }}</td>
          <td>{{ Form::text('price', value($deal->price ), array('placeholder' => $deal->price, 'class'=>'form'))  }}</td>
          <td>{{ Form::text('cash',value($deal->cash) , array('placeholder' => 'Сума по Каса','class'=>'form')) }}</td>
          <td>{{ Form::text('bank',value($deal->bank) , array('placeholder' => 'Сума по Банка','class'=>'form')) }}</td>
          <td>{{ money($deal->balance) }}</td>
          <td>{{ $deal->updated_at->format('j-M, G:i') }}</td>
          
          <td>{{ Form::submit('Submit!', array('class'=>'btn btn-info')); }}    </td>
                </tr>






{{ Form::close() }}

@stop