@extends('layouts.app')

@section('content')
<section class="profile">
    <div class="container " style="height: 100vh">
        <div class="row justify-content-center">
            <div class="col-md-8 profile_content">
            @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                <div class="card">

                    <div class="card-header text-center">
                        Your Profile
                    </div>
                    <div class="header">
                        <div class="wave_bg">
                            <div class="wave_bg">
                                <div class="wave-01"></div>
                                <div class="wave-02"></div>
                                <div class="wave-03"></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center p-2">
                        <img class=" mt-2 profile_img rounded-circle " src="/images/30849176_2049933711894071_882072814_o.jpg" alt="Card image cap">
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5 class="card-title">Your Name</h5>
                            <p class="card-text">{{$user->name}} </p>
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Your Email</h5>
                            <p class="card-text">{{$user->email}} </p>
                        </li>
                        <li class="list-group-item">
                            <h5 class="card-title">Your Phone</h5>
                            <p class="card-text">01067770640</p>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('profiles.edit',$user->id)}}" class="btn btn-success">Edit</a>
                        <a href="#" class="card-link">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
