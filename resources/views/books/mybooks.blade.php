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
            <li class="list-group-item">{{ $category->name}}</li>
          </ul>
        </div>
          @endforeach
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
                        <input
                          class="mr-sm-2"
                          type="search"
                          placeholder="Search"
                          aria-label="Search"
                        />
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
             @foreach( $books as $book)
            <div class="container-fluid column">
              <div class="row flex-row flex-nowrap">
                <div class="col-md-4">
                  <div class="card card-block">
                    <div>
                      <img
                        class="card-img-top"
                        src="/images/{{ $book-> book_img}}"
                        alt="Card image cap"
                      />
                      <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
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

                </div>
                @endforeach
                </div>
                {{ $books->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
