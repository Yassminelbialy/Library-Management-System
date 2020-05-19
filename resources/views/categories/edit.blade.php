@extends('layouts.nav')
@section('content')
    <style>
        label{
            font: 18px bold;
        }
    </style>
    <audio class="bell" src="bell.mp3"></audio>
    <div class="container mt-5">
        <h1 style="text-align: center">New Category</h1>
        {!! Form::model($categories,['route' => ['categories.update',$categories],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name', ['class' => 'awesome']); !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'name....'] ) !!}
        </div>


        <div style="margin-left:520px">
            {!! Form::submit('Edit',['class'=>'btn btn-dark']); !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection