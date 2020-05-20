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
                <th>name</th>                
                <th colspan="2">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach( $categories as $category) 
           <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td><a href="/categories/{{ $category->id}}/edit" class="btn btn-success">Edit</a></td>
                <td>
                    {!! Form::open(['route' => ['categories.destroy',$category->id] ,'method' => 'delete', 'style'=>'display:inline-block']) !!}
                    {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>   
            </tr>
            @endforeach
        </tbody>
        <tfoot class="bg-info">
            <tr>
                <th colspan="4"></th>
            </tr>
        </tfoot>
    </table>
</div>
         
    @endsection
