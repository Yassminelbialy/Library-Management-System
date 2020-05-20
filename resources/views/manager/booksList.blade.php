@extends('layouts.nav')

@section('content')
    <!-- Sound Started -->
    <audio class="bell" src="bell.mp3"></audio>
    <!-- PopUp Started -->
    <div class="container mt-5">
    <table class="table text-center">
        <thead class="bg-info">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Description</th>
                <th>Cat_id</th>
                <th>Image</th>
                <th colspan="2">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach( $books as $book) 
           <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->amount }}</td>
                <td>{{ $book->description }}</td>
                <td>{{$book->cate_id}}</td>
                <td><img style="height: 50px; width:80px;"
                    class="card-img-top"
                    src="/images/{{ $book-> book_img}}"
                    alt="Card image cap"
                  /></td>
                <td><a href="/adminBooks/{{ $book->id}}/edit" class="btn btn-success">Edit</a></td>
                <td>
                    {!! Form::open(['route' => ['adminBooks.destroy',$book->id] ,'method' => 'delete', 'style'=>'display:inline-block']) !!}
                    {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
               
               
            </tr>
            @endforeach
        </tbody>
        <tfoot class="bg-info">
            <tr>
                <th colspan="10"></th>
            </tr>
        </tfoot>
    </table>
</div>
         
    @endsection
