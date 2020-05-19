@extends('layouts.app')

@section('content')
<!-- Sound Started -->
<audio class="bell" src="bell.mp3"></audio>
<!-- PopUp Started -->

<form class="lease_form h-50 col-sm-3 text-center">
    <span class="close_form">X</span>
    <div class="form-group mt-3">
        <span class="info">Book Price : </span><span>50$</span>
    </div>

    <div class="form-group">
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Number of Days" value="" min="1" />
    </div>

    <div class="form-group">
        <span class="info">Total Price : </span><span>100$</span>
    </div>

    <button type="submit" class="btn btn-primary">Done</button>
</form>

<div class="popup"></div>

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
                                    <img class="card-img-top"  src="/images/{{ $book-> book_img}}" alt="Card image cap" />
                                </div>
                                <div class="card-body">
                                    <div book_id="{{$book->id}}" class="rate">
                                        <i data-value="1" class="far fa-star fa-2x"></i>
                                        <i data-value="2" class="far fa-star fa-2x"></i>
                                        <i data-value="3" class="far fa-star fa-2x"></i>
                                        <i data-value="4" class="far fa-star fa-2x"></i>
                                        <i data-value="5" class="far fa-star fa-2x"></i>
                                    </div>
                                    <h5 class="card-title"> <a href="/books/{{ $book->id }}">{{ $book ->title}}</a></h5>
                                    <p class="card-text">
                                    {{ $book-> author}}
                                    </p>
                                    <p class="card-text">
                                    {{ $book-> description}}
                                    </p>
                                    <div class="mb-3">
                                        <span class="badge badge-pill badge-primary p-2 mr-4">
                                            <span class="count_of_book">{{ $book-> amount }}</span>
                                            copies available
                                        </span>
                                        <i class="fas fa-heart fa-2x"></i>
                                    </div>
                                    <a href="#" class="w-100 rounded-pill lease_btn btn btn-success">Lease</a>
                                </div>
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
