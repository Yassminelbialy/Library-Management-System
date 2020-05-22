@extends('layouts.app')

@section('content')

@if(count($allFavBooks) == 0)
<h1> it Looks you don't have any favorite books</h1>
@endif
@foreach($books as $book)
@foreach($allFavBooks as $myfav)

<div class="list-group mt-3">
   @if($myfav->book_id == $book->id)
  <a href="/books/{{ $book->id}}" class="list-group-item active  list-group-item-danger col-3">{{$book->title}} </a>
  @endif
</div>    
   
@endforeach
@endforeach
@endsection