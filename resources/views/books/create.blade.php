@extends('layouts.app')
@section('content')
     <style>
         label{
             font: 18px bold;
         }
     </style>
    <audio class="bell" src="bell.mp3"></audio>
    <div class="container mt-5">
        {!! Form::open(['route' => 'books.store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Book Title', ['class' => 'awesome']); !!}
            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Title....'] ) !!}
        </div>
        <div class="form-group">
            {!! Form::label('amount', 'Amount', ['class' => 'awesome']); !!}
            {!! Form::number('amount', 1, ['class'=>'form-control'] ) !!}
        </div>
        <div class="form-group">
            {!! Form::label('author', 'Author', ['class' => 'awesome']); !!}
            {!! Form::text('author', null, ['class'=>'form-control', 'placeholder'=>'Author...'] ) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description', ['class' => 'awesome']); !!}
            {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'text...'] ) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Price', ['class' => 'awesome']); !!}
            {!! Form::number('price',50, ['class'=>'form-control'] ) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cate_id', 'Category', ['class' => 'awesome']); !!}
            {!! Form::number('cate_id',1, ['class'=>'form-control'] ) !!}
{{--            {!! Form::select('cate_id', [1, 2], ['class'=>'form-control']) !!}--}}
        </div>
        <div class="form-group">
            {!! Form::label('book_img', 'Image', ['class' => 'awesome']); !!}
            {!! Form::file('book_img', ['class'=>'form-control-file'] ) !!}
        </div>
             <div style="margin-left:520px">
                 {!! Form::submit('ADD',['class'=>'btn btn-dark']); !!}
             </div>

        {!! Form::close() !!}
    </div>
@endsection
