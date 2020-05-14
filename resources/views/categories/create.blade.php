@extends('layouts.app')
@section('content')
    <style>
        label{
            font: 18px bold;
        }
    </style>
    <audio class="bell" src="bell.mp3"></audio>
    <div class="container mt-5">
        <h1 style="text-align: center">New Category</h1>
        {!! Form::open(['route' => 'categories.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name', ['class' => 'awesome']); !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'name....'] ) !!}
        </div>


        <div style="margin-left:520px">
            {!! Form::submit('ADD',['class'=>'btn btn-dark']); !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
