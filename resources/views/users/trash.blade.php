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
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
              
                <th colspan="2">Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach( $users as $user) 
           <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                
                
               
                <td>
                    <a href="/trash/{{$user->id}}/edit" class="btn btn-success">Active</a>
                </td>
                <td>
                    {!! Form::open(['route' => ['trash.destroy',$user->id] ,'method' => 'delete', 'style'=>'display:inline-block']) !!}
                    {!! Form::submit('Delete',['class'=>'btn btn-secondary']) !!}
                    {!! Form::close() !!}
                </td>
               
            </tr>
            @endforeach
          
        </tbody>
        <tfoot class="bg-info">
            <tr>
                <th colspan="7"></th>
            </tr>
        </tfoot>
    </table>
</div>
         
    @endsection
