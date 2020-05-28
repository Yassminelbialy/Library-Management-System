@extends('layouts.app')

@section('content')
<!-- Sound Started -->
<audio class="bell" src="/bell.mp3"></audio>
<!-- PopUp Started -->

<form class="lease_form h-50 col-sm-3 text-center">
    <span class="close_form">X</span>
    <div class="form-group mt-3">
        <span class="info">Book Price : </span><span>50$</span>
    </div>
    @csrf
    <div class="form-group">
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number of Days" value="" min="1" />
    </div>

    <div class="form-group">
        <span class="info">Total Price : </span><span>100$</span>
    </div>

    <button type="submit" class="btn btn-primary">Done</button>
</form>

<div class="popup"></div>

<!-- Book Details Section Started -->
<section class="book_details mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="book_image img-fluid" src="/images/{{ $mybook-> book_img }}" alt="book_image" />
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                    @php
                        $user = Auth::user();
                        $allfavs = App\Favorite::where('book_id', '=',$mybook->id)
                        ->where('user_id', '=',$user->id)->get()->count();
                    @endphp

                    @if(($allfavs)== 0 )
                         <i id="favorite" data-bookid="{{  $mybook-> id }}" class="fas fa-heart fa-2x float-right text-dark"></i>
                    @else
                        <i id="favorite" data-bookid="{{ $mybook-> id }}" class="fas fa-heart fa-2x float-right text-danger"></i>

                    @endif

                        <h5 class="card-title">Book Title : {{ $mybook->title}}</h5>
                        <h5 class="card-title">Book Author : {{ $mybook->author}}</h5>
                        <h5 class="card-title">Book Category : {{ $categoryName }}</h5>
                        <h5 class="card-title">Price for One Copy : {{ $mybook->price}}</h5>

                        <div book_id="{{$mybook->id}}" class="rate">
                            {{!$count_rate_of_book=App\Rate::where('book_id', '=', $mybook->id)->get()->count()}}

                            @if($count_rate_of_book ==0)

                            @for($i=1; $i<=5; $i++) <i data-value="{{$i}}" class="far fa-star fa-2x"></i>

                                @endfor

                                @else

                                {{!$sum_values_rate = App\Rate::where('book_id', '=', $mybook->id)->get()->avg('rate_value')}}

                                {{!$decimal_total_rate = substr($sum_values_rate, 0, 3)}}

                                {{!$integer_total_rate = substr($sum_values_rate, 0, 1)}}

                                <div hidden>
                                    {{!$is_desimal = $decimal_total_rate - $integer_total_rate}}
                                </div>

                                @for ($i = 1; $i <= $integer_total_rate; $i++) <i data-value="{{$i}}" class="fas fa-star fa-2x"></i>

                                    @endfor

                                    @if ($is_desimal >= .3 && $is_desimal <= 8) <i data-value="{{$i}}" class="fas fa-star-half-alt fa-2x"></i>

                                        @for ($i = $integer_total_rate + 2; $i <= 5; $i++) <i data-value="{{$i}}" class="far fa-star fa-2x"></i>
                                            @endfor

                                            @else

                                            @for ($i = $integer_total_rate + 1; $i <= 5; $i++) <i data-value={{$i}} class="far fa-star fa-2x"></i>

                                                @endfor


                                                @endif

                                                <div class="rate_div"> total rated is <span class="rate_numbers"> {{ $decimal_total_rate }}</span> from <span class="rate_numbers"> {{$count_rate_of_book }}</span> Users </div>


                                                @endif
                        </div>

                        <p class="card-text">
                            <h5>Book Description : {{ $mybook-> description}} </h5>
                        </p>
                        <div class="mb-2">
                            <span class="badge badge-pill badge-primary p-2 mr-4">
                                <span class="count_of_book"> {{ $mybook->amount }}</span>
                                Copies Available
                            </span>
                        </div>
                        @if( $mybook->amount > 0)
                        <a href="#" class="w-100 rounded-pill lease_btn btn btn-success">Lease</a>
                        @else
                        <h1 class="text-danger"> So Sorry, But All Copies Are in Lease or Not Available Now, Please Check Later </h1>
                        @endif
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- Comments Section Started -->
<section class="comments">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add Your Comment Here..."></textarea>
                        <button type="submit" class="btn btn-primary form-control">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-md-3">
                <div class="rate_user" book_id="{{$mybook->id}}">

                    {{!$rate_user=App\Rate::where('user_id', '=', Illuminate\Support\Facades\Auth::user()->id)->where('book_id', '=', $mybook->id)->get()}}

                    @if($rate_user->count() ==0)

                        @for($i=1; $i<=5; $i++)
                        <i data-value="{{$i}}" class="far fa-star fa-2x"></i>
                        @endfor

                    @else

                            @foreach($rate_user as $r)
                                {{$rate_val=$r->rate_value}}
                            @endforeach

                            @for ($i = 1; $i <= $rate_val; $i++)

                                <i  data-value="{{$i}}" class="fas fa-star fa-2x"></i>

                            @endfor

                            @for ($i = $rate_val+1; $i <=5; $i++)

                                <i  data-value="{{$i}}" class="far fa-star fa-2x"></i>

                            @endfor

                    @endif



                </div>
            </div>
            <!-- indexxxxxxxxxxxxxxxxxxx -->
            @foreach($comments as $comment)
            <div class="col-md-12 comments_content">
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="float-right">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        @foreach($commentOwner as $i)
                        <span>{{$i->name}}</span>
                        @endforeach
                        <span>12/4/2020 01:25 AM</span>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{$comment->comment_body}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- gggggggggg -->
        </div>
    </div>
</section>
<!-- Slider Section Started -->
<section class="slider mt-3 text-center">
    <h1 class="m-5">Related Books</h1>
    <div class="owl-carousel owl-theme ">
        @foreach($books_specific_category as $book )
        <div class="items">
            <img class="slider_image" src="/images/{{ $mybook-> book_img }}" alt="book" />
            <h5>{{$book->title}}</h5>
            <div class="mb-2">
                <span class="badge badge-pill badge-primary p-2 mr-4">
                    <span class="count_of_book">{{$book->amount}}</span>
                    copies available
                </span>
            </div>
        </div>
        @endforeach

    </div>
</section>
<script>

    $(document).on("click", ".rate_user .fa-star", function() {

        let reference = $(this);
        let value_rate = reference.data("value");
        let book_id = reference.parent().attr('book_id');
        let rateOutPut = "";


        for (var i = 1; i <= value_rate; i++) {

            rateOutPut += `<i data-value="${i}" class="fas fa-star fa-2x"></i>`
        }

        for (var i = value_rate + 1; i <= 5; i++) {
            rateOutPut += `<i data-value="${i}" class="far fa-star fa-2x"></i>`
        }

        $(".rate_user").html(rateOutPut)


        $.ajax({
            url: "/rates",
            type: "post",
            dataType: "text",
            data: {
                _token: "{{csrf_token()}}",
                value_rate: value_rate,
                book_id: book_id
            },
            success: function(data) {

                $(".rate").fadeOut(500).fadeIn(500)
                setTimeout(() => {
                    $(".rate").html(data)
                }, 500);


            }
        })
    })


// $(document).on("mouseenter",".rate_user .fa-star",function(){

// let reference = $(this);
// let value_rate = reference.data("value");
// let book_id = reference.parent().attr('book_id');
// let rateOutPut = "";

// for (var i = 1; i <= value_rate; i++) {

//     rateOutPut += `<i data-value="${i}" class="fas fa-star fa-2x"></i>`
// }

// for (var i = value_rate + 1; i <= 5; i++) {
//     rateOutPut += `<i data-value="${i}" class="far fa-star fa-2x"></i>`
// }

// $(reference).parent().html(rateOutPut)

// })


// $(document).on("mouseleave",".rate_user .fa-star",function(){
//     alert("leave")

//     let rateOutPut = "";

//         for (var i = 1; i <= 5; i++) {

//             rateOutPut += `<i data-value="${i}" class="fas fa-star fa-2x"></i>`
//         }

//         $("body").html(rateOutPut)

// })
</script>

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    var token = '{{ Session::token()}}';
    var urlFav = '{{ route('favor') }}';

</script>

@endsection
