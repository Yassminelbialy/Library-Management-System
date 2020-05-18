@extends('layouts.app')

@section('content')
<section class="profile">
    <div class="container " style="height: 100vh">
        <div class="row justify-content-center">
            <div class="col-md-8">


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
                        <form action="{{route('profiles.update',$user->id)}} " method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <li class="list-group-item">
                                <h5 class="card-title">Your Name</h5>
                                <input type="text" name="name" value="{{$user->name}}" class="card-text form-control">
                            </li>
                            <li class="list-group-item">
                                <h5 class="card-title">Your Email</h5>
                                <input type="text" name="email" value="{{$user->email}}" class="card-text form-control">
                            </li>
                            <li class="list-group-item">
                                <h5 class="card-title">password</h5>
                                <input type="password"   name="password" class="card-text form-control">
                            </li>
                            <li class="list-group-item">
                                <h5 class="card-title">Your Phone</h5>
                                <input type="text" value="01067770640" class="card-text form-control">
                            </li>

                            <li class="list-group-item">
                                <h5 class="card-title">Your Image</h5>
                                <input type="file" name="userImg" class="card-text form-control">
                            </li>

                    </ul>
                    <div class="card-body">
                        <input type="submit" class="btn btn-success" value="Updatae">
                        <a href="#" class="card-link">Back</a>
                    </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection
