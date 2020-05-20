@extends('layouts.app')

@section('content')
<!-- Sound Started -->
<audio class="bell" src="bell.mp3"></audio>
<!-- PopUp Started -->

    @foreach( $categories as $category)
    <div class="container my_books ">
      <div class="row">
        <div class="col-md-3 category col-sm-12 mt-5 pt-5">
            <ul class="list-group">
                <!-- it is dynamic from databse -->
                @foreach($categories as $category )
                <li data-category-id="{{$category->id}}" class="category_li list-group-item">
                    {{$category->name}}
                </li>
                @endforeach

            </ul>
        </div>

        <div class="col-md-9 col-sm-12">
            <div class="row">
                <div class="col-md-12 tabs_content">
                    <ul class="tabs_book">
                        <li class="active_tab_book"><a href="">my books</a></li>
                        <li><a href=""> favorite</a> </li>
                    </ul>

                </div>
                <div class="col-md-12 search_bar border-bottom pb-3 mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-8">
                                    <form class="form-inline search">
                                        <input class="mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                                    </form>
                                </div>
                                <div class="text-left col-md-4">
                                    <i class="fas fa-search fa-2x"></i>
                                </div>
                            </div>
                        </div>

                        <div class="order col-md-6">
                            <span> Order By : </span>
                            <select id="rate">
                                <option selected>Rate</option>
                                <option>grater than 4</option>
                                <option>grater than 3</option>
                                <option>grater than 2</option>
                                <option>grater than 1</option>
                            </select>
                            <select id="latest">
                                <option selected>Latest</option>
                                <option selected>Latest</option>
                                <option selected>Latest</option>
                            </select>
                        </div>
                    </div>
                </div>

                      
                <div class="col-md-12 mt-3">
                    <div class="book_content row">
                        @foreach( $books as $book)
                        <div class="col-md-4">
                            <div class="card">
                                <div>
                                    <img class="card-img-top" src="/images/{{ $book-> book_img}}" alt="Card image cap" />
                                </div>
                                <div class="card-body">
                                    <div book_id="{{$book->id}}" class="rate">
                                        {{!$count_rate_of_book=App\Rate::where('book_id', '=', $book->id)->get()->count()}}

                                        @if($count_rate_of_book ==0)

                                            @for($i=1; $i<=5; $i++)

                                                 <i data-value="{{$i}}" class="far fa-star fa-2x"></i>

                                            @endfor

                                        @else

                                            {{!$sum_values_rate = App\Rate::where('book_id', '=', $book->id)->get()->avg('rate_value')}}

                                            {{!$decimal_total_rate = substr($sum_values_rate, 0, 3)}}

                                            {{!$integer_total_rate = substr($sum_values_rate, 0, 1)}}

                                            <div hidden >
                                                 {{!$is_desimal = $decimal_total_rate - $integer_total_rate}}
                                             </div>

                                                @for ($i = 1; $i <= $integer_total_rate; $i++)

                                                    <i  data-value="{{$i}}" class="fas fa-star fa-2x"></i>

                                                @endfor

                                                @if ($is_desimal >= .3 && $is_desimal <= 8)

                                                    <i   data-value="{{$i}}" class="fas fa-star-half-alt fa-2x"></i>

                                                    @for ($i =  $integer_total_rate + 2; $i <= 5; $i++)

                                                        <i  data-value="{{$i}}" class="far fa-star fa-2x"></i>
                                                    @endfor

                                                    @else

                                                        @for ($i =  $integer_total_rate + 1; $i <= 5; $i++)

                                                            <i  data-value={{$i}} class="far fa-star fa-2x"></i>

                                                        @endfor


                                                @endif

                                                <div class="rate_div"> total rated is <span class="rate_numbers"> {{ $decimal_total_rate }}</span>  from  <span class="rate_numbers" >  {{$count_rate_of_book }}</span> Users </div>


                                            @endif
                                    </div>


                                    <h5 class="card-title"> <a href="/books/{{ $book->id }}">{{ $book ->title}}</a> </h5>
                      <p class="card-text">
                        {{ $book-> description}}
                      </p>
                       <div class="card">

                      
                      @if( $book->amount > 0)
                      <div class="mb-3">
                        <span class="badge badge-pill badge-primary p-2 mr-4">
                          <span class="count_of_book">{{ $book-> amount }}</span>
                          copies available
                        </span>
                        <i class="fas fa-heart fa-2x"></i>
                      </div>
                <a href="/borrow/{{ $book->id }}" class="w-100 rounded-pill lease_btn btn btn-success"
                  >Lease</a>
                @else
                <div class="mb-3">
                        <span class="badge badge-pill badge-danger p-2 mr-4">
                          
                         no copies available
                        </span>
                        <i class="fas fa-heart fa-2x"></i>
                      </div>
                     <h6 class="text-danger"> So Sorry, But All Copies Are in Lease or Not Available Now, Please Check Later </h1>  
              @endif
                    </div>
                  </div>
                        @endforeach

                        {{ $books->links() }}


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("body").on("click", ".category_li", function() {
        // alert($(this).data("value"));

        let cartegor_id = $(this).data("category-id");

        $.ajax({
            url: "http://127.0.0.1:8000/categories/" + cartegor_id,
            type: "get",
            dataType: "html",
            data: {
                cartegor_id: cartegor_id
            },
            success: function(data) {

                $(".book_content").html(data)
            }
        })
    })






    $(document).on("click", ".fa-star", function() {
        // alert($(this).data("value"));
        let reference = $(this);
        let value_rate = reference.data("value");
        let book_id = reference.parent().attr('book_id');

        // alert(book_id);
        $.ajax({
            url: "http://127.0.0.1:8000/rates",
            type: "post",
            dataType: "text",
            data: {
                _token: "{{csrf_token()}}",
                value_rate: value_rate,
                book_id: book_id
            },
            success: function(data) {
                // alert(data);

                reference.parent().html(data)

            }
        })
    })
</script>



@endsection
