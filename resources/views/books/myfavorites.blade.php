@extends('layouts.app')

@section('content')
@php
      $user = Auth::user();
 @endphp

@if(count($allFavBooks) == 0)
<h1> it Looks you don't have any favorite books</h1>
@endif
@foreach($books as $book)
@foreach($allFavBooks as $myfav)

<div class="list-group  offset-5 text-center">
   @if($myfav->book_id == $book->id && $myfav->user_id == $user->id)
  <a href="/books/{{ $book->id}}" class="list-group-item active  col-3 mt-3">{{$book->title}} </a>
  @endif
</div>    
   
@endforeach
@endforeach
@endsection