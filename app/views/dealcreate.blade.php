@extends('layout')
@section('content')
{{ Form::open(array('url' => 'create')) }}

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
        <th style="width: 10%">Клиент</th>
        <th style="width: 35%">Описание</th>
        <th style="width: 8%">Цена</th>
        <th style="width: 8%">Каса</th>
        <th style="width: 8%">Банка</th>
        <th style="width: 6%">Butt1</th>
        <?php $clients=Deal::orderBy('client', 'asc')->lists('client','client'); ?>
            </tr>
        </thead>
        <tbody>
          <tr>
          <td>{{ Form::select('client', $clients, Input::old('client'), array('placeholder' => 'Клиент','class'=>'formclient')) }}</td>
          <td>{{ Form::textarea('description',Input::old('description') , array('placeholder' => 'Описание', 'size'=>'100x4')) }}</td>
          <td>{{ Form::text('price', Input::old('price'), array('placeholder' => 'Уговорена Цена','class'=>'form')) }}</td>
          <td>{{ Form::text('cash', Input::old('cash'), array('placeholder' => 'Каса','class'=>'form')) }}</td>
          <td>{{ Form::text('bank', Input::old('bank'), array('placeholder' => 'Банка','class'=>'form')) }}</td>
          <td>{{ Form::submit('Submit!', array('class'=>'btn btn-info')); }}    </td>
                </tr>
{{ Form::close() }}
@stop