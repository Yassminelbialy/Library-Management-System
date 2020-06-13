@extends('layouts.nav')
@section('content')
     <style>
         label{
             font: 18px bold;
         }
     </style>
    <audio class="bell" src="bell.mp3"></audio>
     <div class="card-header" style="text-align: center;  font: 25px bold;">
         Edit book
     </div>
    <div class="container mt-5">
        {!! Form::model($books, ['route' => ['adminBooks.update',$books],'method'=>'put','enctype'=>'multipart/form-data']) !!}
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
            {{-- {!! Form::number('cate_id',1, ['class'=>'form-control'] ) !!} --}}
            {{ Form::select('cate_id', $categories, null, ['class'=>'form-control','required'=>'true']) }}
{{--            {!! Form::select('cate_id', [1, 2], ['class'=>'form-control']) !!}--}}
        </div>
        <div class="form-group">
            {!! Form::label('book_img', 'Image', ['class' => 'awesome']); !!}
            {!! Form::file('book_img', ['class'=>'form-control-file'] ) !!}
            <img style="height: 80px; width:80px;"
                    class="card-img-top"
                    src="/images/{{ $books-> book_img}}"
                    alt="Card image cap"
                />
        </div>
             <div style="margin-left:520px">
<<<<<<< HEAD
                 {!! Form::submit('Edit',['class'=>'btn btn-dark']); !!}
=======
                 {!! Form::submit('update',['class'=>'btn btn-dark']); !!}
>>>>>>> 73a801d0e656ac9d0a5aca5dbb9e924e62b21b8d
             </div>

        {!! Form::close() !!}
    </div>
@endsection
