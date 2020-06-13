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
            @foreach( $admins as $admin) 
           <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->phone }}</td>
                
                
                <td>
                    {!! Form::open(['route' => ['admins.destroy',$admin->id] ,'method' => 'delete', 'style'=>'display:inline-block']) !!}
                    {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
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
