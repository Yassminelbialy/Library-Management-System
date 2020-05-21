@extends('layouts.app')

@section('content')

@if(count($allFavBooks) == 0)
<h1> it Looks you don't have any favorite books</h1>
@endif
@foreach($books as $book)
@foreach($allFavBooks as $myfav)
   <div>
    <ul>
    @if($myfav->book_id == $book->id)
    <li><a href="/books/{{ $book->id}}"> {{$book->title}}<a></li>
    @endif
   
</ul>
</div>
@endforeach
@endforeach
@endsection