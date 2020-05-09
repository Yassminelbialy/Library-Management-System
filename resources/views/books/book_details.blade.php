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

    <!-- Book Details Section Started -->
    <section class="book_details mt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img
              class="book_image img-fluid"
              src="/images/Angular.png"
              alt="book_image"
            />
          </div>
          <div class="col-md-9">
            <div class="card">
              <div class="card-body">
                <i class="fas fa-heart fa-2x float-right"></i>
                <h5 class="card-title">Book Title</h5>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </div>

                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="mb-2">
                  <span class="badge badge-pill badge-primary p-2 mr-4">
                    <span class="count_of_book">2</span>
                    copies available
                  </span>
                </div>
                <a href="#" class="w-100 rounded-pill lease_btn btn btn-success"
                  >Lease</a
                >
              </div>
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
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  placeholder="Add Your Comment Here..."
                ></textarea>
                <button type="submit" class="btn btn-primary form-control">
                  Submit
                </button>
              </div>
            </form>
          </div>
          <div class="col-md-3">
            <div class="stars mt-5">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
          <div class="col-md-12 comments_content">
            <div class="card mt-3">
              <div class="card-header">
                <div class="stars float-right">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </div>

                <span>Ahmed Hazem</span>
                <span>12/4/2020 01:25 AM</span>
              </div>
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Distinctio minima iste beatae tempore dolorem quae sit tenetur
                  aperiam, nemo id. Voluptatum pariatur illum sint libero id
                  laborum exercitationem, expedita natus.
                </p>
              </div>
            </div>
            <div class="card mt-3">
              <div class="card-header">
                <div class="stars float-right">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
                <span>Ahmed Hazem</span>
                <span>12/4/2020 01:25 AM</span>
              </div>
              <div class="card-body">
                <p class="card-text">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Distinctio minima iste beatae tempore dolorem quae sit tenetur
                  aperiam, nemo id. Voluptatum pariatur illum sint libero id
                  laborum exercitationem, expedita natus.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Slider Section Started -->
    <section class="slider mt-3 text-center">
      <h1 class="m-5">Related Books</h1>
      <div class="owl-carousel owl-theme ">
        <div class="items">
          <img class="slider_image" src="/images/Angular.png" alt="book" />
          <h5>Angular</h5>
          <div class="mb-2">
            <span class="badge badge-pill badge-primary p-2 mr-4">
              <span class="count_of_book">2</span>
              copies available
            </span>
          </div>
        </div>
        <div class="items">
          <img class="slider_image" src="/images/html.png" alt="book" />
          <h5>html</h5>
          <div class="mb-2">
            <span class="badge badge-pill badge-primary p-2 mr-4">
              <span class="count_of_book">2</span>
              copies available
            </span>
          </div>
        </div>
        <div class="items">
          <img class="slider_image" src="/images/python.jpg" alt="book" />
          <h5>Angular</h5>
          <div class="mb-2">
            <span class="badge badge-pill badge-primary p-2 mr-4">
              <span class="count_of_book">2</span>
              copies available
            </span>
          </div>
        </div>
        <div class="items">
          <img class="slider_image" src="/images/php.jpg" alt="book" />
          <h5>Angular</h5>
          <div class="mb-2">
            <span class="badge badge-pill badge-primary p-2 mr-4">
              <span class="count_of_book">2</span>
              copies available
            </span>
          </div>
        </div>
        <div class="items">
          <img class="slider_image" src="/images/javascript.jfif" alt="book" />
          <h5>Angular</h5>
          <div class="mb-2">
            <span class="badge badge-pill badge-primary p-2 mr-4">
              <span class="count_of_book">2</span>
              copies available
            </span>
          </div>
        </div>
        <div class="items">
          <img class="slider_image" src="/images/react.jpg" alt="book" />
          <h5>Angular</h5>
          <div class="mb-2">
            <span class="badge badge-pill badge-primary p-2 mr-4">
              <span class="count_of_book">2</span>
              copies available
            </span>
          </div>
        </div>
        <div class="items">
          <img class="slider_image" src="/images/Angular.png" alt="book" />
          <h5>Angular</h5>
          <div class="mb-2">
            <span class="badge badge-pill badge-primary p-2 mr-4">
              <span class="count_of_book">2</span>
              copies available
            </span>
          </div>
        </div>
      </div>
    </section>


    @endsection
