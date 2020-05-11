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
        <input
          type="number"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          placeholder="Number of Days"
          value=""
          min="1"
        />
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
            <li class="list-group-item">Arts</li>
            <li class="list-group-item">music</li>
            <li class="list-group-item">kids</li>
            <li class="list-group-item">bussiness</li>
            <li class="list-group-item">computers</li>
            <li class="list-group-item">Arts</li>
            <li class="list-group-item">music</li>
            <li class="list-group-item">kids</li>
            <li class="list-group-item">bussiness</li>
            <li class="list-group-item">computers</li>
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
                        src="images/Angular.png"
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
                     
                      <div class="mb-3">
                        <span class="badge badge-pill badge-primary p-2 mr-4">
                          <span class="count_of_book">{{ $book-> amount }}</span>
                          copies available
                        </span>
                        <i class="fas fa-heart fa-2x"></i>
                      </div>
                      <a href="#" class="w-100 rounded-pill lease_btn btn btn-success"
                        >Lease</a
                      >
                      
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
